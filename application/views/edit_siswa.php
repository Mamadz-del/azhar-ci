<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Data</h1>

    <form action="<?= base_url() ?>admin/update" method="POST">
        <input type="hidden" name="nis"value="<?= $edit['nis'] ?>">

        <input placeholder="nama siswa" type="teks" name="nama" value="<?= $edit['nama']?>">
        <br><br>
       <select name="alamat">
        <option value="">-- pilih alamat --</option>
            <?php foreach( $alamat as $al ) : ?>
            <?php if( $al == $edit['alamat'])  : ?>
                <option value="<?= $al; ?>"selected><?= $al; ?></option>
                <?php else : ?>
                    <option value="<?= $al; ?>"><?= $al; ?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
       </select>
        <br><br>
        <input placeholder="no telp siswa" type="teks" name="no_telp" value="<?= $edit['no_telp']?>">
        <br><br>

        <input type="submit" value="EDIT">
    </form>
</body>
</html>