
var delay = 100

var looper;
function runloop(){
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
  'expmonth',
  'expyear',
  'cvv'
  ], function(result) {
  var name1 = result.name
  var name2 = name1.split(' ');
  var email = result.email
  var phone = result.phone
  var add1 = result.add1
  var add2 = result.add2
  var city = result.city
  var state = result.state
  var zipcode = result.zipcode
  var country = result.country
  if(country=='US'){
      country = 'United States'
  }
  var cardnumber = result.cardnumber
  var expmonth = result.expmonth
  var expyear = result.expyear
  var cvv = result.cvv


  let shopify = document.getElementById('checkout_shipping_address_first_name')
  let supreme = document.getElementById('order_billing_name')
  let yeezysupply = document.getElementById('firstName')



if(shopify||supreme||yeezysupply){
  if(shopify){
      document.getElementById('checkout_email').value = email
      document.getElementById('checkout_shipping_address_first_name').value = name2[0]
      document.getElementById('checkout_shipping_address_last_name').value = name2[1]
      document.getElementById('checkout_shipping_address_address1').value = add1
      document.getElementById('checkout_shipping_address_address2').value = add2
      document.getElementById('checkout_shipping_address_city').value = city
      document.getElementById('checkout_shipping_address_country').value = country
      document.getElementById('checkout_shipping_address_province').value = state
      document.getElementById('checkout_shipping_address_zip').value = zipcode
      document.getElementById('checkout_shipping_address_phone').value = phone  
      document.getElementById('number').value = cardnumber //// Needs work    
}
  if(supreme){
      document.getElementById('order_billing_name').value = name
      document.getElementById('order_email').value = email
      document.getElementById('order_tel').value = phone
      document.getElementById('bo').value = add1
      document.getElementById('oba3').value = add2
      document.getElementById('order_billing_zip').value = zipcode
      document.getElementById('order_billing_city').value = city
      document.getElementById('order_billing_state').value = state
      document.getElementById('order_billing_country').value = country
      document.getElementById('rnsnckrn').value = cardnumber
      document.getElementById('credit_card_month').value = expmonth
      document.getElementById('credit_card_year').value = expyear
      document.getElementById('orcer').value = cvv
      document.querySelector('input:checkbox[value="1"]').click(); ///once supreme opens get this selector value
      document.getElementById('order_terms').prop("checked", true).click();
  }
  if(yeezysupply){
      // Yeezy supply fills in but you have to click each field after for some reason
      document.getElementById('firstName').value = name2[0]
      document.getElementById('lastName').value = name2[1]
      document.getElementById('address1').value = add1
      document.querySelector('#app > div.container___3PPPZ.desktop-container___1UV4E.header-margin___1jFHm > div.main___2aRHM > div > div > main > form > div > div:nth-child(1) > div > div:nth-child(4) > div:nth-child(1) > a').click()
      document.getElementById('address2').value = add2
      document.getElementById('city').value = city

      // for some reason state cannot be autofilled
     // document.querySelector('#app > div.container___3PPPZ.desktop-container___1UV4E.header-margin___1jFHm > div.main___2aRHM > div > div > main > form > div > div:nth-child(1) > div > div:nth-child(6) > span > div > div > select').value = state
      
     document.getElementById('zipcode').value = zipcode
      document.getElementById('phoneNumber').value = phone
      document.getElementById('emailAddress').value = email
      document.querySelector('#card-number').value = cardnumber
      document.getElementById('name').value = name1
      document.getElementById('expiryDate').value = expmonth+expyear[2]+expyear[3]
      document.getElementById('security-number-field').value = cvv
  }

 // Started work on Stripe Autofill
}else{

  var stripe = document.querySelector("input[id*=name]")
  if(stripe){
      document.querySelector("input[id*=name]").value = name1
  }
  var cybersole = document.querySelector('#email')
  if(cybersole){
      document.querySelector('#email').value = email
  }
 // var card = document.querySelector('input[name*="cardnumber"]')
// if(card){
//      alert("card!")
//  }

 // document.querySelectorAll('input[name*="exp-date"]').value = expmonth+expyear[2]+expyear[3]

//  return
}
})
looper = setInterval(runloop,100);
}


chrome.runtime.onMessage.addListener(
    function(request, sender, sendResponse) {
      if( request.message === "start" ) {
       start();
    }else{
        clear();
    }
    }
  );

  function start(){
      runloop()
  }
  
  function clear(){
    clearInterval(looper)
  }