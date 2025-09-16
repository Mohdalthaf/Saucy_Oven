<!--==================== PRODUCTS ====================-->
<section class="products section" id="products">
    <h2 class="section__title"><?php echo $productsData['title']; ?></h2>
    <div class="products__container container grid">
        <?php foreach($productsData['products'] as $product): ?>
        <article class="products__card">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="products__img">
            
            <h3 class="products__name"><?php echo $product['name']; ?></h3>
            <span class="products__price"><?php echo $product['price']; ?></span>

            <button class="products__button">
                <i class="ri-shopping-bag-3-fill"></i>
            </button>
        </article>
        <?php endforeach; ?>
    </div>
</section>
