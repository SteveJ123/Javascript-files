// setTimeout(function(){
//     console.log("test");
// }, 3000);

var lengthofarray =  require("./module.js");
var events = require('events');

var util = require('util');

console.log(lengthofarray.lengthofarray(['test', 'test']));
console.log(lengthofarray.add(2, 2));

var myEvents = new events.EventEmitter();

myEvents.on("say", function(){
    console.log('say');
});

myEvents.emit('say');

// console.log(util);

var Person = function(name){
    this.name = name;
};

util.inherits(Person, events.EventEmitter);

var david = new Person('david');

console.log(david.name);

david.on('david', function(msg){
    console.log(david.name + msg);
});

david.emit('david', "hello");






