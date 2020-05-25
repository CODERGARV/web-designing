 
<!doctype html>
    <html lang="en">
      <head>
        <title>>CREATING NEW ACCOUNT</title>
       <style> 
      body
      {
        margin-top:66px;
         background-image: linear-gradient(150deg,#11ff02,#11f1ff); 
         background-image: url('https://images.unsplash.com/flagged/photo-1556655678-9d4812e3fbe9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');
         background-repeat: no-repeat;
         background-size:cover;
         height: 100%;
         width: 100%;
      }
      /* #container{
          background-color: grey;
          width: 320px;
      } */
     input
      {
            border-radius:2px;
            border: none;
            outline: none;
            padding: 2.5px;
            padding-left: 15px;
            font-size:16px;
            font-style:normal;
            background:transparent; 
            color: rgb(255, 255, 255);
            border-bottom: 2px solid rgb(2, 2, 5);
            
      } 
      ::placeholder{
          color: black;
      }
      button
      {
         border:none;
         /* border-style:inset; */
         padding-left:10px;
         padding-right:10px;
         border-radius:1px;
         background:#ffffff;  
         height: 25px;
         width: 110px;
         cursor: pointer;
      }    
      form 
      {
             border:none;
            /* background:transparent; */
             /* background:#ffffff;  */
             background-color: #373737;
             opacity: 0.7;
             padding:10px;
             height:30%;
             /* border-radius:4px; */
             /* border-style:inset; */
             width:320px;
             margin:auto;
      }
      #reg
      {
          border:none;
          /* background-image:linear-gradient(160deg,#000000,#f000ff); */
          width:210px;
          border-radius:30px;
      }
      
    </style>
</head>
<body>
<!-- <h1><marquee behavior="Scroll" loop="100000000000000"Scrolldelay="5">HELLO SIR ! Please Enter A Valid Username and Password To Become An Admin</marquee></h1>-->
<!-- <div class="navbar">
        <nav>
            <ul>
            <li><a href="http://iiitsonepat.ac.in/">Home</a></li>
            <li><a href="http://iiitsonepat.ac.in/home/about">About</a></li>
            <li><a href="http://iiitsonepat.ac.in/carrers">jobs</a></li> 
            <li><a href="http://iiitsonepat.ac.in/placements">Placement</a></li>
            <li><a href="http://iiitsonepat.ac.in/contact-us">Contact us</a></li>
            <div class="search">
            <input type="text" class="search" id="search" placeholder="type for search">
           </div> 
           </ul>
        </nav>
 </div> -->
    <div id="container">
    <form action="/prabhat/createaccount.php" method="POST">
    <hr>
    <center><div id="reg"><h2><u><i>Create New Account</i></u></h2></div></center>
    <center><div class="form-group">
    <input type="text" name="name" id="name"placeholder="Enter Your Name"class="form-control"  id="exampleInputPassword1">
    </div></center>
    <br>
    <center><div class="form-group">
    <input type="number" name="mobile" id="mobile"placeholder="Enter Your Mobile No:"class="form-control"  id="exampleInputPassword1">
    </div></center>
    <br>
    <center><div class="form-group">
    <input type="email" name="email" id="email"class="form-control"placeholder="Enter Your Valid Mail" >
    </div></center>
    <br>
    <center><div class="form-group">
    <input type="password" name="password" id="password" placeholder="Enter Your Password">
    </div></center>
    <br>
    <center><div class="form-group">
    <input type="password" name="confirm" id="confirm" placeholder="Confirm Password">
    </div><center>
    <br>
    <br><center><b><button type="submit" name="btn">Submit</b></button></center>
    <hr>
</form><br>
</div>
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="SONEPAT";
    $con=mysqli_connect($servername,$username,$password,$database);
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    if($confirm!=$password)
    {
        echo "<script>alert(`enter valid password`)</script>";
    }
    else
    {
        if(($name!=NULL)&&($email!=NULL)&&($password!=NULL)&&($mobile!=NULL)&&($confirm!=NULL))
        {
         $sql="INSERT INTO `account` (`NAME`, `MOBILE`, `E-MAIL`, `PASSWORD`, `CONFIRM`) VALUES ('$name','$mobile', '$email', '$password', '$confirm')";
        // echo "the error is".mysqli_error();
        $RESULT=mysqli_query($con,$sql);
        // echo "the error is".mysqli_query_error();
        if($RESULT)
         {
             echo "<script>alert(`successfully registered`)</script>";
         }
         else
         {
             echo "the error is".mysqli_error($con);
         }
        }
        else
        {
            echo"<script>alert(`Alert:Please fill it completely`)</script>".mysqli_error($con);
        }
    }
    
 ?>