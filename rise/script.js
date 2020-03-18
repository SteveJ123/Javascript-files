console.log("test");


let count =0;
let grandTotal = 0;

var textBox = document.getElementById("countDisplay");
var textBoxSecond = document.getElementById("secondCount");
textBox.innerHTML = count;
textBoxSecond.innerHTML = grandTotal;


function clickCount(){
    count++;
    grandTotal = grandTotal +1;
    textBox.innerHTML = count;    
    textBoxSecond.innerHTML = grandTotal;
}

