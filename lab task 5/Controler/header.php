
	

<?php

if (empty($_SESSION['username'])) {?>
  <header>
	<div><center><a href='home.php'><img src="controler/Logo1.png"></a></center></div><br><br>
  <div class="main" id="home">
      <br />
     <nav class="navclass">
     
        <!-- <font face="sans" size="4"> -->
          <div><a style="text-decoration:none; color: white;"href="homepage.php">HOME</a></div>
         <div><a  style="text-decoration:none; color: white;"href="https://www.youtube.com/ajmayeenadilmusic">JOBS</a></div>
          <div><a  style="text-decoration:none; color: white;"href="JOBSEEKERweb.php">INFORMATION</a></div>
         <div> <a  style="text-decoration:none; color: white;"href="LOGIN.php">LOGIN</a></div>
          <div><a  style="text-decoration:none; color: white;"href="Registration form.php">REGISTRATION FORM</a></div>
          <div><a  style="text-decoration:none; color: white;"href="ContactUs.php">CONTACT US</a></div>
     


        <!-- </font> -->
       </nav>
      <br /><br /><br /> /><
      <h1 align="center">
        
        </font>
      </h1>
      <h3 align="center">
        
      </h3>
      <br />
      <h3 align="center">
      
      <a href="#">
       
      </a>
      </h3>


    </div>
    </header>

	
<?php }

else if(!empty($_SESSION['username'])){ ?>
  <header>
	<div><center><a href='home.php'><img src="controler/Logo1.png"></a></center></div><br><br>
  <div class="main" id="home">
      <br />
     <nav class="navclass">
     
        <!-- <font face="sans" size="4"> -->
          <div><a style="text-decoration:none; color: white;"href="homepage.php">HOME</a></div>
         <div><a  style="text-decoration:none; color: white;"href="https://www.youtube.com/ajmayeenadilmusic">JOBS</a></div>
          <div><a  style="text-decoration:none; color: white;"href="JOBSEEKERweb.php">INFORMATION</a></div>
          <div><a  style="text-decoration:none; color: white;"href="Registration form.php">REGISTRATION FORM</a></div>
          <div><a  style="text-decoration:none; color: white;"href="ContactUs.php">CONTACT US</a></div>
          <div><a  style="text-decoration:none; color: white;"href="Controler/logout.php">LOGOUT</a></div>


        <!-- </font> -->
       </nav>
      <br /><br /><br /> /><
      <h1 align="center">
        
        </font>
      </h1>
      <h3 align="center">
        
      </h3>
      <br />
      <h3 align="center">
      
      <a href="#">
       
      </a>
      </h3>


    </div>
    </header>
<?php
}
?>
	
