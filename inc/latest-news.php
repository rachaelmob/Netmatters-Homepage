<?php

// require_once("dbconfig.php");
 
function getLatestNews(){
    include('dbconfig.php');

    try {
        // collect 3 latest articles from table
        $sql = $dpdo->query("SELECT * FROM latestnews ORDER BY date DESC LIMIT 3");
        $latestnews = $sql->fetchAll();
        return $latestnews;
        // print_r($latestnews);

         
    } catch(Exception $e) {
        echo "Unable to retrieve table from database";
        exit;
    }
}

getLatestNews();


?>

<!-- <section id="latest-section">
        <div class="container">

            <div class="latest-heading">
                <h2>Latest News</h2>
                <a href="#" class="hidden-sm"> 
                    View All&nbsp;
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="latest-articles">
                <div class="article-container1">
                    <a href="#">
                        <div class="article-img">
                            <div class="img-tag news">news</div>
                            <img src="./img/latest-news/Latest-news-east-anglian-air-ambulance.jpg" 
                             alt="A yellow air ambulance with text 'saving lives 24/7 implementing a 3cx call flow',beneath the East Anglian Air Ambulance logo.">
                        </div>
                        <div class="article-content">
                            <h3 class="article-header1">
                            East Anglian Air Ambulance - Introducing a 3C...
                            <span class="read-time"> - 4 minute read</span>
                            </h3>
                            <p class="article-desc">
                                The Client Championing ‘Your Local Life-Saving Charity’ 
                                the East Anglian Air Ambulance (EAAA) is a r...
                            </p>
                            <div class="button-wrap">
                                <div class="btn btn-art1">READ MORE</div>
                            </div>
                            <div class="author">
                                <div class="author-pic">
                                    <img src="./img/latest-news/Latest-news-netmatters-pfp.png"
                                    alt="netmatters logo profile picture">
                                </div>
                                <div class="posted-info">
                                    <span class="posted-by">Posted by <br> Netmatters</span> <br>
                                    <span class="posted-date">26th February 2024</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="article-container2">
                    <a href="#">
                        <div class="article-img">
                            <div class="img-tag insights">Insights</div>
                            <img src="./img/latest-news/Latest-news-bizzsoft.jpg" 
                             alt="What is business Software? poster">
                        </div>
                        <div class="article-content">
                            <h3 class="article-header2"> 
                            What is business software and how can it help...
                            <span class="read-time"> - 4 minute read</span>
                            </h3>
                            <p class="article-desc">
                                What is business software and how can it help your business? 
                                If the thought of a CRM system or intra...
                            </p>
                            <div class="button-wrap">
                                <div class="btn btn-art2">READ MORE</div>
                            </div>
                            <div class="author">
                                <div class="author-pic">
                                    <img src="./img/latest-news/Latest-news-netmatters-pfp.png"
                                    alt="netmatters logo profile picture">
                                </div>
                                <div class="posted-info">
                                    <span class="posted-by">Posted by <br> Netmatters</span> <br>
                                    <span class="posted-date">21st February 2024</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="article-container3">
                    <a href="#">
                        <div class="article-img">
                            <div class="img-tag careers">Careers</div>
                            <img src="./img/latest-news/Latest-news-bizzdev.jpg" 
                            alt="Hiring Business Development Executive poster">
                        </div>
                        <div class="article-content">
                            <h3 class="article-header3" >
                            Business Development Executive
                            </h3>
                            <p class="article-desc">
                                Salary Range £26k-£36k per annum + Bonus Hours 40 hours
                                per week, Monday – Friday  Location Wymondha...
                            </p>
                            <div class="button-wrap">
                                <div class="btn btn-art3">READ MORE</div>
                            </div>
                            <div class="author">
                                <div class="author-pic">
                                    <img src="./img/latest-news/Latest-news-Rebecca-Moore.png"
                                    alt="Netmatters Staff Rebecca Moore Profile Picture">
                                </div>
                                <div class="posted-info">
                                    <span class="posted-by">Posted by Rebecca <br> Moore</span> <br>
                                    <span class="posted-date"> 20th February 2024 </span>
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <div class="mobile-viewall">
                <a href="#"> 
                    View All&nbsp;
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div> 
</section> -->