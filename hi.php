<?php

$lol = $_POST['lang'];
if(isset($_POST['submit'])){

    if(!empty($_POST['lang'])) {

        foreach($_POST['lang'] as $value){
            echo "value : ".$value.'<br/>';
        }


        var_dump($lol);
    }

}
?>