<?php 

include 'feedback.php';


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $contact = $_POST['contact'];
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO feedback (name, email, contact, comment)
      VALUES ('$name', '$email', '$contact','$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>alert('Comment added successfully.')</script>";
  } else {
    echo "<script>alert('Comment does not add.')</script>";
  }
}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
      <a class="navbar-brand" href="../homepage.php"><b>MOJO</b></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active form-inline my-2 my-lg-2">
            <a class="nav-link" href="../homepage.php"
              ><b>Home</b> <span class="sr-only">(current)</span></a
            >
          </li>
          <!--<li class="nav-item my-2 my-lg-2">
            <a class="nav-link" href="#">Hetroculture</a>
          </li> -->
          <li class="nav-item my-2 my-lg-2">
            <a class="nav-link" href="#about"><b>About</b></a>
          </li>
          <li class="nav-item my-2 my-lg-2">
            <a class="nav-link" href="#feedback"><b>Feedback</b></a>
          </li>
        </ul>
         <form  action="" method="post" target="_blank" class="form-inline my-2 my-lg-2" method="get">
          <input 
            class="form-control mr-sm-2"
            type="text"
            name="keywords"
            placeholder="Google search" 
            aria-label="Search" required="" 
          />
          <button name="keys_submit" 
            class="btn btn-outline-success bg-light my-2 my-sm-0"
            type="submit"
          >
            Search



            <?php 

              $base="";
              $search_URL="https://www.google.com/search?q=";
              if(isset($_POST['keys_submit'])){
                $keywords=$_POST['keywords'];
                header("location: ".$search_URL.$keywords.' '.$base);
              }


             ?>
          </button>
        </form>
      </div>
    </nav>
    <div id="demo" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
        <li data-target="#demo" data-slide-to="5"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="images/1.jpg"
            alt="agriculture"
            width="1100"
            height="500"
          />
          <div class="carousel-caption">
            <h3>Agriculture</h3>
            <p></p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="images/2.jpg" alt="Field" width="1100" height="500" />
          <div class="carousel-caption">
            <h3>Farming</h3>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/3.jpg" alt="" width="1100" height="500" />
          <div class="carousel-caption">
            <h3>Vegetable Farming</h3>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/4.jpg" alt="" width="1100" height="500" />
          <div class="carousel-caption">
            <h3>Water Rise</h3>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/5.jpg" alt="" width="1100" height="500" />
          <div class="carousel-caption">
            <h3>Sunflower</h3>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/6.jpg" alt="" width="1100" height="500" />
          <div class="carousel-caption">
            <h3></h3>
            <p></p>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Vegetable Farming Technique</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 col-md-6 col-12">
            <div class="inner">
              <img src="images/vegetable.jpg" class="img-fluid aboutimg" />
            </div>
          </div>
          <div class="col-lg-7 col-md-6 col-12">
            <h3 class="display-5">
              Concept of vegetable production in home gardens
            </h3>
            <p class="py-3">
              The objective of vegetable production in home garden is to produce
              vegetable to support daily intake for the family members
              throughout the year. In regards to this point, home garden shall
              not aim only at increasing the amount of vegetable for a single
              production, but also aim at constant and sustainable production
              throughout the year. For this reason, the following concepts
              should be applied.
            </p>
           <!-- <a href="index.html" class="btn btn-success">More</a> -->
            <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#more">More</button>
            <div id="more" class="collapse">
              <h4 class="py-3">Planting and harvesting times for garden vegetables</h4> 
                <p> 
                  <strong>Radishes</strong> —Several plantings, 7 to 10 days apart, are possible.
                  Radishes pass peak quality quickly, so several plantings are needed
                  to provide high quality radishes throughout the spring and early
                  summer. Radishes become spongy and make seed heads readily
                  with the onset of hot weather. Several fall plantings can be made
                  in August and September.<br><br>
                  <strong>Lettuce</strong> —Sow seeds in early spring. Lettuce flowers and turns
                   bitter with the onset of hot weather. Fall plantings can be made in August<br><br>
                   <strong>Onions</strong> —Sow seeds as soon as the ground can be worked 
                   in spring for mature (storage) onions. Plant sets and transplants in spring.<br><br>
                   <strong>Peas</strong> —Sow seeds in early spring as soon as the soil can be
                   worked. Plants stop bearing when hot weather arrives. A fall planting may be made about August 1 to 10.<br><br>
                   <strong>Spinach</strong> —Sow seeds in early to mid-April. Leaves develop
                   bitter flavor and plants make seed heads with the onset of hot
                   weather. A fall crop may be planted about August 10.<br><br>
                   <strong>Cabbages</strong> —Set out transplants any time from early April tomid-June. Early-maturing types may be planted in early August for fall crop<br><br>
                   <strong>Broccoli and cauliflower</strong> —Set out transplants in early
                     to mid-April. Both are sensitive to hot weather so need to be 
                     encouraged to head as early as possible.<br><br>
                   <strong>Collards and kale</strong> —Seed at the same time as lettuce and
                   other early spring crops. Direct-seed in early July for a fall crop.<br><br>
                   <strong>Carrots</strong> —Seed early or any time during spring and summer.
                   Carrots seeded as late as August 1 may produce full sized roots by fall.<br><br>
                   <strong>Beets and Swiss chard</strong>—Plant any time from spring to midsummer. Last practical planting date for fall crop is August 1.<br><br>
                   <strong>Potatoes </strong>—Best planted in early to mid-April; a long growing
                     season is needed to produce full-sized tubers.<br><br>
                   <strong>Turnips </strong>—Sow seeds in April and again in August or early September for a fall crop.<br><br>
                   <strong>Snap beans</strong> —Plant any time after May 5. Most varieties
                   will keep producing if they are kept picked. Last practical date for planting is August 1.<br><br>
                   <strong>Lima beans</strong> —Plant from May 20 to June 30 to produce a crop by average frost date<br><br>
                   <strong>Sweet corn</strong> —Plant when soil temperature reaches 60°F or
                     any time thereafter. Last practical date for planting an early variety is July 1.<br><br>
                   <strong>Tomatoes</strong> —Plant seedlings in mid-May. Last practical date
                     for planting tomatoes is June 20.<br><br>
                   <strong>Peppers and eggplants</strong> —Plant seedlings in mid-May.
                     Last practical date for planting peppers and eggplants is June 20.<br><br>
                   <strong>Summer squashes</strong> —Seed mid-May. If harvested every otherday, plants will keep producing until frost. 
                   Last practical date forseeding is July 20<br><br>
                   <strong>Cucumbers</strong> —Seed mid-May. Production is continuous if kept Cucumbers —Seed mid-May. Production is continuous if kept.<br><br>
                   <strong>Muskmelons</strong> —Seed mid-May. There are varietal differences in the length of time from planting to harvest. Last practical date
                   to sow seeds of early maturing varieties is June 20.<br><br>
                   <strong>Watermelons</strong> —Seed mid-May. There are varietal differences
                     in the length of time from planting to harvest. Last practical date
                     to sow seeds of an early maturing variety is June 20.<br><br>
                  </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="my-5">
      <div class="py-5">
        <h2 class="text-center"><b>About</b></h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card shadow">
              <div class="inner">
               <img class="card-img-top" src="images/soil.jpg" alt="Card image">
              </div>
               <div class="card-body">
                 <h4 class="card-title"><b>Soil</b></h4>
                 <p class="card-text"><b>Soils</b> are complex mixtures of minerals, water, air, organic matter, 
                   and countless organisms that are the decaying remains of once-living things.
                   It forms at the surface of land – it is the “skin of the earth.”
                   Soil is capable of supporting plant life and is vital to life on earth.</p>
                 <a href="soil.php" class="btn btn-success">See More</a>
                </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card shadow">
              <div class="inner">
                <img class="card-img-top" src="images/village.jpg" alt="Card image">
              </div>
              <div class="card-body">
                <h4 class="card-title"><b>Climate</b></h4>
                <p class="card-text"><b>Climate</b> is the average weather in a given area over a longer period of time. 
                  A description of a climate includes information on, e.g. the average temperature in different seasons, rainfall, and sunshine. 
                  Also a description of the (chance of) extremes is often included.</p>
                <a href="climate.php" class="btn btn-success">See More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card shadow">
              <div class="inner">
                <img class="card-img-top" src="images/harvest.jpg" alt="Card image">
              </div>
              <div class="card-body">
                <h4 class="card-title text-color-green"><b>Cultivation and Harvesting</b></h4>
                <p class="card-text"><b>Cultivation</b> is the act of caring for or raising plants. 
                  Your desire to grow your own fruits and vegetables in the backyard means you'll be engaged in some heavy cultivation.
                <b>Harvesting</b> is the process of removal of entire plants or economic parts after maturity. The economic product may be grain, seed leaf, root or entire plant. 
                </p>
                <a href="cultivate.php" class="btn btn-success">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center"><b>Gallary</b></h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12 image ">
          <div class="inner">
             <img src="images/field.jpg"  class="img-fluid pb-4" alt="Field image">
          </div>           
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="inner">
            <img src="images/seed.jpg"  class="img-fluid pb-4" alt="seed image">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="inner">
              <img src="images/rice1.jpg"  class="img-fluid pb-4" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="inner">
              <img src="images/green.jpg"  class="img-fluid pb-3" alt="Greeny image">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="inner">
              <img src="images/rice.jpg"  class="img-fluid pb-3" alt="rice image">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="inner">
              <img src="images/oiltree.jpg"  class="img-fluid pb-3" alt="">
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <button type="button" class="btn btn-lg btn-success" data-toggle="collapse" data-target="#more">View More</button>
              </div>
            </div>
          </div>
            <div id="more" class="collapse">
      <div class="container-fluid py-3">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="inner">
              <img src="images/cultivate.jpg"  class="img-fluid pb-4" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="inner">
              <img src="images/veg.jpg"  class="img-fluid pb-3" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="inner">
              <img src="images/harv.jpg"  class="img-fluid pb-3" alt="">
            </div>
          </div>
          <div>
        </div>
      </div>
    </section>
    <section id="feedback" class="my-5">
      <div class="py-5">
        <h2 class="text-center"><b>Feedback Form</b></h2>
      </div>
      <div class="w-50 m-auto">
        <form action="" method="POST">
          <div class="form-group">
            <label><b>Name</b></label>
            <input type="text" name="name" id="name" autocomplete="on"  placeholder="Full Name" required class="form-control">
          </div>
        
          <div class="form-group">
            <label><b>Email</b></label>
            <input type="email" name="email" id="email" autocomplete="off" required placeholder="example@gmail.com" class="form-control">
          </div>
        
          <div class="form-group">
            <label><b>Contact Number</b></label>
            <input type="text" name="contact" id="contact" autocomplete="off" required placeholder="+977" class="form-control">
          </div>
       
          <div class="form-group">
            <label><b>Comment</b></label>
            <textarea class="form-control row-5" name="comment" required="" placeholder="Comments">
            </textarea>
          </div>
            <button type="submit" name="submit" class="btn btn-success ">Submit</button>
        </form>
       
      </div>
    </section>
    <footer>
      <p class="p-3 bg-success text-white text-center"></p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
