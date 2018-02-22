<!DOCTYPE HTML>

<?php

    // Start the session
    session_start();

    // Defines username and password. Retrieve however you like,
    
    $username2 = "manager2@solutions-stores.ca";
    $password2 = "Manager2";
    $username3 = "manager3@solutions-stores.ca";
    $password3 = "Manager3";
    $username5 = "manager5@solutions-stores.ca";
    $password5 = "Manager5";
    $username6 = "manager6@solutions-stores.ca";
    $password6 = "Manager6";
    $username7 = "manager7@solutions-stores.ca";
    $password7 = "Manager7";
    $username8 = "manager8@solutions-stores.ca";
    $password8 = "Manager8";
    $username9 = "manager9@solutions-stores.ca";
    $password9 = "Manager9";
    $username10 = "manager10@solutions-stores.ca";
    $password10 = "Manager10";
    $username11 = "manager11@solutions-stores.ca";
    $password11 = "Manager11";
    $username12 = "manager12@solutions-stores.ca";
    $password12 = "Manager12";
    $username13 = "manager13@solutions-stores.ca";
    $password13 = "Manager13";
    $username14 = "manager14@solutions-stores.ca";
    $password14 = "Manager14";
    
  

    // Error message
    $error = "";

    // Checks to see if the user is already logged in. If so, refirect to correct page.
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
      
         if ($_POST['username'] == $username2) {
             $error = "success";
            header('Location: store2.php');
        } 

        
         if ($_POST['username'] == $username3) {
             $error = "success";
            header('Location: store3.php');
        } 

        
         if ($_POST['username'] == $username5) {
             $error = "success";
            header('Location: store5.php');
        } 

        
         if ($_POST['username'] == $username6) {
             $error = "success";
            header('Location: store6.php');
        } 

        
         if ($_POST['username'] == $username7) {
             $error = "success";
            header('Location: store7.php');
        } 
        
         if ($_POST['username'] == $username8) {
             $error = "success";
            header('Location: store8.php');
        } 

        
         if ($_POST['username'] == $username9) {
             $error = "success";
            header('Location: store9.php');
        } 

        
         if ($_POST['username'] == $username10) {
             $error = "success";
            header('Location: store10.php');
        } 

        
         if ($_POST['username'] == $username11) {
             $error = "success";
            header('Location: store11.php');
        } 

        
         if ($_POST['username'] == $username12) {
             $error = "success";
            header('Location: store12.php');
        } 

        
         if ($_POST['username'] == $username13) {
             $error = "success";
            header('Location: store13.php');
        } 

        if ($_POST['username'] == $username14) {
             $error = "success";
            header('Location: store14.php');
        } 

        
         
       
    } 
        
    // Checks to see if the username and password have been entered.
    // If so and are equal to the username and password defined above, log them in.

    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username2 && $_POST['password'] == $password2) {
            $_SESSION['loggedIn'] = true;
            header('Location: store2.php');
        } 
         else if ($_POST['username'] == $username3 && $_POST['password'] == $password3) {
            $_SESSION['loggedIn'] = true;
            header('Location: store3.php');
        } 

         else if ($_POST['username'] == $username5 && $_POST['password'] == $password5) {
            $_SESSION['loggedIn'] = true;
            header('Location: store5.php');
        } 

         else if ($_POST['username'] == $username6 && $_POST['password'] == $password6) {
            $_SESSION['loggedIn'] = true;
            header('Location: store6.php');
        } 

         else if ($_POST['username'] == $username7 && $_POST['password'] == $password7) {
            $_SESSION['loggedIn'] = true;
            header('Location: store7.php');
        } 

         else if ($_POST['username'] == $username8 && $_POST['password'] == $password8) {
            $_SESSION['loggedIn'] = true;
            header('Location: store8.php');
        } 

         else if ($_POST['username'] == $username9 && $_POST['password'] == $password9) {
            $_SESSION['loggedIn'] = true;
            header('Location: store9.php');
        } 

         else if ($_POST['username'] == $username10 && $_POST['password'] == $password10) {
            $_SESSION['loggedIn'] = true;
            header('Location: store10.php');
        } 

         else if ($_POST['username'] == $username11 && $_POST['password'] == $password11) {
            $_SESSION['loggedIn'] = true;
            header('Location: store11.php');
        } 

         else if ($_POST['username'] == $username12 && $_POST['password'] == $password12) {
            $_SESSION['loggedIn'] = true;
            header('Location: store12.php');
        } 

         else if ($_POST['username'] == $username13 && $_POST['password'] == $password13) {
            $_SESSION['loggedIn'] = true;
            header('Location: store13.php');
        } 

         else if ($_POST['username'] == $username14 && $_POST['password'] == $password14) {
            $_SESSION['loggedIn'] = true;
            header('Location: store14.php');
        } 

                 
        else {
            $_SESSION['loggedIn'] = false;
            $error = "Invalid username and password!"; 
        }
    }
?>

<html style="background: purple; color: white;font-family: sans-serif;">
    <head>
        <title>Login Page</title>
    </head>
    
    <body style="margin-top: -70px;">
        <!-- Output error message if any -->
       
        
        <!-- form for login -->
        <form method="post" action="index.php" style="margin: 0 auto; width: 238px; margin-top: 180px; padding: 70px;border: 10px solid white; border-radius: 10px;">
        <img src="img/logo.png" class="img-responsive" style="padding-bottom: 35px; margin-left: -24px; margin-top: -8px;">
            <label for="username" style="font-size: 25px;">Username:</label><br/><br/>
            <input type="text" name="username" id="username" style="padding-right: 70px;padding-top: 15px;"><br/><br/>
            <label for="password" style="font-size: 25px;">Password:</label><br/><br/>
            <input type="password" name="password" id="password" style="padding-right: 70px;padding-top: 15px;"><br/><br/><br/>
            <input type="submit" value="Log In!" style="margin-top: 10px;padding: 16px 96px 15px 102px;background: #333;color: white; cursor: pointer;">
            
            <div style="color: white;padding-top: 10px;"><?php echo $error; ?></div>
        </form>
    </body>
</html>