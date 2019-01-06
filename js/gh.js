'use strict'

document.querySelector('.hamburger').addEventListener('click', function(){
  this.classList.toggle('is-active');
  let mobileNavMenu = document.getElementById('navigation-contain');
  mobileNavMenu.classList.toggle('active-menu');
});
