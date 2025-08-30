<form action="<?= base_url('index.php/anggota/update') ?>" method="post">
    <input type="hidden" name="idanggota" value="<?= $idanggota ?>">
    <label>anggota</label>
    <input type="text" name="anggota" value="<?= $anggota ?>">
    <br>
    <label>Alamat</label>
    <input type="text" name="alamat" value="<?= $alamat ?>">
    <br>
    <input type="submit" name="simpan" value="submit">
</form>