<?php
    require_once 'contact.php';

    $res = contact::insert('6','6', "Ajay", '08123044sd556', '2024-05-18', '2024-05-18 19:00:00');
    echo $res;

?>