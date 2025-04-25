<link rel="stylesheet" href="css/style.css">
<div class="container">
    <h2>Edit Mahasiswa</h2>
    <form action="index.php?action=update&id=<?= $mahasiswa['id'] ?>" method="post">
        <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?>" required>
        <input type="text" name="nim" value="<?= $mahasiswa['nim'] ?>" required>
        <button type="submit">Update</button>
    </form>
</div>
