<?php
echo "<table><tr>";
echo "<td> </td>";
if(!empty($res)) {
    foreach ($res[0] as $key => $value) {
        echo "<td> $key </td>";
    }
    echo "</tr>";
    for ($i = 0; $i < count($res); $i++) {
        echo "<tr>";
        $str = key($res[$i]) . "-" . current($res[$i]);
        echo "<td><a href=/office/update/$office/$str>Редагувати</a></td>";
        foreach ($res[$i] as $val) {
            echo "<td>$val</td>";
        }
        echo "<tr>";
    }
}else {
    echo "Tables enpty";
}
echo "</table>";