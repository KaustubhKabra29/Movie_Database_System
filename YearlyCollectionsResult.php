<!DOCTYPE html>
<html>
  <head>
    <title>Search Database</title>
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
        <li> <a href="searchByActor.php" >Search Shows of Actor</a> </li> 
        <li> <a href="searchByDire.php" >Search Shows of Director</a> </li> 
        <li> <a href="getActors.php" >Search Actors of Movies</a> </li> 
        <li> <a href="MovieRatings.php" >Search Rating By Movie</a> </li> 
        <li> <a href="YearlyCollections.php">Search Highest grossing Movie</a> </li> 
        <li> <a href="yearly.php" >Search Movie by year</a> </li> 

        </ul>
        <p class="navbar-text navbar-right hidden-xs">DBMS Project <br> By:-Akash,Kaustubh,Sunit</li></p>
      </div><!-- /.navbar-collapse -->
    </nav>

    <main class="container">

    <?php
      require "query-engine.php";
      require "display-engine.php";

      //creating the query
     //$Query = query($_POST["return-type"], $_POST["param-type"], $_POST["param-value"]);
      //$Query = "SELECT * FROM person WHERE first_name = '" . $_POST["param-value"] . "';" ;
      $Query = "SELECT * FROM Box_Office_Collections t1 JOIN Shows t2 ON t1.Movie_Id = t2.Show_Id JOIN Movies t3 ON t1.Movie_Id = t3.Show_Id WHERE t3.Year = '".$_POST["ycoll"]."' ORDER BY Overall_Worldwide_Collections DESC;";

	       
      //$Query = "SELECT * FROM Movies;";
      $Result_Type="ycoll";
      display_query($Query, $Result_Type);
    ?> 

    </main>
   
  </body>
</html>


