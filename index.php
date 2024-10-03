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
    <title>Hotel</title>

    <!-- bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <main>
        <div class="container">

            <section id="filters">
                <form>
                    <div class="mb-3">
                    <label for="hotelRate">Vote</label>
                    <input type="number" id="hotelRate" name="ratings" min="1" max="5">
                    </div>

                    <div class="mb-3 form-check">
                        <label class="form-check-label" for="parking">Check for Parking Service</label>
                        <input type="checkbox" class="form-check-input" id="parking" name="parking">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </section>

            <section id="hotels-table">
                <h1 class="my-4 text-center fw-bold text-dark">Our Hotel</h1>
                <table class="table text-center">
                    <thead>
                        <tr class="table-danger">
                        <th scope="col">Hotel</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Distance to center</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($hotels as $hotel) { ?>
                            <tr>
                                <td class="table-success text-start"><?= $hotel["name"];?></td>
                                <td class="table-primary text-start"><?= $hotel["description"];?></td>
                                <td class="table-info "><?= $hotel["parking"] ? 'Yes': 'No'; ?></td>
                                <td><?= $hotel["vote"]; ?></td>
                                <td class="table-warning"><?= $hotel["distance_to_center"]; ?></td>
                            </tr>
                        <?php } ?>   
                    </tbody>
                </table>
            </section>
 
        </div>
    </main>
</body>
</html>

<!-- Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA:
deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->