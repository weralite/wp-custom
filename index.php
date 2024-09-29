<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center text-blue-500">Hello, Tailwind!</h1>
        <p class="text-center">If you see this styled text, Tailwind CSS is working properly.</p>
    </div>
    <?php wp_footer(); ?>
</body>
</html>