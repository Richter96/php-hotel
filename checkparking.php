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

$parking = isset($_GET['parking']) ? true : false;
$voto = $_GET['voto'];

echo ($parking);
echo ($voto);

?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>



<body>
    <div class="container-md table_hotel">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <?php foreach ($hotels[0] as $key => $value) : ?>
                            <th scope="col"> <?= $key ?></th>
                        <?php endforeach ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $hotel) : ?>

                        <?php if ($parking == true) : ?>
                            <?php if ($hotel['parking'] == $parking && $hotel['vote'] >= $voto) : ?>
                                <tr class="">
                                    <?php foreach ($hotel as $key => $value) : ?>
                                        <td scope="row"> <?= $value ?></td>
                                    <?php endforeach ?>
                                </tr>
                            <?php endif ?>

                        <?php else : ?>
                            <?php if ($hotel['vote'] >= $voto) : ?>
                                <tr class="">
                                    <?php foreach ($hotel as $key => $value) : ?>
                                        <td scope="row"> <?= $value ?></td>
                                    <?php endforeach ?>
                                </tr>
                            <?php endif ?>
                        <?php endif ?>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>