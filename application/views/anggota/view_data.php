<table>
    <tr>
        <td>ID</td>
        <td>Anggota</td>
        <td>Alamat</td>
    </tr>
    <?php foreach($anggota as $data): ?>
    <tr>
        <td><?= $data['idanggota'] ?></td>
        <td><?= $data['anggota'] ?></td>
        <td><?= $data['alamat'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>