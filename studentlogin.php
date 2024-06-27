<?php 
    
    include "connection.php";
    include "navbar.php";

?>

<section style="height: 600px ;width: auto ; background-image: url(images/bgilogin.png);">
  <div class="log_img">
   <br>
    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Welcome to</h1>
        <h1 style="text-align: center; font-size: 25px;">User Login</h1><br>
        <form  name="login" action="" method="POST">
        
        <div class="login">
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="btn-primary" type="submit" name="submit" value="Login" style="color: rgb(240, 246, 232); width: 70px; height: 30px"> 
        </div>
      
      <p style="color: white; padding-left: 15px;">
        <br><br>
        <a style="color:white;" href="update_password.php">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        New to this website?<a style="color: white;" href="registration.php">Sign Up</a>
      </p>
     </form>
    </div>
  </div>


<?php 
   if(isset($_POST['submit']))
   {
    $count=0;
    $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password = '$_POST[password]';");
    $count=mysqli_num_rows($res);
    if($count==0)
    {
      ?>
            
            <script type="text/javascript">
              alert("The username and password doesn't match.");
            </script> 
          
        <div class="alert alert-danger" style="width: 600px; position:float ; margin-left: 450px; background-color: #de1313; color: white">
          <strong>The username and password doesn't match</strong>
        </div>    
      <?php
    }
    else
    {
      $_SESSION['login_user'] = $_POST['username'];

      ?>
        <script type="text/javascript">
          window.location="books.php"
        </script>
      <?php
    }
  }
?>
</section>
    <footer style="height: 120px;">
            <p1>Shakil khan <br>ID:42220100067 <br>📧Shakilkhanfv@gmail.com <br>📞01640532045 <br> </p1>

            <a  style="color: burlywood;" href="https://www.facebook.com/shakil2045/" >Facebook🆔</a>
     
   </footer>
  </body>
</html>

