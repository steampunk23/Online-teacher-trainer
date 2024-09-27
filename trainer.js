document.getElementById('edit-btn').addEventListener('click', function() {
    const inputs = document.querySelectorAll('.account-info input');
    inputs.forEach(input => {
        input.disabled = !input.disabled;
        if (!input.disabled) {
            input.style.animation = 'fieldSlideIn 1.5s ease-in-out forwards';
        }
    });
});
