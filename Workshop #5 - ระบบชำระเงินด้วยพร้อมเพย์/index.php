<!DOCTYPE html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>
<body>
    <div id="paypal-button-container"></div>
    <script>
        paypal.Button.render({
            env: 'sandbox',
            client: {
                sandbox:'AZAGtN5r0gUuiaEpXiCjq5jrqTuGE98ZNyUX8GDXsPbfJ2TPZEZ9u-MRogXAsyPNq_XTkeFzStLsXThF'
            },
            commit: true,
            payment: function(data, actions) {
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: { total: '3000', currency: 'USD' }
                            }
                        ]
                    }
                });
            },
            onAuthorize: function(data, actions) {
                return actions.payment.execute().then(function() {
                    window.alert('Payment Complete!');
                });
            }

        }, '#paypal-button-container');

    </script>
</body>
