<script src="https://www.paypalobjects.com/api/checkout.js"></script>;
<div id="paypal-button"></div>;
<?php
    $paypalEnv       = 'sandbox'; 
    $paypalURL       = 'https://api.sandbox.paypal.com/v1/';  
    $paypalClientID  = "Ac3USf803MQxxrQg3_f8xR4NDfse0zHETobbxdNNFFYSfO-hC_6LUAHdN4yqdwTfI8ztlgXDNWe2jvT_"; 
    $paypalSecret   = "EERhZCbms8sWu88UzHX-9ovbxRd-HXVas6IqQbRVEMeRZmbDEhFsf77uyMF4sQYTzLMXXHhS4b8wLasF";

    $productData = [
        'price' =>  1000,
        'currency'  =>  'NGN',
    ];

    $pa
?>
<script>
    paypal.Button.render({
        // Configure environment
        env: '<?php echo $paypalEnv; ?>',
        client: {
            sandbox: '<?php echo $paypalClientID; ?>',
            production: '<?php echo $paypalClientID; ?>'
        },
        // Customize button (optional)
        locale: 'en_US',
        style: {
            size: 'small',
            color: 'gold',
            shape: 'pill',
        },
        // Set up a payment
        payment: function(data, actions) {
            return actions.payment.create({
                transactions: [{
                    application_context: {                        
                        cancel_url: "http://example.com/payment-successful.html",
                        return_url: "http://example.com/payment-successful.html",
                    },
                    amount: {
                        total: '<?php echo $productData['price']; ?>',
                        currency: '<?php echo $productData['currency']; ?>',
                    }
                }]
            });
        },
        // Execute the payment
        onAuthorize: function(data, actions) {
            return actions.payment.execute()
                .then(function() {
                    // Show a confirmation message to the buyer
                    //window.alert('Thank you for your purchase!');

                    // Redirect to the payment process page
                    //window.location = "process.php?paymentID=" + data.paymentID + "&token=" + data.paymentToken + "&payerID=" + data.payerID + "&pid=<?//php echo $productData['id']; ?>";
                });
        }
    }, '#paypal-button');
</script>