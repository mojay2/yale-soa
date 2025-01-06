// Facilities Modal Handling
document.addEventListener('DOMContentLoaded', () => {
    const viewInfoButtons = document.querySelectorAll('.view-info-btn');
    const modalTitle = document.getElementById('facilityModalLabel');
    const modalDescription = document.getElementById('facilityDescription');
    const modalAddress = document.getElementById('facilityAddress');
    const modalLinks = document.getElementById('facilityLinks');

    viewInfoButtons.forEach(button => {
        button.addEventListener('click', () => {
            const name = button.getAttribute('data-name');
            const description = button.getAttribute('data-description');
            const address = button.getAttribute('data-address');
            const links = JSON.parse(button.getAttribute('data-links'));

            // Populate modal content
            modalTitle.textContent = name;
            modalDescription.textContent = description;
            modalAddress.textContent = address;
            modalLinks.innerHTML = links.map(link =>
                `<a href="" target="_blank">${link}</a>`).join(', ');
        });
    });
});

// Student Resource card collapse
document.addEventListener("DOMContentLoaded", function() {
    const toggleButtons = document.querySelectorAll(".toggle-btn");

    toggleButtons.forEach(button => {
        button.addEventListener("click", function() {
            const icon = this.querySelector("i");
            // Toggle plus/minus icon
            icon.classList.toggle("bi-plus-circle");
            icon.classList.toggle("bi-dash-circle");
        });
    });
});
