<?php
  session_start();
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Welcome to Library
    </title>

<link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <style type="text/css">
      section
      {
        margin-top: -22px;
      }
    </style> 
</head>

 <body>
      
      <header>
      
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
              <div class="navbar-header">
                <a  style="color: blanchedalmond;" class="navbar-brand active">Welcome to Library</a>
              </div>

              <?php

              if(isset($_SESSION['login_user']))
            {
                ?>
                    <ul class="nav navbar-nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
                <li><a href="">
                    <div style="color: white">
                      <?php
                        echo "User  :".$_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
           </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="studentlogin.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>

               
              </ul>
          </div>
        </nav>
        <?php
              }
            
              else
               {
                  ?>

              <ul class="nav navbar-nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
              </ul>
                   <ul class="nav navbar-nav navbar-right">
                <li><a href="studentlogin.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
              </ul>
          
        </nav>
    
        <?php
        }

        ?>
        </div>

       <section> 
            <div class ="indexbox">
              <h2 style="padding-left: 650px; font-size:x-large; color:azure; font-style:oblique;">📚Have a Good Day🌼
              <h2 style="text-align: center;color: #61f0d1;font:caption;">Service</h2>
              <h2 style="text-align: center; color:whitesmoke;background-image: linear-gradient(to right,transparent, #171715 ,#031b27,transparent);font:status-bar;font-style: italic; font-size:large;"> Open at : 08:00am <br>  Close at : 18:00pm </h2> 
             </div>
       </section> 
       <footer style="height: 120px;">
            <p1>Shakil khan <br>ID:42220100067 <br>📧Shakilkhanfv@gmail.com <br>📞01640532045 <br> </p1>

            <a  style="color: burlywood;" href="https://www.facebook.com/shakil2045/" >Facebook🆔</a>
     
   </footer>

</body>
</html>