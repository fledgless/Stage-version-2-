<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre de formation professionnelle Sainte Barbe</title>
    <link rel="stylesheet" href=".\assets\styles\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./public/fonts/tondu/style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="banner" st>
        <div class="container">
            <div class="top-header">
                <div class="logo-header">
                    <a href="<?= SITE_URL ?>">
                        <img src=".\public\images\apprentis-auteuil-logo.jpg" alt width="100" height="102.6" data-src="\www\public\images\apprentis-auteuil-logo.jpg" decoding="async">
                    </a>
                </div>
                <div class="titre-header">
                    <h1>
                        <a href="<?= SITE_URL ?>">
                            Centre de Formation Professionnelle Sainte Barbe
                        </a>
                    </h1>
                    <p class="blog-tagline">Métiers du bâtiment, de l'éco-construction, et de l'éco-rénovation.</p>
                </div>
                <div class="recherche-header">
                    <form role="search" method="get" class="search-form" action="<?= SITE_URL ?>">
                        <label>
                            <span class="screen-reader-text">Rechercher&nbsp;</span>
                            <input type="search" class="search-field" placeholder="Recherche..." value name="s">
                        </label>
                        <button type="submit" class="search-submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <span class="sr-only">Rechercher</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>
</body>
</html>