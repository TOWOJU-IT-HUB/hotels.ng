<?php if (!empty($order)) : $order = array_filter($order) ?>
    <!-- // main contents goes here -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Details</a>
        </li><?php if(session()->get('role') == 'admin'): ?>
        <li class="nav-item">
            <a class="nav-link" id="cust-tab" data-toggle="tab" href="#cust" role="tab" aria-controls="cust" aria-selected="false">Customer</a>
        </li><?php endif ?>
    </ul>
    <div class="tab-content mt-4 text-left" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!-- // Tab one. for settings -->
            <?php
            $tax_total_price = (conf['tax'] / $order['min_total_price']) * 100;
            ?>
            <div class="ml-3">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr><a href="<?= route_to('hotels.view') . $order['hotel_id']; ?>">
                                    <div class="media">
                                        <img class="d-flex align-self-start rounded mr-3" src="<?= $order['hotel_thumbnail'] ?>" alt="" height="64">
                                        <div class="media-body">
                                            <h5 class="mt-3 font-14"><?= $order['hotel_name'] ?></h5>
                                        </div>
                                    </div>
                                </a>
                            </tr>
                            <tr>
                                <th scope="col">CheckIn</th>
                                <td><?= $order['booking_from'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Checkout</th>
                                <td><?= $order['booking_to'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Total Rooms</th>
                                <td><?= $order['total_rooms'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Number of Adult</th>
                                <td><?= $order['no_adult'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Room Details</th>
                                <td>
                                    <p><?= $order['total_rooms'] ?> Room(s) </p> <?= $order['currencycode'] . $order['no_adult'] * $order['min_total_price'] ?>
                                </td>
                            </tr>
                            <!-- <hr> -->
                            <tr>
                                <th scope="col">Base Price</th>
                                <td><?= $order['min_total_price'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Sub Total</th>
                                <td><?= $order['currencycode'] . number_format($order['min_total_price'], 2) ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Tax</th>
                                <td><?= conf['tax'] ?> ==> <?= $order['currencycode'] . number_format($tax_total_price, 2) ?> </td>
                            </tr>
                            <tr style="background-color: #eee;">
                                <th scope="col">Total Amount</th>
                                <td><?= $order['currencycode'] . number_format($order['min_total_price'] + $tax_total_price, 2) ?></td>
                            </tr>
                            
                            <tr class="text-center">
                                <td>
                                    <a href="<?= base_url('admin/grabActive/' . $order['hotel_id'] . '/' . $order['id']) ?>">
                                        <button class="btn btn-primary btn-bg" type="button">
                                            Send Invoice
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="cust" role="tabpanel" aria-labelledby="profile-tab">
            <!-- // tab 2 for custom css -->
            <div class="ml-3">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="col">FullName:</th>
                                <td><?= $order['fullname'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Email</th>
                                <td><?= $order['email'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Phone</th>
                                <td><?= $order['phone'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Address</th>
                                <td><?= $order['address'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Date</th>
                                <td><?= $order['created_at'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php else : ?>
    <div class="card card-body p-5">
        Unable to locate the requested resources on this server. that's all we know.
    </div>
<?php endif ?>