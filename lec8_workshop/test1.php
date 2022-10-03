<?php
    $person = array("fullname"=>"john", "height"=>"173", "age"=>"43");
    foreach ($person as $key => $value){
        echo $key . "=". $value . "<br>";
    }
?>

<?php
    echo "<pre>";
    print_r($person);
    echo "</pre>";
?>