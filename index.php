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
                <?php
                foreach($hotels as $hotel){
                    echo "<tr>";
                    echo "<td>" . $hotel["name"] . "</td>";
                    echo "<td>" . $hotel["description"] . "</td>";
                    echo "<td>" . ($hotel["parking"] ? "Disponibile" : "Non disponbiile") . "</td>";
                    echo "<td>" . $hotel["vote"] . "</td>";
                    echo "<td>" . $hotel["distance_to_center"] . "Km" . "</td>";
                    echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>