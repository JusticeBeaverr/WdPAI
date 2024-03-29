const likeButtons = document.querySelectorAll(".fa-check");
const dislikeButtons = document.querySelectorAll(".fa-x");
const uncertainButtons = document.querySelectorAll(".fa-question");


function giveLike() {
    const likes = this;
    const container = likes.parentElement.parentElement.parentElement;
    const id = container.getAttribute("id");

    fetch(`/like/${id}`)
        .then(function () {
            likes.innerHTML = parseInt(likes.innerHTML) + 1;
        })
}

function giveDislike() {
    const dislikes = this;
    const container = dislikes.parentElement.parentElement.parentElement;
    const id = container.getAttribute("id");

    fetch(`/dislike/${id}`)
        .then(function () {
            dislikes.innerHTML = parseInt(dislikes.innerHTML) + 1;
        })
}
function giveUncertain() {
    const uncertain = this;
    const container = uncertain.parentElement.parentElement.parentElement;
    const id = container.getAttribute("id");

    fetch(`/uncertain/${id}`)
        .then(function () {
            uncertain.innerHTML = parseInt(uncertain.innerHTML) + 1;
        })
}

likeButtons.forEach(button => button.addEventListener("click", giveLike));
dislikeButtons.forEach(button => button.addEventListener("click", giveDislike));
uncertainButtons.forEach(button => button.addEventListener("click", giveUncertain));
