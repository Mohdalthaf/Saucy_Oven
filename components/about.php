<!--==================== ABOUT ====================-->
<section class="about section" id="about">
    <div class="about__container container">
        <div class="about__data">
            <h2 class="section__title">
                <?php echo $aboutData['title']; ?>
            </h2>
            <p class="about__description">
                <?php echo $aboutData['description']; ?>
            </p>
            <?php renderButton($aboutData['buttonText'], $aboutData['buttonLink']); ?>
            <img src="<?php echo $aboutData['sticker']; ?>" alt="image" class="about__sticker">
        </div>
        <img src="<?php echo $aboutData['image']; ?>" alt="image" class="about__img">
    </div>
</section>
