/**
 * Author: Fatima Aurelia
 * Date: 01/22/2017
 * Version: 1.0
 */

document.addEventListener('click', function (e) {
    e = e || window.event;
    var target = e.target || e.srcElement;
    var body = document.getElementsByTagName("BODY")[0];

    if (target.hasAttribute('data-toggle') && target.getAttribute('data-toggle') == 'modal') {
        if (target.hasAttribute('data-target')) {
            var m_ID = target.getAttribute('data-target');
            document.getElementById(m_ID).classList.add('open');
            body.classList.add('modal-open');
            e.preventDefault();
        }
    }

    // Close modal window with 'data-dismiss' attribute or when the backdrop is clicked
    if ((target.hasAttribute('data-dismiss') && target.getAttribute('data-dismiss') == 'modal') || target.classList.contains('modal')) {
        var modal = document.querySelector('[class="modal open"]');
        modal.classList.remove('open');
        body.classList.remove('modal-open');
        e.preventDefault();
    }
}, false);
