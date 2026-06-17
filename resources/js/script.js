document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    const speed = 100; 
    const startCounter = (counter) => {
        const target = parseFloat(counter.getAttribute('data-target'));
        const isDecimal = counter.getAttribute('data-target').includes('.');
        
        let currentCount = 0; 
        const increment = target / speed;

        const updateCount = () => {
            currentCount += increment;

            if (currentCount < target) {
                if (isDecimal) {
                    counter.innerText = currentCount.toFixed(1);
                } else {
                    counter.innerText = Math.floor(currentCount);
                }
                requestAnimationFrame(updateCount);
            } else {
                counter.innerText = isDecimal ? target.toFixed(1) : target;
            }
        };

        requestAnimationFrame(updateCount);
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 }); 

    counters.forEach(counter => observer.observe(counter));
});