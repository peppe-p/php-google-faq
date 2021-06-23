<?php
include('./faq.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google - FAQ</title>
</head>
<body>
    <?php
        foreach ($faq as $el){
             ?>
                <div class="question">
                <h2><?php echo $el["domanda"] ?></h2>
                <p><?php echo $el["risposta"] ?></p>
                </div>
             <?php
        }
    ?>
</body>
</html>