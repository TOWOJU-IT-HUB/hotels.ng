    <!-- Summernote css -->
    <link href="<?= base_url('dashboard/plugins/summernote/summernote-bs4.css') ?>" rel="stylesheet" />
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
                                <?php $attributes = ['id' => 'iregForm'];
                                $_hotel_id = uniqid(); ?>
                                <?= form_open_multipart(route_to('admin.add_new_hotels'), $attributes) ?>
                                <div style="min-height: 350px">
                                    <div class="tabby">
                                        <div class="gmz-field form-group col-12 gmz-field-text  gmz-field-has-translation " id="gmz-field-post_title-wrapper">
                                            <input type="hidden" name="hotel_id" value="<?= $_hotel_id ?>">
                                            <input type="hidden" name="url" value="<?= base_url("hotel?hotel_id=$_hotel_id") ?>">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="h5" for="gmz-field-post_title">Hotel Name</label>
                                                    <input type="text" name="hotel_name" class="form-control  gmz-validation  " id="gmz-field-post_title" value="<?= strtoupper("New hotel " . $_hotel_id) ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="h5" for="gmz-field-post_title">Hotel Image Thumbnail (500x500)</label>
                                                    <input type="file" name="max_photo_url" class="form-control" accept="images/*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="gmz-field form-group col-12 gmz-field-editor  gmz-field-has-translation " id="gmz-field-post_content-wrapper">
                                            <label class="h5" for="gmz-field-post_content">Hotel Description</label>
                                            <textarea class="summernote" name="description" id="summernote"></textarea>
                                        </div>
                                        <div class="row p-3">
                                            <div class="gmz-field form-group  col-12 col-md-4 gmz-field-select" id="gmz-field-status-wrapper">
                                                <label class="h5" for="gmz-field-status">Hotel Status</label>
                                                <select name="status" class="form-control" id="gmz-field-status">
                                                    <option value="publish">Publish</option>
                                                    <option value="draft">Draft</option>
                                                    <option value="pending">Pending</option>
                                                </select>
                                            </div>
                                            <div class="gmz-field form-group  col-sm-4 col-12 gmz-field-select" id="gmz-field-hotel_star-wrapper">
                                                <label class="h5" for="gmz-field-hotel_star">Hotel Rating</label>
                                                <select name="review_score" class="form-control" id="gmz-field-hotel_star">
                                                    <option selected value="0">None</option>
                                                    <option disabled value="10">5 Star</option>
                                                    <option disabled value="8">4 Star</option>
                                                    <option disabled value="6">3 Star</option>
                                                    <option disabled value="4">2 Star</option>
                                                    <option disabled value="2">1 Star</option>
                                                </select>
                                            </div>
                                            <div class="gmz-field form-group  col-sm-4 col-12 gmz-field-select" id="gmz-field-property_type-wrapper">
                                                <label class="h5" for="gmz-field-property_type">Property Type</label>
                                                <select name="accommodation_type_name" class="form-control" id="gmz-field-property_type">
                                                    <option value="Hotels">Hotels</option>
                                                    <option value="Apartment">Apartment</option>
                                                    <option value="Resorts">Resorts</option>
                                                    <option value="Villas">Villas</option>
                                                    <option value="Guest House">Guest House</option>
                                                    <option value="Motels">Motels</option>
                                                    <option value="Cottage">Cottage</option>
                                                    <option value="Glamping">Glamping</option>
                                                    <option value="Vacations">Vacations</option>
                                                    <option value="Hostel">Hostel</option>
                                                    <option value="Farm Stay">Farm Stay</option>
                                                    <option value="Luxury Tents">Luxury Tents</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row p-3">
                                            <div class="gmz-field form-group  col-12 col-md-6 gmz-field-select" id="gmz-field-status-wrapper">
                                                <label class="h5" for="gmz-field-status">Country</label>
                                                <select class="form-control" name="country_trans">
                                                    <option value="null">-- Please Select --</option>
                                                    <option value="afghan">Afghan</option>
                                                    <option value="albanian">Albanian</option>
                                                    <option value="algerian">Algerian</option>
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
                                                    <option value="United States of America">United States of America</option>
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
                                            <div class="gmz-field form-group  col-sm-6 col-12 gmz-field-select" id="gmz-field-hotel_star-wrapper">
                                                <label class="h5" for="gmz-field-hotel_star">City</label>
                                                <input type="text" name="city" class="form-control" placeholder="City">
                                            </div>
                                        </div>

                                        <div class="row p-3">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="full-name">Checkin Time<span class="">*</span>
                                                    </label>
                                                    <select name="checkin" class="form-control">
                                                        <?php echo get_times(); ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="full-name">Checkout Time<span class="">*</span>
                                                    </label>
                                                    <select name="checkout" class="form-control">
                                                        <?php echo get_times(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row p-3">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="full-name">Currency<span class="">*</span>
                                                    </label>
                                                    <small><a target="_blank" href="https://developer.paypal.com/docs/api/reference/currency-codes/#paypal-account-payments">Click to view accepted currencies</a></small>
                                                    <input type="text" maxlength="3" placeholder="USD" value="USD" minlength="3" name="currencycode" step="any" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="full-name">Price per Night<span class="">*</span>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend bg-custom b-0"><span class="input-group-text">$</span></div>
                                                        <input type="number" name="min_total_price" step="any" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // tab for Location -->
                                    <div class="tabby">
                                        <h5 class="mb-3">Add Map Location</h5>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label class="h5" for="images">Longitude</label>
                                                <input type="text" name="longitude" id="longitude" onchange="map_append()" class="form-control">
                                            </div>
                                            <div class="form-group col-6">
                                                <label class="h5" for="images">Latitude</label>
                                                <input type="text" name="latitude" id="latitude" onchange="map_append()" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="h5" for="images">Address</label>
                                            <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                                        </div>
                                        <!-- append and display Google Map -->
                                        <div class="map-single mt-3" id="map_append">
                                        </div>
                                    </div>
                                    <!-- // tab for Facilities -->
                                    <div class="tabby">
                                        <h5 class="mb-3">Add Facilities</h5>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group" id="TextBoxesGroup">
                                                    <label class="h5" for="images">Facility #1</label>
                                                    <input type="text" name="facilities[]" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-4">
                                                <a href="#!" id='addButton'>
                                                    <i class="fas fa-plus-circle fa-2x m-2"></i>
                                                </a>
                                                <a href="#!" id='removeButton'>
                                                    <i class="fas fa-minus-circle fa-2x m-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // tab for Images Upload -->
                                    <div class="tabby">
                                        <div class="form-group">
                                            <label class="h5" for="images">Image Upload</label>
                                            <input type="file" name="hotel_images[]" accept="image/*" class="form-control" id="hotel_images " multiple />
                                        </div>
                                        <div class="imgGallery">
                                            <!-- image preview -->
                                        </div>
                                    </div>
                                </div>
                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <button type="button" id="prevBtn" class="btn btn-info btn-md" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" class="btn btn-info btn-md" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                        <button type="submit" id="submitBtn" class="btn btn-info btn-md"><?= lang('text.save') ?>
                                        </button>
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
            /* Hide all steps by default: */
            .tabby {
                display: none;
            }

            .imgGallery img {
                padding: 8px;
                max-width: 100px;
            }
        </style>
        <script>
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab

            function showTab(n) {
                var x = document.getElementsByClassName("tabby");
                x[n].style.display = "block";
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    $('#nextBtn').hide();
                    $('#submitBtn').show();
                } else {
                    $('#nextBtn').show();
                    $('#submitBtn').hide();
                    document.getElementById("nextBtn").innerHTML = "<?= lang('text.next') ?>";
                }
            }

            function nextPrev(n) {
                var x = document.getElementsByClassName("tabby");
                x[currentTab].style.display = "none";
                // alert(x.length);
                currentTab = currentTab + n;
                // if (currentTab >= x.length) {
                //     document.getElementById("regForm").submit();
                //     return false;
                // }
                showTab(currentTab);
            }

            $(document).ready(function() {
                var counter = 2;
                $("#addButton").click(function() {
                    if (counter > 100) {
                        alert("Only 100 textboxes allow");
                        return false;
                    }
                    var newTextBoxDiv = $(document.createElement('div'))
                        .attr("id", 'TextBoxDiv' + counter);
                    newTextBoxDiv.after().html('<label class="h5" class="mt-3">Facility #' + counter + ' : </label>' +
                        '<input type="text" name="facilities[]" class="form-control">');
                    newTextBoxDiv.appendTo("#TextBoxesGroup");
                    counter++;
                });
                $("#removeButton").click(function() {
                    if (counter == 1) {
                        alert("No more textbox to remove");
                        return false;
                    }
                    counter--;
                    $("#TextBoxDiv" + counter).remove();
                });
            });


            $(function() {
                // Multiple images preview with JavaScript
                var multiImgPreview = function(input, imgPreviewPlaceholder) {
                    if (input.files) {
                        var filesAmount = input.files.length;

                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();

                            reader.onload = function(event) {
                                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                            }

                            reader.readAsDataURL(input.files[i]);
                        }
                    }

                };

                $('#hotel_images').on('change', function() {
                    multiImgPreview(this, 'div.imgGallery');
                });
            });
            // append
            function map_append() {
                $("#map_frame").remove();
                var latitude = $("#latitude").val();
                var longitude = $("#longitude").val();
                $('#map_append').append('<iframe id="map_frame" width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=' + latitude + ',' + longitude + '&hl=es;z=14&amp;output=embed"></iframe>');
            }
        </script>