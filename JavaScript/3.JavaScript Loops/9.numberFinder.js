function numberFinder(numbers) {

    var mostFrequent = 0;
    var num = 0;
    for (var i = 0; i < numbers.length; i++) {

        var digit = numbers[i];
        var frequency = 0;
        for (var j = 0; j < numbers.length; j++) {
            
            if (digit == numbers[j]) {
                frequency++;
            }
        }

        if (frequency > mostFrequent) {
            mostFrequent = frequency;
            num = digit;
        }
    }

    console.log(num + ' (' + mostFrequent + ' times )');
}

//var numbers = [4, 1, 1, 4, 2, 3, 4, 4, 1, 2, 4, 9, 3];
//var numbers = [2, 1, 1, 5, 7, 1, 2, 5, 7, 3, 87, 2, 12, 634, 123, 51, 1];
var numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];

numberFinder(numbers);