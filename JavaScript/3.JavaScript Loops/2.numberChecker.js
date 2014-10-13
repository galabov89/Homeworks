function numberChecker(n) {

    var digits = [];
    for (var i = 0; i < n; i++) {

        if (i % 4 != 0 && i % 5 != 0) {
            digits.push(i);
        }
    }

    console.log(digits);
}

numberChecker(20);