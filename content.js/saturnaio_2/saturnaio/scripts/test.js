var requestnumber = 3
already1=true
i=0

var theloop;
function run2(){
theloop = setInterval(function() {
if(already1){
    Array(1).fill().map(()=>{ 
    console.log('yo')
   // document.querySelector('button[type="submit"]').click()
    i+=1
    return
})  
if(i==requestnumber){
    already1=false
    i=0
    return
}
}
}, 1000)}

//run2()


function yo(){
global.yoo = setInterval(function(){
    console.log('yo')
},2000)
}




var classes = [];
function oh(){
    var b = 'Jake'
    classes.push(b);
}
oh()
console.log(classes[0]);