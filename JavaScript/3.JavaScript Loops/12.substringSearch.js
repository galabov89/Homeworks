function countSubstringOccur(str, text) {

    strToLower = text.toLowerCase();

    var re = new RegExp(str, 'g'); //create a regex to match
    var count = strToLower.match(re);

    console.log(count.length);
}

var str = "in";
var tetx = "We are living in a yellow submarine. We don't have anything else. Inside the submarine is very tight. So we are drinking all the day. We will move out of it in 5 days.";

countSubstringOccur(str, tetx);