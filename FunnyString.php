<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$alpha = array_flip(str_split('abcdefghijklmnopqrstuvwxyz'));
$num = trim(fgets(STDIN));

while($f = fgets(STDIN))
{
    $chars = str_split(trim($f));
    $rev = array_reverse($chars);
    $funny = true;

    for($i=1; $i<count($chars); $i++)
    {
        $s = abs($alpha[$chars[$i]] - $alpha[$chars[$i-1]]);
        $r = abs($alpha[$rev[$i]] - $alpha[$rev[$i-1]]);
        
        if($s != $r){ $funny = false; break; }
    }

    print $funny ? 'Funny' : 'Not Funny';
    print "\n";
}
?>