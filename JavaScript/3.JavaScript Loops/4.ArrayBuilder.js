function arrayBuilder( array){

    for (var i = 0; i < array.length; i++) {

        array[i] = i * 5;
    }

    console.log(array);
}

var array = new Array(20);
arrayBuilder(array);