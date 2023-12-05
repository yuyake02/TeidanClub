document.addEventListener('DOMContentLoaded', function () {
  const menuIcon = document.getElementById('menuIcon');
  const menu = document.getElementById('menu');

  menuIcon.addEventListener('click', function () {
    menuIcon.classList.toggle('active');
    menu.classList.toggle('show');
  });
});
