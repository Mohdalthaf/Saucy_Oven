<!--==================== CONTACT ====================-->
<section class="contact section" id="contact">
    <div class="contact__container container grid">
        <div class="contact__data">
            <h2 class="section__title"><?php echo $contactData['title']; ?></h2>
            <div class="contact__info grid">
                <?php foreach($contactData['info'] as $info): ?>
                <div>
                    <h3 class="contact__title"><?php echo $info['title']; ?></h3>

                    <?php if($info['type'] === 'social'): ?>
                    <div class="contact__social">
                        <?php foreach($info['social'] as $social): ?>
                        <a href="<?php echo $social['link']; ?>" target="_blank" class="contact__social-link">
                            <i class="<?php echo $social['icon']; ?>"></i>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php else: ?>
                    <address class="contact__address">
                        <?php echo $info['content']; ?>
                    </address>
                    <?php if(isset($info['mapLink'])): ?>
                    <a href="<?php echo $info['mapLink']; ?>" target="_blank" class="contact__map">
                        <i class="ri-map-pin-fill"></i>
                        <span>View on Map</span>
                    </a>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="contact__image">
            <img src="<?php echo $contactData['mainImage']; ?>" alt="Contact image" class="contact__img">
        </div>

        <?php foreach($contactData['stickers'] as $sticker): ?>
        <img src="<?php echo $sticker['src']; ?>" alt="Sticker" class="<?php echo $sticker['class']; ?>">
        <?php endforeach; ?>
    </div>
</section>
