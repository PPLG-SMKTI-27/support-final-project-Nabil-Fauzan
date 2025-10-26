<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar User</title>
</head>
<body>
    <h1>Daftar User</h1>
    <a href="index.php?action=create">Tambah User</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Foto</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td>
                    <?php if (!empty($user['photo'])): ?>
                        <img src="public/uploads/<?= htmlspecialchars($user['photo']) ?>" width="50">
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>