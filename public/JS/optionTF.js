
  var paymentOption = document.getElementById('payment_option');
  var fileInput = document.getElementById('formFile');

  paymentOption.addEventListener('change', function() {
    if (paymentOption.value === 'Transfer') {
      fileInput.required = true;
    } else {
      fileInput.required = false;
    }
  });

  