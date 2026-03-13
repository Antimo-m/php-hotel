<?php
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>

<!-- 
prendiamo parking -->

<?php
$parking_true = $_GET["parking"] ?? false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Hotels</title>
</head>

<body>
    <h1 class="text-center py-2">Php Hotels</h1>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Hotel</h2>


        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>name</th>
                    <th>description</th>
                    <th>parking</th>
                    <th>vote</th>
                    <th>distance_to_center</th>
                </tr>
            </thead>
            <tbody>
                <?php //tabella stilizzata con bootstrap, modificando il modo di mostrare in pagina il risultato dii chiavi e valori
                foreach ($hotels as $hotel) {
                    if (!$parking_true || $hotel['parking'] == true) {
                        echo "<tr>";
                        echo "<td>" . $hotel["name"] . "</td>";
                        echo "<td>" . $hotel["description"] . "</td>";
                        echo "<td>" . ($hotel["parking"] ? "Disponibile" : "Non disponbiile") . "</td>";
                        echo "<td>" . $hotel["vote"] . "</td>";
                        echo "<td>" . $hotel["distance_to_center"] . "Km" . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <form method="get" class="d-flex justify-content-center align-items-center gap-2">
        <div class="form-check ">
            <input class="form-check-input" type="checkbox" name="parking" id="parking"
                <?php // cosa inutile ma facciamola, facciamo una condizone cosi che il checkbox rimanga selezionato dopo aver filtrato
                if ($parking_true) echo "checked"; 
                ?>>
            <label class="form-check-label" for="parking">
                Mostra solo hotel con parcheggio
            </label>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Filtra</button>
    </form>


</body>

</html>