// ===============================
// Smooth Scrolling
// ===============================

const links = document.querySelectorAll('a[href^="#"]');

links.forEach(link => {
    link.addEventListener('click', function (e) {

        const target = document.querySelector(
            this.getAttribute('href')
        );

        if (target) {
            e.preventDefault();

            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});


// ===============================
// Navbar Background on Scroll
// ===============================

const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {

    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }

});


// ===============================
// Active Navigation Links
// ===============================

const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('.nav-link');

window.addEventListener('scroll', () => {

    let current = '';

    sections.forEach(section => {

        const sectionTop = section.offsetTop;

        if (pageYOffset >= sectionTop - 200) {
            current = section.getAttribute('id');
        }

    });

    navLinks.forEach(link => {

        link.classList.remove('active');

        if (
            link.getAttribute('href') === `#${current}`
        ) {
            link.classList.add('active');
        }

    });

});


// ===============================
// Scroll Reveal Animation
// ===============================

const revealElements = document.querySelectorAll(
    '.skill-card, .project-card'
);

function revealOnScroll() {

    revealElements.forEach(element => {

        const windowHeight = window.innerHeight;
        const revealTop = element.getBoundingClientRect().top;

        if (revealTop < windowHeight - 100) {
            element.classList.add('show');
        }

    });

}

window.addEventListener('scroll', revealOnScroll);

revealOnScroll();


// ===============================
// Typing Animation
// ===============================

const typingElement = document.querySelector('.hero-subtitle');

if (typingElement) {

    const text = 'Junior Backend Laravel Developer';

    let index = 0;

    typingElement.innerHTML = '';

    function typeEffect() {

        if (index < text.length) {

            typingElement.innerHTML += text.charAt(index);

            index++;

            setTimeout(typeEffect, 70);

        }

    }

    typeEffect();

}
