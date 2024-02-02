document.addEventListener('DOMContentLoaded'), () => {
    const stars = 
    document.querySelectorAll('.stars');
    stars.forEach(star => {
        star.addEventListener('click', setRating);
        star.addEventListener('mouseover', setHover);
        star.addEventListener('mouseout', removeHover);
    });

    let rating = 0;

    function setRating(e) {
        rating = e.currentTarget.getAttribute
    }


    }