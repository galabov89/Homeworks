var input = document.getElementById('input-text'),
    output = document.getElementById('output-text');

input.addEventListener('input', function () {
    var text = input.value,
        i;

    if(output.value.length > 0) {
        output.value = '';
    }

    for(i = 0; i < text.length; i++) {
        if(!isNaN(Number(text[i]))) {
            output.value += text[i];
            output.style.backgroundColor = 'white';
        }
        else {
            output.style.backgroundColor = 'red';
        }
    }

});