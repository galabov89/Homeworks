function fixCasting(text) {

    //Upper case
    var upperRegEx = /<upcase>(.*?)<\/upcase>/g;
    var matches = getMatches(text, upperRegEx, 1);
    for (var i = 0; i < matches.length; i++) {
        text = text.replace(upperRegEx, matches[i].toUpperCase());
    }

    console.log(text);

    //Lower case
    var lowRegEx = /<lowcase>(.*?)<\/lowcase>/g;
    var matchesLow = getMatches(text, lowRegEx, 1);
    for (var i = 0; i < matchesLow.length; i++) {
        text = text.replace(lowRegEx, matchesLow[i].toLowerCase());
    }

    console.log(text);

    //Mix case

}

function getMatches(string, regex, index) {
    index || (index = 1); // default to the first capturing group
    var matches = [];
    var match;
    while (match = regex.exec(string)) {
        matches.push(match[index]);
    }
    return matches;
}

var text = "We are <mixcase>living</mixcase> in a <upcase>yellow submarine</upcase>. We <mixcase>don't</mixcase> have <lowcase>anything</lowcase> else.";

fixCasting(text);