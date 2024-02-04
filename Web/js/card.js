document.addEventListener('DOMContentLoaded', function () {
    var cards = document.querySelectorAll('.card');
    var buttons = document.querySelectorAll('.btn');

    cards.forEach(function (card) {
        card.addEventListener('mouseover', function () {
            card.classList.add('hovered');
        });

        card.addEventListener('mouseout', function () {
            card.classList.remove('hovered');
        });
    });

    buttons.forEach(function (button) {
        button.addEventListener('mouseover', function () {
            button.closest('.card').classList.add('hovered');
        });

        button.addEventListener('mouseout', function () {
            button.closest('.card').classList.remove('hovered');
        });
    });
});
