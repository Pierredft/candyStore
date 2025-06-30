<!-- Balise head -->
<?php 
    require_once __DIR__ . '/templates/partials/_head.php';
?>

    <!-- Bonbons flottants -->
    <?php 
        require_once __DIR__ . '/templates/partials/_bonbons.php';
    ?>

    <!-- Navigation -->
    <?php 
        require_once __DIR__ . '/templates/partials/_nav.php';
    ?>

    <div class="container">
        <!-- Page d'accueil -->
        <div id="home" class="page active">
            <div class="hero">
                <h1>🍭 Doux Délices 🍭</h1>
                <p>Bienvenue dans le paradis des bonbons ! Découvrez notre sélection de douceurs artisanales</p>
                <button class="hero-button" onclick="showPage('products')">Découvrir nos bonbons</button>
            </div>
            
            <div class="products-grid">
                <div class="product-card">
                    <span class="product-emoji">🍭</span>
                    <h3>Sucettes Artisanales</h3>
                    <p>Des sucettes colorées fabriquées avec amour, disponibles en 12 parfums naturels différents.</p>
                </div>
                <div class="product-card">
                    <span class="product-emoji">🍬</span>
                    <h3>Bonbons Gélifiés</h3>
                    <p>Nos fameux oursons et autres formes amusantes, sans colorants artificiels.</p>
                </div>
                <div class="product-card">
                    <span class="product-emoji">🧁</span>
                    <h3>Cupcakes sucrés</h3>
                    <p>Petits gâteaux moelleux garnis de notre glaçage signature aux bonbons.</p>
                </div>
            </div>
        </div>  

        <!-- Footer -->
        <?php 
            require_once __DIR__ . '/templates/partials/_footer.php';
        ?>
    <!-- Script JS -->
    <?php 
        require_once __DIR__ . '/templates/partials/_script.php';
    ?>