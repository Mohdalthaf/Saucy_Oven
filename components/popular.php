<!--==================== POPULAR ====================-->
<section class="popular section" id="popular">
    <div class="popular__container container grid">
        <div class="popular__data">
            <h2 class="section__title"><?php echo $popularData['title']; ?></h2>
            <p class="popular__description">
                <?php echo $popularData['description']; ?>
            </p>
        </div>

        <div class="popular__swiper swiper">
            <img src="<?php echo $popularData['dishImage']; ?>" alt="image" class="popular__dish">

            <div class="swiper-wrapper">
                <?php foreach($popularData['pizzas'] as $pizza): ?>
                <article class="popular__card swiper-slide">
                    <img src="<?php echo $pizza['image']; ?>" alt="<?php echo $pizza['name']; ?>" class="popular__img">
                    <h3 class="popular__title"><?php echo $pizza['name']; ?></h3>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
