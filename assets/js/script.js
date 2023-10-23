document.addEventListener('DOMContentLoaded', function() {
    var parallaxElements = document.querySelectorAll('.parallax-bg');
    parallaxElements.forEach(function(element) {
      element.style.transform = 'translateZ(-1px) scale(1.5)';
    });
  });