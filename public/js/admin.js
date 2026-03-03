/*sidebar js*/


const sidebar = document.getElementById("sidebar");
const dropdown = document.getElementById("settingsMenu");

function toggleSidebar() {
    if (window.innerWidth <= 768) {
        sidebar.classList.toggle("show");
    } else {
        sidebar.classList.toggle("collapsed");
    }
}

function mobileToggle() {
    sidebar.classList.toggle("show");
}

function toggleDropdown(e) {
    e.preventDefault();
    dropdown.classList.toggle("show");
}


// document.addEventListener('click', function(e) {
//     if (e.target.classList.contains('click-xhttp-request')) {

//         const url = e.target.dataset.href;
//         if (!url) return;

//         const xhr = new XMLHttpRequest();
//         xhr.open("GET", url, true);
//         xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");

//         xhr.onload = function() {
//             if (xhr.status === 200) {
//                 // redirect after successful request
//                 window.location.href = url;
//             }
//         };

//         xhr.send();
//     }
// });



document.addEventListener('click', function (e) {

    const modal = document.getElementById('blade-modal');
    const modalContent = document.getElementById('blade-modal-content');

    // OPEN popup
    if (e.target.classList.contains('x-blade-popup')) {
        const url = e.target.dataset.href;
        if (!url) return;

        modal.classList.add('active');
        modalContent.innerHTML = "<p>Loading...</p>";

        const xhr = new XMLHttpRequest();
        xhr.open("GET", url, true);
        xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");

        xhr.onload = function () {
            modalContent.innerHTML = xhr.responseText;
        };

        xhr.send();
        return;
    }

    // CLOSE on X button
    if (e.target.classList.contains('blade-close')) {
        modal.classList.remove('active');
        return;
    }

    // CLOSE on outside click
    if (e.target === modal) {
        modal.classList.remove('active');
    }
});



    setTimeout(() => {
        const popup = document.getElementById('successPopup');
        if (popup) {
            popup.style.display = 'none';
        }
    }, 2200);

