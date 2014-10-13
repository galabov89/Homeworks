function findCardFreq(text) {

    text = text.toLowerCase();
    var cards = text.match(/\w+/g);

    var all = cards.length;

    var unique = cards.unique();
    //console.log(unique);

    for (var i = 0; i < unique.length; i++) {

        var card = unique[i];
        var count = 0;
        for (var j = 0; j < cards.length; j++) {

            if (card == cards[j]) {
                count++;
            }
        }

        var value = (((count / all) * 100)).toFixed(2);
        console.log(card+' -> '+value+'%');
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


var cards = '8♥ 2♣ 4♦ 10♦ J♥ A♠ K♦ 10♥ K♠ K♦';
//var cards = 'J♥ 2♣ 2♦ 2♥ 2♦ 2♠ 2♦ J♥ 2♠';

findCardFreq(cards);

