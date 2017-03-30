function payWithPaystack(email, amount, ref, meta = ""){
    var handler = PaystackPop.setup({
      key: 'pk_test_f0dfa9ed3fd01bbbf59ede20a02695115871bb48',
      email: email,
      amount: amount * 100,
      ref: ref,
      metadata: {
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }