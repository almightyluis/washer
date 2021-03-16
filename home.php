<?php

date_default_timezone_set("America/Los_Angeles");
$current_date = date("m/d/o");

?>

<!-- ..htmlentities().  -->
<!-- This is the way to be able to print stuff to html via php code  -->


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Bargains</title>
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/home.css">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
            <a class="navbar-brand" href="#"> <i class="fab fa-bitcoin fa-lg"></i> So-Cal Detailers &amp; Wash</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <?php
                date_default_timezone_set("America/Los_Angeles");
                $current_date = date("m/d/o");
                echo '<li class="nav-item">
                <a class="nav-link" href="#"> '.htmlentities($current_date).'</a>
              </li>';
                ?>
              </ul>
            </div>
        </nav>


        <div id="mainImageContainer" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#mainImageContainer" data-slide-to="0" class="active"></li>
              <li data-target="#mainImageContainer" data-slide-to="1"></li>
              <li data-target="#mainImageContainer" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 h-100" src="media/models-edit.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 h-100" src="media/ramrebel-edit.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 h-100" src="media/performante-edit.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#mainImageContainer" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainImageContainer" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


        <div class="jumbotron padding">
            <h1 class="display-4 text-left">Car washes just got simpler.</h1>
            <p class="lead text-left">Simply book and appointment, list the car make, model, year and we will have a detailer your way!</p>
            <p class="lead text-left">Note: You will be charged once you accept the confirmation text/email.</p>
            <hr class="my-4">
            <div class="d-flex justify-content-center">
              <button type="button" class="btn btn-primary btn-light btn-lg" data-toggle="modal" data-target="#makeAppointment">
                Make Appointment
              </button>
            </div>

        </div>
        <div class="container-fluid padding">
  
            <div class="jumbotron paddding py-4">
              <h1 class="display-4 text-center">Current Packages</h1>
            </div>
          
        </div>

        <div class="container-fluid padding" id="pricingInformation">
          <div class="row text-center">

            <div class="col-3">
              <button class="btn btn-warning btn-lg container-fluid padding" type="button" data-toggle="collapse" data-target="#basicExample" aria-expanded="false" aria-controls="basicExample">
                Basic
              </button>
            </div>
            <div class="col-3">
              <button class="btn btn-warning btn-lg container-fluid padding" type="button" data-toggle="collapse" data-target="#goldExample" aria-expanded="false" aria-controls="goldExample">
                Gold
              </button>
            </div>
            <div class="col-3">
              <button class="btn btn-warning btn-lg container-fluid padding"  type="button" data-toggle="collapse" data-target="#diamondExample" aria-expanded="false" aria-controls="diamondExample">
                Diamond
              </button>
            </div>
            <div class="col-3">
              <button class="btn btn-warning btn-lg container-fluid padding" type="button" data-toggle="collapse" data-target="#platinumExample" aria-expanded="false" aria-controls="platinumExample">
                Platinum
              </button>
            </div>
          </div>


          <div class="row">
            <div class="col py-2">
              <div class="collapse" id="basicExample">
                <div class="card card-body">
                  <p class="text-center">Basic Wash</p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Foam Cannon</li>
                    <li class="list-group-item">Wax/Shampoo</li>
                    <li class="list-group-item">Hand Dry/Microfiber Towel</li>
                    <li class="list-group-item">Vacuum</li>
                  </ul> 
                  
                  
                </div>
              </div>
            </div>
            <div class="col py-2">
              <div class="collapse" id="goldExample">
                <div class="card card-body">
                  <p class="text-center">Gold Wash</p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Foam Cannon</li>
                    <li class="list-group-item">Wax/Shampoo</li>
                    <li class="list-group-item">Hand Dry/Microfiber Towel</li>
                    <li class="list-group-item">Vacuum</li>
                    <li class="list-group-item">Tireshine</li>
                    <li class="list-group-item">Clean Dash</li>
                  </ul> 
                </div>
              </div>
            </div>
            <div class="col py-2">
              <div class="collapse" id="diamondExample">
                <div class="card card-body">
                  <p class="text-center">Diamond Wash</p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Foam Cannon</li>
                    <li class="list-group-item">Wax/Shampoo</li>
                    <li class="list-group-item">Hand Dry/Microfiber Towel</li>
                    <li class="list-group-item">Vacuum</li>
                    <li class="list-group-item">Tireshine</li>
                    <li class="list-group-item">Clean Dash</li>
                    <li class="list-group-item">Clean Rims</li>
                    <li class="list-group-item">Fresh Scent</li>
                  </ul> 
                </div>
              </div>
            </div>
            <div class="col py-2">
              <div class="collapse" id="platinumExample">
                <div class="card card-body">
                  <p class="text-center">Platinum Wash</p>
                  <p class="text-left"> Note: For platinum washes we use Chemical Guys products.</p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Foam Cannon/Premium Products</li>
                    <li class="list-group-item">Wax/Shampoo</li>
                    <li class="list-group-item">Hand Dry/Microfiber Towel</li>
                    <li class="list-group-item">Vacuum</li>
                    <li class="list-group-item">Tireshine</li>
                    <li class="list-group-item">Clean Dash</li>
                    <li class="list-group-item">Clean Rims</li>
                    <li class="list-group-item">Fresh Scent</li>
                    <li class="list-group-item">Fresh Scent</li>
                  </ul> 
                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="modal fade" id="makeAppointment" tabindex="-1" role="dialog" aria-labelledby="makeAppointment" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="createAppointment.php" method="POST">
                  <div class="form-group">
                    <label for="exampleEmail">Email address</label>
                    <input type="email" class="form-control" id="exampleEmail" name="useremail" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleFullname">Full Name</label>
                    <input type="text" class="form-control" id="exampleFullname" name="userfullname" placeholder="First Last">
                  </div>

                  <div class="form-group">
                    <label for="examplePhone">Phone Number</label>
                    <input type="tel" class="form-control" id="examplePhone" name="userphone" placeholder="(XXX) XXX XXXX">
                  </div>
                  
                  <input type="submit" value="Make Appointment" class="btn btn-primary" id="create_app" name="clicked" >
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>





        <!-- Inside the card we can add carousel   -->
        <div class="container-fluid padding py-4">
            <h2 class="display-4 text-left "> Why Choose Us? </h2>

            <div class="row padding py-3">
              
              <div class="col-md-6">
                <div class="card">
                  <img class="d-block w-100 h-100" src="media/blue_bmw.jpg" alt="Second slide">
                </div>

              </div>
              
              <div class="col-md-6">
                <div class="jumbotron paddding">
                  <h2 class="lead text-center"><u> Work Ethic</u></h2>
                  <p class="lead text-left"> We have technicians on stand by waiting to fulfill orders. </p>
                  <p class="lead text-left"> We are our biggest critics. </p>
                  <p class="lead text-left"> If you are fo some reason not happy with the job presented, simply email us for a refund. </p>
                  
                </div>
              
              </div>

            </div>
            <div class="row padding py-3">

              <div class="col-md-6">

                <div class="jumbotron paddding">
                  <h2 class="lead text-center"> <u> Small Company </u> </h2>
                  <p class="lead text-left"> We are a small company serving our community.</p>
                  <p class="lead text-left"> We hire the best in their respected field.</p>
                  <p class="lead text-left"> No corporate fees, just a flat rate! </p>

                </div>

              </div>
              
              <div class="col-md-6">
                <div class="card">
                  <img class="d-block w-100 h-100" src="media/carwash_rim.jpg" alt="Second slide">
                </div>
              
              </div>

            </div>


            <div class="row padding py-3">
              
              <div class="col-md-6">
                <div class="card">
                  <img class="d-block w-100 h-100" src="media/van_equipment.jpg" alt="Second slide">
                </div>

              </div>
              
              <div class="col-md-6">

                <div class="jumbotron paddding">
                  <h3 class="lead text-center"> <u> Equipment</u> </h3>
                  <p class="lead text-left"> Not only do we have the best emplyees, but we have awsome equipment.</p>
                  <p class="lead text-left"> We only use top of the line equipment and products.</p>
                  <p class="lead text-left"> Not only do we have high quality products, we also let you choose to even better brands .</p>

                </div>
                
              </div>

            </div>
        </div>

        <footer>
            <div class="container-fluid padding">
                <div class="row text-center">
                        <div class="col-md-4">
                        <h5 class="footer_title">Have Questions?</h5>
                        <hr class="small_hr">
                        <p>909-572-5474</p>
                        <p>someemail@gmail.com</p>
                        <p>1988 W something Drive</p>
                        <p>Beverly Hills Ca, 92400</p>
                        <hr class="small_hr">
                    </div>
            
                    <div class="col-md-4">
                        <h5 class="footer_title">Our Hours</h5>
                        <hr class="small_hr">
                        <p>Monday: 9am-6pm</p>
                        <p>Tuesday: 9am-6pm</p>
                        <p>Wednesday: 9am-6pm</p>
                        <p>Thursday: 9am-6pm</p>
                        <p>Friday: 9am-6pm</p>
                        <p>Saturday: 9am-6pm</p>
                        <p>Sunday: Closed</p>
                        <hr class="small_hr">
            
                    </div>
                    <div class="col-md-4">
                        <h5 class="footer_title">Interested in a website?</h5>
                        <hr class="small_hr">
                        <p>lag.webservices@gmail.com</p>
                        <p>909-XXX-XXXX</p>
                        <hr class="small_hr">
                    </div>
                </div>
            </div>
        </footer>



    </body>



</html>