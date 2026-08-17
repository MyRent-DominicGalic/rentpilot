
// Smooth scroll
document.querySelectorAll('a[href^="#"]:not(.no-scroll)').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});




// Get all "navbar-burger" elements
var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.js-menu-trigger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function($el) {
        $el.addEventListener('click', function() {
            //window.scrollTo(0, 0);

            // Get the "body" element
            var $body = document.getElementsByTagName("BODY")[0];

            // Toggle the class on "body"
            $body.classList.toggle('nav-open');
            $body.classList.add('scrolled');

        });
    });
}




  addEventListener('page:before-visit', function() {
      document.querySelector('body').classList.remove('nav-open');
  });

  
  addEventListener('page:loaded', function() {

        // Handle all .js-dropdown elements
    document.querySelectorAll('.js-dropdown').forEach((dropdown) => {

        // Dropdown Toggle
        dropdown.querySelectorAll('.js-dropdown-toggle').forEach((toggle) => {
            toggle.addEventListener('click', (e) => {
                e.target.parentElement.classList.toggle('js-dropdown-open');
            });
        });

        // Close dropdown if clicked outside
        window.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove('js-dropdown-open');
            }
        });

    });

    // Add "scrolled" class when passing window height
    let scrollpos = window.scrollY;
    const body = document.querySelector("body");
    const window_height = window.screen.height;

    const add_class_on_scroll = () => body.classList.add("scrolled");
    const remove_class_on_scroll = () => body.classList.remove("scrolled");

    window.addEventListener('scroll', function() {
        scrollpos = window.scrollY;

        if (scrollpos >= window_height) {
            add_class_on_scroll();
        } else {
            remove_class_on_scroll();
        }
    });

  })
