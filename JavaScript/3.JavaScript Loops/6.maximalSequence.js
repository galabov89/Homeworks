function findMaxSequence(sequence) {

    var len = 1;
    var char = sequence[0];

    for (var i = 0; i < sequence.length; i++) {

        var sign = sequence[i];
        var curLen = 0;
        for (var j = i; j < sequence.length; j++) {


            if (typeof (sign) == typeof (sequence[j])) {
                curLen++;
            }
            else {
                if (curLen >= len) {
                    len = curLen;
                    char = sign;
                }

                break;
            }
        }
    }

    var best = [];

    for (var i = 0; i < len; i++) {
        best.push(char);
    }

    console.log(best);
}

var sequence = [2, 'qwe', 'qwe', 3, 3, '3'];
findMaxSequence(sequence);