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
