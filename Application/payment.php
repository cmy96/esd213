
<?php

require_once "include/common.php";

include "include/services/docker_links.php";
include 'header.php';

$success_url = "capture_payment.php?bookingid={$_GET['bookingid']}&payment={$_GET['amount']}";
?>
<body>
  <h3 class ='m-4'>You are paying $<?=$_GET['amount']?> to <?=$_GET['name']?></h3>
  <!-- RENDER PAYPAL BUTTON -->
  <script
    src="https://www.paypal.com/sdk/js?client-id=Ad4FEQLsSmuYkzKahqW9WyNkfizvYXeBfMlvz-wYkGaNxH4yYlGfSgXVqalwFXW_Ze_Dmf6pgPrtiH6T&currency=SGD">
  </script>

  <div id="paypal-button-container" class='mx-auto p-3'></div>

  <!-- SET UP TRANSACTION -->
  <script>

    // MING YU, all you need to do is put the amount to be paid into this variable. 
    var subtotal = <?=$_GET["amount"];?>

    paypal.Buttons({
      createOrder: function(data, actions) {
        // Set up the transaction
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: subtotal
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        // Capture the funds from the transaction
        return actions.order.capture().then(function(details) {
          // Show a success message to your buyer
          alert('Your Transaction was completed successfully ' + details.payer.name.given_name + "! Thank you for choosing A Cut Above.");
          window.location.href = '<?=$success_url?>';
          // Call your server to save the transaction
          return fetch('/paypal-transaction-complete', {
            method: 'post',
            headers: {
              'content-type': 'application/json'
            },
            body: JSON.stringify({
              orderID: data.orderID
            })
          });
        });
      }
    }).render('#paypal-button-container');
  </script>
  
</body>

<?php 
include "footer.php";
?>

</html>