<?php 
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/rekayasaweb/PRAK2/getWisata.php");

$data = json_decode($send, TRUE);

echo "<table border='1' cellspacing='0' cellpadding='8'>";
echo "<tr style='background-color: #f2f2f2; font-weight:bold;'>
        <td>KOTA</td>
        <td>LANDMARK</td>
        <td>TARIF</td>
      </tr>";

foreach ($data as $row) {
    echo "<tr>
            <td>".$row['kota']."</td>
            <td>".$row['landmark']."</td>
            <td>".$row['tarif']."</td>
          </tr>";
}


echo "</table>";
?>


