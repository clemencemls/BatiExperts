<?php require_once __DIR__ . '/templates/header.php'; ?>
        
<h2 class="mb-4">📋 Liste des commandes</h2>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Status</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $order): ?>

                    <tr>

                        <td><?= $order->getId(); ?></td>
                        <td><?= $order->getStatus(); ?></td>
                        <td><a href="?action=view&id=<?= $order->getId() ?>"><?= $order->getTitle(); ?></a></td>
                        <td>
                            <a href="?action=view&id=<?= $order->getId() ?>" class="btn btn-primary btn-sm">👀</a>
                            <a href="?action=edit&id=<?= $order->getId() ?>" class="btn btn-warning btn-sm">✏️</a>
                            <a onclick="return confirm('T’es sûr ?');" href="?action=delete&id=<?= $order->getId() ?>" class="btn btn-dark btn-sm">❌</a>
                        </td>

                    </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/templates/footer.php';