function findYoungestPerson(persons){

    var  youngest = persons[2].age;
    var pos = 0;
    for(var person in persons){

        if(persons[person].age < youngest){
            youngest = persons[person].age;
            pos = persons[person];
        }
    }

    console.log(youngest);
    console.log('The youngest person is'+" "+pos.firstname+" "+pos.lastname +" -> "+youngest);
}

var persons = [
    { firstname : 'George', lastname: 'Kolev', age: 32},
    { firstname : 'Bay', lastname: 'Ivan', age: 81},
    { firstname : 'Baba', lastname: 'Ginka', age: 40}]
findYoungestPerson(persons);

