<?php $title = "Jens Andersson"; ?>
<?php include("include/header.php"); ?>
<?php include("include/about.php"); ?>
<section id="portfolio">
    <h3>Portfolio</h3>
    <div class="flex">

        <?php
        $projectQuery = $dbh->prepare("SELECT * FROM portfolio");
        $projectQuery->execute();

        $projectResult = $projectQuery->fetchALL(PDO::FETCH_ASSOC);
        
        foreach ($projectResult as $row) {
            echo '<article class="portfolio-flex">';
                echo '<a href="portfolio.php?project='.$row["name"].'">';
                    echo '<img src="img/project/'.$row["name"].'/header.png">';
                    echo '<div class="text">'.$row["name"].'</div>';
                echo '</a>';
            echo '</article>';
        } ?>
    </div>
</section>
<?php include("include/footer.php"); ?>