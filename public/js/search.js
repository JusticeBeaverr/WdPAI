const search = document.querySelector('.search');
const projectContainer = document.querySelector(".events");
search.addEventListener("keyup", function (event) {

    event.preventDefault();
    const data = {search: this.value};
    fetch("/search", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(function (response) {
        return response.json();
    }).then(function (events) {
        projectContainer.innerHTML = "";
        loadProjects(events)
    });

});
function loadProjects(events) {
    events.forEach(event => {
        console.log(event);
        createProject(event);
    });
}
function createProject(event) {
    const template = document.querySelector("#event-template");
    const clone = template.content.cloneNode(true);
    const div = clone.querySelector("div");
    div.id = event.id;
    const image = clone.querySelector("img");
    if (event.image !== null)
        image.src = `/public/uploads/${event.image}`;
    else
        image.src = 'public/img/uploads/default.svg';
    const date = clone.querySelector(".date");
    date.innerHTML = event.date + ' ' + event.location;
    const title = clone.querySelector("h2");
    title.innerHTML = event.title;
    const description = clone.querySelector(".description");
    description.innerHTML = event.description;
    const like = clone.querySelector(".fa-circle-check");
    like.innerText = event.like;
    const dislike = clone.querySelector(".fa-circle-xmark");
    dislike.innerText = event.dislike;
    const uncertain = clone.querySelector(".fa-circle-xmark");
    uncertain.innerText = event.uncertain;
    projectContainer.appendChild(clone);
}