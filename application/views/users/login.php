<!--!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php /*echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
    <h2>User Login</h2>
    <?php/*
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
    }
    */?>
    <form action="" method="post">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
            <?php /*echo form_error('email','<span class="help-block">','</span>');*/ ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?/*php echo form_error('password','<span class="help-block">','</span>'); */?>
        </div>
        <div class="form-group">
            <input type="submit" name="loginSubmit" class="btn-primary" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Don't have an account? <a href="<?php /*echo base_url(); */?>index.php/users/registration">Register here</a></p>
</div>
</body>
</html!-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Media Tech Dynamique || Connexion Page</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/connection.css">
    
  </head>


  <body>

    <?php
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div><br class="clear"><br class="clear">';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div><br class="clear"><br class="clear">';
        }
    ?>


    

    <div id="logo">
        <h1> <i>Connexion</i> </h1>
    </div>

    <section class="stark-login">

      <form  action="" method="post">
        <div id="fade-box">
          <input type="email" name="email" placeholder="Email" required>
          <?php echo form_error('email','<span class="help-block">','</span>');?>
          <input type="password" name="password" id="password" placeholder="password" required>
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
          <input type="submit" name="loginSubmit" value="Se Connecter" class="button">
        </div>
      </form>


      <div class="hexagons">
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <br>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <br>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <br>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <br>
      </div>
    </section>


    <div id="circle1">
        <div id="inner-circle1">
          <h2></h2>
        </div>
    </div>

    <ul>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>


    <br><br><br><br><br><br>

    <footer>
         <p class="footInfo">Envie d'un Compte? <a href="<?php echo base_url(); ?>index.php/users/registration">Inscrivez Vous Ici</a></p>
    </footer>
  </body>
</html>

