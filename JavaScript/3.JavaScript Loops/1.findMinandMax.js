function findMinandMax(numbers) {

    var min = numbers[0];
    var max = numbers[0];

    for (var i = 0; i < numbers.length; i++) {

        if (numbers[i] > max) {
            max = numbers[i];
        }

        if (numbers[i] <min) {
            min = numbers[i];
        }
    }

    console.log('min-> ' + min);
    console.log('max-> '+max);
}

var numbers = [500, 1, -23, 0, -300, 28, 35, 12];

findMinandMax(numbers);