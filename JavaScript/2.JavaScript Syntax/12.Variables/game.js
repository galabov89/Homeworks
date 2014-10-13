function variableTypes() {
    console.log('My name is '+arguments[0][0]+'// type is '+typeof arguments[0][0]);
    console.log('My age is '+arguments[0][1]+'// type is '+typeof arguments[0][1]);
    console.log('I am male: '+arguments[0][2]+'// type is '+typeof arguments[0][2]);
    console.log('My favorite foods are: '+arguments[0][3]+'// type is '+typeof arguments[0][3]);
}

variableTypes(['Pesho', 22, true, ['fries', 'banana', 'cake']]);