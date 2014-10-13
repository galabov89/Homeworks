function digitChecker(num) {
    num = num.toString();

    var digit = parseInt(num.charAt(num.length-3));
    var check = 3;
    console.log(digit);

    if(digit == check){
        console.log(true);
    }
    else{
        console.log(false);
    }
}

var num = 25368;
digitChecker(num);