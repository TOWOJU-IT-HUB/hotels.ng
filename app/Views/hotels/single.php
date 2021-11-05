<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<div class="site-content">
  <section class="gallery">
    <div class="gmz-carousel-with-lightbox" data-count="5">
      <?php foreach ($images as $image) : ?>
        <a href="<?= $image['url_max'] ?>">
          <img src="<?= str_replace('1440x1440', '393x327', $image['img_url']) ?>" alt="home slider" />
        </a>
      <?php endforeach ?>
    </div>
  </section>
  <div class="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="<?= route_to('home') ?>">Home</a></li>
        <li><span><?= " " ?></span></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 pb-5">

        <div class="row hotel-star">
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


        <div class="row">
          <h3 class="row col post-title">
            <div class="text-left">
              <a href="#gmz-login-popup" class="mr-2" data-effect="mfp-zoom-in">
                <i class="fal fa-heart"></i>
              </a>
            </div>
            <?= $description['hotel_name'] ?>
            <!-- <button class="btn btn-xl btn-info ml-5" data-toggle="modal" data-target="#hotelBookingModal">Book Now</button> -->
          </h3>
        </div>

        <p class="location">
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

        <div class="modal fade room-detail-modal" id="hotelBookingModal" tabindex="-1" aria-labelledby="gmz-room-detail-modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form class="" action="<?= route_to('add_order') ?>" id="bookingModalo" method="POST">
                <div class="modal-header">
                  <h5 class="modal-title" id="#hotelEnquiryModalLabel">
                    BOOKING FORM
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <p></p>
                <div class="modal-body">
                  <input type="hidden" name="hotel_id" value="<?= $_GET['hotel_id'] ?>" />
                  <div class="gmz-loader">
                    <div class="loader-inner">
                      <div class="spinner-grow text-info  align-self-center loader-lg "></div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="full-name">Are you Travelling for Business<span class="required">*</span></label>
                    <select name="business" class="form-control gmz-validation" id="business">
                      <option selected disabled>Yes/No</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>

                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="full-name">FirstName<span class="required">*</span>
                        </label>
                        <input type="text" name="firstname" class="form-control gmz-validation" data-validation="required" id="first-name" />
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form-group">
                        <label for="full-name">LastName<span class="required">*</span>
                        </label>
                        <input type="text" name="lastname" class="form-control gmz-validation" data-validation="required" id="last-name" />
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="full-name">Country<span class="required">*</span>
                        </label>
                        <select class="form-control" name="country">
                          <option value="null">-- Please Select --</option>
                          <option value="afghan">Afghan</option>
                          <option value="albanian">Albanian</option>
                          <option value="algerian">Algerian</option>
                          <option value="american">American</option>
                          <option value="andorran">Andorran</option>
                          <option value="angolan">Angolan</option>
                          <option value="antiguans">Antiguans</option>
                          <option value="argentinean">Argentinean</option>
                          <option value="armenian">Armenian</option>
                          <option value="australian">Australian</option>
                          <option value="austrian">Austrian</option>
                          <option value="azerbaijani">Azerbaijani</option>
                          <option value="bahamian">Bahamian</option>
                          <option value="bahraini">Bahraini</option>
                          <option value="bangladeshi">Bangladeshi</option>
                          <option value="barbadian">Barbadian</option>
                          <option value="barbudans">Barbudans</option>
                          <option value="batswana">Batswana</option>
                          <option value="belarusian">Belarusian</option>
                          <option value="belgian">Belgian</option>
                          <option value="belizean">Belizean</option>
                          <option value="beninese">Beninese</option>
                          <option value="bhutanese">Bhutanese</option>
                          <option value="bolivian">Bolivian</option>
                          <option value="bosnian">Bosnian</option>
                          <option value="brazilian">Brazilian</option>
                          <option value="british">British</option>
                          <option value="bruneian">Bruneian</option>
                          <option value="bulgarian">Bulgarian</option>
                          <option value="burkinabe">Burkinabe</option>
                          <option value="burmese">Burmese</option>
                          <option value="burundian">Burundian</option>
                          <option value="cambodian">Cambodian</option>
                          <option value="cameroonian">Cameroonian</option>
                          <option value="canadian">Canadian</option>
                          <option value="cape verdean">Cape Verdean</option>
                          <option value="central african">Central African</option>
                          <option value="chadian">Chadian</option>
                          <option value="chilean">Chilean</option>
                          <option value="chinese">Chinese</option>
                          <option value="colombian">Colombian</option>
                          <option value="comoran">Comoran</option>
                          <option value="congolese">Congolese</option>
                          <option value="costa rican">Costa Rican</option>
                          <option value="croatian">Croatian</option>
                          <option value="cuban">Cuban</option>
                          <option value="cypriot">Cypriot</option>
                          <option value="czech">Czech</option>
                          <option value="danish">Danish</option>
                          <option value="djibouti">Djibouti</option>
                          <option value="dominican">Dominican</option>
                          <option value="dutch">Dutch</option>
                          <option value="east timorese">East Timorese</option>
                          <option value="ecuadorean">Ecuadorean</option>
                          <option value="egyptian">Egyptian</option>
                          <option value="emirian">Emirian</option>
                          <option value="equatorial guinean">Equatorial Guinean</option>
                          <option value="eritrean">Eritrean</option>
                          <option value="estonian">Estonian</option>
                          <option value="ethiopian">Ethiopian</option>
                          <option value="fijian">Fijian</option>
                          <option value="filipino">Filipino</option>
                          <option value="finnish">Finnish</option>
                          <option value="french">French</option>
                          <option value="gabonese">Gabonese</option>
                          <option value="gambian">Gambian</option>
                          <option value="georgian">Georgian</option>
                          <option value="german">German</option>
                          <option value="ghanaian">Ghanaian</option>
                          <option value="greek">Greek</option>
                          <option value="grenadian">Grenadian</option>
                          <option value="guatemalan">Guatemalan</option>
                          <option value="guinea-bissauan">Guinea-Bissauan</option>
                          <option value="guinean">Guinean</option>
                          <option value="guyanese">Guyanese</option>
                          <option value="haitian">Haitian</option>
                          <option value="herzegovinian">Herzegovinian</option>
                          <option value="honduran">Honduran</option>
                          <option value="hungarian">Hungarian</option>
                          <option value="icelander">Icelander</option>
                          <option value="indian">Indian</option>
                          <option value="indonesian">Indonesian</option>
                          <option value="iranian">Iranian</option>
                          <option value="iraqi">Iraqi</option>
                          <option value="irish">Irish</option>
                          <option value="israeli">Israeli</option>
                          <option value="italian">Italian</option>
                          <option value="ivorian">Ivorian</option>
                          <option value="jamaican">Jamaican</option>
                          <option value="japanese">Japanese</option>
                          <option value="jordanian">Jordanian</option>
                          <option value="kazakhstani">Kazakhstani</option>
                          <option value="kenyan">Kenyan</option>
                          <option value="kittian and nevisian">Kittian and Nevisian</option>
                          <option value="kuwaiti">Kuwaiti</option>
                          <option value="kyrgyz">Kyrgyz</option>
                          <option value="laotian">Laotian</option>
                          <option value="latvian">Latvian</option>
                          <option value="lebanese">Lebanese</option>
                          <option value="liberian">Liberian</option>
                          <option value="libyan">Libyan</option>
                          <option value="liechtensteiner">Liechtensteiner</option>
                          <option value="lithuanian">Lithuanian</option>
                          <option value="luxembourger">Luxembourger</option>
                          <option value="macedonian">Macedonian</option>
                          <option value="malagasy">Malagasy</option>
                          <option value="malawian">Malawian</option>
                          <option value="malaysian">Malaysian</option>
                          <option value="maldivan">Maldivan</option>
                          <option value="malian">Malian</option>
                          <option value="maltese">Maltese</option>
                          <option value="marshallese">Marshallese</option>
                          <option value="mauritanian">Mauritanian</option>
                          <option value="mauritian">Mauritian</option>
                          <option value="mexican">Mexican</option>
                          <option value="micronesian">Micronesian</option>
                          <option value="moldovan">Moldovan</option>
                          <option value="monacan">Monacan</option>
                          <option value="mongolian">Mongolian</option>
                          <option value="moroccan">Moroccan</option>
                          <option value="mosotho">Mosotho</option>
                          <option value="motswana">Motswana</option>
                          <option value="mozambican">Mozambican</option>
                          <option value="namibian">Namibian</option>
                          <option value="nauruan">Nauruan</option>
                          <option value="nepalese">Nepalese</option>
                          <option value="new zealander">New Zealander</option>
                          <option value="ni-vanuatu">Ni-Vanuatu</option>
                          <option value="nicaraguan">Nicaraguan</option>
                          <option value="nigerien">Nigerien</option>
                          <option value="north korean">North Korean</option>
                          <option value="northern irish">Northern Irish</option>
                          <option value="norwegian">Norwegian</option>
                          <option value="omani">Omani</option>
                          <option value="pakistani">Pakistani</option>
                          <option value="palauan">Palauan</option>
                          <option value="panamanian">Panamanian</option>
                          <option value="papua new guinean">Papua New Guinean</option>
                          <option value="paraguayan">Paraguayan</option>
                          <option value="peruvian">Peruvian</option>
                          <option value="polish">Polish</option>
                          <option value="portuguese">Portuguese</option>
                          <option value="qatari">Qatari</option>
                          <option value="romanian">Romanian</option>
                          <option value="russian">Russian</option>
                          <option value="rwandan">Rwandan</option>
                          <option value="saint lucian">Saint Lucian</option>
                          <option value="salvadoran">Salvadoran</option>
                          <option value="samoan">Samoan</option>
                          <option value="san marinese">San Marinese</option>
                          <option value="sao tomean">Sao Tomean</option>
                          <option value="saudi">Saudi</option>
                          <option value="scottish">Scottish</option>
                          <option value="senegalese">Senegalese</option>
                          <option value="serbian">Serbian</option>
                          <option value="seychellois">Seychellois</option>
                          <option value="sierra leonean">Sierra Leonean</option>
                          <option value="singaporean">Singaporean</option>
                          <option value="slovakian">Slovakian</option>
                          <option value="slovenian">Slovenian</option>
                          <option value="solomon islander">Solomon Islander</option>
                          <option value="somali">Somali</option>
                          <option value="south african">South African</option>
                          <option value="south korean">South Korean</option>
                          <option value="spanish">Spanish</option>
                          <option value="sri lankan">Sri Lankan</option>
                          <option value="sudanese">Sudanese</option>
                          <option value="surinamer">Surinamer</option>
                          <option value="swazi">Swazi</option>
                          <option value="swedish">Swedish</option>
                          <option value="swiss">Swiss</option>
                          <option value="syrian">Syrian</option>
                          <option value="taiwanese">Taiwanese</option>
                          <option value="tajik">Tajik</option>
                          <option value="tanzanian">Tanzanian</option>
                          <option value="thai">Thai</option>
                          <option value="togolese">Togolese</option>
                          <option value="tongan">Tongan</option>
                          <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                          <option value="tunisian">Tunisian</option>
                          <option value="turkish">Turkish</option>
                          <option value="tuvaluan">Tuvaluan</option>
                          <option value="ugandan">Ugandan</option>
                          <option value="ukrainian">Ukrainian</option>
                          <option value="uruguayan">Uruguayan</option>
                          <option value="uzbekistani">Uzbekistani</option>
                          <option value="venezuelan">Venezuelan</option>
                          <option value="vietnamese">Vietnamese</option>
                          <option value="welsh">Welsh</option>
                          <option value="yemenite">Yemenite</option>
                          <option value="zambian">Zambian</option>
                          <option value="zimbabwean">Zimbabwean</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form-group">
                        <label for="full-name">Phone Number<span class="required">*</span>
                        </label>
                        <input type="tel" name="number" class="form-control gmz-validation" data-validation="required" id="phone" />
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="full-name">Checkin Date<span class="required">*</span>
                        </label>
                        <input type="date" name="checkin" class="form-control gmz-validation" data-validation="required" id="checkin" />
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form-group">
                        <label for="full-name">Checkout Date<span class="required">*</span>
                        </label>
                        <input type="date" name="checkout" class="form-control gmz-validation" data-validation="required" id="checkout" />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="full-name">Checkin Time<span class="required">*</span>
                        </label>
                        <select name="checkin_time" required class="form-control">
                          <?php echo get_times(); ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form-group">
                        <label for="full-name">Checkout Time<span class="required">*</span>
                        </label>
                        <select name="checkout_time" required class="form-control">
                          <?php echo get_times(); ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email<span class="required">*</span></label>
                    <input type="text" name="email" class="form-control gmz-validation" required data-validation="required" id="email" />
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    CLOSE
                  </button>
                  <button type="submit" class="btn btn-primary">
                    SUBMIT REQUEST
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <hr>
        <!-- 
        <div class="p-1 mb-3">
          <h2 class="section-title d-flex align-items-center justify-content-between">
            <span class="" data-toggle="modal" data-target="#hotelEnquiryModal"></span>
            <div>
              <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#hotelEnquiryModal">
                Send Enquiry/Book
              </a>
            </div>
          </h2>
        </div> -->

        <div class="section-content">
          <h2 class="section-title d-flex align-items-center justify-content-between">
            Room Availability
            <div>
              <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#hotelEnquiryModal">
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
                      <input type="text" class="input-hidden check-in-field" required name="checkIn" value="<?php if(isset($_SESSION['checkin'])){ echo $_SESSION['checkin']; } ?>">
                      <input type="text" class="input-hidden check-out-field" required name="checkOut" value="<?php if(isset($_SESSION['checkout'])){ echo $_SESSION['checkout']; } ?>">
                      <input type="hidden" required name="hotel_id" value="<?= $_GET['hotel_id'] ?>">
                      <div class="search-form__from date-group">
                        <i class="fal fa-calendar-alt"></i>
                        <span class="check-in-render" data-date-format="DD/MM/YYYY">
                          <?php if(isset($_SESSION['checkin'])){ echo $_SESSION['checkin']; } else { echo "Check In"; } ?>
                        </span>
                      </div>
                      <div class="search-form__to date-group">
                        <i class="fal fa-calendar-alt"></i>
                        <span class="check-out-render" data-date-format="DD/MM/YYYY">
                        <?php if(isset($_SESSION['checkout'])){ echo $_SESSION['checkout']; } else { echo "Check Out"; } ?>
                        </span>
                      </div>

                      <div class="search-form__guest hotel">
                        <div class="dropdown">
                          <div class="dropdown-toggle" id="dropdownGuestButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fal fa-users"></i>
                            <span class="guest-render">
                              <?php if(isset($_SESSION['adult'])){ echo $_SESSION['adult'].' Adult'; } else { echo "1 Adult"; } ?>
                            </span>
                          </div>
                          <div class="dropdown-menu" aria-labelledby="dropdownGuestButton">
                            <div class="item d-flex align-items-center justify-content-between">
                              <div class="label">Adults</div>
                              <div class="value">
                                <select class="form-control" name="adult">
                                  <?php if(isset($_GET['adult'])){ 
                                    echo '<option selected value="'.$_GET['adult'].'">'.$_GET['adult'].'</option>'; 
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

                      <button class="btn btn-primary search-form__search" id="check_avail" type="submit"> CHECK AVAILABILITY </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card card-body" id="icheck_avail">
          </div>
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
<script>
  $(function() {
    $('#check_avail').on('submit', function(e) {
      e.preventDefault();
      $('.gmz-loader').show();
      $(".myroomlists").remove();
      $.ajax({
        type: 'POST',
        url: '<?= base_url('home/availability'); ?>',
        data: $('#check_avail').serialize(),
        dataType: 'json', // 
        success: function(response) {
          $('.gmz-loader').hide();
          // let data = data.data;
          var a = response.data[0];
          var price = "<?= COUNTRY_CURRENCY. number_format(convertedCurrency($description['min_total_price'], $description['currencycode']), 2) ?>";
          var room = a.rooms;
            var counter = 1;
          jQuery.each(a.rooms, function(index, item) {
            var photo = a.rooms[index].photos;
            var hotel_name = "<?= $description['hotel_name'] ?> #" +counter;
            // alert(Object.keys(photo).length);
            if(Object.keys(photo).length != 0){
              photo = photo[0].url_original;
            } else {
              photo = "<?= str_replace('max1280x900', '640X200', $description['hotel_thumbnail']) ?>";
            }
            $('#icheck_avail').append('<div class="room-item room-item--list"><div class="row"><div class="col-4"><div class="room-item__thumbnail"><img src="'+photo+'" height="136px" alt="King Suite with Pool View"></div></div><div class="col-8"><div class="room-item__details"><div><h3 class="room-item__title"> '+ hotel_name +' </h3><div class="text-left"><div class="i-meta" data-toggle="tooltip" title="" data-original-title="Room Size">'+a.rooms[index].description+'</div> </div></div><div class="room-price-wrapper"> <div class="price text-center"><span class="text-center">'+ price +'</span></div><button onclick="initBooking($(this).data('+"'hotel_id'"+'))" class="text-center btn btn-xl btn-info ml-5" data-hotel_id="<?= $_GET['hotel_id'] ?>">Book Now</button></div></div></div></div></div>');
            counter++;
          });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          $('.gmz-loader').hide();
          alert("some error");
        }
      });
    });
  });
</script>

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