<?php
// Banner/Home Section Data
$bannerData = [
    'title' => 'Crispy And <br> Delicious Pizzas',
    'description' => 'Order the best pizzas to end your hunger and make your family moments more memorable, place your order now.',
    'buttonText' => 'Order Pizza Now',
    'buttonLink' => '#products',
    'sticker1' => 'assets/img/sticker-pizza.svg',
    'sticker2' => 'assets/img/sticker-leaf.svg',
    'images' => [
        'pizza' => 'assets/img/home-pizza.png',
        'board' => 'assets/img/home-board.png',
        'leaf1' => 'assets/img/home-leaf-1.png',
        'leaf2' => 'assets/img/home-leaf-2.png',
        'pepperoni' => 'assets/img/home-pepperoni.png',
        'mushroom' => 'assets/img/home-mushroom.png',
        'olive' => 'assets/img/home-olive.png',
        'tomato' => 'assets/img/home-tomato.png'
    ]
];

// About Section Data
$aboutData = [
    'title' => 'Learn More About <br> Our History',
    'description' => 'The secret to success is the best ingredients to make a better pizza. Today we strive for perfection, just as we have been doing for 15 years when we first opened the pizzeria in Lima - Peru.',
    'buttonText' => 'The Best Pizzas',
    'buttonLink' => '#popular',
    'image' => 'assets/img/about-img.png',
    'sticker' => 'assets/img/sticker-cheese.svg'
];

$popularData = [
    'title' => 'Discover <br> Popular Orders',
    'description' => 'Select the best prepared and delicious flavors. We have collected some popular recipes from around the world for you to choose your favorite.',
    'dishImage' => 'assets/img/popular-dish.png',
    'pizzas' => [
        [
            'id' => 1,
            'name' => 'Margherita Pizza',
            'image' => 'assets/img/popular-1.png'
        ],
        [
            'id' => 2,
            'name' => 'Mushroom Pizza',
            'image' => 'assets/img/popular-2.png'
        ],
        [
            'id' => 3,
            'name' => 'Pepperoni Pizza',
            'image' => 'assets/img/popular-1.png'
        ],
        [
            'id' => 4,
            'name' => 'California Pizza',
            'image' => 'assets/img/popular-1.png'
        ],
        [
            'id' => 5,
            'name' => 'Neapolitan pizza',
            'image' => 'assets/img/popular-2.png'
        ],
        [
            'id' => 6,
            'name' => 'Sicilian pizza',
            'image' => 'assets/img/popular-1.png'
        ]
    ]
];

// Products Section Data
$productsData = [
    'title' => 'The Most <br> Devoured Pizzas',
    'products' => [
        [
            'id' => 1,
            'name' => 'Vegetarian <br> Pizza',
            'price' => '₹250',
            'image' => 'assets/img/product-1.png'
        ],
        [
            'id' => 2,
            'name' => 'Pepperoni <br> Pizza',
            'price' => '₹350',
            'image' => 'assets/img/product-2.png'
        ],
        [
            'id' => 3,
            'name' => 'Margherita <br> Pizza',
            'price' => '₹400',
            'image' => 'assets/img/product-3.png'
        ],
        [
            'id' => 4,
            'name' => 'Mushroom <br> Pizza',
            'price' => '₹370',
            'image' => 'assets/img/product-4.png'
        ],
        [
            'id' => 5,
            'name' => 'Italian <br> Pizza',
            'price' => '₹600',
            'image' => 'assets/img/product-5.png'
        ],
        [
            'id' => 6,
            'name' => 'Italian <br> Pizza',
            'price' => '₹600',
            'image' => 'assets/img/product-5.png'
        ],
        [
            'id' => 7,
            'name' => 'Italian <br> Pizza',
            'price' => '₹600',
            'image' => 'assets/img/product-5.png'
        ],
        [
            'id' => 8,
            'name' => 'Italian <br> Pizza',
            'price' => '₹600',
            'image' => 'assets/img/product-5.png'
        ]
    ]
];

// Recipe Section Data
$recipeData = [
    'title' => 'Fresh And <br> Natural Ingredients',
    'mainImage' => 'assets/img/recipe-img.png',
    'ingredients' => [
        [
            'id' => 1,
            'name' => 'Flour',
            'description' => 'The best wheat from the field for the best flour.',
            'image' => 'assets/img/recipe-flour.png'
        ],
        [
            'id' => 2,
            'name' => 'Cheese',
            'description' => 'Indulge in cheese for a healthy future.',
            'image' => 'assets/img/recipe-cheese.png'
        ],
        [
            'id' => 3,
            'name' => 'Sauces',
            'description' => 'Add a touch of salsa to your life and it will taste better.',
            'image' => 'assets/img/recipe-sauces.png'
        ],
        [
            'id' => 4,
            'name' => 'Vegetables',
            'description' => 'Vegetables full of the essence of nature and organic.',
            'image' => 'assets/img/recipe-tomato.png'
        ],
        [
            'id' => 5,
            'name' => 'Meats',
            'description' => 'The best fresh meats for your health.',
            'image' => 'assets/img/recipe-meat.png'
        ]
    ]
];

// Contact Section Data
$contactData = [
    'title' => 'Contact Now',
    'mainImage' => 'assets/img/contact-img.png',
    'info' => [
        [
            'id' => 1,
            'title' => 'Write Us',
            'type' => 'social',
            'social' => [
                [
                    'icon' => 'ri-whatsapp-fill',
                    'link' => '#'
                ],
                [
                    'icon' => 'ri-instagram-fill',
                    'link' => '#'
                ],
                [
                    'icon' => 'ri-telegram-fill',
                    'link' => '#'
                ]
            ]
        ],
        [
            'id' => 2,
            'title' => 'Delivery',
            'type' => 'content',
            'content' => '+91 9633825283 <br> +91 0123457878'
        ],
        [
            'id' => 3,
            'title' => 'Location',
            'type' => 'content',
            'content' => 'kakkanad - Ngo-Quaters <br> Sra 102B',
            'mapLink' => 'https://maps.app.goo.gl/VdFbZM2Jkp1GJjoA8'
        ]
    ],
    'stickers' => [
        [
            'src' => 'assets/img/sticker-tomato.svg',
            'class' => 'contact__sticker-1'
        ],
        [
            'src' => 'assets/img/sticker-mushroom.svg',
            'class' => 'contact__sticker-2'
        ],
        [
            'src' => 'assets/img/sticker-onion.svg',
            'class' => 'contact__sticker-3'
        ]
    ]
];
?>
