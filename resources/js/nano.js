let sidebar = document.getElementById("aside");
let closeBtn = document.querySelector("aside .close-btn");
let mainTag = document.getElementById("main");
// let foot = document.getElementById("footer");
let shift = document.querySelector(".shift");
mainTag.appendChild(shift.cloneNode(true));


function Support() {
    let Modern = document.createElement("script");
    Modern.setAttribute("type", "text/javascript");
    Modern.setAttribute("src", "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js");
    console.log(document.head);
    document.head.appendChild(Modern);
}








menu.addEventListener("click", pageEvent);
closeBtn.addEventListener("click", pageEvent);
function pageEvent() {
    menu.classList.toggle("active");
    sidebar.classList.toggle("active");
    mainTag.classList.toggle("active");
}

function notOver() {
    let Cdiv = document.createElement("div");
    Cdiv.className = "not-over";
    Cdiv.innerHTML = "لا زلنا نعمل على إعداد المزيد من الدروس";
    sidebar.appendChild(Cdiv);
}
notOver();


let bar = document.getElementById("bar");
window.addEventListener("scroll", () => {
    let max = document.body.scrollHeight - innerHeight;
    bar.style.width = `${(window.scrollY / max) * 100}%`;
});



function copyCode(button) {
    let text = button.parentElement.nextElementSibling;
    let btnCont = button.innerHTML;
    var range = document.createRange();
    window.getSelection().removeAllRanges();
    range.selectNode(text);
    window.getSelection().addRange(range);
    document.execCommand('copy');
    window.getSelection().removeAllRanges();
    button.innerHTML = " &#x2714; Copeid  ";
    setTimeout(function () {
        button.innerHTML = btnCont;
    }, 2000);
}

function result(btn) {
    let show = btn.nextElementSibling;
    show.classList.toggle("view");
    // btn.classList.toggle("btn");
    let down = btn.querySelector(".fa-caret-down");
    let up = btn.querySelector(".fa-caret-up");
    down.classList.toggle("none");
    up.classList.toggle("none");
    // =====
}

// console.log(window.innerWidth)