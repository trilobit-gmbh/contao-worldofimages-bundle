
/* todo: make complete */

function initImageWorldMenu() {
    let trigger = document.querySelector('.header_imageworld');

    if (null === trigger) {
        return;
    }

    // trigger.parentNode.parentNode.removeChild(trigger.parentNode);

    /*
    trigger.classList.add('submenu');
    trigger.removeAttribute('href');

    let ul = document.createElement('ul');
    ul.classList.add('menu_level_1');

    let li = document.createElement('li');
    li.innerHTML = '<strong>Bilderwelt</strong> — zur Verfügung gestellt von:';
    li.classList.add('info');

    ul.append(li);

    let items = document.querySelectorAll('.header_imageworld_item');

    items.forEach(function (item) {
        let li = document.createElement('li');
        li.append(item);
        ul.append(li);
    });

    trigger.append(ul);

    trigger.onclick = function(e) {
        e.stopPropagation();
        trigger.classList.toggle('active');
    };

    document.onclick = function(e) {
        trigger.classList.remove('active');
    };
    */
}
/*
window.addEventListener("turbo:before-fetch-response", function(event) {
    initImageWorldMenu();
});

window.addEventListener("load", function(event) {
    initImageWorldMenu();
});

window.setTimeout(
    (function() {
        initImageWorldMenu();
    }),
    500
);
*/
