<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>
    <script type="text/javascript">
      function toggleText()
      {
        style = window.getComputedStyle(document.getElementById('responsiveButton'));
        color = style.getPropertyValue('color');

        if(color == 'rgb(255, 255, 255)')
        {
          document.getElementById("responsiveButton").classList.remove('white');
          document.getElementById("responsiveButton").classList.add('blue');
        }
        else
        {
          document.getElementById("responsiveButton").classList.remove('blue');
          document.getElementById("responsiveButton").classList.add('white');
        }
      }		
    </script>

  </head>

  <body>
    <header>
      <center>
        <div><img src='../../media/logo.png' alt='Company Logo' height=75  />
        </div>
        <div>
          <h1>LUNADO</h1>
        </div>
      </center>
    </header>

    <nav role="full-horizontal">
      <div>
        <ul class ="nav">
          <li><a href="#ABOUT US">ABOUT US</a></li>
          <li><a href="#PRICES">PRICES</a></li>
          <li><a href="#NOW SHOWING">NOW SHOWING</a></li>
          <li><a href="#SYPNOSIS">SYPNOSIS</a></li>
        </ul>
      </div>
    </nav>

    <main>


      <article id='ABOUT US'>
        <div class="container">
          <div class="centered">ABOUT US</div>
        </div>
        <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <div class="parallax">


        </div>
      </article>

      <!-- One -->
      <section id="one" class="wrapper style1">
        <div class="inner">
          <article class="feature left">
            <span class="image"><img src='../../media/logo.png' alt="" /></span>
            <div class="content">
              <h2>Brand New Dolby System</h2>
              <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>

            </div>
          </article>
          <article class="feature right">
            <span class="image"><img src='../../media/atmos.jpg' alt="" /></span>
            <div class="content">
              <h2>New Chairs</h2>
              <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>

            </div>
          </article>
          <article class="feature left">
            <span class="image"><img src='../../media/seat.jpg' alt="" /></span>
            <div class="content">
              <h2>Something Something, other chair?</h2>
              <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>

            </div>
          </article>

          <article class="feature right">
            <span class="image"><img src='../../media/seat2.png' alt="" /></span>
            <div class="content">
              <h2>New Chairs</h2>
              <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>

            </div>
          </article>
        </div>
      </section>

      <!-- Three -->
      <section id="PRICES" class="wrapper style3 special">
        <div class="priceButtons">
          <input type="button" id="responsiveButton" onclick="toggleText()" value="Some text" class="blue">
          <input type="button" id="responsiveButton2" onclick="toggleText()" value="Some text" class="blue">
          <input type="button" id="responsiveButton3" onclick="toggleText()" value="Some text" class="blue">

        </div>
      </section>




      <section id="NOW SHOWING" class="flex-container">
        <div class="movieCard">
          <img src='../../media/website-under-construction.png' alt="Avengers Poster" class="movieCardImage">
          <h1 class="movieCardTitle">Avengers Endgame (M) </h1>
          <p class="movieCardText"> <br> Wednesday- 9:00PM<br><br> Thursday- 9:00PM<br><br> Friday- 9:00PM<br><br> Saturday-6:00PM<br><br> Sunday-6:00PM<br></p>
        </div>

        <div class="movieCard">
          <img src='../../media/website-under-construction.png' alt="Top End Wedding Poster" class="movieCardImage">
          <h1 class="movieCardTitle">Top End Wedding (M) </h1>
          <p class="movieCardText"> <br> Wednesday-9:00PM<br><br> Thursday-9:00PM<br><br> Friday- 9:00PM<br><br> Saturday-6:00PM<br><br> Sunday-6:00PM<br></p> 
        </div>
        <div class="movieCard">
          <img src='../../media/website-under-construction.png' alt="Dumbo Poster" class="movieCardImage">
          <h1 class="movieCardTitle">Dumbo (M) </h1>
          <p class="movieCardText"> <br> Wednesday-9:00PM<br><br> Thursday-9:00PM<br><br> Friday- 9:00PM<br><br> Saturday-6:00PM<br><br> Sunday-6:00PM<br></p> 
        </div>
        <div class="movieCard">
          <img src='../../media/website-under-construction.png' alt="Happy Prince Poster" class="movieCardImage">
          <h1 class="movieCardTitle">The Happy Prince (M) </h1>
          <p class="movieCardText"> <br> Wednesday-9:00PM<br><br> Thursday-9:00PM<br><br> Friday- 9:00PM<br><br> Saturday-6:00PM<br><br> Sunday-6:00PM<br></p> 
        </div>
      </section>

    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
        </script> Put your name(s), student number(s) and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
