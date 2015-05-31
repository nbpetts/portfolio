<!doctype html>
<html>

<head>
    <?php include "includes/head.php" ?>
    <title>Oops! | Nathan Petts - UX designer</title>
</head>

<body>
    <?php include_once( "includes/googleAnalytics.php") ?>
    <?php include "includes/header.php" ?>

    <div class="container pageBackground">
<a id="content" name="content"></a> 
        
      <section class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
          <h1>Oops! Something went wrong.</h1>
          
        </div>
        
      
      </section>
      <section class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-1">
          <p><a href="contact.php">Maybe try again?</a></p>
          <p>If this is the second time you are seeing this, something might be broken. Send me a direct email: <a href="mailto:nbpetts@gmail.com">nbpetts at gmail.com</a>. Or, take a look at my portfolio:</p>
                  
        </div>
        <?php include "includes/portfolioButton.php" ?>
      </section>
      <section class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-1">
          <p>Or, check out my Résumé:</p>
        
        </div>
        <?php include "includes/resumeButton.php" ?>
      </section>

        <?php include "includes/footer.php" ?>
    </div>

</body>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js"></script>
<script src="js/my_app.js"></script>

</html>