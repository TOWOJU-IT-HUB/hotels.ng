    <!-- Summernote css -->
    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <script src="<?= base_url() ?>/html/assets/js/inputags.js"></script>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                </div>
                <!-- end page-title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php $attributes = ['id' => 'manage_rooms'];
                                $_hotel_name = $rooms['room_name'];
                                $_hotel_id = $rooms['id'];
                                ?>
                                <?= form_open_multipart(route_to('admin.manage_rooms'), $attributes) ?>
                                <div style="min-height: 350px">
                                    <div class="card card-body">
                                        <span class="h4 text-center">Add Rooms to Hotel <?= $_hotel_name ?></span>
                                    </div>
                                    <div class="card card-body">

                                        <div class="row mb-3">
                                            <input type="hidden" name="id" value="<?= $rooms['id'] ?>">
                                            <input type="hidden" name="partner_id" value="<?= curr_user['id'] ?>">
                                            <div class="col-md-6">
                                                <label class="none" for="gmz-field-post_title">Room Name</label>
                                                <input type="text" name="room_name" class="form-control  gmz-validation  " id="gmz-field-post_title" value="<?= $rooms['room_name'] ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="none" for="gmz-field-post_title">Hotel Image Thumbnail (250x250)</label>
                                                <input type="file" name="room_image" class="form-control" accept="images/*">
                                            </div>
                                        </div>
                                        <div class="w-100"></div>

                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label class="none" for="gmz-field-post_title">Room Price</label>
                                                <input type="number" name="price" class="form-control  gmz-validation  " id="gmz-field-post_title" value="<?= $rooms['price'] ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="none" for="gmz-field-post_title">Number of Room</label>
                                                <input type="number" name="total_rooms" class="form-control" accept="images/*" value="<?= $rooms['total_rooms'] ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="none" for="gmz-field-post_title">Number of Beds</label>
                                                <input type="number" name="beds" class="form-control  gmz-validation  " id="gmz-field-post_title" value="<?= $rooms['beds'] ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label class="none" for="gmz-field-post_title">Number Of Adult</label>
                                                <input type="number" name="adults" class="form-control  gmz-validation  " id="gmz-field-post_title" value="<?= $rooms['adults'] ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="none" for="gmz-field-post_title">Number Of Children</label>
                                                <input type="number" name="childrens" class="form-control" value="<?= $rooms['childrens'] ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="none" for="gmz-field-post_title">Room Footage</label>
                                                <input type="number" name="footage" class="form-control  gmz-validation" id="gmz-field-post_title" value="<?= $rooms['footage'] ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-12 mb-2">
                                                <label class="none">Facilities <small>(seperate by comma)</small></label>
                                                <input type="text" class="form-control" data-role="tagsinput" name="facilities" class="new-control-input" value="<?= $rooms['facilities'] ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="full-name">Checkin Time<span class="">*</span>
                                                    </label>
                                                    <select name="checkin" class="form-control">
                                                        <?php if(isset($rooms['checkin'])): ?>
                                                            <option value="<?= $rooms['checkin'] ?>" selected><?= $rooms['checkin'] ?></option>
                                                        <?php endif ?>
                                                        <?php echo get_times(); ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="full-name">Checkout Time<span class="">*</span>
                                                    </label>
                                                    <select name="checkout" class="form-control">
                                                        <?php if(isset($rooms['checkout'])): ?>
                                                            <option value="<?= $rooms['checkout'] ?>" selected><?= $rooms['checkout'] ?></option>
                                                        <?php endif ?>
                                                        <?php echo get_times(); ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="full-name">Currency<span class="">*</span>
                                                    </label>
                                                    <small><a target="_blank" href="https://developer.paypal.com/docs/api/reference/currency-codes/#paypal-account-payments">Click to view accepted currencies</a></small>
                                                    <input type="text" maxlength="3" placeholder="USD" value="USD" minlength="3" name="currencycode" step="any" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row p-3">

                                        </div>
                                    </div>

                                </div>
                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <button type="submit" id="submitBtn" class="btn btn-info btn-md"><?= lang('text.save') ?> </button>
                                    </div>
                                </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>

        <?php
        function get_times($default = '19:00', $interval = '+30 minutes')
        {
            $output = '';
            $current = strtotime('00:00');
            $end = strtotime('23:59');
            while ($current <= $end) {
                $time = date('H:i', $current);
                $sel = ($time == $default) ? ' selected' : '';

                $output .= "<option value=\"{$time}\"{$sel}>" . date('h.i A', $current) . '</option>';
                $current = strtotime($interval, $current);
            }
            return $output;
        }
        ?>
        <!-- content -->
        <style>
            .label-info {
                position: relative;
                display: inline-block;
                margin: 2px;
                padding: 3px 5px 4px 4px;
                background-color: #19BC9C;
                text-align: center;
                color: #fff;
                opacity: 1;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
                -moz-background-clip: padding;
                -webkit-background-clip: padding-box;
                background-clip: padding-box;
            }

            input.inputTags-field {
                border: none;
                width: 100% !important;
                margin-left: 4px;
                background-color: transparent;
            }
        </style>