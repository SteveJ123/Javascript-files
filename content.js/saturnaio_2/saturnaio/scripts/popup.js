

function save_options2() {
    var name = document.getElementById('value1').value;
    var email = document.getElementById('value2').value;
    var phone = document.getElementById('value3').value;
    var add1 = document.getElementById('value4').value;
    var add2 = document.getElementById('value5').value;
    var city = document.getElementById('value6').value;
    var state = document.getElementById('value7').value;
    var zipcode = document.getElementById('value8').value;
    var country = document.getElementById('value9').value;
    var cardnumber = document.getElementById('value10').value;
    var exp = document.getElementById('value11').value;
    var expdate = exp.split("/")
    var cvv = document.getElementById('value12').value;
    chrome.storage.sync.set({
      name:name,
      email:email,
      phone:phone,
      add1:add1,
      add2:add2,
      city:city,
      state:state,
      zipcode:zipcode,
      country:country,
      cardnumber:cardnumber,
      exp:exp,
      expmonth:expdate[0],
      expyear:expdate[1],
      cvv:cvv
    }, function() {
      new Notification('Saved!', {
        icon:'images/icon.png'
    })
    })
  }
  function restore_options2() {
    chrome.storage.sync.get([
    'name',
    'email',
    'phone',
    'add1',
    'add2',
    'city',
    'state',
    'zipcode', 
    'country', 
    'cardnumber', 
    'exp',
    'cvv'
    ], function(items) {
      if(items.name==undefined){
        process.exit;
      }
      document.getElementById('value1').value = items.name;
      document.getElementById('value2').value = items.email;
      document.getElementById('value3').value = items.phone;
      document.getElementById('value4').value = items.add1;
      document.getElementById('value5').value = items.add2;
      document.getElementById('value6').value = items.city;
      document.getElementById('value7').value = items.state;
      document.getElementById('value8').value = items.zipcode;
      document.getElementById('value9').value = items.country;
      document.getElementById('value10').value = items.cardnumber;
      document.getElementById('value11').value = items.exp;
      document.getElementById('value12').value = items.cvv;
    });
  }
  function save_options() {
    var checkers = document.getElementById('switch1').checked;
    chrome.storage.sync.set({
      checkers: checkers
    }, function() {
      // Update status to let user know options were saved.
      if(checkers==true){
        new Notification('Autofill ON.', {
            icon:'images/icon.png'
        })
      }else{
        new Notification('Autofill OFF.', {
            icon:'images/icon.png'
        })
      }
    });
  }
  function restore_options() {
    chrome.storage.sync.get({
      checkers: false,
    }, function(items) {
      document.getElementById('switch1').checked = items.checkers;
    });
}

//document.addEventListener('DOMContentLoaded', restore_options);
document.addEventListener('DOMContentLoaded', restore_options2);



window.onload = function(){
    document.getElementById('save').onclick = function(){
        save_options2()
    }
  }

  


