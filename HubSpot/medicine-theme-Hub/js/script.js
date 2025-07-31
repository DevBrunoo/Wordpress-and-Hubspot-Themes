// filepath: /medicine-theme/medicine-theme/js/script.js
document.addEventListener('DOMContentLoaded', function() {
    // Example: Form validation for a contact form
    const form = document.querySelector('#contact-form');
    if (form) {
        form.addEventListener('submit', function(event) {
            const name = form.querySelector('input[name="name"]').value;
            const email = form.querySelector('input[name="email"]').value;

            if (!name || !email) {
                event.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
    }

    // Example: Dynamic content loading
    const loadMoreButton = document.querySelector('#load-more');
    if (loadMoreButton) {
        loadMoreButton.addEventListener('click', function() {
            // Logic to load more content
            alert('Loading more content...');
        });
    }
});