document.addEventListener('DOMContentLoaded', function() {
    var serviceHeaders = document.querySelectorAll('.service-header');

    serviceHeaders.forEach(function(header) {
        header.addEventListener('click', function() {
            var content = this.nextElementSibling;
            var arrowImg = this.querySelector('.arrow');
            
            // Afficher/cacher le contenu
            content.style.display = content.style.display === 'block' ? 'none' : 'block';
            
            // Changer l'image de l'icône de flèche
            if (content.style.display === 'block') {
                arrowImg.src = 'Button.png'; // Lorsque le contenu est déroulé
            } else {
                arrowImg.src = 'Pattern.png'; // Lorsque le contenu est caché
            }
        });
    });
});
