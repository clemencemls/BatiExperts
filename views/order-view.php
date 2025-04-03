<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">📋 Détails de la commande</h2>

<p><strong>Titre : </strong> <?= $client->getTitle() ?></p>
<p><strong>Status : </strong> <?= $client->getStatus() ?></p>

<a href="?action=edit&id=<?= $client->getId() ?>" class="btn btn-warning">✏️ Modifier les informations du client</a>
<a href="?" class="btn btn-secondary">🔙 Retour à la liste des clients</a>

<?php require_once __DIR__ . '/templates/footer.php';