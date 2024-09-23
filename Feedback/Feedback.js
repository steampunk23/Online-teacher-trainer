function submitForm() {
    const name = document.querySelector('input[type="text"]').value;
    const email = document.querySelector('input[type="email"]').value;
    const experience = document.querySelector('textarea').value;
    const rating = document.querySelector('input[name="rating"]:checked');

    if (!name || !email || !experience || !rating) {
        alert('Please fill all the fields and select a rating !');
        return;
    }

    alert(`Thank you for your feedback, ${name}!`);
}
