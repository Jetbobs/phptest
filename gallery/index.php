<?php
    include("header.php");
    include("data.php");
?>
    <div class="gal_container">
        <div class="gal_card">
            <?php
            foreach($gal as $galb){
            ?>
            <img src="<?php echo($galb["img"]); ?>" alt="">
            <div class="title"><?php echo($galb["title"]); ?></div>
            <div class="likes"><?php echo($galb["likes"]); ?></div>
            <div class="writer"><?php echo($galb["date"]); ?></div>
            <?php
        }
        ?>
        </div>
    </div>
<?php
include("footer.php");
?>