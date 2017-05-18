// Place JS here.
// VARIABLES POUR LA FONCTION D'APPARITION DE NAV AU SCROLL
const body = document.querySelector('body'),
	  header = document.querySelector('header'),
	  sectionHome = document.querySelector('.section-home');

// apparition du background de la nav au scroll
// si la section home est présente sur la page
if (sectionHome != null) {
	addEventListener('scroll', function() {
		let bodyScroll = body.scrollTop;
		if (bodyScroll > sectionHome.offsetHeight && !header.classList.contains('header--active')) {
			header.classList.add('header--active');
		} else if (bodyScroll <= sectionHome.offsetHeight) {
			header.classList.remove('header--active');
		}
	});
}

// VARIABLES POUR LE BURGER MENU
const burgerIcon = document.querySelector('.header__burger-icon'),
	  burgerMenu = document.querySelector('.header__burger');

burgerIcon.addEventListener('click', function() {
	burgerMenu.classList.toggle('header__burger--active');
})