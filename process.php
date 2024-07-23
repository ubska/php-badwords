<?php
// paragrafo inserito
$paragraph = $_POST['paragraph'];
// parola da sostituire con ****
$badword = $_POST['badword'];
// lunghezza del paragrafo
$length_paragraph = $strlen($paragraph);




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
</body>
</html>


