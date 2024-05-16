<h3> Data Karyawan</h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Karyawan</th>
        <th>Jabatan Karyawan </th>
        <th>Gaji Karyawan</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from karyawan");
    /* While untuk mengulang */
    while($tampil = mysqli_fetch_array($ambildata)){
        echo"
        <tr>
        <td>$no</td>
        <td>$tampil[nama_karyawan]</td>
        <td>$tampil[jabatan_karyawan]</td>
        <td>$tampil[gaji_karyawan]</td>
        </tr>";
        $no++;
    }
    ?>
</table>