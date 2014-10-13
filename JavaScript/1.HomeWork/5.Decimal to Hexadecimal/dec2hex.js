window.onload = function () {
    var decimal = Number(prompt('Enter a number'));

    if( decimal != null){
        alert(decimal.toString(16).toUpperCase());
    }
};
