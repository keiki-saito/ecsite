const { add } = require("lodash");

$(function(){

    var address = $('#address-radio');
    var switchBtn = $('input[name=type]');
    var subAddress = $('#subAddress-radio');
    address.hide();  //最初はaddressを隠しておく
    subAddress.hide(); //最初はsubAddressを隠しておく
    switchBtn.on('change', function(){

     var inputValue = $(this).val();
        //registeredが選択されている時
      if(inputValue === 'registered'){
          address.show();
        subAddress.hide();
       $('#sub_address').val('');
       $('#search-word').val('');
        //newが選択されている時
      }else{
       subAddress.show();
       address.hide();
       address.children('option').prop('selected',false);  //selectedを解除する

      }
    });
  });
