<div class="site-content">
    <section class="list-hotel list-hotel--grid py-40 bg-gray-100">
        <div class="container">
            <style>
                .hotel_img {
                    max-width: 358px;
                    max-height: 238px;
                }
            </style>
            <h2 class="section-title mb-5">Search Reasult.</h2>
            <?php $hey = $_GET['room_type']; ?>

            <div class="search-form-wrapper">
                <div class="tab-content mb-5 mt-3" id="searchFormTab">
                    <div class="tab-pane fade show active hotel-search-form" id="hotel-search" role="tabpanel" aria-labelledby="hotel-search-tab">
                        <form id="search-hotel" method="GET" class="search-form hotel" action="/search">
                            <div class="search-form__basic">
                                <div class="search-form__address">
                                    <i class="fal fa-city"></i>
                                    <input type="text" id="search" name="location" placeholder="City Name" class="location" autocomplete="off" value="<?php if(isset($_GET['location'])){ echo $_GET['location']; } ?>">
                                    <input type="hidden" name="lng" value="">
                                    <input type="hidden" name="address" value="">
                                </div>

                                <input type="text" class="input-hidden check-in-out-field align-self-end" name="checkInOut" value="" data-same-date="false">
                                <input type="text" class="input-hidden check-in-field" name="checkIn" value="<?php if(isset($_GET['checkIn'])){ echo $_GET['checkIn']; } ?>">
                                <input type="text" class="input-hidden check-out-field" name="checkOut" value="<?php if(isset($_GET['checkOut'])){ echo $_GET['checkOut']; } ?>">
                                <div class="search-form__from date-group">
                                    <i class="fal fa-calendar-alt"></i>
                                    <span class="check-in-render" data-date-format="DD/MM/YYYY">
                                        <?php if(isset($_GET['checkIn']) && !empty(($_GET['checkIn']))){ echo $_GET['checkIn']; } else { echo "Check In"; } ?>
                                    </span>
                                </div>
                                <div class="search-form__to date-group">
                                    <i class="fal fa-calendar-alt"></i>
                                    <span class="check-out-render" data-date-format="DD/MM/YYYY">
                                        <?php if(isset($_GET['checkOut']) && !empty(($_GET['checkOut']))){ echo $_GET['checkOut']; } else { echo "Check Out"; } ?>
                                    </span>
                                </div>

                                <div class="search-form__guest hotel">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle" id="dropdownGuestButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fal fa-user"></i>
                                            <span class="guest-render">
                                                <span id="adults_num"> <?php if(isset($_GET['adult'])){ echo $_GET['adult']." Adults"; } else { echo "1 Adult"; } ?> </span> • <span id="childs_num"> <?php if(isset($_GET['children'])){ echo $_GET['children'] . ' Childrens'; } else { echo "0 Children"; } ?> </span> • <span id="rooms_num"> <?php if(isset($_GET['number_room'])){ echo $_GET['number_room'].' Rooms'; } else { echo "0 Rooms"; } ?> </span><span class="ml-3"></span>
                                            </span>
                                        </div>
                                        <div class="dropdown-menu" aria-labelledby="dropdownGuestButton">
                                            <div class="item d-flex align-items-center justify-content-between">
                                                <div class="label">Rooms</div>
                                                <div class="value">
                                                    <select class="form-control" onchange="rooms_num(this.value)" id="number_room" name="number_room">
                                                    <?php if(isset($_GET['number_room'])){ echo '<option value="'.$_GET['number_room'].'" selected>'.$_GET['number_room'].'</option>'; } else { echo '<option value="0" selected>0</option>'; } ?>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="item d-flex align-items-center justify-content-between">
                                                <div class="label">Adults</div>
                                                <div class="value">
                                                    <select class="form-control" onchange="adults_num(this.value)" id="adult" name="adult">
                                                    <?php if(isset($_GET['children'])){ echo '<option value="'.$_GET['adult'].'" selected>'.$_GET['adult'].'</option>'; } else { echo '<option value="1" selected>1</option>'; } ?>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="item d-flex align-items-center justify-content-between">
                                                <div class="label">Children</div>
                                                <div class="value">
                                                    <select class="form-control" onchange="childs_num(this.value)" id="children" name="children">
                                                    <?php if(isset($_GET['children'])){ echo '<option value="'.$_GET['children'].'" selected>'.$_GET['children'].'</option>'; } else { echo '<option value="0" selected>0</option>'; } ?>
                                                        <option value="0">0</option>                                                        
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- <button class="btn search-form__more" id="btn_searchy" type="button"><i class="fal fa-search-plus"></i></button> -->

                                <button class="btn btn-primary search-form__search" type="submit"><i class="fal fa-search"></i>Search
                                </button>

                            </div>

                            <div class="search-form__advancedl mt-1 bg-white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="search-form__label">Price</div>
                                            <input type="text" class="price-range-slider" name="price_range" value="" data-min="0.00" data-max="10800.00" data-form="250.00" data-to="8000.00" data-prefix="" data-postfix="" />

                                        </div>
                                        <div class="col-md-6 gmz-checkbox-wrapper">
                                            <div class="search-form__label">Types</div>
                                            <?php $hey = [] ?>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Hotel',     $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Hotel">Hotel</label>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Apartment', $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Apartment">Apartment</label>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Resorts',   $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Resorts">Resorts</label>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Resorts',   $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Resorts">Resorts</label>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Villas',    $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Villas">Villas</label>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Guest House',     $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Guest House">Guest House</label>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Motels',    $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Motels">Motels</label>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Cottage',   $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Cottage">Cottage</label>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Glamping',  $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Glamping">Glamping</label>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Vacations', $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Vacations">Vacations</label>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Hostels',   $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Hostels">Hostels</label>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Farm Stay',  $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Farm Stay">Farm Stay</label>
                                            <label class="checkbox-inline"><input type="checkbox" <?php if(in_array('Luxury Tents', $hey)) echo 'checked="checked"'; ?> class="gmz-checkbox-item" name="room_type[]" value="Luxury Tents">Luxury Tents</label>
                                            <input type="hidden" name="room_type[]" value="" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row"> <?php if (!empty($response)) : ?>
                    <?php foreach ($response as $key => $rex) : ?>
                        <?php
                            $es = [
                                'hotel_id'        =>    $rex['hotel_id'],
                            ];
                            $es = '?' . http_build_query($es);
                            $final_url = route_to('hotels.view') . $es;
                            if (isset($_GET['checkIn'])) {
                                $_SESSION['checkin'] = $_GET['checkIn'];
                                $_SESSION['checkout'] = $_GET['checkOut'];
                            }
                            if (isset($_GET['adult'])) {
                                $_SESSION['adult'] = $_GET['adult'];
                            }
                        ?>
                        <a href="<?= $final_url ?>">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="hotel-item hotel-item--grid" data-plugin="matchHeight">
                                    <div class="hotel-item__thumbnail">

                                        <div class="add-wishlist-wrapper">
                                            <a href='#gmz-login-popup' id="wishModal" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"></a>
                                            <a onclick="addWishlist($(this).data('hotel_id'))" class="add-wishlist gmz-box-popup" data-hotel_id="<?= $rex['hotel_id'] ?>" data-effect="mfp-zoom-in">
                                                <i class="fal fa-heart"></i>
                                            </a>
                                        </div>

                                        <a href="<?= $final_url ?>">
                                            <img class="hotel_img" src="<?= str_replace('max1280x900', '358x238', $rex['hotel_thumbnail']) ?>" alt="<?= $rex['hotel_name'] ?>" width="358px" height="238px">
                                        </a>
                                        <a class="hotel-item__type" href="#!">
                                            <?= $rex['accommodation_type_name'] ?>
                                        </a>
                                    </div>
                                    <div class="hotel-item__details">
                                        <span class="hotel-item__label"><?= $rex['accommodation_type_name'] ?></span>
                                        <div class="hotel-item__rating">
                                            <div class="star-rating">
                                                <?php $i = 0;
                                                $stars = ($rex['review_score'] / 2) ?>
                                                <?php while ($stars < 5 && $rex['review_score'] != null) : ?>
                                                    <i class="fa fa-star"></i>
                                                <?php $stars++;
                                                endwhile ?>
                                            </div>
                                        </div>
                                        <h3 class="hotel-item__title"><a href="<?= $final_url ?>"><?= $rex['hotel_name'] ?></a></h3>
                                        <p class=" hotel-item__location"><i class="fas fa-map-marker-alt mr-2"></i><?= $rex['city'] . ' ' . $rex['country_trans'] ?> </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="hotel-item__price">
                                                <span class="_retail"><?= COUNTRY_CURRENCY . number_format(convertedCurrency($rex['min_total_price'], $rex['currencycode']), 2) ?></span>
                                                <span class="_unit">night</span>
                                            </div>
                                            <a class="btn btn-primary hotel-item__view-detail" href="<?= $final_url ?>">View Detail </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                <?php endforeach;
                                endif ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <?= $pager->simpleLinks() ?>
                </div>
            </div>
        </div>
    </section>
</div>