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
    <title>Index</title>
</head>

<script type="text/javascript">
    document.button.style.backgroundColor = '#3498db';
</script>

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <img src="./assets/images/logo.jpg" alt="logo_cake" width="60" height="30">
        </div>
    </nav>
    <section class="main-container">
  <div class="event">

   
     
            <img id="birthday" src="./assets/images/icons/birthday.png" alt="bday"  >
            <p >    EVENEMENT A ORGANISER ? <br>
                <strong class="par" >
                Nos professionnels s'occupent de tout !</strong>
                
           
            </p>
            
  </div>

        <form class="eventForm" action="result.php" method="post">
            <h5>Organiser un évenement</h5>
            <div class="mb-3">
                <input type="text" name="nom" class="form-control" id="exampleFormControlInput2" placeholder="Nom & Prenom">
            </div>
            <div class="mb-3">
                <input type="email" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="Adresse email">
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Message"
                    rows="3"></textarea>
            </div>
            
            <div class="mb-5">
                <input  class="button" type="submit" value="Organiser"/>
            </div>
        </form>



    </section>
    <br>
    <!-- main -->
   <main>
    <div class="row align-items-md-stretch">
      <div class="col-md-4">
        <div id="col1" class="h-100 p-5 ">
          <p><strong>dolor sit amet consectetur adipisicing elit, Excepturi.</strong></p>
         
          <div class="tab">
            <p class="tab1">in arcus</p>
            <p class="tab2">Cursus euismod</p>
          </div>
        </div>
      </div>
      <div  class="col-md-8">
        <div  id="col2" class="h-100 p-5 ">
          <div  class="row">
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="im1" src="./assets/images/icons/calendar.png" role="img" width="65" heigth="35">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptatem facere quaerat 
            blanditiis eaque.</p>
        <p><a  href="#">En savoir + </a></p>
      </div>
      
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="im1" src="./assets/images/icons/balloon.png" role="img" width="65" heigth="35">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptatem facere quaerat 
            blanditiis eaque.</p>
        <p><a  href="#">En savoir + </a></p>
      </div>
      
      
      <!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <img class="im1" src="./assets/images/icons/karaoke.png" role="img" width="65" heigth="35">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptatem facere quaerat 
            blanditiis eaque.</p>
        <p><a  href="#">En savoir + </a></p>
      </div>
    </div><!-- /.row -->
        </div>
      </div>
    </div>

    <p class = "text1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga,
         blanditiis natus debitis quam officia.
    </p>
    <p style="text-align:center " >Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </p>

            <!-- carousel -->
<div  id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  class="image1" src="./assets/images/slider/slider.jpg" class="d-block w-10" alt="...">
    </div>
    <div class="carousel-item">
      <img class="image2" src="./assets/images/slider/slider.jpg" class="d-block w-10" alt="...">
    </div>
    <div class="carousel-item">
      <img class="image3" src="./assets/images/slider/slider.jpg" class="d-block w-10" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<p class = "text2">Lorem ipsum dolor sit amet.
    </p>
    <p class="text3" style="text-align:start , display:inline ,margin-left:50px ">Lorem ipsum dolor sit amet consectetur adipisicing elit, consectetur adipisicing elit. Fuga,
         blanditiis natus debitis quam officia,  consectetur adipisicing elit. Fuga, <br>
         blanditiis natus debitis quam officia,  consectetur adipisicing elit. Fuga,<br>
         blanditiis natus debitis quam officia<br>
    </p>





    <div id="cardprice" class="row row-cols-1 row-cols-md-4 mb-4 text-center">
      <div class="col">
          
        <div id="card-body" class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Lorem</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">nunc<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>- ullam cooper a</li>
              <li>- ullam cooper a</li>
              <li>- ullam cooper a</li>
              <li>- ullam cooper a</li>
            </ul>
            <button  class="button" type="button" >SED</button>
          </div>
        </div>
        </div>
        <div class="col">
          
          <div id="card-body2"  class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Lorem</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">nunc<small class="text-muted fw-light"></small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>- ullam cooper a</li>
                <li>- ullam cooper a</li>
                <li>- ullam cooper a</li>
                <li>- ullam cooper a</li>
              </ul>
              <button  id="btn2"class="button" type="button" >SED</button>
            </div>
          </div>
          </div>   <div class="col">
          
          <div id="card-body" class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Lorem</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">nunc<small class="text-muted fw-light"></small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>- ullam cooper a</li>
                <li>- ullam cooper a</li>
                <li>- ullam cooper a</li>
                <li>- ullam cooper a</li>
              </ul>
              <button class="button" type="button" >SED</button>
            </div>
          </div>
          </div>
  

    
</div>
    </main>



<!-- subscribe -->
<div class="sub">
<div class="col-4 offset-1">
        <form>
          <h5>Lorem ipsum dolor sit amet.</h5> <br>
           <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Adresse email</label>
            <img class="img_mail" src="./assets/images/icons/email.png" alt="" width="40" heith="20" >
            
            <input  id="inputsub"
            
            id="newsletter1" type="text"  class="form-control col-10" placeholder="Addresse email">
            <button class="btn btn-danger" type="button">Subscribe</button>
          </div>
        </form>
      </div>


      </div>




<!-- Footer -->
    <div class="container">
  <footer id="contfoot" class="row row-cols-5 py-5 my-5 border-top">



    <div class="col">
      <h5>Compagnie</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Est ante</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Porta nom</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Ultrice dui</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">ipsum suspendiss</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">manga sit</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Compagnie</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Est ante</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Porta nom</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Ultrice dui</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">ipsum suspendiss</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">manga sit</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Compagnie</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Est ante</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Porta nom</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Ultrice dui</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">ipsum suspendiss</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">manga sit</a></li>
      </ul>
    </div>
    <div class="col">
      <h5>Compagnie</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Est ante</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Porta nom</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Ultrice dui</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">ipsum suspendiss</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">manga sit</a></li>
      </ul>
   
</div>

  </footer>
</div>
</body>

</html>