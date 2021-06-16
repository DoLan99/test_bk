 <?php 
    $a=[4, 0, 1, -2, 3];
    $b= [];
    if(count($a) == 1)
        return $a;
    for($i = 0; $i < count($a); $i++) 
    {
        $b[$i] = ($i == 0 ? 0 : $a[$i - 1]) + $a[$i] + ($i == count($a)-1 ? 0 : $a[$i + 1]);
    }
    var_dump($b);


