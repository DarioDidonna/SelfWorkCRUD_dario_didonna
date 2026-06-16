// resources/js/app.js

document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    const speed = 100; // Controlla la fluidità (passi totali dell'animazione)

    const startCounter = (counter) => {
        const target = parseFloat(counter.getAttribute('data-target'));
        const isDecimal = counter.getAttribute('data-target').includes('.');
        
        // Manteniamo il valore corrente in una variabile numerica pulita
        let currentCount = 0; 
        const increment = target / speed;

        const updateCount = () => {
            currentCount += increment;

            if (currentCount < target) {
                if (isDecimal) {
                    // Mantiene esattamente un decimale per il voto (es: 4.8)
                    counter.innerText = currentCount.toFixed(1);
                } else {
                    // Arrotonda all'intero per gli altri numeri
                    counter.innerText = Math.floor(currentCount);
                }
                // Richiama il prossimo frame dell'animazione in modo super fluido
                requestAnimationFrame(updateCount);
            } else {
                // Forza il valore finale preciso per evitare arrotondamenti errati alla fine
                counter.innerText = isDecimal ? target.toFixed(1) : target;
            }
        };

        // Usa requestAnimationFrame per animazioni fluide a 60fps
        requestAnimationFrame(updateCount);
    };

    // Observer per attivare l'animazione solo quando la sezione è visibile
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 }); // Parte non appena la sezione spunta del 20% sullo schermo

    counters.forEach(counter => observer.observe(counter));
});