<?php
$giorni_settimana = array(
    'Domenica',
    'Lunedì',
    'Martedì',
    'Mercoledì',
    'Giovedì',
    'Venerdì',
    'Sabato'
);
$mesi = array(
    'gennaio',
    'febbraio',
    'marzo',
    'aprile',
    'maggio',
    'giugno',
    'luglio',
    'agosto',
    'settembre',
    'ottobre',
    'novembre',
    'dicembre'
);
$data_odierna = new DateTime();
$giorno_settimana = $giorni_settimana[$data_odierna->format('w')];
$giorno = $data_odierna->format('d');
$mese = $mesi[$data_odierna->format('n') - 1];
$anno = $data_odierna->format('Y');

$array = array(
    "frontend" => ["luca", "duilio", "marco"],
    "backend" => ["alfio", "stefano", "rick"],
);
$nomisquadre=[
    "team1",
    "team2"
];
$match = array(
    "match1" =>  [$array["frontend"], $array["backend"]]
);
?>
<!-- html start -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        <?php
        echo "<h3>esercizio 1</h3></br>$giorno_settimana, $giorno $mese $anno</br>"
        ?>
    </h3>

    <!-- esercizio 2 -->
    <h3>
        esercizio 2
        <ul>

            <?php foreach ($array as $key => $value) { ?>
                <li><?php echo $key; ?></li>
                <ul>
                    <?php
                    foreach ($value as $val) {
                        echo "<li>$val</li>";
                    }
                    ?>
                </ul>
            <?php } ?>
        </ul>
    </h3>
    <!-- esercizio 3 -->
    <h3>
        esercizio 3
        <ul>
            <?php foreach ($match as $key => $value) { ?>
                <li><?php echo $key; ?>
                    <ul>
                        <?php foreach ($value as $index => $valore) {
                            $teamName = $nomisquadre[$index];
                            echo "<h4>$teamName</h4>"; 
                            foreach ($valore as $nomi) {
                                echo "<li>$nomi</li>";
                            }
                        } ?>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </h3>
</body>

</html>
