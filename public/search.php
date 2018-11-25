<?php

    // configuration
    require("../includes/config.php");

    if( $_SERVER["REQUEST_METHOD"] != "POST"){
 
    	render("home.php",["title" => "Search"]);
    
    }else{

	$params = preg_split("/[[:punct:]\s]+/",$_POST["things"]);
	$string = $params[0];
	
    $num = count($params);
    $c = 1;
    if($num != 1 || $num != 0){
        for($i = 1;$i< $num;$i++){
            $string = $string."%20"."$params[$i]";
      
        }
        
    }
    
    render("search_t.php",["title" => "Items","elem" => $string]);
	
    }

?>



