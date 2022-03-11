<?php

//$variable = 'Khalid';
//
//echo $variable . " est un formateur!" . (2 + 3);


//$tableau = ['a', 'b', 'c']; // Tableau indexé
//
//
//$associatif = ['indexA' => $tableau, 'indexB' => 'b', 'indexC' => 'c'];
//
//echo "<pre>";
//
//foreach ($associatif as $key => $value) {
//    var_dump($key);
//    var_dump($value);
//}
//
//$girl = 'Amel';
//
//function getName($name) {
//    global $girl;
//    echo $girl;
//}
//
//getName('Khalid');
//
//$chaine = ' Une longue chaine de caratère-';
//
//$chaine = trim($chaine, '- ');
//
//$chaine = implode('-', $tableau);

//var_dump($chaine);
//
//$tableau = ['a', 'b', 'c']; // Tableau indexé
//
//array_push($tableau, 'd');
//$tableau[] = 'e';
//
////array_pop($tableau);
//
//$tableau = ['a' => 100, 'b' => 200, 'c' => 300];
//$tableau['d'] = 400;
//
//$personnes = [
//    1 => ['name' => 'Khalllid', 'age' => 25],
//    2 => ['name' => 'Amel', 'age' => 4],
//    3 => ['name' => 'Noam', 'age' => 1]
//];
//
///**
// * @todo Me donner le nom des personnes qui on plus de 18 ans
// * @todo Me donner la somme d'age des personnes qui ont moins de 18 ans
// */
//$adults = '';
//$sommeAgeEnfant = 0;
//
//foreach ($personnes as $personne) {
//    if ($personne['age'] > 18) {
//        $adults .= $personne['name'] . ', ';
//    } else {
//        $sommeAgeEnfant += $personne['age'];
//    }
//}
//
//$adults = trim($adults, ', ');
//
//
//echo $adults . (preg_match('/,/',  $adults) ? ' ont ' : ' a ') . " plus de 18 ans <br>";
//echo "La somme d'age des enfant est $sommeAgeEnfant";

$cars = [
    "peugeot" => [
        ["make" => "5008", "year" => 2015, "doors" => 5],
        ["make" => "3008", "year" => 2009, "doors" => 5],
        ["make" => "108", "year" => 2015, "doors" => 3],
        ["make" => "208", "year" => 2015, "doors" => 2],
        ["make" => "5008", "year" => 2020, "doors" => 5],
    ],
    "renault" => [
        ["make" => "Mégane", "year" => 2015, "doors" => 5],
        ["make" => "Scénic", "year" => 2009, "doors" => 5],
        ["make" => "Clio", "year" => 2015, "doors" => 3],
    ]
];

$peugeot5portes = "";
$renaultBefore2010 = "";
$objPeugeot = ["make" => "2008", "year" => "2022", "doors" => 5];

foreach ($cars as $carKey => $carValues) {
    if($carKey === 'peugeot') {
        foreach ($carValues as $carPeugeotKey => $carPeugeotValues) {
            if ($carPeugeotValues['doors'] === 5) {
                $peugeot5portes .= $carPeugeotValues['make'] . ' | ';
            }
            if ($carPeugeotValues['year'] < 2010) {
                unset($cars[$carKey][$carPeugeotKey]);
            }
        }

        array_push($cars[$carKey], $objPeugeot);
    }
    if($carKey === 'renault') {
        //echo 'Coucou renault';
        foreach ($carValues as $carRenault) {
            if ($carRenault['year'] < 2010) {
                $renaultBefore2010 .= $carRenault['make'] . ', ';
            }
        }
    }
}

$peugeot5portes = trim($peugeot5portes, '| ');
$renaultBefore2010 = trim($renaultBefore2010, ', ');
?>

<pre>
    <?php echo $peugeot5portes . (preg_match('/|/', $peugeot5portes) ? ' ont ' : ' a ') . " 5 portes \n"; ?>
    <pre/>
    <pre>
        <?php echo $renaultBefore2010 . (preg_match('/,/', $renaultBefore2010) ? ' dates ' : ' date ') . " d'avant 2010 \n"; ?>
        <pre/>
        <pre>
            <?php var_dump($cars); ?>
            <pre/>

