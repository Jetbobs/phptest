<?php
    unlink('data/'.$_POST['id']);
    header('Location: /php/practice/lifecoding.php');
?>