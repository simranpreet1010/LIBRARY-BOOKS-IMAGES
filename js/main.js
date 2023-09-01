function initMenuToggle() {
    const mainNav = document.getElementById('main-nav');
    const menuIcon = document.getElementById('menu-icon');
    const primaryNav = document.getElementById('primary-nav');
  
    menuIcon.addEventListener('click', () => {
      mainNav.classList.toggle('toggle-menu');
    });
  }

  function initCarousel() {
    $('.slick-carousel').slick({
        slidesToShow: 3,
        dots: true,
        infinite: true,
        slidesToScroll: 1,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 768,
              settings: {
              }
            },
            {
              breakpoint: 480,
              settings: {
              }
            }
          ]
    });
}
  
  document.addEventListener("DOMContentLoaded", function () {
    initMenuToggle();
    initCarousel();
  });
  