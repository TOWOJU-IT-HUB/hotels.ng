<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Booking Invoice</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
    <!-- Sweetalert css -->
    <link href="<?= base_url('dashboard/plugins/sweetalert2.css') ?>" rel="stylesheet" type="text/css">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <a href="<?= base_url() ?>"><img src="<?= base_url('uploads/logo/' . conf['site_logo']) ?>" style="width: 100%; max-width: 300px" /></a>
                            </td>

                            <td>
                                Invoice #: <?= $info['id'] ?><br>
                                Created: <?= date('D d, F Y  H:iA',  strtotime($info['created_at'])) ?><br>
                                Due: <?= date('D d, F Y  H:iA',  strtotime($info['created_at']. "+7 days")) ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <?= conf['site_title'] ?>,<br>
                                <?= conf['contact_us_address'] ?><br>
                                <?= conf['contact_us_email'] ?><br>
                                <?= conf['contact_us_phone'] ?>
                            </td>

                            <td>
                                <?= $info['lastname'] . ' ' . $info['firstname'] ?><br>
                                <?= $info['email'] ?><br>
                                <?= $info['number'] ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Payment Method</td>

                <td>PayPal</td>
            </tr>

            <tr class="details">
                <td>
                    <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppppcmcvdam.png" alt="Pay with PayPal, PayPal Credit or any major credit card" />
                </td>
                <td><?= $hotel['currencycode'] . number_format($hotel['min_total_price'], 2) ?> (<?= country_symbol() . number_format(convertedCurrency($hotel['min_total_price'], $hotel['currencycode'], COUNTRY_CURRENCY), 2) ?>)</td>
            </tr>

            <tr class="heading">
                <td>Booking Info</td>

                <td>Price</td>
            </tr>

            <tr class="item">
                <td>Hotel name</td>

                <td><?= $hotel['hotel_name'] ?></td>
            </tr>

            <tr class="item">
                <td>Hotel Location</td>

                <td><?= $hotel['city'] . ', ' . $hotel['country_trans'] ?></td>
            </tr>

            <tr class="item">
                <td>Amount Paid so far</td>

                <td><?= $hotel['currencycode'] . number_format($info['total_paid'], 2) ?></td>
            </tr>

            <tr class="item ">
                <td>Payment Currency</td>

                <td style="font-weight: bold;"><?= $hotel['currencycode'] ?></td>
            </tr>

            <tr class="item"> <?php $_curr = $hotel['currencycode']; $newPriceGBP = getDueAmount($_curr, $amount) ?>
                <td style="font-weight: bold;">Total: <?= $_curr = $hotel['currencycode'] . number_format($hotel['min_total_price'], 2) ?> (<?= PAYPAL_CURRENCY . number_format($hotel['min_total_price'], 2) ?>)</td>

                <td>Amount Due: <?= $hotel['currencycode'] . number_format($amount, 2) ?> (<?= PAYPAL_CURRENCY ?><span id='f_amount'><?= number_format($newPriceGBP, 2) ?></span>)</td>
            </tr>
            <tr class="item last">
                <td></td>
                <td>
                    <div id="paypal-button-container"></div>
                    <div id="paypal-button"></div>
                </td>
            </tr>
        </table>
    </div>
    <script>
        let amount_due = $('#f_amount').text();
        // alert(amount_due);
        paypal.Button.render({
            env: '<?php echo PAYPAL_ENV; ?>',
            client: {
                "<?= PAYPAL_ENV ?>" : "<?= CLIENT_ID ?>"
            },
            payment: function(data, actions) {
                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: amount_due,
                            currency: '<?php echo PAYPAL_CURRENCY ?>'
                        }
                    }]
                });
            },
            onAuthorize: function(data, actions) {
                return actions.payment.execute()
                    .then(function() {
                        window.location = "<?= base_url('home/check_paypal') ?>?pay_id=<?= $inv_id ?>&am=<?= $final_price ?>&paymentID=" +
                            data.paymentID + "&payerID=" +
                            data.payerID + "&token=" + data.paymentToken + "&pid=<?php echo $amount; ?>&currency=<?= $_curr ?>";
                    });
            }
        }, '#paypal-button');
    </script>
    <!-- Sweet-Alert  -->
    <script src="<?= base_url('dashboard/plugins/sweetalert2.min.js') ?>"></script>
    <?php if (session()->get('error')) : ?>
        <script>
            swal({
                title: 'sorry!',
                text: "<?= session()->get('error') ?>",
                type: 'error',
            })
        </script>
    <?php elseif (session()->get('success')) : ?>
        <script>
            swal({
                title: 'Good job!',
                text: '<?= session()->get("success") ?>'+'<br>Please Allow the paypal redirection to complete after payment.',
                type: 'success',
            })
        </script>
    <?php endif ?>
<?php 

    function getDueAmount($curr, $amount)
    {
        $result = file_get_contents("https://open.er-api.com/v6/latest/".$curr);
        $result = json_decode($result, true);
        $result = $amount * $result['rates']['GBP'];
        return  $result;
    }

?>
</body>

</html>