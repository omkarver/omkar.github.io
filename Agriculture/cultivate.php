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
      <a class="navbar-brand" href="home.php"><b>MOJO</b></a>
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
            <a class="nav-link" href="home.php"
              ><b>Home</b> <span class="sr-only">(current)</span></a
            >
          </li>
          <!--<li class="nav-item my-2 my-lg-2">
            <a class="nav-link" href="#">Hetroculture</a>
          </li> -->
          <li class="nav-item my-2 my-lg-2">
            <a
              class="nav-link"
              href="home.php#about"
              ><b>About</b></a
            >
          </li>
          <li class="nav-item my-2 my-lg-2">
            <a
              class="nav-link"
              href="home.php#feedback"
              ><b>Feedback</b></a
            >
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
        <h2 class="text-center">Cultivation</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="inner">
             <img src="images/cult-rice.jpg" class="img-fluid aboutimg" />
            </div>
          </div>
          <div class="col-lg-8 col-md-6 col-12">
            <h3 class="display-5">
              Cultivation of Rice in India: Conditions, Methods and Production
            </h3>
            <p class="py-3">
              Rice is the most important food crop of India covering about
              one-fourth of the total cropped area and providing food to about
              half of the Indian population.<br /><br />
              This is the staple food of the people living in the eastern and
              the southern parts of the country, particularly in the areas
              having over 150 cm annual rainfall. There are about 10,000
              varieties of rice in the world out of which about 4,000 are grown
              in India.<br /><br />
              Rice is life for thousands of millions of people. In Asia alone,
              more than 2,000 million people obtain 60 to 70 per cent of their
              calories from rice and its products. Recognising the importance of
              this crop, the United Nations General Assembly declared 2004 as
              the “International Year of Rice” (IYR).<br /><br />
              The theme of IYR—“Rice is life” reflects the importance of rice as
              a primary food source, and is drawn from an understanding that
              rice-based systems are essential for food security, poverty
              alleviation and improved livelihood.<br /><br />
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-6 col-12">
            <h4 class="display-5">
              <b>Conditions of Growth:</b>
            </h4>
            <p class="py-3">
              Rice is grown under varying conditions in India from 8° to 25° N
              latitude and from sea level to about 2,500 metre altitude. It is a
              tropical plant and requires high heat and high humidity for its
              successful growth. The temperature should be fairly high at mean
              monthly of 24°C. It should be 20°- 22°C at the time of sowing,
              23°-25°C during growth and 25°-30°C at the harvesting time. The
              average annual rainfall required by rice is 150 cm.<br /><br />
              It is the dominant crop in areas of over 200 cm annual rainfall
              and is still an important crop in areas of 100-200 cm rainfall.
              The 100 cm isohyet forms the limit of rice in rainfed areas. In
              areas receiving less than 100 cm annual rainfall, rice can be
              grown with the help of irrigation, as is done in Punjab, Haryana
              and western U.P. About 40 per cent of rice crop in India is raised
              under irrigation.<br /><br />
              However, it is the temporal distribution of rainfall, rather than
              the total amount of annual rainfall which is more decisive. The
              rainfall should be fairly distributed throughout the year and no
              month should have less than 12 cm of rainfall. Lesser amount of
              rainfall is required as the harvesting time approaches.
              <br /><br />
              The fields must be flooded under 10-12 cm deep water at the time
              of sowing and during early stages of growth. Therefore, the fields
              must be level and have low mud walls to retain water. This
              peculiar requirement of rice makes it primarily a crop of plain
              areas. Rice grown in well watered lowland plain areas is called
              wet or lowland rice. <br /><br />
              In hilly areas, the hill slopes are cut into terraces for the
              cultivation of rice. Such a cultivation in which the hill slopes
              are cut into terraces is called terraced cultivation. The supply
              of water to the hill terraces is not as much as in the plain areas
              and the rice grown in hilly areas is called dry or upland rice.<br /><br />
              Rice can be grown on a variety of soils including silts, loams and
              gravels and can tolerate acidic as well as alkaline soils.
              However, deep fertile clayey or loamy soils which can be easily
              puddled into mud and develop cracks on drying are considered ideal
              for raising this crop. <br /><br />
              Such soil requirements make it dominantly a crop of river valleys,
              flood plains, deltas and coastal plains and a dominant crop there.
              High-level loams and lighter soils can be used for quick maturing
              varieties of rice. Black lava soil is also useful for rice
              cultivation. <br /><br />
              Rice culture is not much suited to mechanisation and is called
              ‘hoe-culture’. Most of the work in preparing the seed-bed, in
              broadcasting seeds, or in transplantation of plants from nurseries
              to the fields, in harvesting and in winnowing operations is done
              by human hand. Thus it is a labour intensive cultivation and
              requires large supply of cheap labour for its successful
              cultivation. <br /><br />
              It is, therefore, primarily grown in areas of high population
              density which provide abundant labour and at the same time, offer
              ready market for its consumption. In most rice producing states,
              labour is locally available but in Punjab and Haryana, rice
              cultivation mainly depends upon the migrant labourers from Bihar
              and eastern U.P.<br /><br />
              To sum up it can be said that rice needs plenty of heat, plenty of
              rain, plenty of alluvium and plenty of labour to provide plenty of
              food for plenty of people. There is no other food crop which is so
              plentiful as rice in India.<br /><br />
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 col-md-6 col-12">
            <h3 class="display-5">
              <b>Methods of Rice Cultivation</b>
            </h3>
            <p class="py-3">
              Following methods of rice cultivation are practised in India.<br />
              <strong>1. Broadcasting method:</strong> <br />Seeds are sown
              broadcast by hand. This method is practised in those areas which
              are comparatively dry and less fertile and do not have much labour
              to work in the fields. It is the easiest method requiring minimum
              input but its yields are also minimum. <br /><br />
              <strong>2. Drilling method:</strong> <br />Ploughing of land and
              sowing of seeds is done by two persons. This method is mostly
              confined to peninsular India.<br /><br />
              <strong>3. Transplantation method:</strong><br />
              This method is practised in areas of fertile soil, abundant
              rainfall and plentiful supply of labour. To begin with, seeds are
              sown in nursery and seedlings are prepared. After 4-5 weeks the
              seedlings are uprooted and planted in the field which has already
              been prepared for the purpose. The entire process is done by hand.
              It is, therefore, a very difficult method and requires heavy
              inputs. But at the same time it gives some of the highest
              yields.<br /><br />

            </p>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="inner">
             <img src="images/cultivate.jpg" class="img-fluid aboutimg" />
            </div>
          </div>          
        </div>
      </div>
    </section>
    <section class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="inner">
              <img src="images/table.jpg" class="img-fluid aboutimg" />
            </div>
            <p><b></b>Table 1. Rice Cropping Seasons in India:</b></p>
          </div>
          <div class="col-lg-8 col-md-6 col-12">
            <h3 class="display-5">
              <b>Rice Cropping Seasons:</b>
            </h3>
            <p class="py-3">
              Rice is grown almost throughout the year in hot and humid regions of eastern and southern parts of India where two to three crops in a year are not uncommon. But in the northern and hilly parts of the country, the winters are too cold for rice cultivation and only one crop is grown in those areas. 
              Table 1. gives the period of sowing and harvesting the rice crop.<br><br>
            </p>
          </div>
        </div>
      </div>
    </section>
    </section>
    <section class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <h3 class="display-5">
              <b>Production:</b>
            </h3>
            <p class="py-3">
              India is the second largest producer and consumer of rice in the world after China and accounts for 21 per cent of the world’s total rice production. Table 24.2 gives the trends in production of rice for selected years. A look at this table 
              shows that there has been considerable increase in production, area and yield of rice in India.<br><br>
              In a span of 53 years from 1950-51 to 2003-04, the production, area and yield have increased by about four times, one and a half times and three times respectively. It is interesting to note that the rate of increase in production is much higher than the rate of increase in area under rice cultivation. 
              This is due to the increase in yields as a result of better inputs and farm practices.<br><br>
              Thus, there has been a modest gain in extent of cultivated area but a substantial gain in yield and production. 
              Increased irrigation facilities in drier areas, reclamation of waterlogged soils and introduction of 
              new high- yielding strains crops (particularly in Punjab, Haryana and Tamil Nadu) made this possible.<br><br>
              There was a record production of 93.3 million tonnes in 2001-02. Yield also reached at the highest level of 2,077 kg/hectare. 
              But imprecedented drought conditions in 2002-03 resulted in sharp decline in production, area and yield of rice in India. However, a modest recovery was made in 2003-04.<br><br>
              In spite of the spectacular progress, our yield of 2,051 kg per hectare (2003-04) is much lower compared to 3,600 kg in China, 4,770 kg in America, 6,246 kg in Japan and 6,556 kg in Korea. This means that there is still vast scope for increasing production. 
              This will have to be done by increasing yields because scope for increasing area under rice crop is negligibly small.<br><br>

            </p>
          </div> 
          <div class="col-lg-6 col-md-6 col-12">
              <img src="images/table2.jpg" class="img-fluid aboutimg" />                  
          </div>
        </div>
      </div>
    </section>    
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <footer>
      <p class="p-3 bg-success text-white text-center"></p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
