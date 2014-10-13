function  findLargestBySumOfDigits(){

    var  numbers = [];
    for (var i in arguments) {
        numbers.push(arguments[i]);
    }

    var allNum = true;
    for(var i = 0; i < numbers.length; i++){
         if(numbers[i].toString().match(/[a-z|A-Z|\.]+/g)){
             allNum = false;
             break;
         }
    }

    if(allNum){
        var maxSum = 0;
        var maxDigit = 0;
        for(var i = 0; i < numbers.length; i++){
            var  sum = sumDigits(numbers[i]);

            if(sum>maxSum){
                maxSum = sum;
                maxDigit = numbers[i];
            }
        }

        console.log(maxDigit);
    }
    else{
        console.log('undefined');
    }



}

function sumDigits(number){

    var  digits = [];

    // Check if char is a digit
    number = number.toString();
    for(var i = 0; i < number.length; i++){
        var  char = number.charAt(i);
        if(char <='9' && char >='0'){
            digits.push(char)
        }
    }

    var  sum = 0;
    for(var i = 0; i < digits.length; i++){
        sum+=parseInt(digits[i]);
    }

    return sum;
}

findLargestBySumOfDigits(33, 44, -99, 0, 20,3.33);
