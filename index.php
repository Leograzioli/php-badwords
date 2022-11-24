<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="response.php" method="GET">
            
            <div class="text-input">
                <label for="txt">input your text: </label>
                <textarea name="txt" id="txt"> </textarea>
            </div>
    
            <div class="word-input">
                <label for="censure">word to censure</label>
                <input type="text" id="censure" name="censure" placeholder="exemple: fuck">
            </div>    
    
            <div class="btn">
                <button type="submit">Send</button>
            </div>
        </form>
    </div>
    
</body>
</html>