// Menu Burger pour mobile
document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.burger');
    const navLinks = document.querySelector('.nav-links');
    
    burger.addEventListener('click', function() {
        navLinks.classList.toggle('active');
        burger.classList.toggle('active');
    });

    // Fermer le menu lorsqu'un lien est cliqué (pour mobile)
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
            burger.classList.remove('active');
        });
    });

    // Animation au défilement
    window.addEventListener('scroll', animateOnScroll);
});

// Animation des éléments au défilement
function animateOnScroll() {
    const elements = document.querySelectorAll('.feature-card, .materiel-card, .result-card');
    
    elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2;
        
        if (elementPosition < screenPosition) {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }
    });
}

// Initialiser les animations
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.feature-card, .materiel-card, .result-card');
    elements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });
    
    // Lancer l'animation une fois que tout est chargé
    setTimeout(animateOnScroll, 100);
});

// Gestion des messages flash (succès, erreurs)
function showFlashMessage(type, message) {
    const flash = document.createElement('div');
    flash.className = `flash-message ${type}`;
    flash.innerHTML = `
        <p>${message}</p>
        <span class="close-flash">&times;</span>
    `;
    
    document.body.appendChild(flash);
    
    // Fermer le message après 5s ou quand on clique
    setTimeout(() => {
        flash.remove();
    }, 5000);
    
    flash.querySelector('.close-flash').addEventListener('click', () => {
        flash.remove();
    });
}

// Exemple d'utilisation:
// showFlashMessage('success', 'Votre réservation a été confirmée!');
// showFlashMessage('error', 'Une erreur est survenue');