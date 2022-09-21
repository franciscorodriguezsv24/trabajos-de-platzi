
var miNombre = "Francisco";   //  <-- scope global

function nombre() {
    var miApellido = "Rodriguez";  // <-- scope local
    console.log(miNombre + "" + miApellido);
}

// Que es Scope? Es el alcance que tiene una variable, y estas se pueden dividir en variables globales o locales. Las globales son aquellas que tienen su variable al inicio del codigo o tambien las que estan afuera de una "function" y las locales son aquellas que estan dentro de una "function". 
