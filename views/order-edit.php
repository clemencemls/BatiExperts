<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">✏️ Modifier les informations de la commande</h2>

<form action="?action=update" method="POST">
    <input type="hidden" name="id" value="<?= $order->getId() ?>">

    <div class="mb-3">
        <label for="title" class="form-label">Titre :</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= $client->getTitle() ?>" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Statut :</label>
        <textarea class="form-control" id="status" name="status" rows="3" required><?= $client->getStatus() ?></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?" class="btn btn-secondary">🔙 Retour à la liste des commandes </a>


<?php require_once __DIR__ . '/templates/footer.php';