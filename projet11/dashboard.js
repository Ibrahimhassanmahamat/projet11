document.addEventListener('DOMContentLoaded', function() {
    // Navigation dans le tableau de bord
    const dashboardLinks = document.querySelectorAll('.dashboard-menu a');
    const dashboardSections = document.querySelectorAll('.dashboard-section');
    
    dashboardLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Retirer la classe active de tous les liens et sections
            dashboardLinks.forEach(l => l.classList.remove('active'));
            dashboardSections.forEach(s => s.classList.remove('active'));
            
            // Ajouter la classe active au lien cliqué
            this.classList.add('active');
            
            // Afficher la section correspondante
            const target = this.getAttribute('href').substring(1);
            document.getElementById(target).classList.add('active');
        });
    });

    // Gestion des actions sur les réservations
    document.querySelectorAll('.reservation-actions .btn-action').forEach(button => {
        button.addEventListener('click', function() {
            const reservationCard = this.closest('.reservation-card');
            const reservationId = reservationCard.querySelector('h3').textContent;
            const action = this.classList.contains('view') ? 'view' : 
                          this.classList.contains('modify') ? 'modify' :
                          this.classList.contains('cancel') ? 'cancel' : 'print';
            
            handleReservationAction(action, reservationId, reservationCard);
        });
    });

    // Gérer les actions sur les réservations
    function handleReservationAction(action, reservationId, reservationCard) {
        switch (action) {
            case 'view':
                // Afficher les détails complets
                console.log(`Voir les détails de ${reservationId}`);
                showReservationDetails(reservationId);
                break;
                
            case 'modify':
                // Modifier la réservation
                console.log(`Modifier ${reservationId}`);
                window.location.href = `reservation.html?edit=${reservationId.split('#')[1]}`;
                break;
                
            case 'cancel':
                // Annuler la réservation
                if (confirm(`Êtes-vous sûr de vouloir annuler ${reservationId}?`)) {
                    cancelReservation(reservationId, reservationCard);
                }
                break;
                
            case 'print':
                // Imprimer la réservation
                console.log(`Imprimer ${reservationId}`);
                printReservation(reservationId);
                break;
        }
    }

    // Annuler une réservation (simulation)
    function cancelReservation(reservationId, reservationCard) {
        // Simulation de chargement
        const statusSpan = reservationCard.querySelector('.status');
        statusSpan.textContent = 'Annulation en cours...';
        
        // Simulation d'annulation après 1.5s
        setTimeout(() => {
            statusSpan.textContent = 'Annulée';
            statusSpan.className = 'status cancelled';
            
            // Désactiver les boutons sauf "Voir"
            const buttons = reservationCard.querySelectorAll('.btn-action');
            buttons.forEach(btn => {
                if (!btn.classList.contains('view')) {
                    btn.disabled = true;
                    btn.style.opacity = '0.5';
                    btn.style.cursor = 'not-allowed';
                }
            });
            
            showFlashMessage('success', 'Réservation annulée avec succès');
        }, 1500);
    }

    // Afficher les détails d'une réservation
    function showReservationDetails(reservationId) {
        // Ceci est une simulation - en pratique, vous feriez une requête AJAX
        const reservationDetails = {
            id: reservationId,
            date: '15 Juin 2025',
            type: 'Mariage',
            lieu: 'Salle des fêtes, Ngaoundéré',
            materiel: [
                { nom: 'Tente grande (10x10m)', quantite: 2, prix: 50000 },
                { nom: 'Chaise pliante', quantite: 50, prix: 1000 },
                { nom: 'Table ronde (8 places)', quantite: 10, prix: 8000 },
                { nom: 'Service de couvert (12 pers.)', quantite: 5, prix: 15000 }
            ],
            total: 125000,
            statut: 'Confirmée',
            paiement: 'Mobile Money (Payé)'
        };
        
        // Créer le HTML pour les détails
        let materielHtml = '';
        reservationDetails.materiel.forEach(item => {
            materielHtml += `
                <tr>
                    <td>${item.nom}</td>
                    <td>${item.quantite}</td>
                    <td>${item.prix.toLocaleString()} FCFA</td>
                    <td>${(item.quantite * item.prix).toLocaleString()} FCFA</td>
                </tr>
            `;
        });
        
        const detailsHtml = `
            <div class="reservation-details-modal">
                <div class="modal-content">
                    <span class="close-modal">&times;</span>
                    <h2>${reservationDetails.id}</h2>
                    <div class="details-grid">
                        <div class="detail">
                            <h4>Date</h4>
                            <p>${reservationDetails.date}</p>
                        </div>
                        <div class="detail">
                            <h4>Type d'événement</h4>
                            <p>${reservationDetails.type}</p>
                        </div>
                        <div class="detail">
                            <h4>Lieu</h4>
                            <p>${reservationDetails.lieu}</p>
                        </div>
                        <div class="detail">
                            <h4>Statut</h4>
                            <p class="status ${reservationDetails.statut.toLowerCase()}">${reservationDetails.statut}</p>
                        </div>
                        <div class="detail">
                            <h4>Paiement</h4>
                            <p>${reservationDetails.paiement}</p>
                        </div>
                    </div>
                    
                    <h3>Matériel réservé</h3>
                    <table class="materiel-table">
                        <thead>
                            <tr>
                                <th>Article</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${materielHtml}
                            <tr class="total-row">
                                <td colspan="3">Total</td>
                                <td>${reservationDetails.total.toLocaleString()} FCFA</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="modal-actions">
                        <button class="btn-primary print-btn"><i class="fas fa-print"></i> Imprimer</button>
                        <button class="btn-secondary close-btn">Fermer</button>
                    </div>
                </div>
            </div>
        `;
        
        // Ajouter le modal au DOM
        document.body.insertAdjacentHTML('beforeend', detailsHtml);
        
        // Gérer la fermeture du modal
        const modal = document.querySelector('.reservation-details-modal');
        const closeBtn = document.querySelector('.close-modal, .close-btn');
        
        closeBtn.addEventListener('click', () => {
            modal.remove();
        });
        
        // Fermer en cliquant à l'extérieur
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.remove();
            }
        });
        
        // Bouton d'impression
        document.querySelector('.print-btn').addEventListener('click', () => {
            printReservation(reservationId);
        });
    }

    // Imprimer une réservation
    function printReservation(reservationId) {
        console.log(`Impression de ${reservationId}`);
        // En pratique, vous pourriez ouvrir une nouvelle fenêtre avec un format d'impression
        window.print();
    }

    // Gestion du formulaire de profil
    const profileForm = document.querySelector('.profile-form');
    if (profileForm) {
        profileForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulation de sauvegarde
            const saveBtn = this.querySelector('button[type="submit"]');
            const originalText = saveBtn.textContent;
            saveBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enregistrement...';
            saveBtn.disabled = true;
            
            setTimeout(() => {
                saveBtn.textContent = originalText;
                saveBtn.disabled = false;
                showFlashMessage('success', 'Profil mis à jour avec succès');
            }, 1500);
        });
    }

    // Gestion du formulaire de paramètres
    const settingsForm = document.querySelector('.settings-form');
    if (settingsForm) {
        settingsForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulation de sauvegarde
            const saveBtn = this.querySelector('button[type="submit"]');
            const originalText = saveBtn.textContent;
            saveBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enregistrement...';
            saveBtn.disabled = true;
            
            setTimeout(() => {
                saveBtn.textContent = originalText;
                saveBtn.disabled = false;
                showFlashMessage('success', 'Paramètres enregistrés avec succès');
            }, 1500);
        });
    }
});

// Marquer une notification comme lue
function markNotificationAsRead(notificationElement) {
    notificationElement.classList.remove('unread');
    // En pratique, vous feriez une requête AJAX pour mettre à jour le statut
}