document.addEventListener('DOMContentLoaded', function() {
    var serviceHeaders = document.querySelectorAll('.service-header');

    serviceHeaders.forEach(function(header) {
        header.addEventListener('click', function() {
            toggleService(this);
        });
    });

    var initialService = document.querySelector('.service[data-service="branding-marketing"] .service-header');
    toggleService(initialService);
});

function toggleService(header) {
    var content = header.nextElementSibling;
    var arrowImg = header.querySelector('.arrow');
    var serviceCategory = header.querySelector('.service-category');

    content.style.display = content.style.display === 'block' ? 'none' : 'block';

    if (content.style.display === 'block') {
        arrowImg.src = 'Button.png';
        serviceCategory.style.display = 'inline'; 
    } else {
        arrowImg.src = 'Pattern.png';
        serviceCategory.style.display = 'none'; 
    }
}