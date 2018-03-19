<?php

    if(is_dir("Omar")){

        $omarFolderPath = dirname(__FILE__);


        if(file_exists("$omarFolderPath/Omar/omarPass.txt")){

            echo "yes I found this file";
            file_put_contents("$omarFolderPath/Omar/omarPass.txt","hello from other world!");

        } else{

            echo "no I didn't found it, sorry omar..." . "<br>";
            echo "BUT I WILL CREATE ONE FOR YOU <3";
            file_put_contents("$omarFolderPath/Omar/omarPass.txt","hello from other world!");
        }

    }
?>
