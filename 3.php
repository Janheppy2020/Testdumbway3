<?php
function segitigaPrima($batas)
{
    if ($batas > 0 && $batas < 10)
    {
        $atas = $batas * 26;
        $prima = array();
        $counter = 0;
        for ($i = 2; $i <= $atas; $i++) {
            $p = 0;
            for ($j = 1; $j <= $i ; $j++) 
            {
                if ($i % $j == 0)
                {
                    $p += 1;
                }
            }
            if ($p <= 2)
            {
                array_push($prima, $i);
            }
        }
        for ($i = 0; $i <= $batas; $i++) 
        {
            for ($j = 1; $j <= $i ; $j++) 
            {
                if ($i <= 1) 
                {
                    echo $prima[$i-1];
                }
                else if ($i > 0)
                {
                    if ($j < 1)
                    {
                        echo $prima[$i-2]." ";
                    }
                    else if ($j > 0)
                    {
                        echo $prima[$counter]." ";
                    }
                }
                $counter++;
            }
            echo "\n";
        }
    } else {
        echo "Ketentuan: 0 < Alas/Tinggi < 10";
    }
}
segitigaPrima(8);
?>
