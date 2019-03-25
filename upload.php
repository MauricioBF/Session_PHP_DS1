<?php
    if(isset($_FILES['upload'])){
        date_default_timezone_set("Brazil/East"); 
        $ext = strtolower(substr($_FILES['upload']['name'],-4)); 
        $new_name = date("Y.m.d-H.i.s") . $ext;
        $dir = 'uploads/'; 
        move_uploaded_file($_FILES['upload']['tmp_name'], $dir.$new_name);
    }
    header('Location: upload.html');
?>
