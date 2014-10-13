function countDivs(html){
    var  divs = html.match(/<div/g);
    console.log(divs.length);
}

var  html = '';

