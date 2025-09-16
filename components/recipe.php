<!--==================== RECIPE ====================-->
<section class="recipe section" id="recipe">
    <h2 class="section__title"><?php echo $recipeData['title']; ?></h2>
    <div class="recipe__container container grid">
        <div class="recipe__list grid">
            <?php foreach($recipeData['ingredients'] as $ingredient): ?>
            <div class="recipe__ingredient">
                <img src="<?php echo $ingredient['image']; ?>" alt="<?php echo $ingredient['name']; ?>" class="recipe__image">
                <div>
                    <h3 class="recipe__name"><?php echo $ingredient['name']; ?></h3>
                    <p class="recipe__description"><?php echo $ingredient['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <img src="<?php echo $recipeData['mainImage']; ?>" alt="Recipe image" class="recipe__img">
    </div>
</section>

