// HEADER STICKY
var header = document.getElementById('header');
var logo = document.getElementById('logo');
var logoScroll = document.getElementById('logoScroll');

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});
///////////


// BURGER MENU
var headerBarMobile = document.getElementById('headerBarMobile');

document.getElementById('burger').onclick = function() {
  headerBarMobile.style.display='block';
  setTimeout(function() {
    headerBarMobile.style.opacity='1';
    headerBarMobile.style.transform='translateX(0%)';
  }, 100);
};

document.getElementById('closeNavBar').onclick = function() {
  headerBarMobile.style.opacity='0';
  headerBarMobile.style.transform='translateX(100%)';
  setTimeout(function() {
    headerBarMobile.style.display='none';
  }, 500);
};
///////////

// MODAL ERROR
var modalErrorContainer = document.getElementById('modalErrorContainer');

document.getElementById('btn_cerrarModalError').onclick = function (){
  modalErrorContainer.style.opacity='0';
  modalErrorContainer.style.transform='translateY(-100%)';
  setTimeout(function() {
    modalErrorContainer.style.display='none';
  }, 500);
  openModal();
}