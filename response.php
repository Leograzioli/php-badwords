<?php
$text_input = $_GET["txt"];
$censure_word = $_GET["censure"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- print original txt -->
    <h2>original text</h2>
    <p>
        <?php echo $text_input?>
    </p>
    <h5>
        <?php echo "the text length is: " . strlen($text_input) . " char" ?>
    </h5>

    <?php $replace_txt = str_replace($censure_word, "***", $text_input) ?>
    
    <!-- print censured txt -->
    <h2>censured text</h2>

    <p>
        <?php echo $replace_txt ?>
    </p>
    <h5>
        <?php  echo "the text length is: " . strlen($replace_txt) . " char"?></h5>
    </h5>

    <a href="index.php">Return</a>
        
</body>
</html>