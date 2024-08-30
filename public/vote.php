<?php 
include 'connect/db.php';
$result = mysqli_query($connect,"SELECT COUNT(email) as emails FROM votes WHERE email ='" . $_POST['email'] . "'");
$row= mysqli_fetch_array($result);


    if(count($_POST)>0) {
        if(empty($row['emails'])){
            $create_date = date('Y-m-d');
            $email = $_POST['email'];
            $vote = $_POST['vote_option'];
            $time = date('Y-m-d H:i:s');
            mysqli_query($connect,"INSERT INTO votes (email, vote, time) VALUES ('$email', '$vote', '$time')");
            $message = "Adatok feltöltése sikeres!";
            echo '<meta http-equiv="refresh" content="0; URL=vote.php?msg=success" />';
        }
        else{
            echo '<meta http-equiv="refresh" content="0; URL=vote.php?msg=error" />';
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Karácsonyi programválasztó</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: #f8f9fa;
        }

        .container {
            background: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }

        h2 {
            color: #007bff;
        }

        .form-group label {
            color: #495057;
        }

        .btn-primary {
            background: #007bff;
            border: 1px solid #007bff;
        }

        .btn-primary:hover {
            background: #0056b3;
            border: 1px solid #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <?php if(isset($_GET['msg']) && $_GET['msg'] == 'success'): ?>
                <div class="alert alert-success" role="alert">
                    Szavazás sikeresen elküldve!
                </div>
            <?php elseif(isset($_GET['msg']) && $_GET['msg'] == 'error'): ?>
                <div class="alert alert-danger" role="alert">
                    Hiba: Erről az e-mail címről már adtak le szavazatot!
                </div>
            <?php endif; ?>

            <h2 style="color:#5db634;" class="mb-4">Évzáró rendezvény szavazás</h2>
            <img src="kriszmosz.png" style="width: 40%; height:40%;" alt="">
            <form method="post">
                <div class="form-group">
                    <label for="option1">
                        <input type="radio" name="vote_option" id="option1" value="LaserCorner" required>
                        <a href="https://lasercorner.hu/">Laser Corner Pécs</a> utána ebéd egy étteremben 
                    </label>
                </div>
                <div class="form-group">
                    <label for="option2">
                        <input type="radio" name="vote_option" id="option2" value="BowlingMakár" required>
                        Bowling Makár tanya és ebéd a helyszínen 
                    </label>
                </div>

                <div class="form-group">
                    <label for="option3">
                        <input type="radio" name="vote_option" id="option3" value="FordanCenter" required>
                        Biliárd és Darts a Fordan centerben és ebéd a helyszínen
                    </label>
                </div>

                
                <div class="form-group">
                    <label for="option4">
                        <input type="radio" name="vote_option" id="option4" value="BowlingPalkonya" required>
                        Bowling és ebéd Palkonyán
                    </label>
                </div>

                <div class="form-group">
                    <label for="option4">
                        <input type="email" name="email" id="option4" placeholder="E-mail cím kitöltése" required>
                    </label>
                </div>


                <!-- További opciók hozzáadhatók szükség esetén -->
                <button style="background-color: #5db634; border:#5db634;" type="submit" class="btn btn-primary">Szavazás</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
