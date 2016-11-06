<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Sonic Guidance - Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <?php include('./navbar.php');?>
  <div class="section">
    <div class="container">
    <h4 class="center"> It is too difficult to navigate as a blind person</h4>
    <h6 class="center">There are currently 246 million visually impaired individuals globally who have difficulty navigating their environment according to WHO. While many with low vision can be coured, healthcare availablity and costs are frequent issues.</h6>
      <h2 class="center">Problems Faced By
      The Visually Impaired</h2>
      <div class="row">
        <div class="col s4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Navigation</span>
              <p>Canes are not only cumbersome they also carry some amount of social stigma, often reducing inviduals to nothing more than a label of "blind person". Instead of being treated as a person who cannot see, they're treated as if they're mentally impaired. </p>
            </div>
            <div class="card-action">
              <a href="http://www.cs.cmu.edu/~jbigham/pubs/pdfs/2013/visualchallenges.pdf">Source</a>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Cost of Treatment</span>
              <p>Existing solutions such as surgery may be extremely expensive for the patient and are not guaranteed to work for everyone.</p>
            </div>
            <div class="card-action">
              <a href="https://youtu.be/8pBhbYPnrec">Source</a>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Independence</span>
              <p>Individuals with visual impairment cannot operate well on their own and require fairly stable environments to properly navigate. This means navigation within cities is often difficult or impossible</p>
            </div>
            <div class="card-action">
              <a href="https://www.quora.com/What-problems-do-blind-people-face-when-living-life">Source</a>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <h2 class="center">Solution Requirements</h2>
      <div class="row">
        <div class="col s4">
          <div class="icon-block">
             <h2 class="center light-blue-text"><i class="material-icons">settings_input_antenna</i></h2>
            <h5 class="center">Versatile</h5>
            <p class="light">Most importantly this device needs to allow those who are visually impaired to access areas they previously could not without assistance.</p>
          </div>
        </div>

        <div class="col s4">
          <div class="icon-block">
             <h2 class="center light-blue-text"><i class="material-icons">thumb_up</i></h2>
            <h5 class="center">Affordable</h5>
            <p class="light">The average household income for a blind individual is $15,000 less than the national average in the US. This puts many just above the poverty line making affordability a must. Globally, low vision overwhelmingly effects developing countries.</p>
          </div>
        </div>

        <div class="col s4">
          <div class="icon-block">
             <h2 class="center light-blue-text"><i class="material-icons">track_changes</i></h2>
            <h5 class="center">Intuitive</h5>
            <p class="light">The solution needs to be intuitive in function for anyone who uses this product.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include('./footer.php');?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
