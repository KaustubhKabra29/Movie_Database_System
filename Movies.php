<!DOCTYPE html>
<html>
  <head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-2.0.3.min.js" defer></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js" defer></script>
  </head>
  <body style="background:#B19CD9";>
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Home</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
	  <li><a href="persons.php">View Persons</a></li>
          <li><a href="actors.php">View Actors</a></li>
          <li><a href="Directors.php">View Directors</a></li>
          <li><a href="Movies.php">View Movies</a></li>
          <li><a href="tvshows.php">View TV Shows</a></li>
	  <li><a href="DirCumAct.php">Actors cum Directors</a></li>
	  <li><a href="review.php">View Reviews</a></li>
	  	
	  

        </ul>
        <p class="navbar-text navbar-right hidden-xs">DBMS Project <br> By:-Akash,Kaustubh,Sunit</li></p>
      </div><!-- /.navbar-collapse -->
    </nav>



    <main class="container">

    <?php
      require "query-engine.php";
      require "display-engine.php";

      $Query = " SELECT * FROM Movies t1 JOIN Shows t2 ON t1.Show_ID = t2.Show_Id;";
      $Result_Type="movdetails";
      display_query($Query, $Result_Type);
    ?> 

    </main>
   
  </body>
</html>
