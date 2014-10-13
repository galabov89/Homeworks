var buttonHide = document.getElementById('btnHideOddRows'),
    rows = document.getElementsByTagName('tr');

buttonHide.addEventListener('click', function () {
    var counter = 0;
    for(var row in rows) {
        if(rows[row].tagName === 'TR') {
            if(counter % 2 === 0) {
                rows[row].style.display = 'none';
            }
            counter++;
        }
    }
});