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
            <button class="btn btn-xl btn-info ml-5" data-toggle="modal" data-target="#hotelBookingModal">Book Now</button>
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

        <div class="modal fade hotel-enquiry-modal" id="hotelEnquiryModal" tabindex="-1" aria-labelledby="hotelEnquiryModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form class="gmz-form-action enquiry-form-single" action="https://ibooking.booteam.co/hotel-send-enquiry" method="POST">
                <div class="modal-header">
                  <h5 class="modal-title" id="#hotelEnquiryModalLabel">
                    ENQUIRY/BOOKING FORM
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="hidden" name="hotel_id" value="<?= $_GET['hotel_id'] ?>" />
                  <div class="gmz-loader">
                    <div class="loader-inner">
                      <div class="spinner-grow text-info  align-self-center loader-lg "></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="full-name">Full Name<span class="required">*</span>
                    </label>
                    <input type="text" name="full_name" class="form-control gmz-validation" data-validation="required" id="full-name" />
                  </div>

                  <div class="search-form__from date-group">
                    <i class="fal fa-calendar-alt"></i>
                    <span class="check-in-render" data-date-format="DD/MM/YYYY">
                      Check In
                    </span>
                  </div>
                  <div class="search-form__to date-group">
                    <i class="fal fa-calendar-alt"></i>
                    <span class="check-out-render" data-date-format="DD/MM/YYYY">
                      Check Out
                    </span>
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
        <div class="modal fade room-detail-modal" id="hotelBookingModal" tabindex="-1" aria-labelledby="gmz-room-detail-modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form class="gmz-form-action enquiry-form-single" action="<?= route_to('add_order') ?>" id="bookingModal" method="POST">
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

        <div class="p-1">
          <h2 class="section-title d-flex align-items-center justify-content-between">
            <button class="btn btn-xl btn-info" data-toggle="modal" data-target="#hotelEnquiryModal">Book Now</button>
            <div>
              <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#hotelEnquiryModal">
                Send Enquiry/Book
              </a>
            </div>
          </h2>
        </div>
        <hr>

        <section class="map">
          <h2 class="section-title">Hotel On Map</h2>
          <div class="section-content">
            <div class="map-single"></div>
            <?php if ($description['map_preview_url'] != null) : ?>
              <img src="<?= $description['map_preview_url'] ?>">
            <?php else : ?>
              <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?= $description['latitude'] ?>,<?= $description['longitude'] ?>&hl=es;z=14&amp;output=embed"></iframe>
            <?php endif ?>
          </div>
        </section>

        <div class="gmz-comment-list mt-4" id="review-section">
          <h3 class="comment-count mt-2">
            Last 10 Reviews By Customers
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
            <form action="https://ibooking.booteam.co/add-comment" class="comment-form form-sm gmz-form-action form-add-post-comment" method="post" data-reload-time="1000">
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

          <!-- <section class="feature nearby-location">
              <h2 class="section-title">What&#039;s Nearby</h2>
              <div class="section-content">
                <ul>
                  <li>
                    <span class="addr">Brickell City Centre</span>
                    <span class="dist">0.2 km</span>
                  </li>
                  <li>
                    <span class="addr">HistoryMiami</span>
                    <span class="dist">0.9 km</span>
                  </li>
                  <li>
                    <span class="addr">Miami Art Museum</span>
                    <span class="dist">0.9 km</span>
                  </li>
                  <li>
                    <span class="addr">Miami-Dade County Courthouse</span>
                    <span class="dist">0.9 km</span>
                  </li>
                  <li>
                    <span class="addr">Historical Museum of South Florida</span>
                    <span class="dist">1 km</span>
                  </li>
                </ul>
              </div>
            </section>
            <section class="feature nearby-location">
              <h2 class="section-title">Top attractions</h2>
              <div class="section-content">
                <ul>
                  <li>
                    <span class="addr">American Airlines Arena</span>
                    <span class="dist">1.7 km</span>
                  </li>
                  <li>
                    <span class="addr">Port of Miami</span>
                    <span class="dist">2 km</span>
                  </li>
                  <li>
                    <span class="addr">Marlins Park</span>
                    <span class="dist">3 km</span>
                  </li>
                  <li>
                    <span class="addr">Crandon Marina</span>
                    <span class="dist">5.8 km</span>
                  </li>
                </ul>
              </div>
            </section>
            <section class="feature nearby-location">
              <h2 class="section-title">Restaurants &amp; Cafes</h2>
              <div class="section-content">
                <ul>
                  <li>
                    <span class="addr">Restaurant KOMODO Restaurant &amp; Lounge</span>
                    <span class="dist">0.2 km</span>
                  </li>
                  <li>
                    <span class="addr">Cafe/Bar Barú Latin Bar</span>
                    <span class="dist">0.2 km</span>
                  </li>
                  <li>
                    <span class="addr">Cafe/Bar Fado Irish Pub</span>
                    <span class="dist">0.2 km</span>
                  </li>
                  <li>
                    <span class="addr">Cafe/Bar Perricone&#039;s Marketplace &amp; Café</span>
                    <span class="dist">0.3 km</span>
                  </li>
                  <li>
                    <span class="addr">Restaurant Pubbelly Sushi Brickell</span>
                    <span class="dist">0.1 km</span>
                  </li>
                </ul>
              </div>
            </section>
            <section class="feature nearby-location">
              <h2 class="section-title">Closest Airports</h2>
              <div class="section-content">
                <ul>
                  <li>
                    <span class="addr">Miami Seaplane Base</span>
                    <span class="dist">2.3 km</span>
                  </li>
                  <li>
                    <span class="addr">Miami International Airport</span>
                    <span class="dist">9.1 km</span>
                  </li>
                  <li>
                    <span class="addr">Fort Lauderdale-Hollywood International Airport</span>
                    <span class="dist">34.3 km</span>
                  </li>
                </ul>
              </div>
            </section> -->
        </div>
      </div>
      <!-- // Right SideBar ends here -->

    </div>
  </div>
  <!-- <section class="list-hotel list-hotel--grid py-40 bg-gray-100 mb-0 nearby">
    <div class="container">
      <h2 class="section-title mb-20">Hotels Near By</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="hotel-item hotel-item--grid" data-plugin="matchHeight">
            <div class="hotel-item__thumbnail">
              <div class="add-wishlist-wrapper">
                <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
              </div>

              <a href="riu-plaza-miami-beach.html">
                <img src="../storage/2021/01/31/2019-02-11-11-31-19-045132-ebu122-take-02-342-of-586-edit-1612103564-360x240.jpg" alt="Riu Plaza Miami Beach" />
              </a>
              <a class="hotel-item__type" href="../hotel-search5021.html?property_type=65">
                Villas
              </a>
            </div>
            <div class="hotel-item__details">
              <span class="hotel-item__label">Featured</span>
              <div class="hotel-item__rating">
                <div class="star-rating">
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </div>
              </div>
              <h3 class="hotel-item__title">
                <a href="riu-plaza-miami-beach.html">Riu Plaza Miami Beach</a>
              </h3>
              <p class="hotel-item__location">
                <i class="fas fa-map-marker-alt mr-2"></i>Miami Beach, United
                States of America
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="hotel-item__price">
                  <span class="_retail">$500.00</span><span class="_unit">night</span>
                </div>
                <a class="btn btn-primary hotel-item__view-detail" href="riu-plaza-miami-beach.html">View Detail
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="hotel-item hotel-item--grid" data-plugin="matchHeight">
            <div class="hotel-item__thumbnail">
              <div class="add-wishlist-wrapper">
                <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
              </div>

              <a href="fontainebleau-miami-beach.html">
                <img src="../storage/2021/03/24/256492322-1616578250-360x240.jpg" alt="Fontainebleau Miami Beach" />
              </a>
              <a class="hotel-item__type" href="../hotel-search864d.html?property_type=63">
                Hotels
              </a>
            </div>
            <div class="hotel-item__details">
              <span class="hotel-item__label">Featured</span>
              <div class="hotel-item__rating">
                <div class="star-rating">
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </div>
              </div>
              <h3 class="hotel-item__title">
                <a href="fontainebleau-miami-beach.html">Fontainebleau Miami Beach</a>
              </h3>
              <p class="hotel-item__location">
                <i class="fas fa-map-marker-alt mr-2"></i>Miami Beach, United
                States of America
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="hotel-item__price">
                  <span class="_retail">$300.00</span><span class="_unit">night</span>
                </div>
                <a class="btn btn-primary hotel-item__view-detail" href="fontainebleau-miami-beach.html">View Detail
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="hotel-item hotel-item--grid" data-plugin="matchHeight">
            <div class="hotel-item__thumbnail">
              <div class="add-wishlist-wrapper">
                <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
              </div>

              <a href="grand-beach-hotel.html">
                <img src="../storage/2021/01/31/sca999-take-01-40-1612103702-360x240.jpg" alt="Grand Beach Hotel" />
              </a>
              <a class="hotel-item__type" href="../hotel-search864d.html?property_type=63">
                Hotels
              </a>
            </div>
            <div class="hotel-item__details">
              <span class="hotel-item__label">Featured</span>
              <div class="hotel-item__rating">
                <div class="star-rating">
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </div>
              </div>
              <h3 class="hotel-item__title">
                <a href="grand-beach-hotel.html">Grand Beach Hotel</a>
              </h3>
              <p class="hotel-item__location">
                <i class="fas fa-map-marker-alt mr-2"></i>Miami, United States
                of America
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="hotel-item__price">
                  <span class="_retail">$250.00</span><span class="_unit">night</span>
                </div>
                <a class="btn btn-primary hotel-item__view-detail" href="grand-beach-hotel.html">View Detail
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
</div>
<style>
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
  $('#bookingModal').click(function(e) {
    e.preventDefault();
    $('#hotelBookingModal').modal();
  });

  $(function() {
kj
    $('#bookingModal').submit(function() {
      $.ajax({
        type: "POST",
        url: "<?= route_to('add_order') ?>",
        data: $('form.tagForm').serialize(),
        success: function(response) {
          alert(response['response']);
          $('.gmz-loader').hide();
        },
        error: function() {
          alert('Error');
          $('.gmz-loader').hide();
        }
      });
      return false;
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