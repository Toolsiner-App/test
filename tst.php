<?php

$Nam = $_GET['Name'];
$format=".json";
$Name= $Nam.$format;
$Text = $_GET['Text'];

if(isset($_REQUEST['Title'])){
    $Title=$_GET['Title'];
    if($Title == 'Create'){
        if (file_exists($Name)) {
            echo "File Exist";
        }
        else{
            file_put_contents($Name,$Text);
            echo "Successfully";
        }
    }

    elseif ($Title == 'Edit'){
        file_put_contents($Name,$Text);
        echo "Successfully";

}

    elseif ($Title == 'Delete'){
        if (file_exists($Name)) {
            $files = glob($Name); //get all file names
            foreach($files as $file){
                if(is_file($file)){
                    unlink($file); //delete file
                echo "Successfully";
                }
            }
        }
    }

    elseif($Title == 'SingUp'){
        $Username = $_GET['username'];
        $Password= $_GET['password'];
        $Gmail= $_GET['gmail'];
        
        require_once'singup.php';
        

    }

    elseif($Title == 'Singin'){
        $Username = $_GET['username'];
        $Password= $_GET['password'];

        require_once"singin.php";

    }
}
?>