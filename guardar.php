<?php
    $directorio = preg_split('/\//',$_POST['nombre_archivo']);
    $acc = "";
    if(count($directorio) > 1){
        foreach ($directorio as $value){
            if($acc != ''){
                $acc = $acc . '/' . $value;               
            } else{
                $acc = $value;
            }            
            if($value != $directorio[count($directorio)-1]){
                if(!is_dir($acc)){
                    mkdir($acc);
                }
            }
        }
    }

    $fp = fopen($acc, "w+");
    fwrite($fp, $_POST['texto']);
    fclose($fp);
?>