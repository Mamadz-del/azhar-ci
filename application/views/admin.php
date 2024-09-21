
    <h1>Halaman Admin</h1>

    <h5>TABEL DATA SISWA</h5>
    <div>
        
        <a href="<?php echo base_url('tambah_siswa')?>">Tambah Siswa</a>
    </div>
    <br>

    <br><br>
    
    <table>
        <tr>
            <th>NIS</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO TELP</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php foreach ($siswa as $ssw) : ?>
            <tr>
                <td><?= $ssw['nis']?></td>
                <td><?= $ssw['nama']?></td>
                <td><?= $ssw['alamat']?></td>
                <td><?= $ssw['no_telp']?></td>
                <td><a href="<?php echo base_url()?>admin/edit/<?= $ssw['nis']?>">edit</a></td>
                <td><a onclick="return confirm('yakin hapus')"  href="<?php echo base_url()?>admin/hapus/<?= $ssw['nis']?>">hapus</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
