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
$voto = $_GET['voto'] ?? 'nobody';

// echo ($parking);
// echo ($voto);

// echo "<pre>";


/* foreach ($hotels as $hotel) {
    // var_dump($hotel);
    foreach ($hotel as $key => $value) {
        echo ($key . "= " . $value);
    }
} */
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

    <!-- fontawsone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>



<body>
    <div class="container-md">
        <h1 class="text-center mb-3">Hotel disponibili</h1>
        <div class="check_parcheggio mt-3 col-6 m-auto border shadow p-3">
            <form action="" class="d-flex justify-content-between align-items-center m-0" method="GET">
                <div>
                    <label for="parking">Serve il parcheggio</label>
                    <input type="radio" name="parking" id="parking">
                </div>
                <label for="voto">Insericsi il voto</label>
                <select name="voto" id="voto">
                    <option value="0">seleziona un valore</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button type="submit" class="btn btn-primary">Ricerca</button>
            </form>
        </div>
        <div class="table_hotel my-4">
            <div class="table-responsive shadow">
                <table class="table table-primary m-0">
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
                                            <!-- se la key = parking allora (if parking(value)=true 'si' else 'no') -->
                                            <?php if ($key === 'parking') : ?>
                                                <?php if ($hotel['parking'] == true) : ?>
                                                    <td scope="row"><i class="fa-solid fa-car"></i></td>
                                                <?php else : ?>
                                                    <td scope="row"><i class="fa-solid fa-x"></i></td>
                                                <?php endif ?>

                                            <?php else : ?>
                                                <td scope="row"> <?= $value ?></td>
                                            <?php endif ?>

                                        <?php endforeach ?>
                                    </tr>
                                <?php endif ?>

                            <?php else : ?>
                                <?php if ($hotel['vote'] >= $voto) : ?>
                                    <tr class="">
                                        <?php foreach ($hotel as $key => $value) : ?>
                                            <?php if ($key === 'parking') : ?>
                                                <?php if ($hotel['parking'] == true) : ?>
                                                    <td scope="row"><i class="fa-solid fa-car"></i></td>
                                                <?php else : ?>
                                                    <td scope="row"><i class="fa-solid fa-x"></i></td>
                                                <?php endif ?>

                                            <?php else : ?>
                                                <td scope="row"> <?= $value ?></td>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </tr>
                                <?php endif ?>
                            <?php endif ?>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>