<link rel="stylesheet" href="css/style.css">
<div class="container">
    <h2>Daftar Mahasiswa</h2>
    <a href="index.php?action=create">+ Tambah Mahasiswa</a>
    <table>
        <tr><th>ID</th><th>Nama</th><th>NIM</th><th>Aksi</th></tr>
        <?php foreach ($mahasiswa as $m): ?>
            <tr>
                <td><?= $m['id'] ?></td>
                <td><?= $m['nama'] ?></td>
                <td><?= $m['nim'] ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $m['id'] ?>">Edit</a>
                    <a href="index.php?action=delete&id=<?= $m['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
