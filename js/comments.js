document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("commentForm").addEventListener("submit", function(event) {
        event.preventDefault();
        submitComment();
    });

    function submitComment() {
        var commentText = document.getElementById('comment').value;

        if (commentText.trim() !== '') {
            fetch('../php/comments.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'comment=' + encodeURIComponent(commentText),
            })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                // Puedes manejar la respuesta del servidor aquí si es necesario

                // Actualizar la sección de comentarios después de enviar el comentario
                fetchComments();
            })
            .catch(error => {
                console.error('Error al enviar el comentario:', error);
            });
        } else {
            alert('Por favor, introduce un comentario válido.');
        }
    }

    function fetchComments() {
        // Esta función podría usarse para cargar y mostrar los comentarios desde el servidor
        // Puedes implementarla según tus necesidades
    }

    // Llamada inicial para cargar los comentarios existentes
    fetchComments();
});
