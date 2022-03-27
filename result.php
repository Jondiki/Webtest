<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    <div class="container2">
        <img class="imgresult" src="./assets/images/cake.jpg" alt="cake" class="cake">
        
        <div class="form">
        <?php 
        echo ''.$_POST["mail"].'<br><br><br>';


        echo '<strong> Bonjour </strong> '.$_POST["nom"].'<br><br>';
           
        ?>

        <p>Nous vous remercions pour votre message.</p><br>

    <form action="">

    <div class="mb-3">
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" 
                    rows="5">
                
                    <?php 
                     echo ' '.$_POST["message"];
                     ?>
                </textarea>
            </div>
            
    </form>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem temporibus culpa non praesentium.</p>

        </div>
    </div>
</body>

</html>