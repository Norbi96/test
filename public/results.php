<?php
include 'connect/db.php';

// Lekérdezzük a szavazatok statisztikáit az adatbázisból
$result = mysqli_query($connect, "SELECT vote, COUNT(*) as vote_count FROM votes GROUP BY vote");

// Fetcheljük az eredményeket
$statistics = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Zárjuk le a kapcsolatot az adatbázissal
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Szavazati Statisztika</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Szavazati Statisztika</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Opció</th>
                <th scope="col">Szavazatok Száma</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($statistics as $row): ?>
                <tr>
                    <td><?= $row['vote'] ?></td>
                    <td><?= $row['vote_count'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
