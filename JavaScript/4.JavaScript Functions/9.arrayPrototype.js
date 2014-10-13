Array.prototype.removeItem = function(item){

    for(var i = this.length-1;i>=0; i--){
        if (this[i] === item){
            this.splice(i, 1);
        }
    }

}

var arr = [1, 2, 1, 4, 1, 3, 4, 1, 111, 3, 2, 1, '1'];
var arr = ['hi', 'bye', 'hello' ];
arr.removeItem('bye');
console.log(arr);
