<?php 
    $url = $_GET['project'];
    $title = ucwords($url). " | Jens Andersson";
?>
<?php include("include/header.php"); ?>
<section id="portfolio">
    <div class="container">
    
        <div class="project-container">
        <?php 
        $projectQuery = $dbh->prepare("SELECT * FROM portfolio WHERE name='$url' limit 1");
        $projectQuery->execute();

        $projectResult = $projectQuery->fetchALL(PDO::FETCH_ASSOC);
        foreach ($projectResult as $row) { ?>
            <div class="project-header">
                <img src="img/project/<?php echo $row["name"]; ?>/header.png">
            </div>
            
            <div class="project-client">
                <h3><?php echo $row["name"]; ?></h3>
                
                <div class="project-about">
                    <h4>Kunden</h4>
                    <p><?php echo $row["client"]; ?></p>
                    
                    <h4>Hemsidan</h4>
                    <p><?php echo $row["project"]; ?></p>
                </div>
                <div class="project-url">
                    <?php
                        $service = explode(",", $row["service"]);
                        if(!empty($row["gallery"])) {
                            echo '<div class="project-service">';
                            echo '<h5>Tjänster</h5>';
                            foreach($service as $serviceOut) {
                                echo '<a href="#">'.$serviceOut.'</a>';
                            }
                            echo '</div>';
                        }
                        ?>
                    <div class="project-site">
                        <a href="<?php
                              if(strpos($row["url"], "http://") !== false) {
                                  echo $row["url"];
                              }
                              else {
                                  echo "http://", $row["url"];
                              }
                         ?>" target="_blank" title="<?php echo $row["url"]; ?>">Besök</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <?php
                $gallery = explode(",", $row["gallery"]);
                if(!empty($row["gallery"])) {
                    echo '<div class="project-gallery">';
                    echo '<h3>Galleri</h3>';
                    foreach($gallery as $galleryOut) {
                        echo '<img src=img/project/'.$row["name"].'/'.$galleryOut.'>';
                    }
                    echo '</div>';
                }
             } //foreach stop
            ?>
        </div>
    </div>
</section>

<?php include("include/footer.php"); ?>