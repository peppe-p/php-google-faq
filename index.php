<?php
include('./faq.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Google - FAQ</title>
</head>

<body>
    <header>
        <img src="./img/google_logo.png" alt="" id="logo">
        <ul>
            <li><a href="#">Introduzione</a></li>
            <li><a href="#">Norme sulla privacy</a></li>
            <li><a href="#">Termini di servizio</a></li>
            <li><a href="#">Tecnologie</a></li>
            <li class="active"><a href="#">Domande frequenti</a></li>
        </ul>
    </header>
    <hr>
    <section>
        <?php
        foreach ($faq as $el) {
        ?>
        <div class="question">
            <h2><?php echo $el["domanda"] ?></h2>
            <p><?php echo $el["risposta"] ?></p>
        </div>
        <?php
        }
        ?>
    </section>
</body>

</html>