function mostFreqWord(text) {

    text = text.toLowerCase();
    var words = text.match(/\w+/g);

    // Check initial for max
    var maxFreq = 0;

    for (var i = 0; i < words.length; i++) {

        var word = words[i];
        var freq = 0;
        for (var j = 0; j < words.length; j++) {

            if (word == words[j]) {
                freq++;
            }
        }

        if (freq > maxFreq) {
            maxFreq = freq;
        }
    }

    // Check if match the max and print

    var allWords = [];

    for (var i = 0; i < words.length; i++) {

        var word = words[i];
        var freq = 0;
        for (var j = 0; j < words.length; j++) {

            if (word == words[j]) {
                freq++;
            }
        }

        if (freq == maxFreq) {
            allWords.push(word);
        }
    }

    //Extract only unique values
    var uniques = allWords.unique();
    uniques.sort();
    for (var i = 0; i < uniques.length; i++) {
        console.log(uniques[i]+' -> '+maxFreq+' times');
    }
}

Array.prototype.contains = function (v) {
    for (var i = 0; i < this.length; i++) {
        if (this[i] === v) return true;
    }
    return false;
};

Array.prototype.unique = function () {
    var arr = [];
    for (var i = 0; i < this.length; i++) {
        if (!arr.contains(this[i])) {
            arr.push(this[i]);
        }
    }
    return arr;
}

//var text = 'Hello my friend, hello my darling. Come on, come here. Welcome, welcome darling.';
var text = 'Welcome to SoftUni. Welcome to Java. Welcome everyone.';

mostFreqWord(text);