function findNthDigit(){
    var  pos = arguments[0];
    var number = arguments[1].toString();
    var  digits = [];

    // Check if char is a digit
    for(var i = 0; i < number.length; i++){
        var  char = number.charAt(i);
        if(char <='9' && char >='0'){
            digits.push(char)
        }
    }

    digits = digits.reverse();

    if(pos > digits.length){
        console.log("The number doesn’t have "+pos+" digits");
    }
    else{
        console.log(digits[pos-1]);
    }

}

findNthDigit(6, 888.88);

