
<form action="<?php htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post" enctype="multipart/form-data">
    <input type="file" name="doc[]" multiple="multiple">
    <input type="submit" value="Send">
</form>
<?php
    $types = array('image/gif', 'image/png', 'image/jpeg', 'image/pjpeg');
    $size=2*1024*1024;
    $key=0;
    if (isset($_POST['submit']) && $_FILES['doc']) {
        for ($i = 0; $i < count($_FILES['doc']['size']); $i++) {
            if ($_FILES['doc']['size'][$i] > $size) {
                $key = 1;
                break;
            }
        }
    }
    if ($key==0 && isset($_POST['submit'])) {
        for ($i = 0; $i < count($_FILES['doc']['type']); $i++) {
            for ($j = 0; $j < count($types); $j++) {
                if ($_FILES['doc']['type'][$i] == $types[$j]) {
                    $newPath[$i] = 'img/' . basename($_FILES['doc']['name'][$i]);
                    move_uploaded_file($_FILES['doc']['tmp_name'][$i], $newPath[$i]);
                    $key = 1;
                }
            }
            if ($key == 0) {
                $newPath[$i] = 'doc/' . basename($_FILES['doc']['name'][$i]);
                move_uploaded_file($_FILES['doc']['tmp_name'][$i], $newPath[$i]);
            }
            $key = 0;
        }
    }

?>

<a href="index.php">Назад на головну сторінку</a>
