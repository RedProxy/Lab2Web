<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program PHP Sederhana (Tugas)</title>
</head>
<body>
    <h2>Form Input Data</h2>
    <form action="" method="post" name="form1">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" size="30"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir" size="30"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>
                <select id="pekerjaan" name="pekerjaan" required>
                    <option value="">- Pilih Pekerjaan -</option>
                    <option value="Programmer">Programmer</option>
                    <option value="UI/UX Designer">UI/UX Designer</option>
                    <option value="Atlit">Atlit</option>
                    <option value="Penyanyi">Penyanyi</option>
                </select>
                </td>
            </tr>
        </table>
        <br>
        <button type="submit" name="submit">Submit</button>
        <br>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $tanggal = date('d', strtotime($tgl_lahir));
        $bulan_teks = date('F', strtotime($tgl_lahir));
        $tahun = date('Y', strtotime($tgl_lahir));
        $hasil_tanggal_lahir = $tanggal . ' ' . $bulan_teks . ' ' . $tahun;

        $pekerjaan = $_POST['pekerjaan'];

        // Umur
        $today = new DateTime();
        $dob = new DateTime($tgl_lahir);
        $umur = $today->diff($dob)->y;
        
        // Pekerjaan dan gaji
        switch ($pekerjaan) {
            case 'Programmer':
                $gaji = "15 Juta";
                break;
            case 'UI/UX Designer':
                $gaji = "20 Juta";
                break;
            case 'Atlit':
                $gaji = "2 Milyar";
                break;
            case 'Penyanyi':
                $gaji = "100 Juta";
                break;
            default:
                $gaji = "-";
                break;
        }


    // Tampilkan hasil
    echo "<h2>Hasil Output</h2>";
    echo "Nama: $nama<br>";
    echo "Tanggal Lahir: $hasil_tanggal_lahir<br>";
    echo "Umur: $umur tahun<br>";
    echo "Pekerjaan: $pekerjaan<br>";
    echo "Gaji: Rp. $gaji/bulan<br>";
}
    ?>
</body>
</html>