document.addEventListener('DOMContentLoaded', () => {
    const stars = document.querySelectorAll('.star');
    const starsInput = document.getElementById('ratingValue'); 

    stars.forEach(star => {
        star.addEventListener('click', setRating);
        star.addEventListener('mouseover', setHover);
        star.addEventListener('mouseout', removeHover);
    });

    function setRating(e) {
        const starValue = e.currentTarget.getAttribute('data-value');
        starsInput.value = starValue; 
        updateStars(starValue);
    }

    function setHover(e) {
        const hoverValue = e.currentTarget.getAttribute('data-value');
        updateStars(hoverValue, false);
    }

    function removeHover() {
        updateStars(starsInput.value);
    }

    function updateStars(value, persist = true) {
        stars.forEach(star => {
            const starValue = star.getAttribute('data-value');
            if (starValue <= value) {
                star.style.color = 'gold'; 
            } else if (persist) {
                star.style.color = 'grey'; 
            }
        });
    }
});
