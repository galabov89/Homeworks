function biggerThanNeighbors(index, arr){

    var proceed = true;

    if( index==0 || index==arr.length - 1){
        console.log('only one neighbor');
        proceed =false;
    }
    if(index >= arr.length || index<0){
        console.log('invalid index');
        proceed = false;
    }
    if(proceed){
       if(arr[index]>arr[index-1] && arr[index]>arr[index+1]){
           console.log('bigger');
       }
        else{
           console.log('not bigger');
       }
    }
}

var  index = 0;
var arr = [1, 2, 5, 3, 4];

biggerThanNeighbors(index,arr);
