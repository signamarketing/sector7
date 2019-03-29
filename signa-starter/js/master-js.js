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

console.log('hello world');

/**
 * Calculate Reading Time to element with ".reading-time"
 * where content is surrounded by ".blog-entry-content"
 * 
 * Requires Countable.js 
 * https://github.com/RadLikeWhoa/Countable
 */

var blogContent = document.querySelector('.blog-entry-content');
if(blogContent) {
  Countable.on(blogContent, readTime);

  function readTime(counter) {
    var wpm = 200,
      estimatedRaw = counter.words / wpm,
      minutes = Math.round(estimatedRaw);
    
    var effectiveTime = (minutes < 1) ? "a couple of seconds" : minutes + " minute read";

    console.log(effectiveTime);
    document.querySelector('.reading-time').append(effectiveTime);
  }
}

/**
 * Progress bar when scrolling down blog single page
 */
if(document.querySelector(".progress-container")) {
  window.onscroll = function() {blogScroll()};
}

function blogScroll() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;

  document.querySelector(".progress-bar").style.width = scrolled + "%";
}