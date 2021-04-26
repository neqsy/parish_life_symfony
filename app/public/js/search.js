const search = document.querySelector('input[placeholder="search event"]');
const eventContainer = document.querySelector(".events");

search.addEventListener("keyup", function(event){
    if(event.key === "Enter"){
        event.preventDefault();

        const data = {search: this.value};
        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)

        }).then(function(response){
            return response.json();
        }).then(function(events){
            eventContainer.innerHTML = "";
            loadEvents(events)
        });
    }
});

function loadEvents(events) {
    events.forEach(event => {
        console.log(event);
        createEvent(event);
    })
}

function loadAllEvents() {
    fetch("/api/events", {
        method: "GET",
        headers: {
            'Accept': 'application/json'
        }
    }).then(function(response){
        return response.json();
    }).then(function(events){
        eventContainer.innerHTML = "";
        loadEvents(events)
    });
}

function createEvent(event)
{
    const template = document.querySelector("#event-template");
    const clone = template.content.cloneNode(true);
    const created = clone.querySelector("h3");
    const title = clone.querySelector("h2");
    title.innerHTML = event.title;
    created.innerHTML = event.createdAt;
    const description = clone.querySelector("p");
    description.innerHTML = event.description;

    eventContainer.appendChild(clone);


}


