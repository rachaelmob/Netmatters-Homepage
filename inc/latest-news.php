<?php

// -- FUNCTION -> Collect data ONLY for three latest news by date
    function getLatestNews(){
        include('dbconfig.php');
        try {
            $sql = $dpdo->query("SELECT * FROM latestnews ORDER BY date DESC LIMIT 3");
            $latestnews = $sql->fetchAll();
            return $latestnews;
            // print_r($latestnews);

            
        } catch(Exception $e) {
            echo "Unable to retrieve table from database";
            exit;
        }
    }



// - FUNCTION for HTML markup for articles
    function articleHTML($tagClr, $imgTag, $img, $imgAlt, $header, $readTime, 
    $desc, $authorImg, $authorAlt, $postedBy, $date)
    {

        // --- TO DO -------//
        /*  
        * Fix something for no read times min-height: 3rem;
        * Change tag colour to colour overall to change tag, titles and buttons to unique colors
        */
        $article = ' <div class="article-container">
            <a href="#">
                <div class="article-img">
                    <div class="img-tag ' . $tagClr . '">' . $imgTag . '</div>
                    <img src="'. $img . '" 
                    alt="' . $imgAlt . '">
                </div>
                <div class="article-content">
                    <h3 class="article-header ' . $tagClr . '">'
                    . $header . 
                    '<span class="read-time">' . $readTime . '</span>
                    </h3>
                    <p class="article-desc">' 
                        . $desc .
                    '</p>
                    <div class="button-wrap">
                        <div class="btn ' . $tagClr . '">READ MORE</div>
                    </div>
                    <div class="author">
                        <div class="author-pic">
                            <img src="' . $authorImg . '"
                            alt="' . $authorAlt . '">
                        </div>
                        <div class="posted-info">
                            <span class="posted-by">' . $postedBy . '</span> <br>
                            <span class="posted-date">' . $date . '</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>';

        return $article;
    }





// -- Loop through array and collect data from each column
    foreach(getLatestNews() as $col) {
        //Display article HTML for each row using data from each column
        echo articleHTML(
            $col["tag_colour"],
            $col["image_tag"],
            $col["image"],
            $col["image_alt"],
            $col["header"],
            $col["reading_time"],
            $col["description"],
            $col["author_img"],
            $col["author_alt"],
            $col["posted_by"],
            $col["date"]
        );               
    }
