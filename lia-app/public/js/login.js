$(document).ready(function () {
    $(".signIn").click(function () {
        $(".loginNav").toggle("slow");
    });
});

function slideToggle(target, duration = 500) {
    if (window.getComputedStyle(target).display === "none") {
        return slideDown(target, duration);
    } else {
        return slideUp(target, duration);
    }
}

function slideUp(target, duration) {
    target.style.maxHeight = target.scrollHeight + "px";
    setTimeout(() => {
        target.style.maxHeight = "0px";
        target.style.overflow = "hidden";
        target.style.transitionDuration = "0s";
    }, duration);
}

function slideDown(target, duration) {
    target.style.maxHeight = target.scrollHeight + "px";
    target.style.overflow = "hidden";
    target.style.transitionDuration = duration + "ms";
}

document.querySelector(".signIn").addEventListener("click", function () {
    slideToggle(document.getElementById("loginForm"), 500);
});
