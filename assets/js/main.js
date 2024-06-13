
// Установка персонализированных полей ввода
// $(' input').styler();
// $(' input[type="radio"]').styler();



// Анимация блоков при скроллинге
function scrollingAnimation(section) {

  let options = {
      root: null,
      rootMargin: "0px",
      threshold: 0.5,
  };

  let callback = (entries, observer) => {
      entries.forEach((entry) => {
          if (entry.isIntersecting) {
              // Элемент виден внутри области наблюдения.
              // Выполните необходимые действия.
              document.querySelector(`${section}`).classList.add('scrolled');
          } else {
              // Элемент скрыт вне области наблюдения.
              // Выполните необходимые действия.
          }

      });
  };
  let observer = new IntersectionObserver(callback, options);

  let target = document.querySelector(`${section}`);
  observer.observe(target);
}
if (document.querySelector('.homepage')) {
  scrollingAnimation('.header__slider');
  scrollingAnimation('.catalogue__section');
  scrollingAnimation('.banner-conf__section');
  scrollingAnimation('.furniture__section');
  scrollingAnimation('.banner-part__section');
  scrollingAnimation('.exclusive__section');
  scrollingAnimation('.collection__section');
  scrollingAnimation('.trust__section');
}



// Обычный слайдер SwiperJS
if (document.querySelector(".designers")) {
  var swiperDes = new Swiper(".projects__items", {
      slidesPerView: "1.3",
      spaceBetween: 30,
      breakpoints: {
          640: {
              slidesPerView: "2",
              spaceBetween: 30,
          },
          1024: {
              slidesPerView: "3",
              spaceBetween: 30,
          },
      },

      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
      },
      keyboard: {
          enabled: true,
          onlyInViewport: false
      },
      loop: true,
  });
};





// Слайдер появляется при определенной ширине SwiperJS


function swiperDoors() {
  if (document.querySelector(".catalogue__items") && window.matchMedia('(max-width: 800px)').matches) {

      document.querySelector('.catalogue__items').classList.add('swiper');
      document.querySelector('.catalogue__items > div').classList.add('swiper-wrapper');
      document.querySelectorAll('.catalogue__item').forEach(el => el.classList.add('swiper-slide'));

      var swiperDoors = new Swiper(".catalogue__items", {
          slidesPerView: "1.3",
          spaceBetween: 30,
          breakpoints: {

              640: {
                  slidesPerView: "2",
                  spaceBetween: 30,
                  loop: true,
              },


          },
          navigation: {
              nextEl: ".catalogue__section .swiper-button-next",
              prevEl: ".catalogue__section .swiper-button-prev",
          },
          keyboard: {
              enabled: true,
              onlyInViewport: false
          },
          loop: true,
          // spaceBetween: 30,

      });
      window.addEventListener('resize', function () {
          swiperDoors.update(); // Обновляем Swiper
      });

  }
  if (document.querySelector(".catalogue__items") && window.matchMedia('(min-width: 801px)').matches) {
      document.querySelector('.catalogue__items').classList.remove('swiper');
      document.querySelector('.catalogue__items > div').classList.remove('swiper-wrapper');
      document.querySelectorAll('.catalogue__item').forEach(el => el.classList.remove('swiper-slide'));

  }
};
swiperDoors();



// Объекту присваивается или удаляется active при наведении/отдалении
$(".socialmedia__block-vk").on("mouseover", function () {
  $('.socialmedia__block-vk').addClass('active')
});
$(".socialmedia__block-vk").on("mouseout", function () {
  $('.socialmedia__block-vk').removeClass('active')

});




// Плавная прокрутка на ссылках по якорям
const anchors = document.querySelectorAll('a[href*="#"]')
for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    const blockID = anchor.getAttribute('href').substr(1)

    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}



// // "Показать еще" функция
// window.onload = function () {
//   var box = document.getElementsByClassName('works__line-blocks');
//   var btn = document.querySelector('.btn__block-more a');
//   for (let i = 2; i < box.length; i++) {
//     box[i].style.display = "none";
//   }

//   var countD = 2;
//   btn.addEventListener("click", function () {
//     var box = document.getElementsByClassName('works__line-blocks');
//     countD += 1;
//     if (countD <= box.length) {
//       for (let i = 0; i < countD; i++) {
//         $(box[i]).slideDown("slow");
//       }
//     }
//     if (countD == box.length) {
//       btn.style.display = "none";
//     }

//   })
// }




// Функция "Открыть фото в модальном окне" на весь экран
Fancybox.bind(".fancybox-open-img", {
  // Your options
});


// Открытие страницы "Спасибо" при отправке контактной формы
document.addEventListener('wpcf7mailsent', function (event) {
  location = 'https://example.com/thanks/';
}, false);



// Выборка бесконечного кол-ва элементов и изменения чего-либо внутри каждого из них при наведении на каждый 
document.querySelectorAll('.collection__item')
.forEach(el => el.addEventListener('mouseover', function (e) {
    $(this.querySelector(".collection__item-hide-list")).slideDown('slow');
}));

document.querySelectorAll('.collection__item')
.forEach(el => el.addEventListener('mouseleave', function (e) {
    $(this.querySelector(".collection__item-hide-list")).slideUp('slow');
}));




// Копирование текста при нажатии на него
/*
function copyText(elem) {
  const str = document.getElementById(elem).innerText;
  const el = document.createElement('textarea');
  el.value = str;
  el.setAttribute('readonly', '');
  el.style.position = 'absolute';
  el.style.left = '-9999px';
  document.body.appendChild(el);
  el.select();
  document.execCommand('copy');
  document.body.removeChild(el);
  $(`.${elem}`).addClass('copyied');
  setTimeout(function () {
      $(`.${elem}`).removeClass('copyied');
  }, 1500);
}
*/
