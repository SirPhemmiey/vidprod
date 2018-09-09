<!-- Page Content Start -->
<div class="page-content">
<!-- Gallery Area Start -->
<section class="gallery-area ptb-90">
<div class="container">
<div class="row">
<!-- Section Titel -->
<div class="col-md-12">
    <div class="section-titel text-right">
        <h2>GALLERY</h2>
    </div>
</div>
<!-- Section Titel -->
</div>
<!-- Latest Shot Main Area Start -->
            <div class="our-gallery">

                <div class="grid gallery-box">
                    <div class="gallery-content">

        <?php if (!empty($gallery)) { foreach ($gallery as $gallery) {?>
            <div class="grid-item col-md-6 col-xs-12 c1">
                            <!-- Latest Shot/Portfolio Single -->
                            <div class="gallery-single">
                                <div class="gallery-image">
                                <img src="<?php echo $gallery['Gallery']['path']?>" alt="" />
                                    <a href="<?php echo $gallery['Gallery']['path']?>" class="popup-gallery"><i class="icofont icofont-search-alt-1"></i></a>
                                </div>
                            </div>
                            <!-- Latest Shot/Portfolio Single -->
                        </div>
            <?php }}?>

                    </div>
                </div>
            </div>
            <!-- Latest Shot Main Area End -->
<!-- Load More Button -->
<div class="load-btn text-center mt-20">
<!-- <a class="hvr-btn" href="#">LOAD MORE</a> -->
</div>
<!-- Load More Button -->
</div>
</section>
<!-- Gallery Area End -->
</div>
<!-- Page Content End -->