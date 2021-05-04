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
          <li class="nav-item my-2 my-lg-2" >
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
        <h2 class="text-center">
          Climate change and its Impact on Agriculture
        </h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="inner">
              <img src="images/plant.jpg" class="img-fluid aboutimg" />
            </div>
          </div>
          <div class="col-lg-8 col-md-6 col-12">
            <h4 class="display-5">
              Climate change and its Impact on Agriculture
            </h4>
            <p class="py-3">
              Climate change and variability are concerns of human being. The
              recurrent droughts and floods threaten seriously the livelihood of
              billions of people who depend on land for most of their needs. The
              global economy is adversely being influenced very frequently due
              to extreme events such as droughts and floods, cold and heat
              waves, forest fires, landslips etc. The natural calamities like
              earthquakes, tsunamis and volcanic eruptions, though not related
              to weather disasters, may change chemical composition of the
              atmosphere. It will, in turn, lead to weather related disasters.
              Increase in aerosols (atmospheric pollutants) due to emission of
              greenhouse gases such as Carbon Dioxide due to burning of fossil
              fuels, chlorofluorocarbons (CFCs), hydrochlorofluorocarbons
              (HCFCs), hydrofluorocarbons (HFCs), perfluorocarbons (PFCs) etc.,
              Ozone depletion and UV-B filtered radiation, eruption of
              volcanoes, the “human hand” in deforestation in the form of forest
              fires and loss of wet lands are causal factors for weather
              extremes. The loss of forest cover, which normally intercepts
              rainfall and allows it to be absorbed by the soil, causes
              precipitation to reach across the land eroding top soil and causes
              floods and droughts. Paradoxically, lack of trees also exacerbates
              drought in dry years by making the soil dry more quickly. Among
              the greenhouse gases, CO 2 is the predominant gas leading to
              global warming as it traps long wave radiation and emits it back
              to the earth surface. The global warming is nothing but heating of
              surface atmosphere due to emission of greenhouse gases, thereby
              increasing global atmospheric temperature over a long period of
              time. Such changes in surface air temperature and consequent
              adverse impact on rainfall over a long period of time are known as
              climate change. If these parameters show year-to-year variations
              or cyclic trends, it is known as climate variability.<br /><br />
              However, the official definition by the United Nations Framework
              Convention on Climate Change (UNFCCC) is that climate change is
              the change that can be attributed directly or indirectly to human
              activity that alters the composition of the global atmosphere and
              which is in addition to natural climate variability observed over
              comparable time periods. However, scientists often use the term
              for any change in the climate, whether arising naturally or from
              human causes. In particular, the Intergovernmental Panel on
              Climate Change (IPCC) defines climate change as a change in the
              state of the climate that can be identified by changes in the mean
              and 1/ or the variability of its properties, and that persists for
              an extended period, typically decades or longer.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 col-md-6 col-12">
            <h4 class="display-5">Weather and climate:</h4>
            <p class="py-3">
              <b>Weather</b> is the set of meteorological conditions such as
              wind, rain, snow, sunshine, temperature, etc. at a particular time
              and place. By contrast, the term climate describes the overall
              long-term characteristics of the weather experienced at a place.
              The ecosystems, agriculture, livelihoods and settlements of a
              region are very dependent on its climate. The climate, therefore,
              can be thought of as a long-term summary of weather conditions,
              taking account of the average conditions as well as the
              variability of these conditions. The fluctuations that occur from
              year to year, and the statistics of extreme conditions such as
              severe storms or unusually hot seasons are part of the climatic
              variability.<br /><br />
              The Earth‘s climate has varied considerably in the past, as shown
              by the geological evidence of ice ages and sea level changes, and
              by the records of human history over many hundreds of years. The
              causes of past changes are not always clear but are generally
              known to be related to changes in ocean currents, solar activity,
              volcanic eruptions and other natural factors. The difference now
              is that global temperatures have risen unusually rapidly over the
              last few decades. There is strong evidence of increase in average
              global air and ocean temperatures, widespread melting of snow and
              ice, and rising of average global sea levels. The IPCC Fourth
              Assessment Report concludes that the global warming is
              unequivocal. Atmosphere and ocean temperatures are higher than
              they have been at any other time during at least the past five
              centuries, and probably for more than a millennium. Scientists
              have long known that the atmosphere‘s greenhouse gases act as a
              blanket, which traps incoming solar energy and keeps the Earth‘s
              surface warmer than it otherwise would be, and that an increase in
              atmospheric greenhouse gases would lead to additional warming.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="inner">
              <img src="images/Tornado.jpg" class="img-fluid aboutimg" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-6 col-12">
            <h4 class="display-5">
              Important Weather Extremes and their Impact at Global Level
            </h4>
            <p class="py-3">
              The year 1998 was the warmest and declared as the weather-related
              disaster year. It caused hurricane havoc in Central America and
              floods in China, India and Bangladesh. Canada and New England
              suffered heavily due to ice storm in January while Turkey,
              Argentina and Paraguay suffered with floods in June 1998. In
              contrast, huge crop losses were noticed in Maharashtra (India) due
              to un-seasonal and poor distribution of rainfall during 1997-98.
              The 1997/1998 El Nino event (The El Nino is nothing but warming of
              Pacific), the strongest of the last century, affected 110 million
              people and costed the global economy nearly US$ 100 billion.<br /><br />
              The year 2003 was the year of heat and cold waves across the
              world. The European Union (EU) suffered to a large extent due to
              heat wave that occurred in summer 2003. In India Uttar Pradesh,
              Bihar, West Bengal, Orissa and Andhra Pradesh are the States that
              experienced summer heat waves. When the EU suffered heat wave
              during the summer in 2003, India experienced severe cold wave from
              December 2002 to January 2003. Some parts of Jammu, Punjab,
              Haryana, Himachal Pradesh, Bihar, Uttar Pradesh and the North
              Eastern States experienced unprecedented cold wave. The crop yield
              loss varied between 10 and 100% in the case of horticultural crops
              and seasonal crops. The fruit size and quality were also adversely
              affected in horticultural crops. However, temperate fruits like
              apple, perch, plum and cherry gave higher yield due to extreme
              chilling. The damage was more in low-lying areas where cold air
              settled and remained for a longer time on the ground (Samra et
              al., 2004).<br /><br />
              High temperature in March 2004 adversely affected crops like
              wheat, apple, mustard, rapeseed, linseed, potato, vegetables, pea
              and tea across the State of Himachal Pradesh in India. The yield
              loss was estimated between 20% and 60% depending upon the crop.
              Wheat and potato harvest was advanced by 15-20 days and the
              flowering of apple was early by 15 days. The optimum temperature
              for fruit blossom and fruit set is 24 0 C in the case of apple
              while it experienced above 26 0 C for 17 days. The entire region
              recorded between 2.1 and 7.9 0 C higher maximum temperature
              against the normal across the State of Himachal Pradesh in March
              2004 (Prasad and Rana, 2006). A decline of 39% in annual cocoa
              yield was noticed in 2004 when compared to that of 2003 due to
              rise in maximum temperature of the order of 1 to 3 0 C from 14 th
              January to 16 th March in Central part of Kerala, India. Such
              trend was noticed whenever summer temperature shot up by 2 to 3 0
              C when compared to that of normal maximum temperature of 33 to
              36.5 0 C.<br /><br />
              Untimely rains and hailstorms destroyed wheat crop of 15,000
              hectares (Ha.) over UP, Haryana and Punjab in Rabi season 2007 in
              India. In contrast, heavy snowfall over Kashmir valley was
              recorded in 2007 due to western disturbances. Similar was the case
              during monsoon 2007, causing floods across several continents
              (Hurricane Dean in August in Mexico) including India and
              Bangladesh. Heavy rains again in September in Andhra Pradesh,
              Karnataka and Kerala led to floods and thus the year 2007 was
              declared as the flood year in India. A huge crop loss was noticed
              in several states of the Country due to floods in kharif , 2007.
              Similar was the case in Algeria, Uganda, Sudan, Ethiopia and
              Kenya. Bangladesh suffered heavily due to super cyclone ‘ Sidr’
              that hit in November 2007.<br /><br />
              Beijing in China had temperature as high as 16 0 C in February
              2007, the highest since the meteorological record began in 1840,
              followed by one of its coldest and snowiest winter in 2008. As a
              result of heavy snow for a period of three weeks since 10 th of
              January 2008, 104 million ha. of farm land was damaged in addition
              to destruction of 22,000 houses and the economic loss was
              estimated at $ 7.5 billion. The La Nina phenomena may be another
              reason for severe snow storms. The La Nina is a large pool of
              unusually cold water in the equatorial Pacific that develops over
              a few years and influences global weather, which is opposite to El
              Nino. The El Nino is nothing but warming of Pacific. The mercury
              dipped to a new low of 9.4 0 C over Mumbai on 6.2.2008. The
              frequency of such unusual weather phenomena is likely to increase
              across the world and huge economic loss is expected.<br /><br />
              The Mean Sea Level (MSL) rise is likely to be slightly less than
              one mm/year along the Indian coast. Sea level rise may lead to
              disappearance of low-lying areas of coastal belt in addition to
              changes in ocean biodiversity. It threatens health of corals and
              polar bear population. Greater number of high surges and increased
              occurrences of cyclones in post-monsoon period, along with
              increased maximum wind speed, are also expected. This phenomenon
              of sea level rise threatens the area of land available for
              farming.<br /><br />
              The Mean Sea Level (MSL) rise is likely to be slightly less than
              one mm/year along the Indian coast. Sea level rise may lead to
              disappearance of low-lying areas of coastal belt in addition to
              changes in ocean biodiversity. It threatens health of corals and
              polar bear population. Greater number of high surges and increased
              occurrences of cyclones in post-monsoon period, along with
              increased maximum wind speed, are also expected. This phenomenon
              of sea level rise threatens the area of land available for
              farming.<br /><br />
              As per the United Nations Report of FAO, India stands to lose 125
              million tonnes equivalent to 18% of its rainfed cereal production
              from climate change by 2015. China’s rainfed cereal production
              potential of 360 million tonnes is expected to increase by 15%
              during the same period. It would also cause a worldwide drop in
              cereal crops, leaving 400 million more people at risk of hunger,
              and leaving three billion people at risk of flooding and without
              access to fresh water supplies. The crop production losses due to
              climate change may also drastically increase the number of
              undernourished people, severely hindering progress in combating
              poverty and food security. The severest impact is likely to be in
              sub-Saharan African countries, which are least able to adapt to
              climate change or to compensate for it through increase in food
              imports. In 2004 and 2005, twenty four (24) sub- Saharan African
              countries faced food emergencies, caused by a lethal combination
              of locusts and drought. In addition, adverse hot and dry weather
              in United States and drought conditions in parts of the EU lowered
              cereal output during 2005 when compared to that of 2004. The
              simulation models indicate that the global warming leads to
              reduction in rice and wheat production in northern India.<br /><br />
              The Indian economy is mostly agrarian based and depends on onset
              of monsoon and its further behaviour. The year 2002 was a
              classical example to show how Indian food grains’ production
              depends on rainfall of July and it was declared as the all-India
              drought, as the rainfall deficiency was 19% against the long
              period average of the country and 29% of the area was affected due
              to drought. The “All- India drought” is declared when the rainfall
              deficiency for the Country as a whole is more than 10% of normal,
              and when more than 20% of the Country’s area is affected by
              drought conditions. The kharif season food grain production was
              adversely affected by a whopping fall of 19.1% due to “All–India
              drought” during monsoon 2002.<br /><br />
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="inner">
              <img src="images/climate-change.png" class="img-fluid aboutimg" />
            </div>
          </div>
          <div class="col-lg-8 col-md-6 col-12">
            <h4 class="display-5">Climate change and agriculture</h4>
            <p class="py-3">
              Based on some of the past experiences indicated above, impact of
              climate change on agriculture will be one of the major deciding
              factors influencing the future food security of mankind on the
              earth. Agriculture is not only sensitive to climate change but
              also one of the major drivers for climate change. Understanding
              the weather changes over a period of time and adjusting the
              management practices towards achieving better harvest are
              challenges to the growth of agricultural sector as a whole. The
              climate sensitivity of agriculture is uncertain, as there is
              regional variation in rainfall, temperature, crops and cropping
              systems, soils and management practices. The inter-annual
              variations in temperature and precipitation were much higher than
              the predicted changes in temperature and precipitation. The crop
              losses may increase if the predicted climate change increases the
              climate variability. Different crops respond differently as the
              global warming will have a complex impact. The tropics are more
              dependent on agriculture as 75% of world population lives in
              tropics and two thirds of these people’s main occupation is
              agriculture. With low levels of technology, wide range of pests,
              diseases and weeds, land degradation, unequal land distribution
              and rapid population growth, any impact on tropical agriculture
              will affect their livelihood. Rice, wheat, maize, sorghum, soybean
              and barley are the six major crops in the world grown in 40%
              cropped area, and contribute to 55% of non-meat calories and over
              70% of animal feed (FAO, 2006). Consequently, any effect on these
              crops would adversely affect the food security.<br>
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="my-5">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-8 col-md-6 col-12">
            <h4 class="display-5">
              Likely Effects of climate change on key sectors at Global Level
            </h4>
            <p class="py-3">
              Fourth Assessment Report of the Working Group II: Impacts,
              Adaptation and Vulnerability describe the likely effects of
              climate change, including from increases in extreme events. The
              effects on key sectors, in the absence of countermeasures, are
              summarized as follows.<br /><br />
              <strong>Water:</strong> Drought affected areas are likely to be
              more widely distributed. Heavier precipitation events are very
              likely to increase in frequency leading to higher flood risks. By
              mid-century, water availability is likely to decrease in
              mid-latitudes, in the dry tropics and in other regions supplied by
              melted water from mountain ranges. More than one sixth of the
              world‘s population is currently dependent on melt water from
              mountain ranges. <br /><br />
              <strong>Food:</strong> While some mid latitude and high latitude
              areas will initially benefit from higher agricultural production,
              for many others at lower latitudes, especially in seasonally dry
              and tropical regions, the increases in temperature and the
              frequency of droughts and floods are likely to affect crop
              production negatively, which could increase the number of people
              at risk from hunger and increased levels of displacement and
              migration.<br /><br />
              <strong>Industry, settlement and society:</strong> The most
              vulnerable industries, settlements and societies are generally
              those located in coastal areas and river flood plains, and those
              whose economies are closely linked with climate sensitive
              resources. This applies particularly to locations already prone to
              extreme weather events and especially to areas undergoing rapid
              urbanization. Where extreme weather events become more intense or
              more frequent, the economic and social costs of those events will
              increase. <br /><br />
              <strong>Health:</strong> The projected changes in climate are
              likely to alter the health status of millions of people, including
              increased deaths, disease and injury due to heat waves, floods,
              storms, fires and droughts. Increased malnutrition, diarrhea
              disease and malaria in some areas will increase vulnerability to
              extreme public health, and development goals will be threatened by
              long term damage to health systems from disasters.<br /><br />
            </p>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="inner">
              <img src="images/burning-crop-fields.jpg" class="img-fluid aboutimg" />
            </div>
          </div>          
        </div>
      </div>
    </section>
    <section class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-6 col-12">
            <h3 class="display-5">
              Observed Changes in Climate and Weather Events in India
            </h3>
            <p class="py-3">
              <b>Surface Temperature</b><br>
              At the national level, increase of 0.4° C has been observed in surface air
              temperatures over the past century. A warming trend has been observed along the
              west coast, in central India, the interior peninsula, and northeastern India.
              However, cooling trends have been observed in northwest India and parts of south India.<br><br>
              <b>Rainfall</b><br>
              While the observed monsoon rainfall at the All India level does not show any
              significant trend, regional monsoon variations have been recorded. A trend of increasing
              monsoon seasonal rainfall has been found along the west coast, northern Andhra
              Pradesh, and north-western India (+10% to +12% of the normal over the last
              100 years) while a trend of decreasing monsoon seasonal rainfall has been observed
              over eastern Madhya Pradesh, north-eastern India, and some parts of Gujarat and
              Kerala (-6% to - 8% of the normal over the last 100 years)<br><br>
              <b>Impacts on Himalayan Glaciers</b><br>
              The Himalayas possess one of the largest resources of snow and ice and its
              glaciers form a source of water for the perennial rivers such as the Indus, the
              Ganga, and the Brahmaputra. Glacial melt may impact their long-term lean-season
              flows, with adverse impacts on the economy in terms of water availability and hydropower generation.<br>
              The available monitoring data on Himalayan glaciers indicates that while
              recession of some glaciers has occurred in some Himalayan regions in recent years,
              the trend is not consistent across the entire mountain chain.<br><br>
            </p>
          </div>
        </div>
      </div>
    </section>
    </section>
    <section class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-6 col-12">
            <h3 class="display-5">
              Some Projections of Climate Change over India for the 21st Century
            </h3>
            <p class="py-3">
              Some modelling and other studies have projected the following changes
              due to increase in atmospheric GHG concentrations arising from increased global
              anthropogenic emissions:<br><br>
              <strong>Annual mean surface temperature</strong><br>
                The simulation studies by Indian Institute of Tropical Meteorology (IITM),
                Pune, estimated that annual mean surface temperature is expected to raise by
                the end of century, ranges from 3 to 5° C with warming more pronounced in the
                northern parts of India.<br><br>
              <strong>Impacts on Water Resources</strong>
                Changes in key climate variables, namely temperature, precipitation and
                humidity, may have significant long-term implications for the quality and quantity of
                water. River systems of the Brahmaputra, the Ganga, and the Indus, which benefit
                from melting snow in the lean season, are likely to be particularly affected by the
                decrease in snow cover. A decline in total run-off for all river basins, except Narmada
                and Tapti, is projected in India's NATCOM I. A decline in run-off by more than two-
                thirds is also anticipated for Sabarmati and Luni basins. Due to sea level rise, the
                fresh water sources near the coastal regions will suffer salt intrusion.<br><br>
              <strong>Impacts on Agriculture and Food Production</strong><br>
                Food production in India is sensitive to climate changes such as variability in
                monsoon rainfall and temperature changes within a season. Studies by Indian
                Agricultural Research Institute (IARI) and others indicate greater expected loss in the
                Rabi crop. Every 1°C rise in temperature reduces wheat production by 4-5 Million
                Tonnes. Small changes in temperature and rainfall have significant effects on the 
                quality of fruits, vegetables, tea, coffee, aromatic and medicinal plants, and basmati
                rice. Pathogens and insect populations are strongly dependent upon temperature and
                humidity, and changes in these parameters may change their population dynamics.
                Other impacts on agricultural and related sectors include lower yields from dairy
                cattle and decline in fish breeding, migration, and harvests. Global reports indicate a
                loss of 10-40% in crop production by 2100.<br>
                Indian climate is dominated by the southwest monsoon, which brings most of
                the region‘s precipitation. It is critical for the availability of drinking water and
                irrigation for agriculture. Agricultural productivity is sensitive to two broad classes of
                climate-induced effects (1) direct effects from changes in temperature, precipitation
                or carbon dioxide concentrations, and (2) indirect effects through changes in soil
                moisture and the distribution and frequency of infestation by pests and diseases.
                Rice and wheat yields could decline considerably with climatic changes (IPCC 1996;
                2001). However, the vulnerability of agricultural production to climate change
                depends not only on the physiological response of the affected plant, but also on the
                ability of the affected socio-economic systems of production to cope with changes in
                yield, as well as with changes in the frequency of droughts or floods. The
                adaptability of farmers in India is severely restricted by the heavy reliance on natural
                factors and the lack of complementary inputs and institutional support systems. The
                loss in net revenue at the farm level is estimated to range between 9% and 25% for
                a temperature rise of 2 °C to 3.5 °C. Scientists also estimated that a 2°C rise in
                mean temperature and a 7% increase in mean precipitation would reduce net
                revenues by 12.3% for the country as a whole. Agriculture in the coastal regions of
                Gujarat, Maharashtra, and Karnataka is found to be the most negatively affected.
                Small losses are also indicated for the major food-grain producing regions of Punjab,
                Haryana, and western Uttar Pradesh. On the other hand, West Bengal, Orissa, and
                Andhra Pradesh are predicted to benefit to a small extent from warming.<br><br>
              <strong>Impacts on health</strong><br>
              Changes in climate may alter the distribution of important vector species (for
              example, malarial mosquitoes) and may increase the spread of such diseases to new
              areas. If there is an increase of 3.8 °C in temperature and a 7% increase in relative
              humidity, the transmission windows i.e., months during which mosquitoes are active,
              will be open for all 12 months in 9 states in India. The transmission windows in
              Jammu and Kashmir and in Rajasthan may increase by 3-5 months. However, in
              Orissa and some southern states, a further increase in temperature is likely to
              shorten the transmission window by 2-3 months.<br><br>
            <strong>  Impacts on Forests</strong><br>
            Climate projections indicate that the country is likely to experience shift in
            forest types, with consequent changes in forests produce, and, in turn, livelihoods
            based on those products. Correspondingly, the associated biodiversity is likely to be
            adversely impacted.<br><br>
            <strong>Vulnerability to Extreme Events</strong>
            Heavily populated regions such as coastal areas are exposed to climatic events
            such as cyclones, floods, drought, and large declines in sown areas in arid and semi-
            arid zones occur during climate extremes. Large areas in Rajasthan, Andhra
            Pradesh, Gujarat, and Maharashtra and comparatively small areas in Karnataka,
            Orissa, Madhya Pradesh, Tamil Nadu, Bihar, West Bengal, and Uttar Pradesh are
            frequented by drought. About 40 million hectares of land is flood-prone, including
            most of the river basins in the north and the northeastern belt, affecting about 30
            million people on an average each year. Such vulnerable regions may be particularly
            impacted by climate change.<br><br>
            <strong>Impacts on Coastal Areas</strong><br>
            A mean Sea Level Rise (SLR) of 15-38 cm is projected along India's coast by the
            mid 21 st century and of 46-59 cm by 2100. In addition, a projected increase in the
            intensity of tropical cyclones poses a threat to the heavily populated coastal zones in
            the country (NATCOM, 2004).<br><br>
            <strong>Impacts on Biodiversity</strong><br>
            The Intergovernmental Panel on Climate Change has projected that global
            average temperature increase during 21 st century will range from 1.4 o to 4 o Celsius.
            Research by the Consultative Group on International Agricultural Research based on
            distribution models of wild relatives of three staple crops of the poor i.e. Peanuts,
            cowpea and potato suggests that 16-22 per cent of wild species will be threatened
            by extinction by 2055. Loss of genetic diversity can have serious long-term
            consequences globally.<br><br>
            </p>
          </div>
        </div>
      </div>
    </section>
    </section>
    <section class="my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-6 col-12">
            <h4 class="display-5">
              Demonstration of Climate Resilient Technologies to the farmers may be
              undertaken by the Extension personnel in the areas of-
            </h4>
            <p class="py-3">
              <b>i)Natural resource management:</b> Interventions on in-situ moisture
              conservation, rain water harvesting and recycling for supplemental
              irrigation, improved drainage in flood prone areas, conservation tillage,
              ground water recharge and water saving irrigation methods etc.<br>
              <b>ii) Crop Production:</b> Introducing drought/temperature tolerant varieties,
              advancement of planting dates of rabi crops in areas with terminal heat
              stress, water saving paddy cultivation methods (SRI, aerobic, direct
              seeding), frost management in horticulture through fumigation,
              community nurseries for delayed monsoon, custom hiring centers for farm
              machineries for timely planting, location specific intercropping systems
              with high sustainable yield index etc<br>
              <b>iii) Livestock and Fisheries:</b> Augmentation of fodder production during
              droughts/floods, improving productivity of Common Property Resources
              (CPRs), promotion of improved fodder/feed storage methods, preventive
              vaccination, improved shelters for reducing heat/cold stress, management
              of fish ponds/tanks during water scarcity and flooding etc.<br>
              <b>iv) Institutional Interventions:</b> Institutional interventions, either by
              strengthening the existing ones or initiating new ones, relating to seed
              bank, fodder bank, custom hiring center, collective marketing, and
              introduction of weather index based insurance and climate literacy
              through a village level weather station.<br><br>
              <p>
               <strong>Extension system</strong> has to focus more on diversifying the livelihood options,
               changing suitable cropping patterns to adjust to the change which is
               occurring in the particular location, planting more drought tolerant crops,
               promoting increased share of non-agricultural activities and Agro-forestry
               practices, identifying the traditional coping strategies, improved on - farm soil
               & water conservation, promoting mixed cropping pattern and making
               provision for access to various information sources related to weather and
               other advisories of climate change would minimize the risks and certainty of
               farmers related to climate change.<br><br>
              </p>
            </p>
          </div>
        </div>
      </div>
    </section>
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
