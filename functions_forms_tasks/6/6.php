
<form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="pic[]" multiple="multiple" >
    <input type="submit" value="Send">
</form>
<?php
$s=1;
$type=0;
$types = array('image/gif', 'image/png', 'image/jpeg', 'image/pjpeg');
if(isset($_FILES['pic'])) {
    for ($i = 0; $i < count($_FILES['pic']['type']); $i++) {
        for ($j = 0; $j < count($types); $j++) {
            if ($_FILES['pic']['type'][$i] == $types[$j]) {
            $type++;
            }
        }
    }
}
if($type==count($_FILES['pic']['type'])){
  for ($i=0;$i<count($_FILES['pic']['name']);$i++){
      $newPath[$i]='gallery/'.basename($_FILES['pic']['name'][$i]);
  }
  for ($i=0;$i<count($newPath);$i++) {
      if (move_uploaded_file($_FILES['pic']['tmp_name'][$i], $newPath[$i])) {
          if($s==3) {
              echo "<img src='$newPath[$i]' width='200px' height='200px' >";
              echo "<br>";
              $s++;
          }else{
              echo "<img src='$newPath[$i]' width='200px' height='200px'>";
              $s++;
          }
      }
  }
}
?>