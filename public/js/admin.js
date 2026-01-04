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