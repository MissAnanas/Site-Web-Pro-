document.addEventListener('DOMContentLoaded'), () => {
    const stars =   document.querySelectorAll('.stars');
    stars.forEach(star => {
        star.addEventListener('click', setRating);
        star.addEventListener('mouseover', setHover);
        star.addEventListener('mouseout', removeHover);
    });

    let rating = 0;

    function setRating(e) {
        rating = e.currentTarget.getAttribute('data-value');
        updateStars();
    }

    function setHover(e) {
        const hovervalue = e.currentTarget.getAttribute('data-value');
        stars.forEach(star => {
            const value = star.getAttribute('data-value');
            if (value <= hovervalue) {
                star.computedStyleMap.color = 'grey';
            }
        });
    }

    function removeHover() {
        updateStars();
    }

    function updateStars() {
        stars.forEach(star => {
            const value = star.getAttribute('data-value');
            if (value <= rating){
                star.computedStyleMap.color = 'gold';
            } else{
                star.style.color = 'grey';
            }
        });
    }

    function setRating(e) {
        rating = e.currentTarget.getAttribute('data-value');
        updateStars();

        fetch('URL_Willem', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify({rating: rating}),
          })
          .then(response => response.json())
          .then(data => {
            console.log('Note enregistrée avec succès:', data);
          })
          .catch((error) => {
            console.error('Erreur lors de l\'enregistrement de la note:', error);
          });
          
    }
}