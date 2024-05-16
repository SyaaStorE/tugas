<h3> Tambah Karyawan </h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="120"> Nama Karyawan </td>
            <td> <input type="text" name="nama_karyawan"> </td>
        </tr>
        <tr>
            <td> Jabatan Karyawan</td>
            <td> <input type="text" name="jabatan_karyawan"> </td>
        </tr>
        <tr>
            <td> Gaji Karyawan </td>
            <td> <input type="text" name="gaji_karyawan"> </td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit" name="proses" value="Simpan"> </td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into karyawan set
    nama_karyawan = '$_POST[nama_karyawan]',
    jabatan_karyawan= '$_POST[jabatan_karyawan]',
    gaji_karyawan = '$_POST[gaji_karyawan]'");

    echo "Data karyawan baru telah tersimpan";

    include "karyawan-data.php";

}
?>