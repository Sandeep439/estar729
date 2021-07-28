<!-- 8332983795 -->
<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            @media (max-width: 360px) and (max-height: 720px){
                .content{
                    position: absolute;
                    top: 0%;
                    background-color: #ef9273;
                    width: 360px;
                    height: 83px;
                }
                #logo{
                    text-decoration: none;
                    color: black;
                    position: absolute;
                    top: 50%;
                    left: 5%;
                    transform: translateY(-50%);
                }
                #menu{
                    position: absolute;
                    top: 50%;
                    right: 5%;
                    transform: translateY(-50%);    
                }
                ul{
                    width: 360px;
                }
                .con{
                    position: absolute;
                    top: 50%;
                    width: 360px;
                    height: 1001px;
                    background-color: #ef9273;
                }
                .items{
                    display: grid;
                    grid-template-columns: 1fr;
                    grid-template-rows: 1fr 1fr 1fr;
                    background-color: beige;
                    height: 200px;
                    width: 200px;
                    margin-bottom: 50px;
                    border-radius: 10%;
                }
                h4{
                    position: absolute;
                    top: 10px;
                    left: 50%;
                    transform: translateX(-50%);
                }
                 #itemImg{
                    height: 200px;
                    width: 200px;
                    border-radius: 10%;
                 }  
                 #About{
                     height: 200px;
                     width: 360px;
                     position: absolute;
                     top: 80%;
                    font-size: 25px; 
                 }
                 .footer{
                     position: absolute;
                     top: 189%;
                     height: 100px;
                     width: 360px;
                     background-color: #fef9f8;
                 }
                 .icon{
                     display: flex;
                     justify-content: center;
                     display: inline;
                 }
                 .holder{
                    position: absolute;
                     top: 65%;
                     left: 50%;
                     transform: translate(-50%,-50%);
                 }
            }
        </style>
    </head>
    <body>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <img src="home.jfif" alt="" style="position:fixed;top:0px;width: 360px;height: 360px;">
        <h1 style="position: absolute; top: 20%;left: 50%;transform: translateX(-90%);border-right: solid;">Many Products, Great Deals</h1>
        <h4 style="position: absolute; top: 20%;left: 90%;transform: translateX(-90%);">Limited Time Price Drop!</h4>
        <button class="btn btn-primary" style="position: absolute; top: 40%;left: 50%;transform: translateX(-50%);background-color: #ef9273;border-style: none;">Go to shop</button>
        <!-- NavBar -->
            <div class="content">
                <h2><a href="#" id="logo">E Star</a></h2>
                  <div class="d-flex" id="menu">
                    <div class="dropdown me-1">
                      <button type="button" class="btn btn-outline-primary dropdown" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20" style="border-style: none;background-color: #ef9273;">
                        <img src="menu.png" alt="">
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset" >
                        <li><button class="dropdown-item" type="button">Home</button></li>
                      <li><button class="dropdown-item" type="button">About</button></li>
                      <li><button class="dropdown-item" type="button">Trending</button></li>
                      <li><button class="dropdown-item" type="button">Contact-US</button></li>
                      </ul>
                    </div>
                </div>
            </div>
        <!-- NavBar -->


        <!-- Body     -->

            <div class="con">
                <h4>Featured items</h4>
                <div style="position: absolute;top: 45%;left: 50%;transform: translate(-50%,-50%);">
                <div class="items"><a href="#"><img src="samsung.jpg" alt="" id="itemImg"></a></div>
                <div class="items"><a href="#"><img src="shoe.jpg" alt="" id="itemImg"></a></div>
                <div class="items"><a href="#"><img src="1plus.jpg" alt="" id="itemImg"></a></div>
                </div>
            

        <!-- Body     -->
        
        <!-- About -->
                <div id="About">
                    <strong><center><p>About</p></center></strong>
                    <p style="font-size: 17px;text-align: center;padding: 10px;">  If you’re a business, talk about how you started and share your professional journey. Explain your core values, your commitment to customers.  Add a photo, gallery or video for even more engagement</p>
                </div>
                
            </div>

        <!-- About -->
        
        <!-- Foot  -->

        <div class="footer">
            <h4>Follow us on:</h4>
            <br>
            <div class="holder">
            <div class="icon"><a href=""><img src="linked.png" alt="" style="height: 40px;width: 40px;"></a></div>
            <div class="icon"><a href=""><img src="insta.png" alt="" style="height: 40px;width: 40px;"></a></div>
            <div class="icon"><a href=""><img src="whats.png" alt="" style="height: 40px;width: 40px;"></a></div>
        </div>
        </div>

        <!-- Foot  -->


    </body>
</html>