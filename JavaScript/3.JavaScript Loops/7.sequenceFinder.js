function sequenceFinder(sequence) {

    var start = 0;
    var end = 0;
    var bestLen = 0;
    var bestStart = 0;
    var bestEnd = 0;

    for (var i = 0; i < sequence.length; i++) {

        var prev = sequence[i];
        var len = 0;
        start = i;

        for (var j = i; j < sequence.length; j++) {

            var current = sequence[j];
            if (prev <= current) {

                len++;
                prev = current;
            }
            if (j==sequence.length - 1) {
                end = j;
                if (len > bestLen) {
                    bestLen = len;
                    bestStart = start;
                    bestEnd = end;
                }
                break;
            }
            else {
                end = j;
                if (len > bestLen) {
                    bestLen = len;
                    bestStart = start;
                    bestEnd = end;
                }
                break;
            }
        }
    }

    for (var i = bestStart; i < bestEnd; i++) {
        console.log(sequence[i]+' ');
    }
}

var sequence = [3, 5, 4, 6, 1, 2, 3, 6, 10, 32];

sequenceFinder(sequence);