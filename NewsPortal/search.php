<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/main.css">
    <title>myPortal</title>
</head>

<body>
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="index.php">
                <span><img src="img/news_icon.png" width="94px" alt=""></span>
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="blogpost.php">Blogpost</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <form action="search.php" method="get">
                <input class="form-input" type="text" name="query" placeholder="Article Search">
                <button class="btn">Search</button>
            </form>

        </div>

    </nav>


    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <!-- <div class="home-articles max-width-1 m-auto font2"> -->


    <div class="container">
        <h1>Search Results</h1>
        <input id="search" onkeyup="filter()" type="text" placeholder="Search">
        <ul id="Menu">
            <li><a href=https://timesofindia.indiatimes.com/news target="_blank">Top HeadLines By Times Of India</a>
            </li>
            <li><a href=https://warmheartworldwide.org/environmental-news-2 target="_blank">Environmental Progress News
                    : Celebrating Earth Day 2021</a></li>
            <li><a href=https://kathmandupost.com target="_blank">The Kathmandu Post</a></li>

            <li><a href=https://www.newscientist.com/subject/technology target="_blank">Get yourself Updated with the
                    Latest Technological News</a></li>
            <li><a href="/blogpost.html">My BlogPost</a></li>
            <li><a href=https://www.bbc.com/news target="_blank">"India's Covid Crisis" By BBC News</a></li>
            <li><a href=https://indianexpress.com/section/sports target="_blank">Top Sports Headlines</a></li>
            <li><a href=https://www.nbcnews.com/politics/white-house target="_blank">White House News(Political
                    News)</a></li>
            <li><a href=https://jamesclear.com/articles target="_blank">Interesting articles to read during lockdown
                    period time</a></li>
        </ul>
    </div>
    <script src="js/filter.js" type="text/javascript"></script>

</div>


</body>

</html>