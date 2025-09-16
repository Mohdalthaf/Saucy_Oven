<?php
// Button Component - Reusable button with customizable text and link
// Usage: include this file and call renderButton($text, $link, $classes, $type)

function renderButton($text, $link = '#', $classes = 'button', $type = 'link') {
    if ($type === 'icon') {
        echo '<button class="' . htmlspecialchars($classes) . '">' . $text . '</button>';
    } else {
        echo '<a href="' . htmlspecialchars($link) . '" class="' . htmlspecialchars($classes) . '">' . htmlspecialchars($text) . '</a>';
    }
}

// Specialized button functions for common use cases
function renderIconButton($icon, $classes = 'products__button') {
    echo '<button class="' . htmlspecialchars($classes) . '">' . $icon . '</button>';
}

// Usage examples:
// renderButton('Order Now', '#products'); // Regular button
// renderButton('Order Now', '#products', 'button--primary'); // Button with custom class
// renderIconButton('<i class="ri-shopping-bag-3-fill"></i>', 'products__button'); // Icon button
?>
