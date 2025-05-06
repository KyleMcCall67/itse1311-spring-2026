// Data types
// Boolean: True or False
// String: Any typical sentence
// Number: Numeric, Decimal Points
// Undefined: Does not exist or is not set
// Null: Non-existent

// var means that the variable has a global scope by default
// let means that the variable exists and can be changed only inside of its function
// const means that the variable cannot be changed

// declare means to add a value to a variable or set it empty or null

// to concatenate means to put together, and the symbol is a plus sign +

//var yourName = "Kyle McCall";
//const yourName;

/*
function sayMyName() {
    //some function
    let yourName = "Kyle McCall";
    yourName = "Kyle M. McCall";
    console.log("My name is " + yourName);
}

sayMyName();
*/

document.getElementById("myBTN").addEventListener("click", sayMyName);

function sayMyName() {
    //some function
    let yourName = document.getElementById("myName").value;

    document.getElementById("myNameDiv").innerHTML = yourName;

}
