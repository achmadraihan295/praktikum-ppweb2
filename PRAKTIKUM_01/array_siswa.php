<?php
$ns1 = ['id' => 1, 'nim' => '01144', 'uts' => 88, 'uas' => 77, 'tugas' => 87];
$ns2 = ['id' => 2, 'nim' => '01133', 'uts' => 78, 'uas' => 96, 'tugas' => 98];
$ns3 = ['id' => 3, 'nim' => '01122', 'uts' => 80, 'uas' => 86, 'tugas' => 79];
$ns4 = ['id' => 4, 'nim' => '01111', 'uts' => 90, 'uas' => 69, 'tugas' => 80];
$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>


<h3>Daftar Nilai Siswa</h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $ns) {
            echo '<tr><td>' . $nomor . '</td>';
            echo '<td>' . $ns['nim'] . '</td>';
            echo '<td>' . $ns['uts'] . '</td>';
            echo '<td>' . $ns['uas'] . '</td>';
            echo '<td>' . $ns['tugas'] . '</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
            echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
            echo '<tr/>';
            $nomor++;
        }
        ?>
    </tbody>
</table>