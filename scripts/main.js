document.addEventListener('DOMContentLoaded', function () {
  setTimeout(() => {
    const hero = new HeroSlider('.swiper-container');
    hero.start();
  }, 4000);
  const hero2 = new HeroSlider2('.swiper-container2');
  hero2.start();
  // <!-------- /HeroSlider-animation -------->
  const cb = function (el, inview) {
    if (inview) {
      const ta = new TextAnimation(el);
      ta.animate();
    }
  };
  const so = new ScrollObserver('.clip-js', cb, {
    rootMargin: '-100px 0px',
  });
  // <!-------- /text-animation -------->
  const so2 = new ScrollObserver(
    '.appear',
    (el, inview) => {
      if (inview) {
        el.classList.add('inview');
      } else {
        el.classList.remove('inview');
      }
    }, {
      rootMargin: '-130px 0px',
    }
  );
  // <!-------- /inview-animation -------->
  const so3 = new ScrollObserver(
    '.cover-slide',
    (el, inview) => {
      if (inview) {
        el.classList.add('inview');
      } else {
        el.classList.remove('inview');
      }
    }, {
      rootMargin: '-100px 0px',
    }
  );
  // <!-------- /imgSlide-animation -------->
});