function submitComment() {

    var commentText = document.getElementById('comment').value;

    if (commentText.trim() !== '') {

        var newComment = document.createElement('div');
        newComment.className = 'comment';
        newComment.textContent = commentText;

        document.getElementById('commentsContainer').appendChild(newComment);

        document.getElementById('comment').value = '';
    } else {
        alert('Por favor, introduce un comentario válido.');
    }
}
