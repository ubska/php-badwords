<?php
// paragrafo inserito
$paragraph = $_POST['paragraph'];
// parola da sostituire con ****
$badword = $_POST['badword'];
// lunghezza del paragrafo
$length_paragraph = strlen($paragraph);
// sostituisci la parola da censurare con ***
$censored_paragraph = str_replace($badword, '***', $paragraph);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina atterraggio POST</title>
</head>
<body>
     <h1>Risultati PHP Badwords</h1>
    <p>Paragrafo: <?php echo $paragraph ?> </p>
    <p>Lunghezza del Paragrafo: <?php echo $length_paragraph ?></p>
    <p>Paragrafo Censurato: <?php echo $censored_paragraph ?></p>
</body>
</html>


