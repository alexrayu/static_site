/**
 * Menu section.
 */
var menuToggle = document.querySelector('.menu-toggle');
if (menuToggle) {
  menuToggle.addEventListener('click', function () {
    document.body.classList.toggle('menu-open');
    menuToggle.classList.toggle('open');
  });
}
var closePanel = document.querySelector('.menu-close');
if (closePanel) {
  closePanel.addEventListener('click', function () {
    document.body.classList.remove('menu-open');
    menuToggle.classList.remove('open');
  });
}

/**
 * Accordion.
 */
const elements = document.querySelectorAll('.accordion .element');

elements.forEach(element => {
  let btn = element.querySelector('.header .trigger');
  var content = element.querySelector('.content');

  btn.addEventListener('click', (e) => {
    let parent = e.target.closest('.element');
    if (parent.classList.contains('open')) {
      parent.classList.remove('open');
    }
    else {
      elements.forEach(elt => {
        elt.classList.remove('open');
        parent.classList.add('open');
      });
    }
  });
});
