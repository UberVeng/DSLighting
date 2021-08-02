const swup = new Swup();

$(document).ready(function() {
  $('a.nav-link').click(function() {
    if(!($(this).is($('a#dropdownId.nav-link.dropdown-toggle')))){
      $('a.dropdown-item').removeClass("active");
      $('li.nav-item').removeClass("active");
      $(this.parentNode).addClass("active");
    }
  });
  $('a.dropdown-item').click(function() {
    $('a.dropdown-item').removeClass("active");
    $('li.nav-item').removeClass("active");
    $(this).addClass("active");
  });
});


document.addEventListener('swup:animationInDone', (event) => {    
  window.scrollTo({
    top: 0, 
    left: 0, 
    behavior: 'smooth'
  });
});
