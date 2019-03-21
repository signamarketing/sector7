/*MENU SCROLL FUNCTION*/
window.addEventListener('scroll', function () {
  document.body.classList[
    document.documentElement.scrollTop > 125 ? 'add' : 'remove'
  ]('scrolled');
});

/*MENU TOGGLE*/
var classOne = document.querySelector("#primary-menu");
var classTwo = document.querySelector("#open-menu-btn");
var classThree = document.querySelector("#close-menu-btn");
var classFour = document.querySelector("#navbar");
var classFive = document.querySelector(".navbar-container");

var allOpenMenuClasses = [classOne, classTwo, classThree, classFour, classFive];

function openMenu() {
  allOpenMenuClasses.forEach(function (el) {
    el.classList.add("open")
  })
}

function closeMenu() {
  allOpenMenuClasses.forEach(function (el) {
    el.classList.remove('open')
  })
}

/*LAZY LOADING*/
var lazyLoadInstance = new LazyLoad({
  elements_selector: ".lazy"
});

/**
 * Mobile blog navigation
 */
var btn = document.querySelectorAll('ul.mobile-tabs li a'),
    drp = document.querySelector('ol');

for(var b = 0; b < btn.length; b++) {
  btn[b].onclick = function() {

    if(this.parentNode.querySelector('ol') != null) {
      this.parentNode.querySelector('ol').classList.toggle('drop');
		}
		
  }
}