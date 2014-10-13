Array.prototype.contains = function(v) {
    for(var i = 0; i < this.length; i++) {
        if(this[i] === v) return true;
    }
    return false;
};

Array.prototype.unique = function() {
    var arr = [];
    for(var i = 0; i < this.length; i++) {
        if(!arr.contains(this[i])) {
            arr.push(this[i]);
        }
    }
    return arr;
}

function Person(fname, lname, age) {
        this.fname= fname,
        this.lname= lname,
        this.age = age,
        this.toString= function getFullName() {
        return this.fname + " " + this.lname+"(age "+this.age+")";
    }
}

var persons = [];
    persons.push(new Person("Scott", "Guthrie", 38));
    persons.push(new Person("Scott", "Johns", 36));
    persons.push(new Person("Scott", "Hanselman", 39));
    persons.push(new Person("Jesse", "Liberty", 57));
    persons.push(new Person("Jon", "Skeet", 38));

var firstName = [];
var lastName = [];
var age = [];

//Filling the info
for(var i = 0; i<persons.length;i++){
    firstName.push(persons[i].fname);
    lastName.push(persons[i].lname);
    age.push(persons[i].age);
}

//Getting only unique values
firstName = firstName.unique();
lastName = lastName.unique();
age = age.unique();

//First name
var pname = [];
for(var i = 0; i<firstName.length;i++){

    var name = firstName[i];

    for(var j = 0; j< persons.length;j++){
        if(name == persons[j].fname){
            pname.push(persons[j].toString());
        }

    }
    console.log('Group '+name+' : '+'['+pname.join(', ')+']');
    pname = [];
}

console.log();

//Family name
var family = [];
for(var i = 0; i < lastName.length;i++){

    var name = lastName[i];

    for(var j = 0; j< persons.length;j++){
        if(name == persons[j].lname){
            family.push(persons[j].toString());
        }

    }
    console.log('Group '+name+' : '+'['+family.join(', ')+']');
    family = [];
}

console.log();

//Family name
var years = [];
for(var i = 0; i < age.length;i++){

    var y = age[i];

    for(var j = 0; j< persons.length;j++){
        if(y == persons[j].age){
            years.push(persons[j].toString());
        }

    }
    console.log('Group '+y+' : '+'['+years.join(', ')+']');
    years = [];
}





