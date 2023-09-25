
/* todo: make complete */

document.addEventListener("DOMContentLoaded", function() {
    let trigger = document.querySelector('.header_imageworld');

    if(null === trigger) {
		return;
	}
    
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
});
