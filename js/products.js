document.addEventListener('DOMContentLoaded', function () {
    var btnDetails = document.querySelectorAll('.btn-details');

    btnDetails.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var moreDetails = btn.parentElement.querySelector('.more-details');
            
            // Alternar la clase 'show' para aplicar o quitar la transición
            if (!moreDetails.classList.contains('show')) {
                moreDetails.style.maxHeight = moreDetails.scrollHeight + 'px';
                moreDetails.classList.add('show');
            } else {
                moreDetails.style.maxHeight = null;
                moreDetails.classList.remove('show');
            }
        });
    });
});

