document.getElementById('feedback_form').addEventListener('submit', submitForm);

function submitForm(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Get form values
    const name = event.target.name.value.trim();
    const email = event.target.email.value.trim();
    const rating = event.target.rating.value;
    const feedback = event.target.feedback.value.trim();

    // Check if all fields are filled
    if (!name || !email || !rating || !feedback) {
        return; // Exit the function to prevent adding an empty feedback
    }

    // Create a new feedback box
    const feedbackBox = document.createElement('div');
    feedbackBox.classList.add('feedback_box');

    // Create the feedback content
    const feedbackContent = `
        <div class="feedback_content">
            <h3>${name}</h3>
            <p>${'⭐'.repeat(rating)}</p>
            <p>"${feedback}"</p>
            <button onclick="editFeedback(this)">Edit</button>
            <button onclick="deleteFeedback(this)">Delete</button>
        </div>
    `;

    feedbackBox.innerHTML = feedbackContent;

    // Insert the new feedback box at the top of the feedback section
    const feedbackSection = document.querySelector('.feedback_section');
    feedbackSection.insertBefore(feedbackBox, feedbackSection.firstChild);

    // Reset the form after successful submission
    event.target.reset();
}

// Edit feedback function
function editFeedback(button) {
    const feedbackBox = button.closest('.feedback_box'); // Get the closest feedback box
    const feedbackContent = feedbackBox.querySelector('.feedback_content');
    const name = feedbackContent.querySelector('h3').innerText;
    const stars = feedbackContent.querySelector('p').innerText;
    const feedback = feedbackContent.querySelector('p:nth-of-type(2)').innerText.replace(/"/g, '');

    // Populate the form with the existing values
    const form = document.getElementById('feedback_form');
    form.name.value = name;
    form.rating.value = stars.length; // Count the number of filled stars
    form.feedback.value = feedback;

    // Remove only the feedback box you are editing
    feedbackBox.remove();
}

// Delete feedback function
function deleteFeedback(button) {
    const feedbackBox = button.closest('.feedback_box'); // Get the closest feedback box
    feedbackBox.remove(); // Remove only this feedback box
}
