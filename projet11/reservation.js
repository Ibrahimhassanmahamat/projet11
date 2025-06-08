document.addEventListener('DOMContentLoaded', function() {
    // Gestion des quantités de matériel
    document.querySelectorAll('.qty-btn').forEach(button => {
        button.addEventListener('click', function() {
            const action = this.classList.contains('plus') ? 'increment' : 'decrement';
            const item = this.getAttribute('data-item');
            const input = document.getElementById(`${item}-qty`);
            let value = parseInt(input.value);
            
            if (action === 'increment') {
                value += 1;
            } else if (action === 'decrement' && value > 0) {
                value -= 1;
            }
            
            input.value = value;
            updateReservationSummary();
        });
    });

    // Validation du formulaire de disponibilité
    const disponibiliteForm = document.getElementById('disponibiliteForm');
    if (disponibiliteForm) {
        disponibiliteForm.addEventListener('submit', function(e) {
            e.preventDefault();
            checkDisponibilite();
        });
    }

    // Validation du formulaire de réservation
    const reservationForm = document.getElementById('reservationForm');
    if (reservationForm) {
        reservationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            submitReservation();
        });
    }

    // Mettre à jour le récapitulatif de la réservation
    function updateReservationSummary() {
        // Implémentez cette fonction pour afficher un récapitulatif
    }

    // Vérifier la disponibilité (simulation)
    function checkDisponibilite() {
        const date = document.getElementById('date').value;
        const type = document.getElementById('type').value;
        
        // Simulation de chargement
        const resultsContainer = document.getElementById('resultsContainer');
        resultsContainer.innerHTML = `
            <div class="loading">
                <i class="fas fa-spinner fa-spin"></i>
                <p>Recherche des disponibilités...</p>
            </div>
        `;
        
        // Simulation de réponse après 1.5s
        setTimeout(() => {
            // Ceci est une simulation - en pratique, vous feriez une requête AJAX
            const disponibilites = simulateDisponibilite(date, type);
            displayDisponibiliteResults(disponibilites);
        }, 1500);
    }

    // Simuler des données de disponibilité
    function simulateDisponibilite(date, type) {
        // Données simulées - à remplacer par une vraie API
        const items = [
            { id: 1, name: 'Tente grande (10x10m)', type: 'tente', disponible: true, quantity: 5 },
            { id: 2, name: 'Tente moyenne (6x6m)', type: 'tente', disponible: true, quantity: 8 },
            { id: 3, name: 'Chaise pliante', type: 'chaise', disponible: true, quantity: 200 },
            { id: 4, name: 'Table ronde (8 places)', type: 'table', disponible: false, quantity: 0 },
            { id: 5, name: 'Table rectangulaire', type: 'table', disponible: true, quantity: 15 },
            { id: 6, name: 'Service de couvert (12 pers.)', type: 'couvert', disponible: true, quantity: 20 }
        ];
        
        // Filtrer par type si spécifié
        if (type !== 'all') {
            return items.filter(item => item.type === type);
        }
        
        return items;
    }

    // Afficher les résultats de disponibilité
    function displayDisponibiliteResults(items) {
        const resultsContainer = document.getElementById('resultsContainer');
        
        if (items.length === 0) {
            resultsContainer.innerHTML = `
                <div class="no-results">
                    <i class="fas fa-calendar-times"></i>
                    <p>Aucune disponibilité pour cette date</p>
                </div>
            `;
            return;
        }
        
        let html = '';
        items.forEach(item => {
            html += `
                <div class="result-card">
                    <h3>${item.name}</h3>
                    <p>Type: ${item.type}</p>
                    <p>Quantité disponible: ${item.quantity}</p>
                    <p class="${item.disponible ? 'disponible' : 'indisponible'}">
                        ${item.disponible ? 'Disponible' : 'Indisponible'}
                    </p>
                    ${item.disponible ? '<button class="btn-primary" onclick="addToReservation('${item.id}')">Ajouter à ma réservation</button>' : ''}
                </div>
            `;
        });
        
        resultsContainer.innerHTML = html;
    }

    // Soumettre la réservation (simulation)
    function submitReservation() {
        // Récupérer les données du formulaire
        const formData = {
            nom: document.getElementById('nom').value,
            email: document.getElementById('email').value,
            telephone: document.getElementById('telephone').value,
            adresse: document.getElementById('adresse').value,
            eventDate: document.getElementById('event-date').value,
            eventType: document.getElementById('event-type').value,
            eventLocation: document.getElementById('event-location').value,
            eventNotes: document.getElementById('event-notes').value,
            tenteQty: document.getElementById('tente-qty').value,
            chaiseQty: document.getElementById('chaise-qty').value,
            tableQty: document.getElementById('table-qty').value,
            couvertQty: document.getElementById('couvert-qty').value,
            paymentMethod: document.querySelector('input[name="payment"]:checked').value
        };
        
        // Validation simple
        if (!formData.nom || !formData.email || !formData.telephone || !formData.eventDate) {
            showFlashMessage('error', 'Veuillez remplir tous les champs obligatoires');
            return;
        }
        
        // Simulation d'envoi
        console.log('Données de réservation:', formData);
        
        // Simulation de réponse
        setTimeout(() => {
            showFlashMessage('success', 'Votre réservation a été enregistrée avec succès!');
            
            // Redirection vers le tableau de bord (simulation)
            setTimeout(() => {
                window.location.href = 'dashboard.html';
            }, 2000);
        }, 1500);
    }
});

// Fonction globale pour ajouter à la réservation
function addToReservation(itemId) {
    // Implémentez cette fonction pour ajouter des éléments à la réservation
    console.log(`Ajouter l'élément ${itemId} à la réservation`);
    showFlashMessage('success', 'Article ajouté à votre réservation');
}