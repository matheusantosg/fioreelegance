// // Toggle Menu
// let openMenu = document.querySelector('.open__menu');
// let ico = document.querySelector('.hamburguer-line')
// let menu = document.querySelector('.menu')

// openMenu.addEventListener('click', (e) => {
//     e.preventDefault();

//     openMenu.classList.toggle('active')
//     menu.classList.toggle('active')
// });

// $('[data-group]').each(function () {
//     var $allTarget = $(this).find('[data-target]'),
//         $allClick = $(this).find('[data-click]'),
//         activeClass = 'active';

//     $allClick.first().addClass(activeClass);

//     $allClick.click(function (e) {
//         e.preventDefault();

//         var id = $(this).data('click'),
//             $target = $('[data-target="' + id + '"]');

//         $allClick.removeClass(activeClass)
//         $allTarget.removeClass(activeClass);

//         $target.addClass(activeClass);
//         $(this).addClass(activeClass)
//     });

//     // $allClose.click(function (e) {
//     //     e.preventDefault();

//     //     $allTarget.removeClass(activeClass);
//     // });
// });

const allFunctions = {
  openMenu: () => {
    const $btnMenu = document.querySelector('.header__menu-mobile')

    $btnMenu.addEventListener('click', () => {
      $btnMenu.classList.toggle('active')
      $btnMenu.nextElementSibling.classList.toggle('active')
    })
  },

  init: () => {
    allFunctions.openMenu()
  }
}

allFunctions.init()