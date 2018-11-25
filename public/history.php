<?php

    // configuration
    require("../includes/config.php");
    
    if( $_SERVER["REQUEST_METHOD"] != "POST"){
 
        $rows = query("SELECT * FROM links WHERE id = ? ORDER BY time DESC",$_SESSION["id"]);
        
        $links = [];
        
        foreach($rows as $row){
        
            $country = $row["country"];
            $name = str_replace("%20"," ",$row["name"]);
            
            if($country == "fr"){
                $site = "http://amazon.fr";
                $sitename = "Amazon.fr";
                $link = "http://amazon.fr/s/field-keywords=".$row["name"];
            }else if($country == "it"){
                $site = "http://amazon.it";
                $sitename = "Amazon.it";
                $link = "http://amazon.it/s/field-keywords=".$row["name"];
            }else if($country == "ca"){
                $site = "http://amazon.ca";
                $sitename = "Amazon.ca";
                $link = "http://amazon.ca/s/field-keywords=".$row["name"];
            }else if($country == "de"){
                $site = "http://amazon.de";
                $sitename = "Amazon.de";
                $link = "http://amazon.de/s/field-keywords=".$row["name"];
            }else if($country == "uk"){
                $site = "http://amazon.co.uk";
                $sitename = "Amazon.co.uk";
                $link = "http://amazon.co.uk/s/field-keywords=".$row["name"];
            }else if($country == "cn"){
                $site = "http://amazon.cn";
                $sitename = "Amazon.cn";
                $link = "http://amazon.cn/s/field-keywords=".$row["name"];
            }else if($country == "jp"){
                $site = "http://amazon.co.jp";
                $sitename = "Amazon.co.jp";
                $link = "http://amazon.co.jp/s/field-keywords=".$row["name"];
            }else{
                $site = "http://amazon.com";
                $sitename = "Amazon.com";
                $link = "http://amazon.com/s/field-keywords=".$row["name"];
            }
            
            $links[] = [
            
                "name" => $name,
                "site" => $site,
                "sitename" => $sitename,
                "link" => $link,
                "country" => $country,
                "time" => $row["time"]
            ];
        
        }

        render("history_t.php",["title" => "History","rows" => $links]);
    
    }else{
    
        $country = $_POST["country"];
        $name = $_POST["link"];
        //$link = $_POST["link"];
        if(preg_match("/[^!-~]+/",$name)){
            alert("Invalid");
        }
        /*if($country == "fr"){
            $link = "http://amazon.fr/s/field-keywords="."$link";
        }else if($country == "it"){
            $link = "http://amazon.it/s/field-keywords="."$link";
        }else if($country == "ca"){
            $link = "http://amazon.ca/s/field-keywords="."$link";
        }else if($country == "de"){
            $link = "http://amazon.de/s/field-keywords="."$link";
        }else if($country == "uk"){
            $link = "http://amazon.co.uk/s/field-keywords="."$link";
        }else if($country == "cn"){
            $link = "http://amazon.cn/s/field-keywords="."$link";
        }else if($country == "jp"){
            $link = "http://amazon.co.jp/s/field-keywords="."$link";
        }else{
            $link = "http://amazon.com/s/field-keywords="."$link";
        }*/
    
        /*$rows = query("SELECT link FROM links WHERE id = ?",$_SESSION["id"]);
        
        $links = [];
        
        foreach($rows as $row){
            array_push($links,$row["link"]);
        }
        
        if(in_array($link,$links)){
            alert("Link already saved.");
        }*/
        
        query("INSERT INTO links (id,name,country) VALUES(?,?,?)",$_SESSION["id"],$name,$country);
    
    }

    
?>
