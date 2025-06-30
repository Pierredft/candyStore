        // Fonction pour changer de page
        function showPage(pageId) {
            // Masquer toutes les pages
            const pages = document.querySelectorAll('.page');
            pages.forEach(page => page.classList.remove('active'));
            
            // Afficher la page sélectionnée
            document.getElementById(pageId).classList.add('active');
            
            // Mettre à jour la navigation
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => link.classList.remove('active'));
            event.target.classList.add('active');
        }

        // Gestion du formulaire
        function handleSubmit(event) {
            event.preventDefault();
            
            const formData = new FormData(event.target);
            const name = formData.get('name');
            const email = formData.get('email');
            const phone = formData.get('phone');
            const message = formData.get('message');
            
            // Simulation d'envoi
            alert(`Merci ${name} ! 🍭\n\nVotre message a été envoyé avec succès !\nNous vous répondrons rapidement à l'adresse ${email}.\n\nÀ très bientôt chez Doux Délices ! 🍬`);
            
            // Réinitialiser le formulaire
            event.target.reset();
        }

        // Animation des bonbons flottants
        function animateFloatingCandies() {
            const candies = document.querySelectorAll('.floating-candy');
            candies.forEach((candy, index) => {
                const delay = index * 1000;
                setTimeout(() => {
                    candy.style.animationDelay = `${delay}ms`;
                }, delay);
            });
        }

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            animateFloatingCandies();
            
            // Ajouter des effets de survol aux cartes produits
            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });

        // Effet de parallaxe sur les bonbons flottants
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const candies = document.querySelectorAll('.floating-candy');
            
            candies.forEach((candy, index) => {
                const speed = 0.5 + (index * 0.1);
                candy.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });