function reverseWordInString(str){

    var words = [];
    var spaces = [];

    var wordReg = /[^-\s]+/g;
    var spaceReg = /\s+/g;

    var match = wordReg.exec(str);

    words = str.match(wordReg);
    spaces = str.match(spaceReg);

    var text = '';
    for(var i = 0, j = 1; i < words.length; i++,j++){
        if(i==words.length - 1){
            text+=words[i].split("").reverse().join("");
        }
        if(i!=words.length - 1){
            text+=words[i].split("").reverse().join("")+spaces[i];
        }
    }

    console.log(text);

}


var str = 'Life is pretty good, isn’t it?'
reverseWordInString(str);
