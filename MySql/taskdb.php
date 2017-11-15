<?php
$dsn = 'mysql:host=localhost; dbname=task_sql';
$user = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}
if(isset($_GET['table'])){
$sth=$dbh->prepare("select * from {$_GET['table']}");
$sth->execute();
$tab=$sth->fetchAll(PDO::FETCH_ASSOC);
    echo "<table width='400px'>";
    echo "<tr>";
    foreach ($tab[0] as $key=>$value){
        echo "<td> $key </td>";
    }
    echo "</tr>";
for($i=0;$i<count($tab);$i++){
        echo "<tr>";
        foreach ($tab[$i] as  $val) {
            echo "<td>$val</td>";
        }
        echo "<tr>";
}
    echo "</table>";
}else{
    $sth = $dbh->query('show tables');
    $tab = $sth->fetchAll(PDO::FETCH_NUM);
    foreach ($tab as $item) {
        echo "<a href='?table=$item[0]'>$item[0]</a></br>";
   }
}
?>