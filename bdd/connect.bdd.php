<?php

try{
    $dbh = new PDO('mysql: host=localhost; dbname = gmail, $user, $pass' array(
        PDO::ATTR_PERSISTENT => true
    ));
}catch (PDOException $e) {

}
?>