<?php

    // configuration
    require("../includes/config.php");
    
    if( $_SERVER["REQUEST_METHOD"] == "POST"){
        
        if(isset($_POST["delete"])){
        
            query("DELETE FROM links WHERE id = ?",$_SESSION["id"]);
            
            redirect("history.php");
        
        }else{
        
        $country = $_POST["country"];
        $name = str_replace(" ","%20",$_POST["name"]);
        
        query("DELETE FROM links WHERE id = ? AND name = ? AND country = ?",$_SESSION["id"],$name,$country);  
        
        redirect("history.php");
        }
        
    }else{
    
        redirect("history.php");
    
    }
    
?>
