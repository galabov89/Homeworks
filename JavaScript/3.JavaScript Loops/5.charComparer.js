function charComparer(one, two) {
    if (one.length != two.length) {
        console.log('Not Equal');
    }
    else {

        var equal = true;
        for (var i = 0; i < one.length; i++) {

            if (one[i] !=two[i]) {
                equal = false;
            }
        }

        if (equal) {
            console.log('Equal');
        }
        else {
            console.log('Not Equal');
        }
    }
}

var one = ['2', 'f', '1', 's', 'g', 'j', 'f', 'u', 's', 'q'];
var two = ['1', 'f', '1', 's', 'g', 'j', 'f', 'u', 's', 'q'];

charComparer(one,two);