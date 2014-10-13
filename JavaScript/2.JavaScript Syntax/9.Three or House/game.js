function threehouseCompare(a,b){

    var hroof = (2/3)*a*a*0.5;
    var hbody = a*a;

    var croof = 2*Math.PI*((b+(1/3*b))/2);
    var cbody = (1/3)*b*b;

    var house = hroof+hbody;
    var tree = croof+cbody;

    if(house>tree){
        console.log('house/'+house.toFixed(2));
    }
    else{
        console.log('tree/'+tree.toFixed(2));
    }
}

var a = 3;
var b = 3;

threehouseCompare(a,b);