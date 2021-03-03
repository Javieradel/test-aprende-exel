<?php
    define('abc',['a','b','c','d','e','f','g','h','i','j','g','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']);
    
    $abcu =[];
    $index=0;
    for($i=0x1F1E6; $i<=0x1F1FF; $i++){
        $abcu[$index]="&#$i;";
        echo $abcu[$index];
        $index++;
    }
    //print_r($abcu);
    //echo "</br></br></br>";

    function generateFlag($input,$listChar){
        //give chars 
        $chars = str_split($input);
        echo "</br></br></br>";
        print_r($chars);
        // give indexes
        $indexes=[];
        for($i=0; $i<count($chars); $i++){
            $indexes[$i]= array_search($chars[$i],abc);
        }

        //generate flag
        $flag='';
        for($i=0; $i<count($indexes);$i++){

            $flag.= $listChar[$indexes[$i]];
        }
     
        return $flag;
    }
    //echo generateFlag('es',$abcu);
?>