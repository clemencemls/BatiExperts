<?php

require_once __DIR__ . "/../Client.php";

class ClientRepository
{

    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    public function addClient(Client $client): bool
    {

        $statement = $this->connection
            ->getConnected()
            ->prepare("INSERT INTO clients (nom, email, telephone) VALUES (:nom, :email, :telephone); ");

        return $statement->execute([
            'nom' => $client->getNom(),
            'email' => $client->getEmail(),
            'telephone' => $client->getTelephone(),
        ]);

    }

    public function viewClients(): array
    {

        $statement = $this->connection
            ->getConnected()
            ->prepare('SELECT * FROM clients;');
        $statement->execute();
        $statement->fetchAll();
        var_dump($statement);

        $clients = [];
        foreach ($statement as $row) {
            $client = new Client();
            $client->setId($row['id']);
            $client->setNom($row['nom']);
            $client->setEmail($row['email']);
            $client->setTelephone($row['telephone']);

            var_dump($row);
            $clients[] = $client;
        }
        // var_dump($clients);
        return $clients;
    }

    public function viewClient(int $id): ?Client
    {

        $statement = $this->connection
            ->getConnected()
            ->prepare("SELECT * FROM clients WHERE id = $id");
        $statement->execute();
        $result = $statement->fetch();

        if (!$result) {
            return null;
        }

        $client = new Client();
        $client->setId($result['id']);
        $client->setNom($result['nom']);
        $client->setEmail($result['email']);
        $client->setTelephone($result['telephone']);

        return $client;
    }

    public function updateClient(Client $client): bool
    {

        $statement = $this->connection
            ->getConnected()
            ->prepare("UPDATE clients SET nom = :nom, email = :email, telephone = :telephone WHERE id = :id");

        return $statement->execute([
            'nom' => $client->getNom(),
            'email' => $client->getEmail(),
            'telephone' => $client->getTelephone(),
        ]);
    }

    public function deleteClient(int $id): bool
    {

        $statement = $this->connection
            ->getConnected()
            ->prepare("DELETE FROM clients WHERE id=$id");

        return $statement->execute([
            'id' => $id
        ]);
    }
}