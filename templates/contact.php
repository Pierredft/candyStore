<!-- Balise head -->
<?php 
    require_once __DIR__ . '/partials/_head.php';
?>

    <!-- Bonbons flottants -->
    <?php 
        require_once __DIR__ . '/partials/_bonbons.php';
    ?>

    <!-- Navigation -->
    <?php 
        require_once __DIR__ . '/partials/_nav.php';
    ?>

            <form class="contact-form" onsubmit="handleSubmit(event)">
                <h2>📞 Contactez-nous</h2>
                <div class="form-group">
                    <label for="name">Nom complet :</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone :</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" required placeholder="Parlez-nous de vos envies sucrées..."></textarea>
                </div>
                <button type="submit" class="submit-btn">Envoyer le message 💌</button>
            </form>
            
            <div class="contact-info">
                <h3>🏪 Nos Informations</h3>
                <p><strong>📍 Adresse :</strong> 123 Rue des Bonbons, 75001 Paris</p>
                <p><strong>📞 Téléphone :</strong> 01 23 45 67 89</p>
                <p><strong>📧 Email :</strong> contact@douxdelices.fr</p>
                <p><strong>🕒 Horaires :</strong> Lundi-Samedi 9h-19h, Dimanche 10h-18h</p>
                <p><strong>🚗 Parking :</strong> Gratuit devant la boutique</p>
            </div>
        </div>

        <!-- Footer -->
    <!-- Footer -->
        <?php 
            require_once __DIR__ . '/partials/_footer.php';
        ?>
    <!-- Script JS -->
    <?php 
        require_once __DIR__ . '/partials/_script.php';
    ?>