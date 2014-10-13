function bracketsChecker(expression) {

    expression = expression.split("");
    var open = 0;
    var close = 0;

    for (var i = 0; i < expression.length; i++) {

        if (expression[i]=='(') {
            open++;
        }
        if (expression[i]==')') {
            close++;
        }
    }

    if (open == close) {
        console.log('correct');
    }
    else {
        console.log('incorrect');
    }
}

var expression = '( ( a + b ) / 5 – d (';

bracketsChecker(expression);