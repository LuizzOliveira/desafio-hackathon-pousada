<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $site_description; ?>">
    <title><?php echo isset($page_title) ? $page_title : $site_name; ?></title>
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navegação -->
    <?php include VIEWS_PATH . '/components/navbar.php'; ?>

    <!-- Conteúdo Principal -->
    <main class="main-content">
    
    <script src="<?php echo ASSETS_PATH; ?>/js/search-site.js" defer></script>

    <script src="<?php echo ASSETS_PATH; ?>/js/theme.js" defer></script>
