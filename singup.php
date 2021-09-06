<?php

define('DB_HOST', 'sql110.gigfa.com');
define('DB_USER', 'gigfa_29059675');
define('DB_PASS', 'dC9ZjhxG');
define('DB_NAME', 'epiz_29635217_Toolsiner');

try{
    $conn = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    require_once"tst.php";
    $sql = 'INSERT INTO users (id, username, gmail, password) VALUES (NULL, :username, :gmail, :password)';
    $query = $conn->prepare($sql);
    $query->bindParam(':username', $Username, PDO::PARAM_STR);
    $query->bindParam(':gmail', $Gmail, PDO::PARAM_STR);
    $query->bindParam(':password', $Password, PDO::PARAM_STR);
    $query->execute();
    echo "Successfully";
    }

catch(PDOException $e){

echo $e->getMessage();

}
