<?php
    $people = array(
        array('name' => 'Kalle', 'salt' => 856412),
        array('name' => 'Pierre', 'salt' => 215863)
    );
    
    print_r($people);

    for($i = 0; $i < count($people); ++$i) {
        $people[$i]['salt'] = mt_rand(000000, 999999);
    }
    echo "<br>";
    print_r($people);

    for($i = 0; $i < count($people); ++$i) {
        $people[$i]['salt2'] = mt_rand(000000, 999999);
    }
    echo "<br>";
    print_r($people);
?>