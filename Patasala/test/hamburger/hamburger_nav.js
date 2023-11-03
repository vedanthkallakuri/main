const btn = document.getElementById("nav-open-btn");
const span = document.getElementById("nav-open-span");
const nav = document.getElementById("nav");
btn.addEventListener("click", ()=>{
    span.classList.toggle("active");
    nav.classList.toggle("active");
})
