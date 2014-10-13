var wrapper = document.getElementById('wrapper');
wrapper.addEventListener('click', function(e){
    if(e.target.getAttribute('class')== 'removeButton'){
        var  parent = e.target.parentNode;
        wrapper.removeChild(parent);
    }
    e.preventDefault();
    return false;
})

var addButton = document.getElementById('addFieldButton');
addButton.addEventListener('click', function(e){
    addField();
    e.preventDefault();
    return false;
})

function addField(){
    var inputHtml = '<input type="text" name="first_name[]"/>' + '<input type="text" name="last_name[]"/>' + '<input type="text" name="email[]"/>' + '<input type="text" name="score[]"/>' + '<button type="button" class="removeButton"/>-</button>'
    var div = document.createElement('div');
    div.innerHTML = inputHtml;
    wrapper.appendChild(div);

}
