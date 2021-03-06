<div class="bg-dark mx-auto card card-body">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="" action="<?= route_to('add_order') ?>" id="bookingModalo" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="#hotelEnquiryModalLabel">
                        BOOKING FORM
                    </h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button> -->
                </div>
                <p></p>
                <div class="modal-body">
                    <input type="hidden" name="hotel_id" value="<?= $hotel_id ?>" />
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
                                <input type="text" name="firstname" class="form-control gmz-validation" required value="<?= curr_user['firstname'] ?>" data-validation="required" id="first-name" />
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="full-name">LastName<span class="required">*</span>
                                </label>
                                <input type="text" name="lastname" class="form-control gmz-validation" required value="<?= curr_user['lastname'] ?>" data-validation="required" id="last-name" />
                            </div>
                        </div>
                        <input type="hidden" name="no_adult" class="form-control gmz-validation" required value="<?php if(isset($_SESSION['adult'])){ echo $_SESSION['adult']; } else { echo  '1'; }?>">
                        <input type="hidden" name="total_rooms" class="form-control gmz-validation" required value="<?php if(isset($_SESSION['room'])){ echo $_SESSION['room']; } else { echo  '1'; }?>">
                        <input type="hidden" name="no_children" class="form-control gmz-validation" required value="<?php if(isset($_SESSION['children'])){ echo $_SESSION['children']; } else { echo  '0'; }?>">
                        <input type="hidden" name="address" class="form-control gmz-validation" required value="<?=curr_user['address'] ?>">

                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="full-name">Country<span class="required">*</span>
                                </label>
                                <select class="form-control" required name="country">
                                    <option selected disabled >-- Please Select --</option>
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
                                <input type="tel" name="number" class="form-control gmz-validation" value="<?= curr_user['phone'] ?>" data-validation="required" id="phone" />
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="full-name">Checkin Date <span class="required">*</span>
                                </label>
                                <input type="text" name="checkin" class="form-control" required id="checkin" />
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="full-name">Checkout Date<span class="required">*</span>
                                </label>
                                <input type="text" name="checkout" class="form-control" data-validation="required" id="checkout" />
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
                        <input type="email" name="email" required class="form-control gmz-validation" value="<?= curr_user['email'] ?>" required data-validation="required" id="email" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.history.back()" class="btn btn-secondary" data-dismiss="modal">
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

if(session()->get('checkout') == false){
    $_c_date = date('d/M/Y',  strtotime("+2 day", strtotime(date('M d, Y'))));
} else {
    $_c_date = session()->get('checkout');
}


if(session()->get('checkin') == false){ 
    $__date = date('d/M/Y');
} else {
    $__date = session()->get('checkin');
}
?>

<script>
    $("#checkin").ready(function () {
       var inpValue = "<?= $__date ?>";
       $("#checkin").val(inpValue);
       $("#checkin").datepicker({
            minDate: 0,
            maxDate: "+4Y",
            dateFormat: "dd/M/yy"
       });
    })
    $("#checkout").ready(function () {
       var inpValue = "<?= $_c_date ?>";
       $("#checkout").val(inpValue);
       $("#checkout").datepicker({
            minDate: 0,
            maxDate: "+4Y",
            dateFormat: "dd/M/yy"
       });
    })
</script>