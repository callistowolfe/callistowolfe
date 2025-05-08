document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".header nav");

    toggle.addEventListener("click", function (e) {
        e.stopPropagation();
        const isOpen = nav.classList.contains("show-nav");
        nav.classList.toggle("show-nav");
        toggle.classList.toggle("open", !isOpen);
    });

    nav.addEventListener("click", function (e) {
        e.stopPropagation();
    });

    // Dropdown toggles (for mobile flyout)
    const dropdownToggles = document.querySelectorAll(".has-dropdown");
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            const dropdown = this.nextElementSibling;
            if (dropdown && dropdown.classList.contains("dropdown")) {
                dropdown.classList.toggle("show");
            }
        });
    });
});

const footerDropdownToggle = document.querySelector(".footer-dropdown-toggle");
if (footerDropdownToggle) {
    footerDropdownToggle.addEventListener("click", function (e) {
        e.preventDefault();
        const dropdown = this.nextElementSibling;
        if (dropdown && dropdown.classList.contains("dropdown")) {
            dropdown.classList.toggle("show");
        }
    });
}