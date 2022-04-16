<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6e3f870a72.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>


<!-- LOADER-->
  
<div class ="preload">
    <div class="loader"></div>
  </div>



  <section class="banner">
      <div class="navigatie">
              <nav>
            
                        <input type="checkbox" id="nav" class="hidden">
                        <label for="nav" class="nav-btn">
                              <i></i>
                              <i></i>
                              <i></i>
                        </label>
                        <div class="logo">
                          <a class="navbar-brand" href="../index.php"><img src="../img/logoinainte.png" alt="Logo"></a>
                        </div>

                        <div class="nav-wrapper">
                              <ul>
                                    <li><a href="../index.php">Acasă</a></li>
                                    <li><a href="../pages/despre.php">Despre</a></li>
                                    <li><a href="../pages/servicii.php">Servicii</a></li>
                                    <li><a href="../pages/tarife.php">Tarife</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                              </ul>
                        </div>
                  
              </nav>
      </div>

        <div class="container">
            <div class="title">
              <h1>Contact </h1>
            </div>
        </div>
    </section>





<section class="contacteaza-ne">
    <div class="container">
        <div class="row">
            

                                <div class="titlu">
                                    <h2> Contactează-ne </h2>
                                    <?php 
                                        $Msg = "";
                                        if(isset($_GET['error']))
                                        {
                                            $Msg = " Vă rog completati câmpurile libere ";
                                            echo '<div class="alert alert-danger">'.$Msg.'</div>';
                                        }

                                        if(isset($_GET['success']))
                                        {
                                            $Msg = " Mesajul dumneavoastra a fost trimis ";
                                            echo '<div class="alert alert-success">'.$Msg.'</div>';
                                        }
                                    
                                    ?>
                                </div>

                                <div class="interior">
                                    <form action="contact-send.php" method="post">
                                        <input type="text" name="Nume" placeholder="Nume" class="form-control mb-2">
                                        <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                                        <input type="text" name="Subiect" placeholder="Subiect" class="form-control mb-2">
                                        <textarea name="msg" class="form-control mb-2" placeholder="Scrie un mesaj"></textarea>
                                        <button class="btn" name="btn-send"> Trimite </button>
                                    </form>
                                </div>
        </div>
    </div>
</section>

<!--FOOTER-->
  
<footer class="page-footer">
  <div class="container text-center text-md-left mt-5">
      <div class="row">
              <div class="col-md-4 mx-auto mb-4">
                <h6 class="text-contact text-uppercase font-weight-bold">Florin Stere's page</h6>
                <hr class="linie mb-4 mt-0 d-inline-block mx-auto">
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem soluta, unde possimus voluptas aperiam ratione delectus eos aliquid illo molestiae similique, doloremque, tempora aut deleniti laboriosam itaque quaerat veritatis voluptatem?</p>
              </div>
  
              <div class="col-md-3 mx-auto mb-4">
                <h6 class="text-contact text-uppercase font-weight-bold">Meniu</h6>
                <hr class="linie mb-4 mt-0 d-inline-block mx-auto">
              
              <ul class="list-unstyled" >
                <li class="my-2"><a href="../index.php">Acasa</a></li>
                <li class="my-2"><a href="../pages/despre.php">Despre</a></li>
                <li class="my-2"><a href="../pages/servicii.php">Servicii</a></li>
                <li class="my-2"><a href="../pages/tarife.php">Tarife</a></li>
                <li class="my-2"><a href="contact.php">Contact</a></li>
              </ul>
              </div>
  
  
              <div class="col-md-3 mx-auto mb-4">
                <h6 class="text-contact text-uppercase font-weight-bold">Contact</h6>
                <hr class="linie mb-4 mt-0 d-inline-block mx-auto">
           
                <ul class="list-unstyled">
                  <li class="my-2"><i class="fas fa-home"> Aleea Margelelor Nr.23, Constanta, Romania</i></li>
                  <li class="my-2"><i class="fas fa-phone"><a href="tel:0746268751"> 0746 268 751</a></i></li>
                  <li class="my-2"><i class="fas fa-envelope"><a href="mailto:admin@florinstere.website"> stereflorin@yahoo.com</a></i></li>
                  <li class="my-2"><i class="fas fa-clock"> Luni-Vineri: 10:00 - 19:00<br> Sambata: 10:00 - 16:00 <br> Duminica: Inchis</i></li>
                </ul>
              </div>
      </div>
  </div>
  
  <div class="container">
    <div class="row py-4 d-flex align-items-center">
      <div class="col-md-12 text-center">
        <div class="social-media col-md-12 text-center" style="font-size:25px;">
          <a href="#"><i class="fab fa-facebook-f text-white mr-4"></i></a>
          <a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="footer-copyright text-center py-3">
    <p>&copy; Designed by Florin Stere</p>
  </div>
  </footer>





    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
    <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
      offset:50,
      duration:1300
    });
    </script>

    <script src="../js/custom.js"></script>
  


</body>
</html>