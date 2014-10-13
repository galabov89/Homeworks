var num = 358;
var digits = num.toString();
var sum = 0;

for (var i = 0; i < digits.length; i++) {

    sum += parseInt(digits[i]);
    console.log(digits[i]);
}

console.log('==========');
console.log(sum);

if (sum % 3 == 0) {
    console.log('the number is divided by 3 without remainder');
}
else {
    console.log('the number is not divided by 3 without remainder');
}


