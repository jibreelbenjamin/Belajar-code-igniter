<a href="<?= base_url('index.php/anggota/tambah') ?>">Tambah anggota baru</a>
<table>
    <tr>
        <td>ID</td>
        <td>Anggota</td>
        <td>Alamat</td>
        <td>Aksi</td>
    </tr>
    <?php foreach($anggota as $data): ?>
    <tr>
        <td><?= $data['idanggota'] ?></td>
        <td><?= $data['anggota'] ?></td>
        <td><?= $data['alamat'] ?></td>
        <td>
            <a href="<?= site_url('index.php/anggota/get_edit/' . $data['idanggota']) ?>">Edit</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>