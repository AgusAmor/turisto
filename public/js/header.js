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


var headerBarMobile = document.getElementById('headerBarMobile');

document.getElementById('burger').onclick = function() {
  headerBarMobile.classList.add('openNavBar');
};

document.getElementById('closeNavBar').onclick = function() {
  headerBarMobile.classList.remove('openNavBar');
};