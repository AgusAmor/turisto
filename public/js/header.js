// HEADER STICKY
const header = document.getElementById('header');
const logo = document.getElementById('logo');
const logoScroll = document.getElementById('logoScroll');

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});


var burger = document.getElementById('burger');
var closeNavBar = document.getElementById('closeNavBar');
var headerBarMobile = document.getElementById('headerBarMobile');

if(burger){
  burger.onclick = function() {
    headerBarMobile.classList.add('openNavBar');
  };
}

if(closeNavBar){
  closeNavBar.onclick = function() {
    headerBarMobile.classList.remove('openNavBar');
};
}

window.onclick = function(event) {
    if (event.target === headerBarMobile) {
        headerBarMobile.classList.remove('openNavBar');
    }
}