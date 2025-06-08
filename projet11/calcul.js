// calcul.js

const quantities = {};
const prices = {};
let sommeElement;

// Met à jour les quantités et le total affiché
function updateDisplay() {
    let total = 0;

    for (let id in quantities) {
        const qty = quantities[id];
        const price = prices[id];

        total += qty * price;

        const span = document.getElementById("qty-" + id);
        if (span) {
            span.textContent = qty;
        }
    }

    if (sommeElement) {
        sommeElement.textContent = total + " F CFA";
    }
}

// Fonction appelée au chargement de la page
function setupProductClicks() {
    sommeElement = document.getElementById("somme");
    const products = document.querySelectorAll(".product-card");

    products.forEach((product, index) => {
        const id = "product" + index;
        const priceText = product.querySelector(".price").textContent.trim();
        const price = parseInt(priceText.replace(/[^\d]/g, ''));

        prices[id] = price;
        quantities[id] = 0;

        const img = product.querySelector("img");

        if (img) {
            img.addEventListener("click", () => {
                quantities[id]++;
                updateDisplay();
            });
        }

        // Ajout de l'affichage de la quantité
        const info = product.querySelector(".product-info");
        const qtyDisplay = document.createElement("p");
        qtyDisplay.innerHTML = `Quantité : <span id="qty-${id}">0</span>`;
        info.appendChild(qtyDisplay);
    });
}

document.addEventListener("DOMContentLoaded", setupProductClicks);
