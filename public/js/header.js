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
  headerBarMobile.style.opacity='1';
  headerBarMobile.style.transform='translateX(0%)';
};

document.getElementById('closeNavBar').onclick = function() {
  headerBarMobile.style.opacity='0';
  headerBarMobile.style.transform='translateX(100%)';
};