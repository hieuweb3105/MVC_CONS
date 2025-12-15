window.addEventListener('load', function () {
    let hideLoad = false;
    let finishLoad = false;

    function hideLoadPage() {
        if (hideLoad && finishLoad) {
            document.body.classList.add('loaded');
        }
    }

    setTimeout(function() {
        finishLoad = true;
        hideLoadPage();
    }, 500); 

    hideLoad = true;
    hideLoadPage();

});