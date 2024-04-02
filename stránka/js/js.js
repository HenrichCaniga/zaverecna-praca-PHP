const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
});



document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
}))

const pages = document.querySelectorAll(".strana");
    const translateAmount = 100; 
    let translate = 0;

    slide = (direction) => {

      direction === "next" ? translate -= translateAmount : translate += translateAmount;

      pages.forEach(
        pages => (pages.style.transform = `translateX(${translate}%)`)
      );
    }

    document.addEventListener('DOMContentLoaded', function () {
      const akordeony = document.querySelectorAll('.akordeon');
  
      akordeony.forEach(function (akordeon) {
          const kategoria = akordeon.querySelector('.kategoria');
  
          kategoria.addEventListener('click', function () {
              const vyherca = this.nextElementSibling;
  
              if (vyherca.style.display === 'block') {
                  vyherca.style.display = 'none';
              } else {
                  vyherca.style.display = 'block';
              }
          });
      });
  });

