<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">➕ Créer une nouvelle commande</h2>

<form action="?action=store" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Titre :</label>
        <input type="text" class="form-control" id="titre" name="titre" required>
    </div>

    <div class="mb-3">
        <label for="Statut" class="form-label">Statut :</label>
        <select class="form-control" name="status" id="status">
            <option value="En attente">En attente</option>
            <option value="Expediée">Expediée</option>
            <option value="Livrée">Livrée</option>
        </select>

    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<a href="?" class="btn btn-secondary">🔙 Retour à la liste des commandes</a>

<?php require_once __DIR__ . '/templates/footer.php';