
    <h1>Tambah Data Siswa</h1>

    <form action="tambah_siswa/tambah" method="post">
        <label for="">Name</label>
        <br>
        <input placeholder="masukkan nama" type="teks" name="nama">
        <br><br>
        <label for="">Edit Alamat</label>
        <br>
        <select name="alamat">
            <option value="">-- pilih alamat --</option>
            <option value="batang">batang</option>
            <option value="pekalongan">pekalongan</option>
            <option value="pemalang">pemalang</option>
            <option value="tegal">tegal</option>
            </select>
            <br><br>
        <!-- <input placeholder="masukkan alamat" type="teks" name="alamat">
        <br><br> -->
        <label for="">Masukkan Nomer telpon</label>
        <br>
        <input placeholder="masukkan no telp" type="teks" name="no_telp">
        <br><br>

        <input type="submit" value="submit">
    </form>
