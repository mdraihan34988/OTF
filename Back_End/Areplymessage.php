

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/areplymessage.css">
</head>
<body>
    
<div class="box">
    <form id="user" class="input-group" action="" method="post">
          Message:                     
        <input type="text" class="input-field" placeholder="message" name="message" >
         <br> <br>
        <button type="submit" name="submit" class="submit-btn">Send</button>
    
        <?php 
            include'Areplypass.php';

        ?>
        </form>
</div>

</body>
</html>