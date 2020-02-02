var selectItems = document.getElementsByClassName("select");

var packCost = [3000, 7000, 12000, 20000, 30000, 15000, 10000, 2000, 4000, 6000, 14000, 15000, 16000, 16000, 17000, 7500, 13000, 4000, 4000,  5000, 3500, 5000, 5000, 4000, 10000, 20000,  3000, 1500, 20000, 10000, 1000, 9000, 80000, 2000, 18000, 160000];

var packInput = document.getElementsByClassName("pack");

var packInputValue = [];

var packSum = 0;

var packQuty = [];

var levelItems = document.getElementsByClassName("level");   //all level input box

var selectOption = document.getElementsByClassName("select");  //all select box

var levelValues= [];

var selectValues = [];

var sum = 0;

var calculationValue;

var result = [];

function evaluate(){
    var inputValues = [];
    var selectValues = [];
    // var flagTest = true;    
    sum = 0;                //sum value to display
    calculationValue;       //calculation for sum
    result = [];            //individual calculated level input box values

   for(var i=0; i< selectItems.length; i++){
       sum =0;
       var lastChar = selectItems[i].value;
       var charToNumber = lastChar.charAt(lastChar.length-1);
       selectValues.push(parseInt(charToNumber));

       var levelInputValue = parseInt(document.getElementsByClassName("level")[i].value);       
       if(isNaN(levelInputValue)){
           console.log("added");
           levelInputValue = 0;
       }        

       inputValues.push(levelInputValue);        

}
levelValues = inputValues;
console.log("level values", levelValues);
    selectItemsValue = selectValues;             


    for(var i =0; i< selectItemsValue.length; i++){        
        calculationValue = levelValues[i] * 10;
            calculationValue = calculationValue * selectItemsValue[i];
            result.push(calculationValue/2);
        sum += result[i];        

    }
        
        document.getElementById("result").innerHTML = sum + packSum;
}


for(var i =0; i<levelItems.length; i++){
    console.log("level",  levelItems[i].name);
    levelItems[i].addEventListener("input", evaluate);
    
        if(isNaN(levelItems[i].value) || levelItems[i].value === "" ){  // if blank or not number fill with 0            
            levelValues[i] = 0;
        }    
}

for(var i=0; i<selectOption.length; i++){
    selectOption[i].addEventListener("change", evaluate)
}


function quantity(event){
    // evaluate();
    console.log("quantity", event.target.name);
    packSum=0;

    var packname = event.target.name;    
    if(packname.length === "packqty1".length){                                  //if length is packqty 1 to 9
    var charToNumber = packname.charAt(packname.length-1);
    var index = parseInt(charToNumber);
        packInputValue[index - 1] = Number(event.target.value);        
    }else{                                                      //if length is packqty 10 to 37
        var charToNumber = packname.slice(-2);
    var index = parseInt(charToNumber);
        packInputValue[index - 1] = Number(event.target.value);        
    }

    for(var i =0; i< packInput.length; i++){
        packSum += (packCost[i] * packInputValue[i]);        

    }
        
        document.getElementById("result").innerHTML = packSum + sum;
}


for(var i=0; i<packInput.length; i++){
    var packValues =[];
    packInput[i].addEventListener("input", quantity);
    if(isNaN(packInput[i].value) || packInput[i].value === "" ){        
        packInputValue[i] = 0;
    }    
}

