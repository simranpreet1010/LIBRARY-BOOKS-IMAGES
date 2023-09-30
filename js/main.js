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
        slidesToScroll: 3,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: false,
        centerPadding: '40px',
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });
}
  
  document.addEventListener("DOMContentLoaded", function () {
    initMenuToggle();
    initCarousel();
  });
  