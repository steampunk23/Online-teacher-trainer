// JavaScript code from the previous example
document.getElementById('update-profile-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from refreshing the page

    const firstName = document.getElementById('first-name').value;
    const lastName = document.getElementById('last-name').value;
    const email = document.getElementById('email').value;
    const subjects = document.getElementById('subjects').value;

    // Update the bio paragraph with new values
    const bioParagraph = document.getElementById('bio-paragraph');
    const currentBio = bioParagraph.innerHTML.split(', ');
    if (firstName) currentBio[0] = firstName;
    if (lastName) currentBio[1] = lastName;
    if (email) currentBio[2] = email;
    if (subjects) currentBio[3] = subjects;

    bioParagraph.innerHTML = currentBio.join(', ');

    // pop-up
    alert('Profile updated successfully!');
});
