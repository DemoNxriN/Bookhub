document.addEventListener('DOMContentLoaded', function () {
    var btnDetails = document.querySelectorAll('.btn-details');

    btnDetails.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var moreDetails = btn.parentElement.querySelector('.more-details');
            moreDetails.style.display = (moreDetails.style.display === 'block') ? 'none' : 'block';
        });
    });
});
