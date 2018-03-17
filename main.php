<?php
    echo "<link rel='stylesheet' href='main.css'>";

    echo "<h3>Choose A Day</h3>" . "<br>";

    echo '<select>';
        for($i = 1; $i <= 31; $i++){

            echo "<option value ='$i'>" . $i . "</option>";

        }
    echo '</select>';



    echo "<h3>Choose A Country</h3>" . "<br>";
    echo '<select>';
    $countries = array("Egypt","Saudi Arabia","Qatar");
    array_unshift($countries,"Hello World");
    array_pop($countries);
    foreach($countries as $value){
    echo "<option value='$value' >" . $value . "</option>";
    }
    echo '</select>';





    $myFriends = "Abd El Nasser,Abo 8besha,Itch,Ayman,Hamdy,Abo Sharaf";
    $shuffled = explode(",",$myFriends);
    array_reverse($shuffled);
    $shuffled += array_fill(count($shuffled),1,"omar");
    echo "<pre>";

    print_r($shuffled);

    echo "</pre>";




    $myName = array(
            "first" => "Omar",
            "second" => "Ahmed",
            "third" => "El-Sayed",
            "forth" => "Awad",
            "fifth" => "El-Dmohi",
            "sixth" => "Folan"
            );

    echo "<pre>";

    print_r($myName);

    echo "</pre>";


    echo "<pre>";

    asort($myName);
    print_r($myName);

    echo "</pre>";


    echo "<pre>";

    ksort($myName);
    print_r($myName);

    echo "</pre>";
    echo(strlen($myName["second"]))
?>
