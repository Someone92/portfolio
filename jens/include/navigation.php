<?php
    $currentpage = $_SERVER[ 'REQUEST_URI' ];

    if (strpos($currentpage, "index.php") === false) {
        $about = "index.php#about";
        $portfolio = "index.php#portfolio";
    } else {
        $about = "#about";
        $portfolio = "#portfolio";
    }
?>
<nav>
    <h4><a href="index.php">jensandersson<span>.nu</span></a></h4>
    <div class="hamburger"><span></span></div>
    <ul>
        <li><a href="<?php echo $about; ?>">Om Mig</a></li>
        <li><a href="pdf/Jens-Andersson-CV.pdf">CV</a></li>
        <li><a href="<?php echo $portfolio; ?>">Portfolio</a></li>
    </ul>
    <div class="clear"></div>
</nav>