document.addEventListener('DOMContentLoaded', function () {
    var commentForm = document.querySelector('.comment-form');
    var commentsContainer = document.querySelector('.comments-container');

    commentForm.addEventListener('submit', function (event) {
        event.preventDefault();

        var formData = new FormData(commentForm);

        fetch(commentForm.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error('Error:', data.error);
            } else {
                var newComment = document.createElement('div');
                newComment.className = 'comment';
                newComment.textContent = data.texto;

                commentsContainer.appendChild(newComment);

                commentForm.reset();
            }
        })
        .catch(error => {
            console.error('Error de conexión:', error);
        });
    });
});
