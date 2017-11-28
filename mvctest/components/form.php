<?php

echo "<form action={$_SERVER['REQUEST_URI']} method='post'>";
foreach ($result[0] as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td><input type='text' name='$key' value='$value'></td>";
    echo "</tr>";
}
echo "</table><input type='submit' value='add' >";
echo " </form>";
?>