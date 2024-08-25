window.onload = function() {
    document.querySelector('.nav-link-funil').classList.add('active');
};

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    var target = ev.target;

    while (!target.classList.contains("kanban-column") && !target.classList.contains("kanban-item")) {
        target = target.parentNode;
    }

    if (target.classList.contains("kanban-column")) {
        target.appendChild(document.getElementById(data));
    } else if (target.classList.contains("kanban-item")) {
        target.parentNode.insertBefore(document.getElementById(data), target.nextSibling);
    }
}
