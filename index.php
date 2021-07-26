<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body{
                background-color: #89ABE3FF;
            }
            #navbar{
                background-color: #ef9273;
            }
            #links{
                color: black;
            }
            #links:hover{
                color: #fef9f8;
            }
            #modal{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-35%, 100%);
    }
    #alert{
    position: absolute;
    top: auto;
    left: 0%;
    width: 100%;
    background-color:#c8d8e4;
    text-align: center;
}
    
        </style>
    </head>
    <body>
        <img src="home.jfif" alt="" class="img-fluid" style="position:fixed;top:0%;left:0%;width: auto;
  height: auto;">
        <!--NAVBAR-->

        <nav class="navbar navbar-expand-sm navbar-light" id="navbar">
            <div class="container-fluid" >
              <a class="navbar-brand" href="#"><img src="logo.png" alt="" style="position: relative; height: 40px; width: 40px;">E Star</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                <ul class="navbar-nav" id="linkcon">
                  <li class="nav-item">
                    <a class="nav-link"  href="#" id="links">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" id="links">Shop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" id="links">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" id="links">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
            Opening Sale, 28% Discounts On Every Product!!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
            </div>
          <h3 style="position: absolute;top:35%;left: 20%;color:#0d0d0d;font-family: 'Bona Nova', serif;font-size:30px;">New Products, Great Deals</h3>
          <h4 style="position: absolute;top:45%;left:28%;color:#0d0d0d;">Limited Time Price Drop!</h4>
          <button class="btn btn-primary" id="modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color:#ef9273;text-decoration:none;color:black;">Shop Now</button>
   
    <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
    <div class="modal-dialog" id="box">
      <div class="modal-content" style="background-color: #c8d8e4">
        <div class="modal-header" >
        <img src="usericon.png" alt="" style="position:absolute;top:1%;left:44%;border-radius:50%;height: 70px;width:70px;">
          <h5 class="modal-title" id="staticBackdropLabel" >Estar Login!!!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <br><br>
        </div>
        <div class="modal-body">
            <form action="validate.php" method="POST">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
                  <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd">
                  <label for="floatingPassword">Password</label>
                </div>
                <br>
                <button class="btn btn-success" >Login</button>
        </form>              
        </div>
      </div>
    </div>
  </div>
    
    
      </body>
</html>
