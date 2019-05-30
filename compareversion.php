<?php
    function compareVersion($ver1, $ver2)
    {
        $a = explode(".", rtrim($ver1, ".0")); 
        $b = explode(".", rtrim($ver2, ".0")); 

        foreach ($a as $ver => $val)
        { 
            if (isset($b[$ver])) { 
                if ($val > $b[$ver]) {
                    return $ver1. ' > ' . $ver2; 
                }  else if ($val < $b[$ver]) {
                    return $ver1. ' < ' . $ver2;
                }
            }else{
                return $ver1. ' > ' . $ver2; 
            }
        }
        return (count($a) < count($b)) ? $ver1. ' < ' . $ver2 : $ver1. ' = ' . $ver2;
    } 

    echo compareVersion("1.0.0", "3.0.0");
?>
