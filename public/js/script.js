document.addEventListener("DOMContentLoaded", function() {
    const items = document.querySelectorAll('.item');
    
    // Intersection Observer to trigger animations when elements come into view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, 150);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });
    
    // Observe each item
    items.forEach(item => {
        observer.observe(item);
    });
    
    // Add subtle hover effect to paragraphs
    const paragraphs = document.querySelectorAll('p');
    paragraphs.forEach(p => {
        p.addEventListener('mouseover', () => {
            p.style.color = '#000';
        });
        
        p.addEventListener('mouseout', () => {
            p.style.color = '';
        });
    });
});

// Function for back button
function goBack() {
    // Add fade-out animation before going back
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';
    
    setTimeout(() => {
        window.location.href = '/';
    }, 500);
}