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
                    <a href="<?= current_url() . '/pay' ?>">
                        <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppppcmcvdam.png" alt="Pay with PayPal, PayPal Credit or any major credit card" />
                    </a>
                </td>
                <td><?= $hotel['currencycode'] . number_format($hotel['min_total_price'], 2) ?></td>
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

            <tr class="item">
                <td style="font-weight: bold;">Total: <?= $hotel['currencycode'] . number_format($hotel['min_total_price'], 2) ?></td>

                <td>Amount Due: <?= $hotel['currencycode'] . number_format($amount, 2) ?></td>
            </tr>
            <tr class="item last">
                <td></td>
                <td>
                    <a href="<?= current_url() . '/pay' ?>">
                        <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" alt="Check out with PayPal" />
                    </a>
                </td>
            </tr>
        </table>
    </div>
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
            text: '<?= session()->get("success") ?>',
            type: 'success',
        })
    </script>
<?php endif ?>
</body>

</html>