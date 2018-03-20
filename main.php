<?php

    if(file_exists(__DIR__ . "/practice")){

       echo "I found it SIR...";

    } else {

        echo "Sorry,I didn't found it SIR...";
        echo "<br>";
        echo "I will make it...";

        mkdir(__DIR__ . '/practice');
    }

    $myFolder = __DIR__ . "/practice";

    file_put_contents($myFolder . "/myFile.php","I created my self !!!");

    $myFile = $myFolder . "/myFile.php";

    chmod($myFile, 0444);


    if(is_writable($myFile)){

        file_put_contents($myFile,"here is new lines");
        echo "yes";

    } else {

        chmod($myFile,0777);
        file_put_contents($myFile,"<?php echo 'hello from other world;'  ?>");
    }

    require_once($myFile);
?>
