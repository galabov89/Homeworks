function clone(obj) {
    // Handle the 3 simple types, and null or undefined
    if (null == obj || "object" != typeof obj) return obj;

    // Handle Date
    if (obj instanceof Date) {
        var copy = new Date();
        copy.setTime(obj.getTime());
        return copy;
    }

    // Handle Array
    if (obj instanceof Array) {
        var copy = [];
        for (var i = 0, len = obj.length; i < len; i++) {
            copy[i] = clone(obj[i]);
        }
        return copy;
    }

    // Handle Object
    if (obj instanceof Object) {
        var copy = {};
        for (var attr in obj) {
            if (obj.hasOwnProperty(attr)) copy[attr] = clone(obj[attr]);
        }
        return copy;
    }

    throw new Error("Unable to copy obj! Its type isn't supported.");
}

function compareObjects(a, b) {
    if (a === b)
        return true;
    for (var i in a) {
        if (b.hasOwnProperty(i)) {
            if (!equal(a[i],b[i])) return false;
        } else {
            return false;
        }
    }

    for (var i in b) {
        if (!a.hasOwnProperty(i)) {
            return false;
        }
    }
    return true;
};

var equal = function(a, b) {
    if (a !== b) {
        var atype = whatis(a), btype = whatis(b);

        if (atype === btype)
            return _equal.hasOwnProperty(atype) ? _equal[atype](a, b) : a==b;

        return false;
    }

    return true;
};

var a = {name: 'Pesho', age: 21} ;

var  b = clone(a);
var c = a;
console.log(compareObjects(a,b));
console.log(compareObjects(a,c));

