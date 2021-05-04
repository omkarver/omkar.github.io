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
            <a class="nav-link" href="home.php#about"><b>About</b></a>
          </li>
          <li class="nav-item my-2 my-lg-2">
            <a class="nav-link" href="home.php#feedback"><b>Feedback</b></a>
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
          <img src="images/5.jpg" alt="New York" width="1100" height="500" />
          <div class="carousel-caption">
            <h3>Sunflower</h3>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/6.jpg" alt="New York" width="1100" height="500" />
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
      <div class="container-fluid">

          <div class="col-lg-12 col-md-6 col-12">
            <h3 class="display-5">
            Soil Types
            </h3>
            <p class="py-3">
              <b>Soils</b> are complex mixtures of minerals, water, air, organic matter, 
                   and countless organisms that are the decaying remains of once-living things.
                   It forms at the surface of land – it is the “skin of the earth.”
                   Soil is capable of supporting plant life and is vital to life on earth.</p>
            </p>
            <p>Soil is a natural resource that can be categorised into different soil types, each with distinct 
            characteristics that provide growing benefits and limitations.
            Identifying the type of soil you require for a project is paramount to support the healthy growth of plant life.
            Soil can be categorised into sand, clay, silt, peat, chalk and loam types of soil based on the dominating size of the particles within a soil.
            <br>Soil performs four major functions:<br>
            1. It provides habitat for fungi, bacteria, insects, burrowing mammals and other organisms.<br>
            2. It recycles raw materials and filters water.<br>
            3. It provides the foundation for engineering projects such as buildings, roads and bridges, and <br>
            4. It is a medium for plant growth. This text focuses on this last function.<br>
            </p>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-1 py-3">
                      <div class="inner">
                        <img src="images/Sandy-Soil.jpg" class="img-fluid aboutimg" />
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-12 py-3">
                        <h4 class="display-6 ">
                            Sandy soil
                        </h4>
                        <p class="py-1">
                            <b>Sandy Soil</b> is light, warm, dry and tend to be acidic and low in nutrients. 
                            Sandy soils are often known as light soils due to their high proportion of sand and little clay (clay weighs more than sand).
                            These soils have quick water drainage and are easy to work with. They are quicker to warm up in spring than clay soils but tend to dry out in summer and suffer from low nutrients that are washed away by rain.
                            The addition of organic matter can help give plants an additional boost of nutrients by improving the nutrient and water holding capacity of the soil.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                   <div class="col-lg-8 col-md-6 col-12 py-3">
                        <h4 class="display-6 ">
                            Chalk soil
                        </h4>
                        <p class="py-1">
                            <b>Chalk soil</b> can be either light or heavy but always highly alkaline due to the calcium carbonate or lime within its structure.
                            As these soils are alkaline they will not support the growth of ericaceous plants that require acidic soils to grow.
                            If a chalky soil shows signs of visible white lumps then they can’t be acidified and gardeners should be resigned to only choose plants that prefer an alkaline soil.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 py-3">
                      <div class="inner">
                        <img src="images/Chalk-Soil.jpg" class="img-fluid aboutimg" />
                      </div>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 py-3">
                      <div class="inner">
                        <img src="images/Clay-Soil.jpg" class="img-fluid aboutimg" />
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-12 py-3">
                        <h4 class="display-6 ">
                            Clay soil
                        </h4>
                        <p class="py-1">
                            <b>Clay Soil</b> is a heavy soil type that benefits from high nutrients. Clay soils remain wet and cold in winter and dry out in summer.
                            These soils are made of over 25 percent clay, and because of the spaces found between clay particles, clay soils hold a high amount of water.
                            Because these soils drain slowly and take longer to warm up in summer, combined with drying out and cracking in summer, they can often test gardeners.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                   <div class="col-lg-8 col-md-6 col-12 py-3">
                        <h4 class="display-6 ">
                            Silt soil
                        </h4>
                        <p class="py-1">
                            <b>Silt Soil</b> is a light and moisture retentive soil type with a high fertility rating.
                            As silt soils compromise of medium sized particles they are well drained and hold moisture well.
                            As the particles are fine, they can be easily compacted and are prone to washing away with rain.
                            By adding organic matter, the silt particles can be bound into more stable clumps.
                        </p>
                    </div>                    
                    <div class="col-lg-4 col-md-6 col-12 py-3">
                      <div class="inner">
                        <img src="images/Silt-Soil.jpg" class="img-fluid aboutimg" />
                      </div>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 py-3">
                      <div class="inner">
                        <img src="images/Peat-Soil.jpg" class="img-fluid aboutimg" />
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-12 py-3">
                        <h4 class="display-6 ">
                            Peat soil
                        </h4>
                        <p class="py-1">
                            <b>Sandy Soil</b> is light, warm, dry and tend to be acidic and low in nutrients. 
                            Sandy soils are often known as light soils due to their high proportion of sand and little clay (clay weighs more than sand).
                            These soils have quick water drainage and are easy to work with. They are quicker to warm up in spring than clay soils but tend to dry out in summer and suffer from low nutrients that are washed away by rain.
                            The addition of organic matter can help give plants an additional boost of nutrients by improving the nutrient and water holding capacity of the soil.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12 py-3">
                        <h4 class="display-6 ">
                            Loam soil
                        </h4>
                        <p class="py-1">
                            <b>Loam soil</b> is a mixture of sand, silt and clay that are combined to avoid the negative effects of each type.
                            These soils are fertile, easy to work with and provide good drainage. Depending on their predominant composition they can be either sandy or clay loam.
                            As the soils are a perfect balance of soil particles, they are considered to be a gardeners best friend, but still benefit from topping up with additional organic matter.
                        </p>
                    </div>                    
                    <div class="col-lg-4 col-md-6 col-12 py-3">
                      <div class="inner">
                        <img src="images/Loam-Soil.jpg" class="img-fluid aboutimg" />
                      </div>
                    </div>

                </div>
            </div>
          </div>
      </div>
     </section>
    <section class="my-5">
      <div class="container-fluid">

          <div class="col-lg-12 col-md-6 col-12">
            <h3 class="display-5">
                What does soil do for plants?
            </h3>
            <p>
                Soil supports plant growth by providing:<br>
                <br>
                1. <strong>Anchorage:</strong> root systems extend outward and/or downward through soil, thereby stabilizing plants.<br>
                2. <strong>Oxygen:</strong> the spaces among soil particles contain air that provides oxygen, which living cells (including root cells) use to break down sugars and release the energy needed to live and grow.<br>
                3. <strong>Water:</strong> the spaces among soil particles also contain water, which moves upward through plants. This water cools plants as it evaporates off the leaves and other tissues; carries essential nutrients into plants; helps maintain cell size so that plants don’t wilt; and serves as a raw material for photosynthesis, the process by which plants capture light energy and store it in sugars for later use.<br>
                4. <strong>Temperature modification:</strong> soil insulates roots from drastic fluctuations in temperature. This is especially important during excessively hot or cold times of year.<br>
                5. <strong>Nutrients:</strong> soil supplies nutrients, and also holds the nutrients that we add in the form of fertilizer.<br>
            </p>         
          </div>
      </div>
     </section>
    <section class="my-5">
      <div class="container-fluid">

          <div class="col-lg-12 col-md-6 col-12">
            <h3 class="display-5">
               Physical properties of soil
            </h3>
            <p>
                <strong>Texture:</strong> Soil is composed of both minerals (derived from the rock under the soil or transported through wind or water) and organic matter (from decomposing plants and animals). The mineral portion of soil is identified by its texture. Texture refers to the relative amounts of sand, silt and clay in the soil. 
                These three terms refer only to particle size, not to the type of mineral that comprises them. Sand is familiar to most of us, and is the largest textural soil size. Sand grains can be seen with the naked eye or with a hand lens. Sand provides excellent aeration and drainage. It tills easily and warms up rapidly in spring. 
                However, it erodes easily, and has a low capacity for holding water and nutrients. Clay particles are so small that they can only be seen through an electron microscope. 
                Clay soils contain low amounts of air, and water drains slowly through them. Clay is difficult to till, and warms up slowly in spring. But, it tends to erode less quickly than sand, and it has a high capacity for holding water and nutrients. Silt is sized between sand and clay. Individual silt particles can be seen through a lower-power microscope. 
                It has intermediate characteristics compared to sand and clay.
                Most soils contain all three particle sizes (sand, silt, clay). Loam is a term that is often used generally to refer to soils that are a mixture of sand, silt and clay. Most of our topsoils are loams. However, “loam” can vary from a rather equal mixture of the three textural sizes, to a mixture dominated by sand or silt or clay. 
                As a gardener, you should inspect loam before purchasing it, because these variations affect management practices.<br><br>
                <strong>Structure:</strong> Sand is often found as individual particles in a soil, but silt and clay are almost always clumped into larger units called aggregates. The manner of this aggregation defines a soil’s structure. 
                Soil structure is described by terms such as blocky, platy, prismatic and angular.
                Productive topsoils often have a granular soil structure. The size and shape of aggregates is influenced by mineral type, particle size, wetting and drying, freeze/thaw cycles, and root and animal activity. Decomposed organic matter, 
                plant sugars excreted from roots, waste products of soil microbes, and added soil conditioners all act to cement particles into aggregates. However, aggregates can break apart from tilling, compaction, and loss of organic matter in the soil. 
                Soil structure is a very dynamic process. Good soil structure increases the pore space (see below) that supports root penetration, water availability and aeration.<br><br>
                <strong>Pore space:</strong> Soil particles rarely fit together tightly; they are separated by spaces called pores. Pores are filled with water and/or air. Just after a heavy rainfall or irrigation event, pore spaces are nearly 100% filled with water.
                 As time goes by, the water passes through the soil due to gravity, or evaporates into the air, or is used by plant roots, and more of the pore spaces are filled by air. Particles of clay fit tightly, and have very little pore space to hold air and water. 
                 On the other hand, sand on a beach has such a large amount of large pores that it drains too quickly to grow most plants in.
                 Pore space generally occupies 30-60% of total soil volume. A well-structured soil has both large pores (macropores) and tiny pores (micropores); this provides a balance of the air and water that plants need. 
                 Macropores provide for good drainage, and micropores hold water that plants can access. This helps explain how you can achieve a “well-drained but moist soil”.
                 Organic matter (OM) is previously living material. On the soil surface, there is usually rather un-decomposed OM known as litter or duff (or, mulch in a landscape). This surface layer reduces 
                 the impact of raindrops on the soil structure, prevents erosion, and eventually breaks down to supply nutrients that leach into the soil with rainfall or irrigation. In the soil, OM decomposes further until it becomes humus, a stable and highly decomposed residue. 
                 Humus is an important nutrient source for plants, and it is important in aggregating soil particles.
                 OM is always in the process of decomposing, until it becomes humus. OM levels are reduced through cropping and can be replenished by adding compost or manure, or crop residues, or green manure (crops such as buckwheat,
                  clover or ryegrass that are grown as cover crops and then tilled into the soil). Soil OM can be conserved with reduced tillage practices, such as no-till. OM improves water retention, making it a good addition to sandy soil. OM is also added to clay or silt soils to increase aggregation and thereby improve drainage. 
                  OM provides nutrients as it decomposes, buffers the pH of the soil solution (see below) against rapid chemical changes, and improves soils’ cation exchange capacity (see below).<br><br>
                 <strong>Good horticultural soil:</strong> Most soils are dominated by mineral particles; some are dominated by organic matter. Some soils have a high percentage by volume of pore space, 
                 while others have little pore space. Your soil might vary from one part of your land to another. Ideally, a “good horticultural soil” contains 50% solid material (mostly mineral soil plus 5-10% organic matter) and 50% pore space. At any given time, that pore space is occupied by both air and water. 
                 You can assess your soil by irrigating heavily, then allowing it to drain for a day. After a day of drainage, the pore space should contain about 50% water and 50% air. If the soil is very dry after a day of drainage, it is likely dominated by sand, and you could amend it over time by adding OM. If the soil remains very wet, it is likely dominated by clay or it is not well aggregated; you could amend such a soil over time by adding OM to support aggregation.
            </p>         
          </div>
      </div>
     </section>
    <section class="my-5">
      <div class="container-fluid">

          <div class="col-lg-12 col-md-6 col-12">
            <h3 class="display-5">
                Chemical properties of soil
            </h3>
            <p>
                Soil chemical activity is related to particle size, because chemical reactions take place on particle surfaces. Small particles have much more surface area than large particles. Small soil particles play a big role in two chemistry-related processes: managing soil acidity (pH), and supporting the soil’s ability to hold nutrients (CEC).
                <br>First, it’s important to know that fertilizers are salts. When salts dissolve into the soil solution, they separate into a cation (a positively charged ion) and an anion (a negatively charged ion). For example, when we dissolve table salt (sodium chloride) in water, it separates into positively charged sodium and negatively charged chloride ions. 
                When we add sodium nitrate fertilizer to the soil, it dissolves into the soil solution as sodium cations and nitrate anions.
                Tiny particles (humus and clay) are very important for holding plant nutrients in the soil. <br>Clay and humus particles have a negative surface charge. Cations are positively charged. 
                Because opposites attract, the clay and humus hold cations, and prevent them from being leached out of the soil by water movement. Negatively charged anions remain dissolved in the soil solution, and are very susceptible to leaching downward.
                <br>Nitrogen is an interesting nutrient, because one nitrogen fertilizer might be positively charged ammonium that is held by soil particles, while another nitrogen fertilizer might contain negatively charged nitrates that remain dissolved in the soil solution. 
                This explains why nitrates, which are anions, leach readily out of our topsoil and sometimes into our water supply. 
                It also explains why “slow-release fertilizers” usually contain ammonium, which can be held by the soil particles and gradually converted to the nitrate form that most plants use readily.<br><br>
                <strong>Cation exchange capacity (CEC)</strong> is an expression of the soil’s ability to hold and exchange cations. Ions are constantly exchanged among the soil solution, CEC sites on clay and humus particles, and plant roots. This is not a random process, but is dependent on electron charge. 
                Clay and humus have high CECs because they are tiny particles with very large surface-to-volume ratio, with many negative sites that can attract cations. Sand has very low CEC because sand particles are large, with low surface-to-volume ratio and hence fewer negative sites. A gardener can add higher rates of fertilizer less frequently when gardening in a 
                soil with a high level of clay or humus, compared to a sandy soil, because cations (potassium, calcium, magnesium and others) are held by soil particles. Because a sandy soil cannot hold the same amount of cations, fertilizing them more frequently with smaller amounts of fertilizer is a better option.<br><br>
                <strong>pH:</strong> pH is a description of the soil’s acid/alkaline reaction. The pH scale ranges from 0 (very acid) to 14 (very alkaline). Soils generally range from pH 4.0 to pH 8.0. Northeastern forest soils can be very acid (pH 3.5), while Western soils can be very alkaline (pH 9). pH is important 
                because it regulates the availability of individual nutrients in the soil solution.
                The pH scale is logarithmic; each unit is 10 times more acid or alkaline than the next. For example, a soil with pH 4.0 is ten times more acid than a soil with pH 5.0, and 
                100 times more acid than a soil with pH 6.0. A soil’s pH depends on the parent rock (limestone is alkaline, granite is acidic), rainfall, plant materials, and other factors. Individual plants perform best within specific pH ranges. It is just as important to manage pH as fertility. Most garden plants perform well in a soil with pH 6.0 – 7.0. Acid-loving plants such as rhododendron and blueberry perform well in a soil with pH below 5.0.
            </p>         
          </div>
      </div>
     </section>   
    <section class="my-5">
      <div class="container-fluid">

          <div class="col-lg-12 col-md-6 col-12">
            <h3 class="display-5">
                Living organisms in soil
            </h3>
            <p>
                Many organisms inhabit soil: bacteria, fungi, algae, invertebrates (insects, nematodes, slugs, earthworms) and 
                vertebrates (moles, mice, gophers). These organisms play many physical and chemical roles that affect plants. For example, their secretions
                 help dissolve minerals, making them available to plants; some organisms convert inorganic substances into other forms that
                  are more or less available to plants; organisms add OM to the soil; organisms help decompose OM; many organisms aerate the soil. Some living organisms in the soil cause diseases, some feed on plant tissue, and many compete with plants for nutrients and water.<br><br>
                <strong>Rhizosphere:</strong> The very thin zone of soil just around roots is called the rhizosphere. 
                This zone is different from the rest of the soil, and it sometimes supports specific and unique organisms. For example, some fungi live together with roots, to their mutual benefit;
                 these mycorrhizal relationships provide the fungi with a place to live, and the fungi assist in the plant’s water and nutrient uptake. Similarly, some nitrogen-fixing bacteria grow together with some plants, including many legumes (members of the bean family). The bacteria convert atmospheric nitrogen into forms that can be used by their host plants. When the host plant dies, the nitrogen 
                 compounds released during decomposition are available to the next crop. Any mutually beneficial relationship between two dissimilar organisms is called a symbiosis.
            </p>         
          </div>
      </div>
     </section> 
    <section class="my-5">
      <div class="container-fluid">

          <div class="col-lg-12 col-md-6 col-12">
            <h3 class="display-5">
                Soil water
            </h3>
            <p>
               Water is an amazing substance. It is called the universal solvent because it dissolves more substances than any other liquid. 
               It is a renewable natural resource. It exists in nature as a solid, liquid and gas. Its molecules cohere (stick together) and 
               adhere (stick to) to other surfaces; this accounts for its ability to reach the top of tall trees. It has a high latent heat, 
               which means that it releases a large burst of energy when it passes from solid to liquid and from liquid to gas. And, when it 
               passes from gas to liquid and from liquid to solid, it absorbs a large burst of energy. Gardeners reap the benefits all of these 
               attributes of water.<br><br>
               <strong>Water-holding capacity:</strong> A soil’s ability to hold water is called its water-holding capacity. Clayey soils have high 
               water-holding capacity, while sandy soils have low water-holding capacity. As a soil’s pore space is filled with water by heavy rainfall 
               or irrigation, the soil becomes saturated. Then, water gradually drains downward, and the amount of water remaining in the soil against the 
               force of gravity is called the soil’s field capacity. Clayey soils drain much more slowly than sandy soils. Loamy soils reach their field 
               capacity 2-3 days after a heavy rainfall or irrigation. If no more water is added, the soil continues to dry out; plants take up some of the water, 
               and some water moves upward in the soil and evaporates from the surface. Eventually, a soil may dry enough to reach its permanent wilting percentage, 
               the point at which a plant wilts so severely that it cannot recover. At this point, the available water (water that remains available to the plant) is 
               gone, and the only water that remains in the soil is so tightly bound to soil particles that plants cannot access it.
            </p>         
          </div>
      </div>
     </section> 
    <section class="my-5">
      <div class="container-fluid">

          <div class="col-lg-12 col-md-6 col-12">
            <h3 class="display-5">
                Soil management
            </h3>
            <p>
                Good soil management is critical for crop productivity. Good management must include consideration of maintaining the soil’s integrity over time. Poor management can lead to erosion, loss of fertility, deterioration of soil structure, and poor crop yields.<br><br>
                <strong>Tilling:</strong> Mechanical manipulation of soil loosens the soil, and promotes aeration, porosity and water-holding capacity. It allows a gardener to incorporate soil amendments such as OM and lime. On the other hand, tilling tends to decrease aggregation, causing compaction (compacted soils are dominated by few, small pores). It can take years to overcome the damage caused by overtilling.<br><br>
                <strong>Managing pH:</strong> Soil pH regulates the availability of plant nutrients. pH should be managed only in response to soil test results. Soil pH can be lowered by adding some kinds of organic matter or sulfur or sulfates; this is not often needed in Maine soils. Soil pH can be raised by adding lime or some types of fertilizer or wood ash. It is difficult to overcome the negative effects of applying excessive amounts of these materials. Test first!<br><br>
                <strong>Mulching:</strong> Mulch is a material that covers the soil. Organic mulches such as compost, aged manure or bark chips decompose to supply OM and nutrients in the long term. Inorganic mulches such as stone or plastic sheet materials have little effect on nutrient levels and do not contribute OM to the soil. All mulches affect soil temperature by insulating or transferring heat, and all mulches help soils retain moisture. Mulches may also help reduce weed growth, prevent erosion and affect insect/disease presence.<br><br>
                <strong>Managing OM levels:</strong> In natural areas, plants and animals die, decompose and replenish OM in the soil. Each year, plant leaves deciduate and rot (compost) in place, and their nutrients and OM are added to the soil through rainfall and the freeze/thaw cycle that creates cracks in the soil. On the other hand, in developed landscapes where this natural cycle is interrupted, gardeners must implement processes to replenish soil OM. Leaves from deciduous trees can be left in place to decompose; plant debris can be composted and incorporated back into gardens as OM; and plant residue, green manures and animal manures can be incorporated directly into the soil. Some tillage is generally required to incorporate this material into the soil. Adding huge amounts of OM at one time can cause nutrient problems, especially if the material is not fully composted. Adding small amounts of OM periodically can contribute to longterm soil fertility, support soil microflora, contribute to good soil structure, and support the soil’s ability to hold both water and air.
            </p>         
          </div>
      </div>
     </section>   
    <section class="my-5">
      <div class="container-fluid">

          <div class="col-lg-12 col-md-6 col-12">
            <h3 class="display-5">
                Plant nutrients
            </h3>
            <p>
                Three elements, carbon, oxygen and hydrogen, are essential to plant growth and are supplied by air and water. The other essential elements are referred to as plant nutrients, and are provided by the soil, or are added as fertilizers, and enter plants almost exclusively through the roots. These plant nutrients are divided into two groups. Those required by plants in large amounts are called macronutrients; these are nitrogen, phosphorus, potassium, calcium, magnesium and sulfur. Plant micronutrients, needed in tiny amounts include iron, chlorine, zinc, molybdenum, boron, manganese, copper, sodium and cobalt. Macronutrients and micronutrients are all critical to normal plant growth and development; they are simply needed in different amounts.<br><br>
                Organic fertilizer sources include compost, aged manure, rock phosphate, soybean meal, and fish meal. Organic fertilizer can also be “grown” by planting a legume cover crop, which is a crop that is grown with the intention of tilling it into the soil, at which point it is referred to as a green manure. Cover crops also add OM to the soil. Inorganic fertilizer products are also widely available, either as single-nutrient or multi-nutrient products.<br><br>
                Fertilizers are labeled as slow-release or soluble. Slow-release fertilizers provide nutrients over a period of time, as they break down or decompose. Soluble fertilizers are fast-release, and many are dissolved into water and then irrigated onto crops.<br><br>
                Nutrients can be provided by many products and practices. Price, availability, ease of use, needed equipment, time and philosophy should be considered when selecting the best fertilizer and application method for any situation. Occasionally, in severe nutrient deficiency situations, some micronutrients are sprayed onto the foliage of crops, but most are applied to the soil and taken up by roots. In hydroponic production systems, nutrients are dissolved in water and washed over the exposed roots of plants.<br><br>
                Most soils have at least some residual nutrients. Only a soil test can assess this. Fertilizing without the results of a soil test leads to a waste of money and product, and can exacerbate an existing nutrient imbalance. In addition, sometimes nutrients are present in sufficient supply but are unavailable because of too high or too low pH. A soil test can reveal this, and a soil lab professional or crop consultant can recommend practices to resolve such problems.
            </p>         
          </div>
      </div>
     </section> 
    <section class="my-5">
      <div class="container-fluid">

          <div class="col-lg-12 col-md-6 col-12">
            <h3 class="display-5">
                Soil and fertilizer management tips for home gardeners
            </h3>
            <p>
                Some gardeners do not say that they garden, but rather that they work the soil. This reveals an understanding that good soil conditions are essential to support productive plant growth. Here are a few gardening tips related to soil management:<br><br>
                To amend a heavy (clayey) soil, add OM, not sand. As OM decomposes to humus, it “glues” particles together into aggregates, and improves drainage.<br><br>
                To amend a light (sandy) soil, add OM, not clay. OM increases sand’s ability to hold water and nutrients.<br><br>
                Most ornamental landscape plants (woody trees and shrubs, and herbaceous perennials and annuals) are best fertilized in spring. Fertilizing late in the season can lead to a late-season flush of growth that does not adequately harden off before winter.<br><br>
                Most houseplants are best fertilized at the rate recommended on the product label in spring and summer, and at half that rate in fall and winter.<br><br>
                Fertilize vegetable gardens by banding (place fertilizer alongside the crop row, 2” away and 2” deep in the soil) and/or by incorporating fertilizer into the soil in spring. Side-dressing supplemental nitrogen fertilizer next to growing plants later in the season may be necessary. Manage the pH of garden soil to ensure good nutrient availability. Rotate vegetable crops with cover crops to maintain good levels of organic matter, which helps the soil retain nutrients for plant use.<br><br>
                When fertilizing a lawn, determine the level of growth desired. If a low-maintenance lawn is desirable, no fertilizer may be needed. Slow-release fertilizers are preferred over soluble fast-release formulations. Apply a maximum of 2 pounds nitrogen per 1000 square feet per year on established lawns; in most cases, apply half at spring green-up and half in fall (before September 15). Avoid fertilizing in midsummer. Leave an unfertilized buffer strip of at least 25 feet adjacent to lakes, streams, rivers, bays, vernal pools and wetlands. Avoid using phosphorus fertilizer if a soil test reveals phosphorus is not necessary, as phosphorus can cause freshwater quality problems. Reduce the amount of fertilizer needed by 1/3 to 1/2 each year by mowing with a mulching mower. Avoid weed-and-feed products, which do not allow the option to adjust the fertilize rate.<br><br>
                Avoid compacting soils. Walk on paths, keep garden carts on paths, park in the driveway rather than on the lawn, and avoid walking on one path across a lawn when it is frozen. Never walk on saturated soil. Wait until the garden dries out in spring before planting.<br><br>
                Avoid bare soil in your vegetable garden. When a crop is harvested, replant the area with another crop or plant a cover crop. Bare ground is prone to erosion and surface compaction by raindrops.<br><br>
                To assess whether a soil is adequately drained for many landscape plants, dig a hole 6” wide and 12” deep. Fill it to the top with water and let the water drain. Refill the hole with water, and time how long it takes to drain completely. If it drains within 3 hours, the soil is likely sandy. If it drains in 4-6 hours, drainage is adequate for a wide variety of plants. If some water remains after 8 hours, the soil is likely high in clay content and the site may retain too much moisture for some plants to thrive.
            </p>         
          </div>
      </div>
     </section>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
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
