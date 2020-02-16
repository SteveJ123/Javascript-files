function save_options2(){
  var checkers3 = document.getElementById('switch3').checked;
  var checkers4 = document.getElementById('switch4').checked;
  chrome.storage.sync.set({
    checkers3: checkers3,
    checkers4: checkers4
  }, function() {
    console.log('saved.')
})}


function save_options() {
    var checkers2 = document.getElementById('switch2').checked;
    var checkers3 = document.getElementById('switch3').checked;
    var checkers4 = document.getElementById('switch4').checked;
    chrome.storage.sync.set({
      checkers2: checkers2,
      checkers3: checkers3,
      checkers4: checkers4
    }, function() {
      // Update status to let user know options were saved.
      if(checkers2==true){
        new Notification('Autoclick ON.', {
            icon:'images/icon.png'
        })

      }else{
        new Notification('Autoclick OFF.', {
            icon:'images/icon.png'
        })
      }
    });
  }
function restore_options() {
    chrome.storage.sync.get({
      checkers2: false,
      checkers3: false,
      checkers4: false
    }, function(items) {
      document.getElementById('switch2').checked = items.checkers2;
      document.getElementById('switch3').checked = items.checkers3;
      document.getElementById('switch4').checked = items.checkers4;
    });
  }


document.addEventListener('DOMContentLoaded', restore_options);


document.addEventListener('DOMContentLoaded', function(){
    document.getElementById('switch2').onchange = function(){
      save_options()
    }
    document.getElementById('switch3').onchange = function(){
      save_options2()
  }
    document.getElementById('switch4').onchange = function(){
      save_options2()
}
});