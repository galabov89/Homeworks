function appendMessage() {
    var r1 = 7;
    var r2 = 1.5;
    var r3 = 20;

    var area1 = r1 * r1 * Math.PI;
    var area2 = r2 * r2 * Math.PI;
    var area3 = r3 * r3 * Math.PI;

    var newHTML1 = 'r=' + r1 + '; area = ' + area1;
    document.getElementById('one').innerHTML = newHTML1;

    var newHTML2 = 'r=' + r2 + '; area = ' + area2;
    document.getElementById('two').innerHTML = newHTML2;

    var newHTML3 = 'r=' + r3 + '; area = ' + area3;
    document.getElementById('three').innerHTML = newHTML3;
}