
function selectArea(element){

    var area = element.name+"-area";  //onclick of image get image name    

    if(area === "rectangle-area"){                                              //if clicked image is rectangle then show only rectangle div
        document.getElementById(area).style.display = "block";
        document.getElementById("triangle-area").style.display = 'none';        //hide other div
        document.getElementById("parallelogram-area").style.display = 'none';
        document.getElementById("circle-area").style.display = 'none';
        document.getElementById("rhombus-area").style.display = 'none';
    }else if(area === "triangle-area"){                                        //if clicked image is triangle then show only triangle div
        document.getElementById(area).style.display = "block";                 //hide other div
        document.getElementById("rectangle-area").style.display = 'none';
        document.getElementById("parallelogram-area").style.display = 'none';
        document.getElementById("circle-area").style.display = 'none';
        document.getElementById("rhombus-area").style.display = 'none';
    }else if(area === "parallelogram-area"){                                   //if clicked image is parallelogram show only parallelogram div
        document.getElementById(area).style.display = "block";                 //hide other div
        document.getElementById("rectangle-area").style.display = 'none';
        document.getElementById("triangle-area").style.display = 'none';
        document.getElementById("circle-area").style.display = 'none';
        document.getElementById("rhombus-area").style.display = 'none';
    }else if(area === "circle-area"){                                         //if clicked image is circle show only circle div
        document.getElementById(area).style.display = "block";                //hide other div
        document.getElementById("triangle-area").style.display = 'none';
        document.getElementById("parallelogram-area").style.display = 'none';
        document.getElementById("rectangle-area").style.display = 'none';
        document.getElementById("rhombus-area").style.display = 'none';
    }else if(area === "rhombus-area"){                                         //if clicked image is rhombus show only rhombus div
        document.getElementById(area).style.display = "block";                 //hide other div
        document.getElementById("triangle-area").style.display = 'none';
        document.getElementById("parallelogram-area").style.display = 'none';
        document.getElementById("circle-area").style.display = 'none';
        document.getElementById("rectangle-area").style.display = 'none';
    }
    
}


function calculateRectangleArea(){                                                
    var length = document.getElementById("rectangle-length").value;         //get value of rectangle length field
    var width = document.getElementById("rectangle-width").value;           //get vlaue of rectangle width field
    if(isNaN(length) || isNaN(width) || length === "" || width === ""){     //check if entered value is number or not
        alert("enter valid number");                                        //if not number show alert
    }else{
        document.getElementById("area-of-rectangle").innerHTML = (length * width).toFixed(2) +" m<sup>2</sup>";    //display area of rectangle

    }
        
}

function calculateTriangleArea(){
    var base = document.getElementById("triangle-base").value;               //get base of triangle
    var height = document.getElementById("triangle-height").value;           //get height of triangle
    if(isNaN(base) || isNaN(height) || base === "" || height === ""){        //check if entered value is number or not
        alert("enter valid number");                                         //if not number show alert
    }else{
        document.getElementById("area-of-triangle").innerHTML = (base * height / 2).toFixed(2) +" m<sup>2</sup>";     //display area of triangle

    }   
    
}

function calculateParallelogramArea(){
    var base = document.getElementById("parallelogram-base").value;            //get base of parallelogram
    var height = document.getElementById("parallelogram-height").value;        //get height of parallelogram
    if(isNaN(base) || isNaN(height) || base === "" || height === ""){          //check if entered value is number or not
        alert("enter valid number");                                           //if not number show alert
    }else{
        document.getElementById("area-of-parallelogram").innerHTML = (base * height).toFixed(2) +" m<sup>2</sup>";    //display area of parallelogram

    }
    
    
}

function calculateCircleArea(){
    var pi = 3.14159265359;
    var radius = document.getElementById("circle-radius").value;              //get value of radius
    if(isNaN(radius)  || radius === "" ){                                     //check if entered value is number or not
        alert("enter valid number");                                          //if not number show alert
    }else{
        document.getElementById("area-of-circle").innerHTML = (pi * radius * radius).toFixed(2) +" m<sup>2</sup>";       //display area of circle

    }  
    

}

function calculateRhombusArea(){
    var diagonalOne = document.getElementById("rhombus-diagonal1").value;                 //get value of diagonal one
    var diagonalTwo = document.getElementById("rhombus-diagonal2").value;                 //get value of diagonal two
    if(isNaN(diagonalOne) || isNaN(diagonalTwo) || diagonalOne === "" || diagonalTwo === ""){   //check if entered value is number or not
        alert("enter valid number");                                                            //if not number show alert
    }else{
        document.getElementById("area-of-rhombus").innerHTML = (diagonalOne * diagonalTwo / 2).toFixed(2) +" m<sup>2</sup>";     //display area of rhombus

    } 
    
}


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}