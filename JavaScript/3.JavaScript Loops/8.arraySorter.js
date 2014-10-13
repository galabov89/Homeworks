function arraySorter(unsorted) {

    for (var i = 0; i < unsorted.length; i++) {

        var min = findMin(i, unsorted);

        var position = getMinPosition(min, unsorted, i);

        //Exchange values
        var temp = unsorted[i];
        unsorted[i] = unsorted[position];
        unsorted[position] = temp;
    }

    console.log(unsorted);
}

function findMin(position, unsorted) {

    var min = unsorted[position];

    for (var i = position; i < unsorted.length; i++) {

        if (unsorted[i] < min) {
            min = unsorted[i];
        }
    }

    return min;
}

function getMinPosition(min, unsorted, pos) {

    var position = 0;
    for (var i = pos; i < unsorted.length; i++) {

        if (unsorted[i] == min) {
            position = i;
            break;
        }
    }

    return position;
}

//var unsorted = [5, 4, 3, 2, 1];
var unsorted = [12, 12, 50, 2, 6, 22, 51, 712, 6, 3, 3];

arraySorter(unsorted);
