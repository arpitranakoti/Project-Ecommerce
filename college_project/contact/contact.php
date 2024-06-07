<?php
  
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech2etc Ecommerce Tutorial</title>
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" /> -->
    <script src="https://kit.fontawesome.com/212c4432d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css?v=2">
    
    <!-- <style>
        <?php 
        //include'style.css'; 
          
        ?>
    </style> -->
</head>
<body>

    <section id="header">
        <div id="mobile">
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
        <div class="logo">
            <a href="#"><img src="../nav_img/wtf_logo.webp"  alt=""></a>
        </div>
        <div>
            <ul id="navbar">
                <li>
                    <a href=""><img src="../nav_img/Tshirt.webp" alt=""></a>
                    <h3>Oversized T-shirts</h3>
                </li>
                <li>
                    <a href=""><img src="../nav_img/bottom_trend.webp" alt=""></a>
                    <h3>Bottom Trend</h3>
                </li>
                <li>
                    <a href=""><img src="../nav_img/bowling_shirts.webp" alt=""></a>
                    <h3>Bowling Shirts</h3>
                </li>
                <li>
                    <a href=""><img src="../nav_img/winter_essential.webp" alt=""></a>
                    <h3>Winter Essential</h3>
                </li>
                <li>
                    <a href="#"><img src="../nav_img/contactUs.avif" alt=""></a>
                    <h3>Contact Us</h3>
                </li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
        </div>
       

    </section>

    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </section>
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Vist one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa-regular fa-map"></i>
                    <p>Lorem ipsum dolor sit amet.</p>

                </li>
                <li>
                    <i class="fa-regular fa-envelope"></i>
                    <p>Lorem ipsum dolor sit amet.</p>

                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>contact@xyz.com</p>

                </li>
                <li>
                    <i class="fa-regular fa-clock"></i>
                    <p>monday to saturday 9:00am to 6:00pm</p>

                </li>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3445.742932613063!2d77.99808357436676!3d30.2729049077123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39092bca3fc0ccf3%3A0xd19900de8c24dbee!2sGraphic%20Era%20Hill%20University!5e0!3m2!1sen!2sin!4v1715161502704!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </section>

<section id="form-details">
    <form method="post" action="contact.php">
                <span>LEAVE A MESSAGE</span>
                <h2>We love to hear from you</h2>
                <input type="text" name="name" placeholder="Your Name">
                <input type="email" name="email" placeholder="E-mail">
                <input type="text" name="subject" placeholder="Subject">
                <textarea cols="30" name="message" rows="10" placeholder="your message"></textarea>
                <button type="submit" class="normal" name="btn" >submit</button>
    </form>

    <?php
        $server="localhost";
        $username="root";
        $password="";
        $database="Contact_Wtf";
        $conn=new mysqli($server,$username,$password,$database);
        // if($conn)
        // {
        //     echo "connected";
        // }
        // else
        // {
        //     echo "fail";
        // }    
        $name = $email = $subject = $message = "";
   
        if (isset($_POST["btn"]))
        {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];



           // $name=$_GET["name"];
           // $email=$_GET["email"];
           // $subject=$_GET["subject"];
           // $message=$_GET["message"];
                            
                            
               $sql="INSERT INTO `contact_details` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message');";
               $result=mysqli_query($conn,$sql);
            //    if($result){
            //        echo "sucessfuly send";
            //    }
            //    else{
            //        echo "".mysqli_connect_error();
            //    }
        }
    ?> 
</section>


    <section id="newsletter" class="section-p1 section-m1">
        <div class="newtext">
            <h4>Sign Up For newsletter</h4>
            <p>Get E-mial updates about our latst shop and <span>special offers.</span></p>

        </div>
        <div class="formdiv">
            <form action="./contact.php" method="post">
                <input type="email" name="email_news" placeholder="Your email Address">
                <button class="normal" name="btn_news">Sign Up</button>
            </form>
    <?php
        if (isset($_POST["btn_news"])) {
         
            $email_news = $_POST["email_news"];      
                
               $sql_news="INSERT INTO `newsletter` (`email`) VALUES ('$email_news');";
               $result_news=mysqli_query($conn,$sql_news);
        }
    ?> 
        </div>
        
    </section>


   <div class="footer">
        
        <div class="tnc">
            <ul class="tnclist">
                <li><div> <a href="" class="tnc_anchor">© 2024 , WHAT THE FLEX</a></div></li>
                <li><div><a href="" class="tnc_anchor">Refund policy</a> </div></li>
                <li><div><a href="" class="tnc_anchor">Privacy policy</a> </div></li>
                <li><div><a href="" class="tnc_anchor">Terms of service</a></div> </li>
                <li><div><a href="" class="tnc_anchor">Shipping policy</a> </div></li>
                <li><div><a href="" class="tnc_anchor">Contact information</a> </div></li>
                <li><div><a href="" class="tnc_anchor">Designed by Elanine Creatives</a></div> </li>
            </ul>
        </div>
    </div>

    <script>
        const bar=document.getElementById('bar');
        const nav= document.getElementById('navbar');
        const close=document.getElementById("close")

        bar.addEventListener('click',()=>{
            nav.classList.add("active");
        })
        close.addEventListener('click',()=>{
            nav.classList.remove("active");
        })
    </script>
</body>

</html>