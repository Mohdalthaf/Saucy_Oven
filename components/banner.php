<!--==================== HOME ====================-->
<section class="home section" id="home">
    <div class="home__container">
        <div class="home__data">
            <h1 class="home__title"><?php echo $bannerData['title']; ?></h1>
            <p class="home__description">
                <?php echo $bannerData['description']; ?>
            </p>

            <?php renderButton($bannerData['buttonText'], $bannerData['buttonLink']); ?>

            <img src="<?php echo $bannerData['sticker1']; ?>" alt="image" class="home__sticker-1">
            <img src="<?php echo $bannerData['sticker2']; ?>" alt="image" class="home__sticker-2">
        </div>
        
        <div class="home__images">
            <img src="<?php echo $bannerData['images']['pizza']; ?>" alt="image" class="home__ingredient home__pizza">
            <img src="<?php echo $bannerData['images']['board']; ?>" alt="image" class="home__ingredient home__board">
            <img src="<?php echo $bannerData['images']['leaf1']; ?>" alt="image" class="home__ingredient home__leaf-1">
            <img src="<?php echo $bannerData['images']['leaf2']; ?>" alt="image" class="home__ingredient home__leaf-2">
            <img src="<?php echo $bannerData['images']['pepperoni']; ?>" alt="image" class="home__ingredient home__pepperoni">
            <img src="<?php echo $bannerData['images']['mushroom']; ?>" alt="image" class="home__ingredient home__mushroom">
            <img src="<?php echo $bannerData['images']['olive']; ?>" alt="image" class="home__ingredient home__olive">
            <img src="<?php echo $bannerData['images']['tomato']; ?>" alt="image" class="home__ingredient home__tomato">
        </div>
    </div>
</section>
