<?php
    // Start the session
    ob_start();
    session_start();

    // Check to see if actually logged in. If not, redirect to login page
    if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
        header("Location: index.php");
    }
?>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
body{
    
    background: purple;
}
    

</style>

<a class="navbar-brand page-scroll" href="http://www.solutions-stores.ca/"><img src="img/logo.png" class="img-responsive"></a>
<form method="post" action="logout.php">
    <input type="submit" value="Logout" style="float: right;margin-top: 10px;padding: 16px 96px 15px 102px;background: #333;color: white;">
</form>
<header>
        <div class="container">
            <div class="row" style="margin-top: 250px;">
<h1 class="text-center" style="color: white;">STORE 5</h1>

  <div class="col-md-4">
                    <div class="thumbnail" style="background: transparent !important; border: 2px solid white; color: white;">
                        <a href="">
          <img src="img/signs.png" alt="Nature" style="width:50%; padding-top: 20px;">
          <div class="caption">
            <p style="color: white;text-align: center;">4 X 6</p>
          </div>
        </a>
                    </div>
                </div> 


                <div class="col-md-4">
                    <div class="thumbnail" style="background: transparent !important; border: 2px solid white; color: white;">
                        <a href="">
          <img src="img/signs.png" alt="Nature" style="width:50%; padding-top: 20px;">
          <div class="caption">
            <p style="color: white;text-align: center;">8 X 11</p>
          </div>
        </a>
                    </div>
                </div>

            </div>
        </div>
    </header>
 <footer>
        <div class="container">
            <p style="color: white;">&copy; 2017 SOLUTION STORES. All Rights Reserved.</p>
            
        </div>
    </footer>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>