function redirectToUpdateForm(msg_id) {
    window.location.href = "update.php?msg_id=" + msg_id;
}

function confirmDelete(msg_id) {
    if (confirm("Are you sure you want to delete this message?")) {
        window.location.href = "delete.php?msg_id=" + msg_id;
    }
}
