<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="style_copy.css">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>User Dashboard</title>
</head>
<body>
    <!-- <div class="container">
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div> -->


















    <!-- ////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////// -->

    <div class="header">
      <nav id="navBar">
        <img src="./images/logo.png" class="logo" alt="logo" />
        <ul class="nav-links">
          <li><a href="./index.html" class="active">Popular Places</a></li>
          <li><a href="./listing.html">Travel Outside</a></li>
          <li><a href="./house.html">Online Packages</a></li>
        </ul>
        <!-- <a href="registration.php" class="register-btn">Log out</a> -->
        <i class="fa-solid fa-bars" onclick="togglebtn()"></i>
      </nav>

      <div class="container" id="main">
        <h1>Find Your Next Stay</h1>

        <div class="search-bar">
          <form>
            <div class="location-input">
              <label>Location</label>
              <input type="text" placeholder="Where are you going" />
            </div>
            <div class="check">
              <label>Check in</label>
              <input type="text" placeholder="Add Date" />
            </div>
            <div>
              <label>Check Out</label>
              <input type="text" placeholder="Add Date" />
            </div>
            <div>
              <label>Guest</label>
              <input type="text" placeholder="Add Guest" />
            </div>
            <button type="Submit">
              <img src="./images/search.png" alt="" />
            </button>
          </form>
        </div>
      </div>
    </div>

    <div class="container">
      <h2 class="sub-title">Exclusives</h2>
      <div class="exclusives">
        <div>
          <img src="./images/image-1.png" alt="" />
          <span>
            <h3>London</h3>
            <p>Starts @ $250</p>
          </span>
        </div>
        <div>
          <img src="./images/image-2.png" alt="" />
          <span>
            <h3>Switzerland</h3>
            <p>Starts @ $250</p>
          </span>
        </div>
        <div>
          <img src="./images/image-3.png" alt="" />
          <span>
            <h3>Australia</h3>
            <p>Starts @ $250</p>
          </span>
        </div>
        <div>
          <img src="./images/image-4.png" alt="" />
          <span>
            <h3>France</h3>
            <p>Starts @ $250</p>
          </span>
        </div>
        <div>
          <img src="./images/image-5.png" alt="" />
          <span>
            <h3>Amsterdam</h3>
            <p>Starts @ $250</p>
          </span>
        </div>
        <div>
          <img src="./images/image-6.png" alt="" />
          <span>
            <h3>Amsterdam</h3>
            <p>Starts @ $250</p>
          </span>
        </div>
        <div>
          <img src="./images/image-7.png" alt="" />
          <span>
            <h3>Amsterdam</h3>
            <p>Starts @ $250</p>
          </span>
        </div>
        <div>
          <img src="./images/image-8.png" alt="" />
          <span>
            <h3>Amsterdam</h3>
            <p>Starts @ $250</p>
          </span>
        </div>
        <div>
          <img src="./images/image-9.png" alt="" />
          <span>
            <h3>Amsterdam</h3>
            <p>Starts @ $250</p>
          </span>
        </div>
        <div>
          <img src="./images/image-10.png" alt="" />
          <span>
            <h3>Amsterdam</h3>
            <p>Starts @ $250</p>
          </span>
        </div>
      </div>

      <h2 class="sub-title">Trending Places</h2>
      <div class="trending">
        <div>
          <img src="./images/dubai.png" alt="" />
          <h3>Dubai</h3>
        </div>
        <div>
          <img src="./images/new-york.png" alt="" />
          <h3>New York</h3>
        </div>
        <div>
          <img src="./images/paris.png" alt="" />
          <h3>Paris</h3>
        </div>
        <div>
          <img src="./images/new-delhi.png" alt="" />
          <h3>New Delhi</h3>
        </div>
      </div>

      <div class="cta">
        <h3>Sharing <br />Is Earning Now</h3>
        <p>
          Great Opportunity to make money by <br />sharing your extra space.
        </p>
        <a href="#" class="cta-btn">Know more</a>
      </div>

      <h2 class="sub-title">Travellers Stories</h2>
      <div class="stories">
        <div>
          <img src="images/story-1.png" alt="" />
          <p>Popular European countries with a budget of just $10,000</p>
        </div>
        <div>
          <img src="images/story-2.png" alt="" />
          <p>Traveled more than 100 countries in less than a year</p>
        </div>
        <div>
          <img src="images/story-3.png" alt="" />
          <p>Best experience you get while traveling to Thailand</p>
        </div>
      </div>
      <a href="#" class="start-btn">Start making money</a>

      <div class="about-msg">
        <h2>About Staybnb</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint libero
          nemo voluptatibus ea tempore aliquid corrupti. Quasi necessitatibus
          eos iure aut dolorum ipsum sequi atque ipsam, dignissimos natus,
          accusantium quibusdam error, iste facilis magni hic sapiente labore
          sed rerum? Ab distinctio alias dolores atque officiis neque vitae
          nihil id hic quaerat, illum omnis, veniam assumenda, odit molestiae
          explicabo. Fugit, assumenda facere.
        </p>
      </div>

      <div>
        <a href="#" class="stt"></a>
      </div>

      <div class="footer">
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <hr />
        <p>Copyright &copy 2024, Shubham</p>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <script src="script.js"></script>



    
</body>
</html>