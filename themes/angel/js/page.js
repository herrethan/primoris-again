(function(window, document) {

  var page = document.querySelector('body');
  var nav = document.querySelector('nav');
  var hamburger = document.querySelector('nav .hamburger');

  // mobile nav
  if(hamburger){
    hamburger.addEventListener('click', function(){
      page.classList.toggle('nav-opened');
    });
  }

  // esc key closes nav
  page.addEventListener('keydown', function(e){
    var code = e.keyCode || e.which;
    if(code === 27) page.classList.remove('nav-opened');
  });

})(window, document);
