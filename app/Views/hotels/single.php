<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<div class="site-content">
  <section class="gallery">
    <div class="gmz-carousel-with-lightbox" data-count="5">
      <?php foreach ($images as $image) : ?>
        <a target="_blank" href="<?= $image['url_max'] ?>">
          <img src="<?= str_replace('1440x1440', '393x327', $image['img_url']) ?>" alt="home slider" />
        </a>
      <?php endforeach ?>
    </div>
  </section>
  <div class="breadcrumb">
    <div class="container">
      <ul>
        <li><a target="_blank" href="<?= route_to('home') ?>">Home</a></li>
        <li><span><?= " " ?></span></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row mt-2">
      <div class="col-lg-8 pb-5">

        <div class="row ml-2 hotel-star">
          <div class="star-rating">
            <?php if ($description['review_score'] == null) {
              $ans = $score = 0;
            } else {
              $ans = $score = ($description['review_score']) / 2;
            }
            ?>
            <?php while ($score <= 5 && $score != 0) : ?>
              <i class="fa fa-star text-warning"></i>
            <?php $score++;
            endwhile ?>
            <?php $ans = 5 - $ans ?>
            <?= str_repeat('<i class="fa fa-star"></i>', $ans) ?>
          </div>
        </div>


        <div class="row ml-2">
          <h3 class="row col post-title">
            <div class="text-left">
              <!-- <a target="_blank" href="#gmz-login-popup" class="mr-2" data-effect="mfp-zoom-in">
                <i class="fal fa-heart"></i>
              </a> -->
            </div>
            <?= $description['hotel_name'] ?>
          </h3>
          <div class="text-right">
            <span class="float-right h2 mr-4"><?= country_symbol() . number_format(convertedCurrency($description['min_total_price'], $description['currencycode']), 2) ?>/<span class="h6">night</span></span>
          </div>
        </div>

        <p class="location ml-2">
          <i class="fal fa-map-marker-alt mr-1"></i> <?= $description['address'] ?>
        </p>

        <div class="meta mb-4">
          <ul>
            <li>
              <span class="value"><?= $description['accommodation_type_name'] ?></span>
              <span class="label">Type</span>
            </li>

            <li>
              <span class="value"><?= $description['checkin'] ?></span>
              <span class="label">Checkin</span>
            </li>

            <li>
              <span class="value"><?= $description['checkout'] ?></span>
              <span class="label">Checkout</span>
            </li>

            <li>
              <span class="value">1 day</span>
              <span class="label">M.D.B.B<span class="text-danger">*</span></span>
            </li>

            <li>
              <span class="value">1 day</span>
              <span class="label">M.D Stay<span class="text-danger">**</span></span>
            </li>
          </ul>
          <div>
            <small><span class="text-primary" style="font-size: 12px;">M.D.D.B* means </span> Min day before booking</small>
          </div>
          <div>
            <small><span class="text-info" style="font-size: 12px;">M.D Stay** means </span> Min day stay</small>
          </div>
        </div>

        <section class="description">
          <h2 class="section-title">Detail</h2>
          <div class="section-content">
            <p style="text-align: justify">
              <?= $description['description'] ?>
            </p>
          </div>
        </section>
        <hr>

        <div class="section-content">
          <h2 class="section-title d-flex align-items-center justify-content-between">
            Room Availability
            <div>
              <a target="_blank" href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#hotelEnquiryModal">
                Send Enquiry
              </a>
            </div>
          </h2>
          <div id="room-render-wrapper" class="room-render-wrapper" style="background-color: #dfdfdf; padding: 15px;">
            <div class="search-form-wrapper">
              <div class="tab-content" id="searchFormTab">
                <div class="tab-pane fade show active hotel-search-form" id="hotel-search" role="tabpanel" aria-labelledby="hotel-search-tab">
                  <form id="check_avail" class="search-form hotel">
                    <div class="search-form__basic">

                      <input type="text" class="input-hidden check-in-out-field align-self-end" <?php /* name="checkInOut" */ ?> value="" data-same-date="false">
                      <input type="text" class="input-hidden check-in-field" required name="checkIn" value="<?php if (isset($_SESSION['checkin'])) {
                                                                                                              echo $_SESSION['checkin'];
                                                                                                            } ?>">
                      <input type="text" class="input-hidden check-out-field" required name="checkOut" value="<?php if (isset($_SESSION['checkout'])) {
                                                                                                                echo $_SESSION['checkout'];
                                                                                                              } ?>">
                      <input type="hidden" required name="hotel_id" value="<?= $_GET['hotel_id'] ?>">
                      <div class="search-form__from date-group">
                        <i class="fal fa-calendar-alt"></i>
                        <span class="check-in-render" data-date-format="DD/MM/YYYY">
                          <?php if (isset($_SESSION['checkin'])) {
                            echo $_SESSION['checkin'];
                          } else {
                            echo "Check In";
                          } ?>
                        </span>
                      </div>
                      <div class="search-form__to date-group">
                        <i class="fal fa-calendar-alt"></i>
                        <span class="check-out-render" data-date-format="DD/MM/YYYY">
                          <?php if (isset($_SESSION['checkout'])) {
                            echo $_SESSION['checkout'];
                          } else {
                            echo "Check Out";
                          } ?>
                        </span>
                      </div>

                      <div class="search-form__guest hotel">
                        <div class="dropdown">
                          <div class="dropdown-toggle" id="dropdownGuestButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fal fa-users"></i>
                            <span class="guest-render">
                              <?php if (isset($_SESSION['adult'])) {
                                echo $_SESSION['adult'] . ' Adult';
                              } else {
                                echo "1 Adult";
                              } ?>
                            </span>
                          </div>
                          <div class="dropdown-menu" aria-labelledby="dropdownGuestButton">
                            <div class="item d-flex align-items-center justify-content-between">
                              <div class="label">Adults</div>
                              <div class="value">
                                <select class="form-control" name="adult">
                                  <?php if (isset($_GET['adult'])) {
                                    echo '<option selected value="' . $_GET['adult'] . '">' . $_GET['adult'] . '</option>';
                                  } else {
                                    echo '<option value="1" selected>1</option>';
                                  } ?>

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
                                <select class="form-control" name="children">
                                  <option value="0" selected>0</option>
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

                      <button class="btn btn-primary search-form__search" id="check_avail_now" type="submit"> CHECK AVAILABILITY </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php if (isset($rooms) && !empty($rooms)) : ?>
            <div class="card card-body" id="icheck_avail">
              <?php foreach ($rooms as $room) : ?>
                <div class="room-item room-item--list">
                  <div class="row">
                    <div class="col-4">
                      <div class="room-item__thumbnail"><img src="<?= $room['room_image'] ?>" height="136px" alt="King Suite with Pool View"></div>
                    </div>
                    <div class="col-8">
                      <div class="room-item__details">
                        <div>
                          <h3 class="room-item__title"> <?= $room['room_name'] ?> </h3>
                          <div class="text-left">
                            <div class="i-meta" data-toggle="tooltip" title="" data-original-title="Room Size"><?= ucwords(str_replace(',', ', ',$room['facilities'])) ?></div>
                          </div>
                        </div>
                        <div class="room-price-wrapper">
                          <div class="price text-center"><span class="text-center"><?= COUNTRY_CURRENCY . number_format(convertedCurrency($room['price'], $room['currencycode'], COUNTRY_CURRENCY), 2) ?></span></div><a href="<?= base_url('home/add_order/'.$room['hotel_id']) ?>"><button onclick="initBooking($(this).data('<?= $room['hotel_id'] ?>'))" class="text-center btn btn-xl btn-info ml-5" data-hotel_id="<?= $room['hotel_id'] ?>">Book Now</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php if (empty($room)) {
                  echo "No Available Rooms at the moment";
                }
              endforeach ?>
            </div>
          <?php else : ?>
            <div class="card card-body" id="icheck_avail">
            </div>
          <?php endif ?>


        </div>
        <hr class="pb-5">

        <section class="map">
          <h2 class="section-title pb-2">Hotel On Map</h2>
          <div class="section-content">
            <div class="map-single"></div>
            <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?= $description['latitude'] ?>,<?= $description['longitude'] ?>&hl=es;z=14&amp;output=embed"></iframe>
          </div>
        </section>

        <div class="gmz-comment-list mt-4" id="review-section">
          <h3 class="comment-count mt-2">
            Last 5 Reviews By Customers
          </h3>
          <ul class="comment-list">
            <?php foreach ($reviews as $review) : ?>
              <li id="comment-25" class="comment comment-home odd alt thread-odd thread-alt depth-1">
                <div id="div-comment-25" class="article comment  clearfix" inline_comment="comment">
                  <div class="comment-item-head">
                    <div class="media">
                      <div class="media-left">
                        <img alt="" src="//via.placeholder.com/1200x900" class="avatar avatar-50 photo avatar-default" height="50" width="50">
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"> <? $review['author'] ?> </h4>
                        <div class="date"><?= $review['date'] ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="comment-item-body">
                    <div class="comment-content">
                      <p class="comment-title"><?= $review['title'] ?></p>
                      <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star star-none"></i></div>
                      <p class="text-dark"><?= $review['pros'] ?></p>
                    </div>
                  </div>
                </div>
              </li>
            <?php endforeach ?>
          </ul>
        </div>

        <div class="post-comment parent-form" id="gmz-comment-section">
          <div class="comment-form-wrapper">
            <form action="" class="comment-form form-sm gmz-form-action form-add-post-comment" method="post" data-reload-time="1000">
              <h3 class="comment-title">Leave a Review</h3>
              <p class="notice">
                Your email address will not be published. Required fields are
                marked *
              </p>
              <div class="gmz-loader">
                <div class="loader-inner">
                  <div class="spinner-grow text-info align-self-center loader-lg"></div>
                </div>
              </div>
              <input type="hidden" name="post_id" value="10" />
              <input type="hidden" name="comment_id" value="0" />
              <input type="hidden" name="comment_type" value="hotel" />
              <div class="row">
                <div class="form-group col-lg-12">
                  <div class="review-select-rate">
                    <span>Your rating</span>
                    <div class="fas-star">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <input type="hidden" name="review_star" value="5" class="review_star" />
                  </div>
                </div>

                <div class="form-group col-lg-6">
                  <input id="comment-name" type="text" name="comment_name" class="form-control gmz-validation" placeholder="Your name*" data-validation="required" />
                </div>
                <div class="w-100"></div>
                <div class="form-group col-lg-6">
                  <input id="comment-email" type="email" name="comment_email" class="form-control gmz-validation" placeholder="Your email*" data-validation="required" />
                </div>
                <div class="w-100"></div>
                <div class="form-group col-lg-6">
                  <input id="comment-title" type="text" name="comment_title" class="form-control gmz-validation" placeholder="Comment title*" data-validation="required" />
                </div>

                <div class="form-group col-lg-12">
                  <textarea id="comment-content" name="comment_content" placeholder="Comment*" class="form-control gmz-validation" data-validation="required" rows="4"></textarea>
                </div>
              </div>
              <div class="gmz-message"></div>
              <button type="submit" class="btn btn-primary text-uppercase">
                Submit Review
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- // Right SideBar starts here -->
      <div class="col-lg-4">
        <div class="siderbar-single">
          <div class="hotel-logo">
            <img src="<?= base_url() . '/uploads/logo/' . conf['site_logo'] ?>" class="img-fluid" alt="hotel logo" />
          </div>


          <link rel="stylesheet" href="//cdn.onlinewebfonts.com/svg_info/packs/web/fd/1133/icon.css" type="text/css" />
          <section class="feature">
            <li class="list-group-item">
              <h2 class="section-title">Hotel Services</h2>
              <div class="section-content">
                <?php foreach ($facilities as $v) : ?>
                  <i title="<?= $v['facility_name'] ?>" class="fas fa-<?= strtolower($v['facility_name']) ?> fa-2x"></i>
                  <i class="i_<?= strtolower($v['facility_name']) ?> fa-2x"></i>
                  <?= $v['facility_name'] . ' | ' ?>
                <?php endforeach ?>
              </div>
            </li>
          </section>
        </div>
      </div>
      <!-- // Right SideBar ends here -->
      <button hidden class="text-center btn btn-xl btn-info ml-5" data-toggle="modal" id="hotelBookingModal" data-target="#hotelBookingModal">Book Now</button>
    </div>
  </div>
</div>



<div class="modal fade hotel-enquiry-modal" id="hotelEnquiryModal" tabindex="-1" aria-labelledby="hotelEnquiryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="gmz-form-action enquiry-form-single" action="<?= base_url('home/enquiry') ?>" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="hotelEnquiryModalLabel">
            ENQUIRY FORM
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> 
          <input type="hidden" name="hotel_id" value="<?= $description['hotel_id'] ?>" />
          <input type="hidden" name="hotel_name" value="<?= $description['hotel_name'] ?>" />
          <input type="hidden" name="_url" value="<?= base_url('hotel?hotel_id='.$description['hotel_id']) ?>" />
          <div class="gmz-loader">
            <div class="loader-inner">
              <div class=" spinner-grow text-info align-self-center loader-lg"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="full-name">Full Name<span class="required">*</span>
            </label>
            <input type="text" name="full_name" class="form-control gmz-validation" data-validation="required" id="full-name" />
          </div>
          <div class="form-group">
            <label for="email">Email<span class="required">*</span></label>
            <input type="text" name="email" class="form-control gmz-validation" data-validation="required" id="email" />
          </div>
          <div class="form-group">
            <label for="content">Message<span class="required">*</span>
            </label>
            <textarea name="content" rows="4" class="form-control gmz-validation" data-validation="required" id="content"></textarea>
          </div>
          <div class="gmz-message"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
          <button type="submit" class="btn btn-primary"> SUBMIT REQUEST </button>
        </div>
      </form>
    </div>
  </div>
</div>


<style>
  .single-hotel .site-content .search-form {
    position: relative;
    background: #dfdfdf;
    padding: 15px;
  }

  .single-hotel .site-content .search-form .input-hidden {
    visibility: hidden;
    width: 0;
    height: 0;
    padding: 0;
    border: 0;
  }

  .meta ul li {
    list-style: none;
    float: none;
    margin-right: 20px;
    font-size: 16px;
    border: 2px solid var(--primary);
    border-radius: 5px;
    min-width: 90px;
    display: inline-block;
    text-align: center;
    padding: 5px 10px;
    margin-bottom: 10px;
  }

  .meta ul li .value {
    color: var(--primary);
    font-weight: 500;
  }

  .meta ul li .label {
    display: block;
    font-size: 13px;
    color: gray;
  }
</style>
<?php
$arr = ['checkin', 'checkout', 'adult'];
session()->remove($arr);
if ($description['user_id'] == '0') : ?>
  <script>
    $(function() {
      $('#check_avail').on('submit', function(e) {
        e.preventDefault();
        $('.gmz-loader').show();
        $(".room-item--list").remove();
        $.ajax({
          type: 'POST',
          url: '<?= base_url('home/availability'); ?>',
          data: $('#check_avail').serialize(),
          dataType: 'json', // 
          success: function(response) {
            $('.gmz-loader').hide();
            // let data = data.data;
            var a = response.data[0];
            var price = "<?= COUNTRY_CURRENCY . number_format(convertedCurrency($description['min_total_price'], $description['currencycode']), 2) ?>";
            var room = a.rooms;
            var counter = 1;
            jQuery.each(a.rooms, function(index, item) {
              var photo = a.rooms[index].photos;
              var hotel_name = "<?= $description['hotel_name'] ?> #" + counter;
              // alert(Object.keys(photo).length);
              if (Object.keys(photo).length != 0) {
                photo = photo[0].url_original;
              } else {
                photo = "<?= str_replace('max1280x900', '640X200', $description['hotel_thumbnail']) ?>";
              }
              $('#icheck_avail').append('<div class="room-item room-item--list"><div class="row"><div class="col-4"><div class="room-item__thumbnail"><img src="' + photo + '" height="136px" alt="King Suite with Pool View"></div></div><div class="col-8"><div class="room-item__details"><div><h3 class="room-item__title"> ' + hotel_name + ' </h3><div class="text-left"><div class="i-meta" data-toggle="tooltip" title="" data-original-title="Room Size">' + a.rooms[index].description + '</div> </div></div><div class="room-price-wrapper"> <div class="price text-center"><span class="text-center">' + price + '</span></div><button onclick="initBooking($(this).data(' + "'hotel_id'" + '))" class="text-center btn btn-xl btn-info ml-5" data-hotel_id="<?= $_GET['hotel_id'] ?>">Book Now</button></div></div></div></div></div>');
              counter++;
            });
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            $('.gmz-loader').hide();
            // alert("some error");
          }
        });
      });
    });
  </script>
  <script>
    setTimeout(function() {
      $('#check_avail').submit();
    }, 5000);
  </script>
<?php else : ?>
  <script>
    $(function() {
      $('#check_avail').on('submit', function(e) {
        e.preventDefault();
        $('.gmz-loader').show();
        setTimeout(function() {
          $('#check_avail').submit();
          $('.gmz-loader').hide();
        }, 5000);
        // $(".room-item--list").remove();
        // $.ajax({
        //   type: 'POST',
        //   url: '<?= base_url('home/room_avialaility'); ?>',
        //   data: $('#check_avail').serialize(),
        //   dataType: 'json', // 
        //   success: function(response) {
        //     $('.gmz-loader').hide();
        //     // let data = data.data;
        //     var a = response.data[0];
        //     var price = "<?= COUNTRY_CURRENCY . number_format(convertedCurrency($description['min_total_price'], $description['currencycode']), 2) ?>";
        //     var room = a.rooms;
        //     var counter = 1;
        //     jQuery.each(a.rooms, function(index, item) {
        //       var photo = a.rooms[index].photos;
        //       var hotel_name = "<?= $description['hotel_name'] ?> #" + counter;
        //       // alert(Object.keys(photo).length);
        //       if (Object.keys(photo).length != 0) {
        //         photo = photo[0].url_original;
        //       } else {
        //         photo = "<?= str_replace('max1280x900', '640X200', $description['hotel_thumbnail']) ?>";
        //       }
        //       $('#icheck_avail').append('<div class="room-item room-item--list"><div class="row"><div class="col-4"><div class="room-item__thumbnail"><img src="' + photo + '" height="136px" alt="King Suite with Pool View"></div></div><div class="col-8"><div class="room-item__details"><div><h3 class="room-item__title"> ' + hotel_name + ' </h3><div class="text-left"><div class="i-meta" data-toggle="tooltip" title="" data-original-title="Room Size">' + a.rooms[index].description + '</div> </div></div><div class="room-price-wrapper"> <div class="price text-center"><span class="text-center">' + price + '</span></div><button onclick="initBooking($(this).data(' + "'hotel_id'" + '))" class="text-center btn btn-xl btn-info ml-5" data-hotel_id="<?= $_GET['hotel_id'] ?>">Book Now</button></div></div></div></div></div>');
        //       counter++;
        //     });
        //   },
        //   error: function(XMLHttpRequest, textStatus, errorThrown) {
        //     $('.gmz-loader').hide();
        //     // alert("some error");
        //   }
        // });
      });
    });
  </script>
<?php endif ?>

?>