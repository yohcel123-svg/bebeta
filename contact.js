/* =========================================
    NAVBAR DROPDOWN
========================================= */
function toggleMenu(element) {
    const currentItem = element.parentElement;
    const allItems = document.querySelectorAll('.nav-item');

    allItems.forEach(function(item) {
        if (item !== currentItem) {
            item.classList.remove('active');
        }
    });

    currentItem.classList.toggle('active');
}

document.addEventListener('click', function(event) {
    if (!event.target.closest('.nav-item')) {
        document.querySelectorAll('.nav-item').forEach(function(item) {
            item.classList.remove('active');
        });
    }
});

/* =========================================
   HAMBURGER MENU (mobile/tablet)
========================================= */
const navbarToggle = document.getElementById('navbarToggle');
const navMenu = document.getElementById('navMenu');
const navOverlay = document.getElementById('navOverlay');

function closeMobileMenu() {
    navbarToggle.classList.remove('open');
    navMenu.classList.remove('open');
    navOverlay.classList.remove('show');

    document.querySelectorAll('.nav-item').forEach(function(item) {
        item.classList.remove('active');
    });
}

function openMobileMenu() {
    navbarToggle.classList.add('open');
    navMenu.classList.add('open');
    navOverlay.classList.add('show');
}

navbarToggle.addEventListener('click', function(event) {
    event.stopPropagation();
    if (navMenu.classList.contains('open')) {
        closeMobileMenu();
    } else {
        openMobileMenu();
    }
});

navOverlay.addEventListener('click', closeMobileMenu);

window.addEventListener('resize', function() {
    if (window.innerWidth >= 992) {
        closeMobileMenu();
    }
});

/* =========================================
   NAVBAR SCROLL BEHAVIOR
========================================= */
const navbar = document.querySelector('.navbar');
const heroSection = document.querySelector('.rooms-hero');

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    let heroHeight = heroSection.offsetHeight;

    if (scrollTop < heroHeight) {
        navbar.classList.remove('navbar-visible', 'navbar-scrolled', 'navbar-slim');
    } else {
        navbar.classList.add('navbar-visible', 'navbar-scrolled', 'navbar-slim');
    }
});

/* =========================================
   REVEAL ANIMATIONS (FOOTER & CONTENT)
========================================= */
const revealElements = document.querySelectorAll('#footerTop, #footerMain, .contact-info, .expanded-contact-wrapper, .arrival-item');

if (revealElements.length) {
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    revealElements.forEach(item => revealObserver.observe(item));
}