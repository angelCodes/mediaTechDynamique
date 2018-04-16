

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Media Tech || Videos</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css">
  </head>
  <style media="screen">
  body{
  background-color: black;
  height: 100%;
  }
  /* ScrollBar */
  ::-webkit-scrollbar{
		width: 8px;

	}
	::-webkit-scrollbar-thumb{
		border-radius: 10px;
		background-color: #00a4a2;
		box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	}
	::-webkit-scrollbar-track{
		border-radius: 10px;
		background-color: white;
		box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	}
  /*   Navigation */
  nav{
  background-color: #00a4a2;
  padding: 8px;
  height: 100px;
  }
  header{
  height: 150px;
  text-align: center;
  background-color: rgba(19, 35, 47, 0.9);
  padding-top: 10px;
  }
  header img{
  width: 150px;
  height: 120px;
  float: left;
  }
  .social{
    float: right;
  }
  a{
    color: #00a4a2;
  }

.modal{
  width: 80%;
  height: 100%;
}
#content{
  height: 400px;
}
.clear{
  clear: both;
}
  </style>
  <body>
    <header>
      <img src="<?php echo base_url(); ?>assets/images/lg.png" class="circle responsive-img" alt="Media Tech">
      <h2 class="white-text flow-text neon" data-text="L'actualité sur les nouveautés technologiques!">
			Bienvenue <?php echo $user['name']; ?>!! Savourez l'actualité
      </h2>
      <div class="user-info">
			
      </div>
    </header>
    <nav>
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo flow-text">
          Media Tech
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php"><i class="material-icons">home</i></a></li>
          <li><a href="Videos.php"><i class="material-icons">movie</i></a></li>
          <li><a href="<?php echo base_url(); ?>index.php/users/logout"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Déconnexion">lock</i></a></li>
        </ul>
      </div>
    </nav>
    <br class="clear">

    <section id="content" class="section scrollspy">
    <div class="row">
      <div class="col s12 m4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/eRCKYLjR7yw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="card-content">
            <span class="card-title activator">Top 10 Future Technology<i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Top 10 Future Technology<i class="material-icons right">close</i></span>
                <ol>
                  <li>Avatars (DARPA)</li>
                   <li>Self-Fitting Clothes</li>
                  <li>Universal Translators</li>
                   <li>Mind Controlled Appliances</li>
                   <li>Portable Healing Laser </li>
                   <li>Motor Neuroprosthetics </li>
                   <li>Permanent Artificial Organs </li>
                  <li>Personal Nanofactory</li>
                 <li>Crash-Proof Cars</li>
                  <li>unscreen Pill</li>
                </ol>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/vbNHCn2gHQ4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Top 5 Future Inventions<i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/8LVN7WVgx0c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Innovative Tech<i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/KNYN5T28FZc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Top 10 Future transportation <i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/NmzeDRyrarE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Future Display<i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/qIRjytgNuhM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">LG's Future Display<i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/hIEIGDsbKqY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Top 5 Smart Home<i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/OuX4tRA4USA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">7 Coolest Smart Home<i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/hIVE5FfAdkI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Top 5 Gadgets<i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<div class="fixed-action-btn">
  <a class="btn-floating btn-pulse pulse btn-large modal-trigger btn tooltipped" data-position="left" data-tooltip="FeedBack"  href="#Avis" style="background-color: #00a4a2;">
    <i class="large material-icons">comment</i>
  </a>
</div>

</i></a>

 <!-- Modal Structure -->
 <div id="Avis" class="modal" style="max-height: 100%; max-width: 100%;">
   <div class="modal-content">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScCK_4tUkDHDBB01CaJ8xZ1FXtKx7a1o83hmdO_P0DctahzGw/viewform?embedded=true" width="1000" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>   </div>
 </div>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
$('.modal').modal();
 $('.scrollspy').scrollSpy();
 $('.tooltipped').tooltip();
});
    </script>
  </body>
</html>
