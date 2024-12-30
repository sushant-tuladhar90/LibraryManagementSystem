</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>



<script>
    // Smooth scroll function
    function smoothScroll(target, duration) {
        var targetElement = document.querySelector(target);
        var targetPosition = targetElement.offsetTop;
        var startPosition = window.pageYOffset;
        var distance = targetPosition - startPosition;
        var startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            var timeElapsed = currentTime - startTime;
            var scrollY = ease(timeElapsed, startPosition, distance, duration);
            window.scrollTo(0, scrollY);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        }

        function ease(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(animation);
    }

    // Smooth scroll event listeners
    var homeLink = document.querySelector('.navList ul li:nth-child(1) a');
    var servicesLink = document.querySelector('.navList ul li:nth-child(2) a');
    var contactLink = document.querySelector('.navList ul li:nth-child(3) a');
    var aboutLink = document.querySelector('.navList ul li:nth-child(4) a');

    homeLink.addEventListener('click', function(event) {
        event.preventDefault();
        smoothScroll('#home', 1000);
    });

    servicesLink.addEventListener('click', function(event) {
        event.preventDefault();
        smoothScroll('#services', 1000);
    });

    contactLink.addEventListener('click', function(event) {
        event.preventDefault();
        smoothScroll('#contact', 1000);
    });

    aboutLink.addEventListener('click', function(event) {
        event.preventDefault();
        smoothScroll('#about', 1000);
    });


        </script>
      
<script>
    /* global bootstrap: false */
(() => {
  'use strict'
  const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(tooltipTriggerEl => {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()
</script>
        
    </body>