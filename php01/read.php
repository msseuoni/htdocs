<?php
$file = fopen("data/data.txt", "r");
if ($file) {
    echo "<table>";
    echo "<tr><th>日時</th><th>名前</th><th>メールアドレス</th><th>性別</th><th>年齢</th><th>出身地</th></tr>";

    while (($txt = fgets($file)) !== false) {
        $data = explode(",", $txt);
        $date = $data[0];
        $name = $data[1];
        $mail = $data[2];
        $sex = $data[3];
        $age = $data[4];
        $birthplace = $data[5];

        echo "<tr>";
        echo "<td>" . $date . "</td>";
        echo "<td>" . $name . "</td>";
        echo "<td>" . $mail . "</td>";
        echo "<td>" . $sex . "</td>";
        echo "<td>" . $age . "</td>";
        echo "<td>" . $birthplace . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    fclose($file);
} else {
    echo "ファイルを開くことができませんでした。";
}
?>
