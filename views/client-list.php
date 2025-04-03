<?php require_once __DIR__ . '/templates/header.php'; ?>
        
<h2 class="mb-4">👤 Liste des clients</h2>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <?php var_dump($clients); ?>
    <tbody>
        <?php foreach($clients as $client): ?>

            <tr>

                <td><?= $client->getId(); ?></td>
                <td><a href="?action=view&id=<?= $client->getId() ?>"><?= $client->getNom(); ?></a></td>
                <td><?= $client->getEmail(); ?></td>
                <td><?= $client->getTelephone(); ?></td>
                <td>
                    <a href="?action=view&id=<?= $client->getId() ?>" class="btn btn-primary btn-sm">👁‍🗨</a>
                    <a href="?action=edit&id=<?= $client->getId() ?>" class="btn btn-warning btn-sm">✏️</a>
                    <a onclick="return confirm('Are you sure ?');" href="?action=delete&id=<?= $client->getId() ?>" class="btn btn-dark btn-sm">❌</a>
                </td>

            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/templates/footer.php';