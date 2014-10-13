function bitChecker(num) {

    var bit = (num >> 2) & 1;
    console.log(bit);
}

bitChecker(157);