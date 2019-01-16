<?php
if(isset($_POST['submit'])){//to run PHP script on submit
    if(!empty($_POST['in'])){
// Loop to store and display values of individual checked checkbox.
        foreach($_POST['in'] as $selected){
            echo $selected."</br>";
        }
    }
}
echo "dfa0";
//header("location:Traveller's Dream.php");
?>