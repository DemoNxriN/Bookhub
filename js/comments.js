// Asumiendo que tienes este código en tu HTML o archivo JS actual
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
            // Manejar la respuesta del servidor
            if (data.error) {
                console.error('Error:', data.error);
            } else {
                // Crear un nuevo elemento para el comentario
                var newComment = document.createElement('div');
                newComment.className = 'comment';
                newComment.textContent = data.texto; // Ajusta según la estructura de tu comentario

                // Agregar el nuevo comentario al contenedor de comentarios
                commentsContainer.appendChild(newComment);

                // Limpiar el área de texto del formulario
                commentForm.reset();
            }
        })
        .catch(error => {
            console.error('Error de red:', error);
        });
    });
});
