<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<!--        <ol class="carousel-indicators">-->
<!--            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
<!--            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
<!--            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
<!--        </ol>-->
        <div class="carousel-inner" role="listbox">

            <?php
            $say=0;
            foreach ($data['sliders'] as $sliders) : ?>

                <div class="carousel-item <?php echo $say++==1 ? 'active' : '';?>" style="background-image: url('/images/sliders/<?php echo $sliders['sliders_file']; ?>')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><?php echo $sliders['sliders_title']; ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
