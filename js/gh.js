'use strict'

document.querySelector('.hamburger').addEventListener('click', function(){

  let mobileNavMenu = document.querySelector('.nav-panel');
  let body = document.querySelector('body');

  this.classList.toggle('is-active');

  mobileNavMenu.classList.toggle('active-menu');
  //body.classList.toggle('fixedPosition');

});
