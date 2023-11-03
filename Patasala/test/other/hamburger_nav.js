const navbtnclose = document.getElementById('nav-close-btn');
const navbtnopen = document.getElementById('nav-open-btn');
const nav = document.getElementById('nav');

navbtnopen.addEventListener('click', () => {
    nav.classList.toggle("active");
    navbtnclose.classList.toggle("active");
    navbtnopen.classList.toggle("active");
})
