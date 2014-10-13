function findPalindromes(text) {

    text = text.toLowerCase();
    var words = text.match(/\w+/g);

    console.log(words);
    var palindromes = [];

    for (var i = 0; i < words.length; i++) {

        var newWord = words[i].split("").reverse().join("");

        if (newWord == words[i]) {
            palindromes.push(newWord);
        }
    }

    console.log(palindromes.join(', '));
}

var text = 'There is a man, his name was Bob.';
findPalindromes(text);