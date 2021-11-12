

    <div class="site-content">
        <section class="hero-slider" style="min-height: 350px">
            <div class="container-fluid no-gutters p-0">
                <div class="slider" data-plugin="slick">
                    <div class="item">
                        <img src="storage/2021/01/30/slider03-1612013205-1920x768.jpg" alt="home slider">
                    </div>
                    <div class="item">
                        <img src="storage/2021/01/30/slider04-1612013206-1920x768.jpg" alt="home slider">
                    </div>
                    <div class="item">
                        <img src="storage/2021/01/30/slider02-1612013205-1920x768.jpg" alt="home slider">
                    </div>
                    <div class="item">
                        <img src="storage/2021/01/30/slider01-1612013204-1920x768.jpg" alt="home slider">
                    </div>
                </div>

                <div class="search-center">
                    <div class="container">
                        <p class="search-center__title">Enjoy a great ride with ibooking</p>
                        <div class="search-form-wrapper">
                            <ul class="nav nav-tabs" id="searchFormTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="hotel-search-tab" data-toggle="tab" href="#hotel-search" role="tab" aria-controls="hotel-search" aria-selected="true"><i class="fal fa-hotel"></i> Hotel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="apartment-search-tab" data-toggle="tab" href="#apartment-search" role="tab" aria-controls="apartment-search" aria-selected="true"><i class="fal fa-city"></i> Apartment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="car-search-tab" data-toggle="tab" href="#car-search" role="tab" aria-controls="car-search" aria-selected="false"><i class="fal fa-car-alt"></i> Car</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="space-search-tab" data-toggle="tab" href="#space-search" role="tab" aria-controls="space-search" aria-selected="false"><i class="fal fa-building"></i> Space</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="tour-search-tab" data-toggle="tab" href="#tour-search" role="tab" aria-controls="tour-search" aria-selected="false"><i class="fal fa-map-marked"></i> Tour</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="beauty-search-tab" data-toggle="tab" href="#beauty-search" role="tab" aria-controls="beauty-search" aria-selected="false"><i class="fal fa-spa"></i> Beauty</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="searchFormTab">
                                <div class="tab-pane fade show active hotel-search-form" id="hotel-search" role="tabpanel" aria-labelledby="hotel-search-tab">
                                    <form id="search-hotel" method="GET" class="search-form hotel" action="http://ibooking.booteam.co/hotel-search">
                                        <div class="search-form__basic">
                                            <div class="search-form__address">
                                                <i class="fal fa-city"></i>
                                                <div class="form-control h-100 border-0" data-plugin="mapbox-geocoder" data-value="" data-placeholder="Location" data-lang="en">
                                                </div>
                                                <div class="map d-none"></div>
                                                <input type="hidden" name="lat" value="">
                                                <input type="hidden" name="lng" value="">
                                                <input type="hidden" name="address" value="">
                                            </div>

                                            <input type="text" class="input-hidden check-in-out-field align-self-end" name="checkInOut" value="" data-same-date="false">
                                            <input type="text" class="input-hidden check-in-field" name="checkIn" value="">
                                            <input type="text" class="input-hidden check-out-field" name="checkOut" value="">
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

                                            <div class="search-form__guest hotel">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" id="dropdownGuestButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fal fa-users"></i>
                                                        <span class="guest-render">
                                                            1 Adult
                                                        </span>
                                                    </div>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownGuestButton">
                                                        <div class="item d-flex align-items-center justify-content-between">
                                                            <div class="label">Rooms</div>
                                                            <div class="value">
                                                                <select class="form-control" name="number_room">
                                                                    <option value="1" selected>1</option>
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
                                                                <select class="form-control" name="adult">
                                                                    <option value="1" selected>1</option>
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

                                            <button class="btn search-form__more" type="button"><i class="fal fa-search-plus"></i></button>
                                            <button class="btn btn-primary search-form__search" type="submit"><i class="fal fa-search"></i>Search
                                            </button>
                                        </div>

                                        <div class="search-form__advanced bg-white">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <div class="search-form__label">Price</div>
                                                        <input type="text" class="price-range-slider" name="price_range" value="" data-min="150.00" data-max="500.00" data-form="150.00" data-to="500.00" data-prefix="" data-postfix="đ" />

                                                    </div>
                                                    <div class="col-md-6 gmz-checkbox-wrapper mb-2">
                                                        <div class="search-form__label">Property Types</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="property_types[]" value="68">Lodges</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="property_types[]" value="67">Resorts</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="property_types[]" value="66">Motels</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="property_types[]" value="65">Villas</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="property_types[]" value="64">Homestays</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="property_types[]" value="63">Hotels</label>
                                                        <input type="hidden" name="property_type" value="" />
                                                    </div>

                                                    <div class="col-md-6 gmz-checkbox-wrapper">
                                                        <div class="search-form__label">Facilities</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_facilitiess[]" value="76">Parking</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_facilitiess[]" value="75">Internet – Wifi</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_facilitiess[]" value="74">Television</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_facilitiess[]" value="73">Fitness Center</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_facilitiess[]" value="72">Heater</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_facilitiess[]" value="71">Airport Transport</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_facilitiess[]" value="69">Air Conditioning</label>
                                                        <input type="hidden" name="hotel_facilities" value="" />
                                                    </div>

                                                    <div class="col-md-6 gmz-checkbox-wrapper">
                                                        <div class="search-form__label">Services</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_servicess[]" value="85">Massages</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_servicess[]" value="84">Ironing service</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_servicess[]" value="83">Flower arrangement</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_servicess[]" value="82">Excursions and guided tours</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_servicess[]" value="81">Dry cleaning</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_servicess[]" value="80">Doctor on call</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_servicess[]" value="79">Courier services</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_servicess[]" value="78">Catering services</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="hotel_servicess[]" value="77">Car rental services</label>
                                                        <input type="hidden" name="hotel_services" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade  apartment-search-form" id="apartment-search" role="tabpanel" aria-labelledby="apartment-search-tab">
                                    <form id="search-apartment" method="GET" class="search-form apartment" action="http://ibooking.booteam.co/apartment-search">
                                        <div class="search-form__basic">
                                            <div class="search-form__address">
                                                <i class="fal fa-city"></i>
                                                <div class="form-control h-100 border-0" data-plugin="mapbox-geocoder" data-value="" data-placeholder="Location" data-lang="en">
                                                </div>
                                                <div class="map d-none"></div>
                                                <input type="hidden" name="lat" value="">
                                                <input type="hidden" name="lng" value="">
                                                <input type="hidden" name="address" value="">
                                            </div>

                                            <!--For time-->
                                            <input type="text" class="input-hidden check-in-out-time-field align-self-end" name="checkInOutTime" value="">
                                            <input type="text" class="input-hidden check-in-time-field" name="checkInTime" value="">
                                            <input type="text" class="input-hidden check-out-time-field" name="checkOutTime" value="">
                                            <div class="search-form__from-time time-group  d-none ">
                                                <i class="fal fa-calendar-alt"></i>
                                                <span class="check-in-time-render" data-date-format="DD/MM/YYYY">
                                                    Date
                                                </span>
                                            </div>

                                            <div class="search-form__time time-group  d-none ">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" id="dropdownTimeButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fal fa-clock"></i>
                                                        <span class="time-render">
                                                            Time
                                                        </span>
                                                    </div>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownTimeButton">
                                                        <div class="item start-time d-flex align-items-center justify-content-between">
                                                            <div class="label">Start Time</div>
                                                            <div class="value">
                                                                <select class="form-control" name="startTime">
                                                                    <option value="12:00 AM">00:00 AM</option>
                                                                    <option value="12:30 AM">00:30 AM</option>
                                                                    <option value="01:00 AM">01:00 AM</option>
                                                                    <option value="01:30 AM">01:30 AM</option>
                                                                    <option value="02:00 AM">02:00 AM</option>
                                                                    <option value="02:30 AM">02:30 AM</option>
                                                                    <option value="03:00 AM">03:00 AM</option>
                                                                    <option value="03:30 AM">03:30 AM</option>
                                                                    <option value="04:00 AM">04:00 AM</option>
                                                                    <option value="04:30 AM">04:30 AM</option>
                                                                    <option value="05:00 AM">05:00 AM</option>
                                                                    <option value="05:30 AM">05:30 AM</option>
                                                                    <option value="06:00 AM">06:00 AM</option>
                                                                    <option value="06:30 AM">06:30 AM</option>
                                                                    <option value="07:00 AM">07:00 AM</option>
                                                                    <option value="07:30 AM">07:30 AM</option>
                                                                    <option value="08:00 AM">08:00 AM</option>
                                                                    <option value="08:30 AM">08:30 AM</option>
                                                                    <option value="09:00 AM">09:00 AM</option>
                                                                    <option value="09:30 AM">09:30 AM</option>
                                                                    <option value="10:00 AM">10:00 AM</option>
                                                                    <option value="10:30 AM">10:30 AM</option>
                                                                    <option value="11:00 AM">11:00 AM</option>
                                                                    <option value="11:30 AM">11:30 AM</option>
                                                                    <option value="12:00 PM">12:00 PM</option>
                                                                    <option value="12:30 PM">12:30 PM</option>
                                                                    <option value="01:00 PM">01:00 PM</option>
                                                                    <option value="01:30 PM">01:30 PM</option>
                                                                    <option value="02:00 PM">02:00 PM</option>
                                                                    <option value="02:30 PM">02:30 PM</option>
                                                                    <option value="03:00 PM">03:00 PM</option>
                                                                    <option value="03:30 PM">03:30 PM</option>
                                                                    <option value="04:00 PM">04:00 PM</option>
                                                                    <option value="04:30 PM">04:30 PM</option>
                                                                    <option value="05:00 PM">05:00 PM</option>
                                                                    <option value="05:30 PM">05:30 PM</option>
                                                                    <option value="06:00 PM">06:00 PM</option>
                                                                    <option value="06:30 PM">06:30 PM</option>
                                                                    <option value="07:00 PM">07:00 PM</option>
                                                                    <option value="07:30 PM">07:30 PM</option>
                                                                    <option value="08:00 PM">08:00 PM</option>
                                                                    <option value="08:30 PM">08:30 PM</option>
                                                                    <option value="09:00 PM">09:00 PM</option>
                                                                    <option value="09:30 PM">09:30 PM</option>
                                                                    <option value="10:00 PM">10:00 PM</option>
                                                                    <option value="10:30 PM">10:30 PM</option>
                                                                    <option value="11:00 PM">11:00 PM</option>
                                                                    <option value="11:30 PM">11:30 PM</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="item end-time d-flex align-items-center justify-content-between">
                                                            <div class="label">End Time</div>
                                                            <div class="value">
                                                                <select class="form-control" name="endTime">
                                                                    <option value="">---------- </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--End for time-->

                                            <input type="text" class="input-hidden check-in-out-field align-self-end" name="checkInOut" value="" data-same-date="false">
                                            <input type="text" class="input-hidden check-in-field" name="checkIn" value="">
                                            <input type="text" class="input-hidden check-out-field" name="checkOut" value="">
                                            <div class="search-form__from date-group ">
                                                <i class="fal fa-calendar-alt"></i>
                                                <span class="check-in-render" data-date-format="DD/MM/YYYY">
                                                    Check In
                                                </span>
                                            </div>
                                            <div class="search-form__to date-group ">
                                                <i class="fal fa-calendar-alt"></i>
                                                <span class="check-out-render" data-date-format="DD/MM/YYYY">
                                                    Check Out
                                                </span>
                                            </div>

                                            <div class="search-form__guest apartment">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" id="dropdownGuestButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fal fa-users"></i>
                                                        <span class="guest-render">
                                                            1 Guest
                                                        </span>
                                                    </div>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownGuestButton">
                                                        <div class="item d-flex align-items-center justify-content-between">
                                                            <div class="label">Adults</div>
                                                            <div class="value">
                                                                <select class="form-control" name="adult">
                                                                    <option value="1" selected>1</option>
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

                                                        <div class="item d-flex align-items-center justify-content-between">
                                                            <div class="label">Infants</div>
                                                            <div class="value">
                                                                <select class="form-control" name="infant">
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

                                            <button class="btn search-form__more" type="button"><i class="fal fa-search-plus"></i></button>
                                            <button class="btn btn-primary search-form__search" type="submit"><i class="fal fa-search"></i>Search
                                            </button>
                                        </div>

                                        <div class="search-form__advanced bg-white">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="search-form__label">Price</div>
                                                        <input type="text" class="price-range-slider" name="price_range" value="" data-min="45.00" data-max="150.00" data-form="45.00" data-to="150.00" data-prefix="" data-postfix="đ" />

                                                    </div>
                                                    <div class="col-md-6 gmz-checkbox-wrapper">
                                                        <div class="search-form__label">Types</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_types[]" value="30">Apartment</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_types[]" value="29">Bungalow</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_types[]" value="28">Cabin</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_types[]" value="27">Guesthouse</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_types[]" value="26">Hostel</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_types[]" value="25">House</label>
                                                        <input type="hidden" name="apartment_type" value="" />
                                                    </div>

                                                    <div class="col-md-6 gmz-checkbox-wrapper">
                                                        <div class="search-form__label">Amenities</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_amenities[]" value="41">Wifi</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_amenities[]" value="40">Telephone</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_amenities[]" value="39">Table</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_amenities[]" value="38">Television</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_amenities[]" value="37">DVD Player</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_amenities[]" value="36">Mobile USB</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_amenities[]" value="35">Adapters</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_amenities[]" value="34">Tea / Coffee</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_amenities[]" value="33">Iron</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_amenities[]" value="32">Hair dryer</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="apartment_amenities[]" value="31">Bed</label>
                                                        <input type="hidden" name="apartment_amenity" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade  car-search-form" id="car-search" role="tabpanel" aria-labelledby="car-search-tab">
                                    <form id="search-car" method="GET" class="search-form car" action="http://ibooking.booteam.co/car-search">
                                        <div class="search-form__basic">
                                            <div class="search-form__address">
                                                <i class="fal fa-car-building"></i>
                                                <div class="form-control h-100 border-0" data-plugin="mapbox-geocoder" data-value="" data-placeholder="Location" data-lang="en">
                                                </div>
                                                <div class="map d-none"></div>
                                                <input type="hidden" name="lat" value="">
                                                <input type="hidden" name="lng" value="">
                                                <input type="hidden" name="address" value="">
                                            </div>
                                            <input type="text" class="input-hidden check-in-out-field align-self-end" name="checkInOut" value="">
                                            <div class="search-form__from">
                                                <i class="fal fa-calendar-alt"></i>
                                                <span class="check-in-render" data-date-format="DD/MM/YYYY">
                                                    Pick-up
                                                </span>
                                            </div>
                                            <div class="search-form__to">
                                                <i class="fal fa-calendar-alt"></i>
                                                <span class="check-out-render" data-date-format="DD/MM/YYYY">
                                                    Return
                                                </span>
                                            </div>
                                            <input type="text" class="input-hidden check-in-field" name="checkIn" value="">
                                            <input type="text" class="input-hidden check-out-field" name="checkOut" value="">
                                            <button class="btn search-form__more" type="button"><i class="fal fa-search-plus"></i></button>
                                            <button class="btn btn-primary search-form__search" type="submit"><i class="fal fa-search"></i>Search
                                            </button>
                                        </div>

                                        <div class="search-form__advanced bg-white">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="search-form__label">Price</div>
                                                        <input type="text" class="price-range-slider" name="price_range" value="" data-min="250.00" data-max="800.00" data-form="250.00" data-to="800.00" data-prefix="" data-postfix="đ" />

                                                    </div>
                                                    <div class="col-md-6 gmz-checkbox-wrapper">
                                                        <div class="search-form__label">Types</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_types[]" value="13">Passenger Van</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_types[]" value="12">Intermediate</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_types[]" value="10">Luxury</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_types[]" value="9">Premium</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_types[]" value="8">Full-size SUV</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_types[]" value="7">Minivan</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_types[]" value="6">Standard</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_types[]" value="5">Compact</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_types[]" value="4">Economy</label>
                                                        <input type="hidden" name="car_type" value="" />
                                                    </div>

                                                    <div class="col-md-6 gmz-checkbox-wrapper">
                                                        <div class="search-form__label">Features</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_features[]" value="19">Steering Wheel</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_features[]" value="18">Speed Km</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_features[]" value="17">Sensor</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_features[]" value="16">Power Windows</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_features[]" value="15">FM Radio</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_features[]" value="14">Airbag</label>
                                                        <input type="hidden" name="car_feature" value="" />
                                                    </div>

                                                    <div class="col-md-6 gmz-checkbox-wrapper">
                                                        <div class="search-form__label">Equipments</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_equipments[]" value="24">Ski Rack</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_equipments[]" value="23">Infant Child Seat</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_equipments[]" value="22">GPS Satellite</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_equipments[]" value="21">Hand tool</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="car_equipments[]" value="20">Wifi</label>
                                                        <input type="hidden" name="car_equipment" value="" />
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade  space-search-form" id="space-search" role="tabpanel" aria-labelledby="space-search-tab">
                                    <div class="booking-type d-flex align-items-center">
                                        <a href="javascript:void(0);" data-type="day" class=" active ">By Day</a>
                                        <a href="javascript:void(0);" data-type="hour" class="">By Hour</a>
                                    </div>
                                    <form id="search-space" method="GET" class="search-form space" action="http://ibooking.booteam.co/space-search">
                                        <input type="hidden" name="bookingType" id="booking-type-input" value="day" />
                                        <div class="search-form__basic">
                                            <div class="search-form__address">
                                                <i class="fal fa-city"></i>
                                                <div class="form-control h-100 border-0" data-plugin="mapbox-geocoder" data-value="" data-placeholder="Location" data-lang="en">
                                                </div>
                                                <div class="map d-none"></div>
                                                <input type="hidden" name="lat" value="">
                                                <input type="hidden" name="lng" value="">
                                                <input type="hidden" name="address" value="">
                                            </div>

                                            <!--For time-->
                                            <input type="text" class="input-hidden check-in-out-time-field align-self-end" name="checkInOutTime" value="">
                                            <input type="text" class="input-hidden check-in-time-field" name="checkInTime" value="">
                                            <input type="text" class="input-hidden check-out-time-field" name="checkOutTime" value="">
                                            <div class="search-form__from-time time-group  d-none ">
                                                <i class="fal fa-calendar-alt"></i>
                                                <span class="check-in-time-render" data-date-format="DD/MM/YYYY">
                                                    Date
                                                </span>
                                            </div>

                                            <div class="search-form__time time-group  d-none ">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" id="dropdownTimeButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fal fa-clock"></i>
                                                        <span class="time-render">
                                                            Time
                                                        </span>
                                                    </div>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownTimeButton">
                                                        <div class="item start-time d-flex align-items-center justify-content-between">
                                                            <div class="label">Start Time</div>
                                                            <div class="value">
                                                                <select class="form-control" name="startTime">
                                                                    <option value="12:00 AM">00:00 AM</option>
                                                                    <option value="12:30 AM">00:30 AM</option>
                                                                    <option value="01:00 AM">01:00 AM</option>
                                                                    <option value="01:30 AM">01:30 AM</option>
                                                                    <option value="02:00 AM">02:00 AM</option>
                                                                    <option value="02:30 AM">02:30 AM</option>
                                                                    <option value="03:00 AM">03:00 AM</option>
                                                                    <option value="03:30 AM">03:30 AM</option>
                                                                    <option value="04:00 AM">04:00 AM</option>
                                                                    <option value="04:30 AM">04:30 AM</option>
                                                                    <option value="05:00 AM">05:00 AM</option>
                                                                    <option value="05:30 AM">05:30 AM</option>
                                                                    <option value="06:00 AM">06:00 AM</option>
                                                                    <option value="06:30 AM">06:30 AM</option>
                                                                    <option value="07:00 AM">07:00 AM</option>
                                                                    <option value="07:30 AM">07:30 AM</option>
                                                                    <option value="08:00 AM">08:00 AM</option>
                                                                    <option value="08:30 AM">08:30 AM</option>
                                                                    <option value="09:00 AM">09:00 AM</option>
                                                                    <option value="09:30 AM">09:30 AM</option>
                                                                    <option value="10:00 AM">10:00 AM</option>
                                                                    <option value="10:30 AM">10:30 AM</option>
                                                                    <option value="11:00 AM">11:00 AM</option>
                                                                    <option value="11:30 AM">11:30 AM</option>
                                                                    <option value="12:00 PM">12:00 PM</option>
                                                                    <option value="12:30 PM">12:30 PM</option>
                                                                    <option value="01:00 PM">01:00 PM</option>
                                                                    <option value="01:30 PM">01:30 PM</option>
                                                                    <option value="02:00 PM">02:00 PM</option>
                                                                    <option value="02:30 PM">02:30 PM</option>
                                                                    <option value="03:00 PM">03:00 PM</option>
                                                                    <option value="03:30 PM">03:30 PM</option>
                                                                    <option value="04:00 PM">04:00 PM</option>
                                                                    <option value="04:30 PM">04:30 PM</option>
                                                                    <option value="05:00 PM">05:00 PM</option>
                                                                    <option value="05:30 PM">05:30 PM</option>
                                                                    <option value="06:00 PM">06:00 PM</option>
                                                                    <option value="06:30 PM">06:30 PM</option>
                                                                    <option value="07:00 PM">07:00 PM</option>
                                                                    <option value="07:30 PM">07:30 PM</option>
                                                                    <option value="08:00 PM">08:00 PM</option>
                                                                    <option value="08:30 PM">08:30 PM</option>
                                                                    <option value="09:00 PM">09:00 PM</option>
                                                                    <option value="09:30 PM">09:30 PM</option>
                                                                    <option value="10:00 PM">10:00 PM</option>
                                                                    <option value="10:30 PM">10:30 PM</option>
                                                                    <option value="11:00 PM">11:00 PM</option>
                                                                    <option value="11:30 PM">11:30 PM</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="item end-time d-flex align-items-center justify-content-between">
                                                            <div class="label">End Time</div>
                                                            <div class="value">
                                                                <select class="form-control" name="endTime">
                                                                    <option value="">---------- </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--End for time-->

                                            <input type="text" class="input-hidden check-in-out-field align-self-end" name="checkInOut" value="">
                                            <input type="text" class="input-hidden check-in-field" name="checkIn" value="">
                                            <input type="text" class="input-hidden check-out-field" name="checkOut" value="">
                                            <div class="search-form__from date-group ">
                                                <i class="fal fa-calendar-alt"></i>
                                                <span class="check-in-render" data-date-format="DD/MM/YYYY">
                                                    Check In
                                                </span>
                                            </div>
                                            <div class="search-form__to date-group ">
                                                <i class="fal fa-calendar-alt"></i>
                                                <span class="check-out-render" data-date-format="DD/MM/YYYY">
                                                    Check Out
                                                </span>
                                            </div>

                                            <div class="search-form__guest space">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" id="dropdownGuestButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fal fa-users"></i>
                                                        <span class="guest-render">
                                                            1 Guest
                                                        </span>
                                                    </div>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownGuestButton">
                                                        <div class="item d-flex align-items-center justify-content-between">
                                                            <div class="label">Adults</div>
                                                            <div class="value">
                                                                <select class="form-control" name="adult">
                                                                    <option value="1" selected>1</option>
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

                                                        <div class="item d-flex align-items-center justify-content-between">
                                                            <div class="label">Infants</div>
                                                            <div class="value">
                                                                <select class="form-control" name="infant">
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

                                            <button class="btn search-form__more" type="button"><i class="fal fa-search-plus"></i></button>
                                            <button class="btn btn-primary search-form__search" type="submit"><i class="fal fa-search"></i>Search
                                            </button>
                                        </div>

                                        <div class="search-form__advanced bg-white">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="search-form__label">Price</div>
                                                        <input type="text" class="price-range-slider" name="price_range" value="" data-min="10.00" data-max="150.00" data-form="10.00" data-to="150.00" data-prefix="" data-postfix="đ" />

                                                    </div>
                                                    <div class="col-md-6 gmz-checkbox-wrapper">
                                                        <div class="search-form__label">Types</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_types[]" value="103">Cafe</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_types[]" value="102">Office</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_types[]" value="101">Recording Studio</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_types[]" value="100">Yoga Studio</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_types[]" value="99">Warehouse</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_types[]" value="98">Villa</label>
                                                        <input type="hidden" name="space_type" value="" />
                                                    </div>

                                                    <div class="col-md-6 gmz-checkbox-wrapper">
                                                        <div class="search-form__label">Amenities</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_amenities[]" value="114">Bed</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_amenities[]" value="113">Hair dryer</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_amenities[]" value="112">Iron</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_amenities[]" value="111">Tea / Coffee</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_amenities[]" value="110">Adapters</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_amenities[]" value="109">Mobile USB</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_amenities[]" value="108">DVD Player</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_amenities[]" value="107">Television</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_amenities[]" value="106">Table</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_amenities[]" value="105">Telephone</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="space_amenities[]" value="104">Wifi</label>
                                                        <input type="hidden" name="space_amenity" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade  tour-search-form" id="tour-search" role="tabpanel" aria-labelledby="tour-search-tab">
                                    <form id="search-tour" method="GET" class="search-form tour" action="http://ibooking.booteam.co/tour-search">
                                        <div class="search-form__basic">
                                            <div class="search-form__address">
                                                <i class="fal fa-city"></i>
                                                <div class="form-control h-100 border-0" data-plugin="mapbox-geocoder" data-value="" data-placeholder="Location" data-lang="en">
                                                </div>
                                                <div class="map d-none"></div>
                                                <input type="hidden" name="lat" value="">
                                                <input type="hidden" name="lng" value="">
                                                <input type="hidden" name="address" value="">
                                            </div>

                                            <input type="text" class="input-hidden check-in-out-field align-self-end" name="checkInOut" value="" data-same-date="false">
                                            <input type="text" class="input-hidden check-in-field" name="checkIn" value="">
                                            <input type="text" class="input-hidden check-out-field" name="checkOut" value="">
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

                                            <div class="search-form__guest tour">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" id="dropdownGuestButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fal fa-users"></i>
                                                        <span class="guest-render">
                                                            1 Guest
                                                        </span>
                                                    </div>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownGuestButton">
                                                        <div class="item d-flex align-items-center justify-content-between">
                                                            <div class="label">Adults</div>
                                                            <div class="value">
                                                                <select class="form-control" name="adult">
                                                                    <option value="1" selected>1</option>
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

                                                        <div class="item d-flex align-items-center justify-content-between">
                                                            <div class="label">Infants</div>
                                                            <div class="value">
                                                                <select class="form-control" name="infant">
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

                                            <button class="btn search-form__more" type="button"><i class="fal fa-search-plus"></i></button>
                                            <button class="btn btn-primary search-form__search" type="submit"><i class="fal fa-search"></i>Search
                                            </button>
                                        </div>

                                        <div class="search-form__advanced bg-white">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="search-form__label">Price</div>
                                                        <input type="text" class="price-range-slider" name="price_range" value="" data-min="50.00" data-max="100.00" data-form="50.00" data-to="100.00" data-prefix="" data-postfix="đ" />

                                                    </div>
                                                    <div class="col-md-6 gmz-checkbox-wrapper">
                                                        <div class="search-form__label">Types</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_types[]" value="120">Activities</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_types[]" value="119">Festival &amp; Events</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_types[]" value="118">Independent</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_types[]" value="117">Marine</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_types[]" value="116">Nature &amp; Adventure</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_types[]" value="115">Cultural</label>
                                                        <input type="hidden" name="tour_type" value="" />
                                                    </div>

                                                    <div class="col-md-6 gmz-checkbox-wrapper">
                                                        <div class="search-form__label">Tour Includes</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_includes[]" value="128">Entrance fees</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_includes[]" value="127">Specialized bilingual guide</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_includes[]" value="126">Private Transport</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_includes[]" value="125">Tip or gratuity</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_includes[]" value="124">Parking fees</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_includes[]" value="123">Landing &amp; facility fees</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_includes[]" value="122">Entry or admission fee</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_includes[]" value="121">Departure tax</label>
                                                        <input type="hidden" name="tour_include" value="" />
                                                    </div>

                                                    <div class="col-md-6 gmz-checkbox-wrapper">
                                                        <div class="search-form__label">Tour Excludes</div>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_excludes[]" value="136">Wifi</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_excludes[]" value="135">Fuel surcharge</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_excludes[]" value="134">Food &amp; drinks</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_excludes[]" value="133">Bus fare</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_excludes[]" value="132">Tickets</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_excludes[]" value="131">Drink</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_excludes[]" value="130">Insurance</label>
                                                        <label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="tour_excludes[]" value="129">Additional Services</label>
                                                        <input type="hidden" name="tour_exclude" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade  beauty-search-form" id="beauty-search" role="tabpanel" aria-labelledby="beauty-search-tab">
                                    <form id="search-beauty" method="GET" class="search-form beauty" action="http://ibooking.booteam.co/beauty-search">
                                        <div class="search-form__basic">
                                            <div class="search-form__address">
                                                <i class="fal fa-city"></i>
                                                <div class="form-control h-100 border-0" data-plugin="mapbox-geocoder" data-value="" data-placeholder="Location" data-lang="en">
                                                </div>
                                                <div class="map d-none"></div>
                                                <input type="hidden" name="lat" value="">
                                                <input type="hidden" name="lng" value="">
                                                <input type="hidden" name="address" value="">
                                            </div>

                                            <!--For time-->
                                            <input type="text" class="input-hidden check-in-out-time-field align-self-end" name="checkInOut" value="" disabled>
                                            <input type="text" class="input-hidden check-in-time-field" name="checkIn" value="">
                                            <div class="search-form__from-time time-group">
                                                <i class="fal fa-calendar-alt"></i>
                                                <span class="check-in-time-render" data-date-format="DD/MM/YYYY">
                                                    Date
                                                </span>
                                            </div>
                                            <!--End for time-->

                                            <div class="search-form__select search-form__select--beauty">
                                                <i class="fal fa-spa"></i>

                                                <select class="gmz-select-2 gmz-select-2--beauty-service d-none" name="service" id="beauty-service">
                                                    <option value="-1">All Services</option>
                                                    <option value="142">Tattoo</option>
                                                    <option value="141">Hair Stylist</option>
                                                    <option value="140">Massage</option>
                                                    <option value="139">Makeup</option>
                                                    <option value="138">Waxing</option>
                                                    <option value="137">Nail</option>
                                                </select>
                                            </div>
                                            <button class="btn btn-primary search-form__search" type="submit"><i class="fal fa-search"></i>Search
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hotel-type">
            <div class="container py-40">
                <h2 class="section-title mb-20">Property Types</h2>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="hotel-type__item" data-plugin="matchHeight">
                            <div class="hotel-type__thumbnail">
                                <a href="hotel-search9234.html?property_type=68">
                                    <img class="_image-hotel" src="storage/2021/03/24/lokuthula-lodges-1616578415-250x150.jpg" alt="Lodges">
                                </a>
                            </div>
                            <div class="hotel-type__info">
                                <h3 class="hotel-type__name"><a href="hotel-search9234.html?property_type=68">Lodges</a></h3>
                                <div class="hotel-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="hotel-type__item" data-plugin="matchHeight">
                            <div class="hotel-type__thumbnail">
                                <a href="hotel-searcha761.html?property_type=67">
                                    <img class="_image-hotel" src="storage/2021/03/24/resort-1616578386-250x150.jpg" alt="Resorts">
                                </a>
                            </div>
                            <div class="hotel-type__info">
                                <h3 class="hotel-type__name"><a href="hotel-searcha761.html?property_type=67">Resorts</a></h3>
                                <div class="hotel-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="hotel-type__item" data-plugin="matchHeight">
                            <div class="hotel-type__thumbnail">
                                <a href="hotel-search86a4.html?property_type=66">
                                    <img class="_image-hotel" src="storage/2021/03/24/motels-1616578349-250x150.jpg" alt="Motels">
                                </a>
                            </div>
                            <div class="hotel-type__info">
                                <h3 class="hotel-type__name"><a href="hotel-search86a4.html?property_type=66">Motels</a></h3>
                                <div class="hotel-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="hotel-type__item" data-plugin="matchHeight">
                            <div class="hotel-type__thumbnail">
                                <a href="hotel-search5021.html?property_type=65">
                                    <img class="_image-hotel" src="storage/2021/03/24/villa-la-gi-1616578294-250x150.jpg" alt="Villas">
                                </a>
                            </div>
                            <div class="hotel-type__info">
                                <h3 class="hotel-type__name"><a href="hotel-search5021.html?property_type=65">Villas</a></h3>
                                <div class="hotel-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="hotel-type__item" data-plugin="matchHeight">
                            <div class="hotel-type__thumbnail">
                                <a href="hotel-searchfe2d.html?property_type=64">
                                    <img class="_image-hotel" src="storage/2021/03/24/256492322-1616578250-250x150.jpg" alt="Homestays">
                                </a>
                            </div>
                            <div class="hotel-type__info">
                                <h3 class="hotel-type__name"><a href="hotel-searchfe2d.html?property_type=64">Homestays</a></h3>
                                <div class="hotel-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="hotel-type__item" data-plugin="matchHeight">
                            <div class="hotel-type__thumbnail">
                                <a href="hotel-search864d.html?property_type=63">
                                    <img class="_image-hotel" src="storage/2021/03/24/cataloina-porto-doble-balcon2-2-1616578203-250x150.jpg" alt="Hotels">
                                </a>
                            </div>
                            <div class="hotel-type__info">
                                <h3 class="hotel-type__name"><a href="hotel-search864d.html?property_type=63">Hotels</a></h3>
                                <div class="hotel-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="list-hotel list-hotel--grid py-40 bg-gray-100">
            <div class="container">
                <h2 class="section-title mb-20">List Of Hotels</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="hotel-item hotel-item--grid" data-plugin="matchHeight">
                            <div class="hotel-item__thumbnail">

                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>

                                <a href="hotel/grand-beach-hotel.html">
                                    <img src="storage/2021/01/31/sca999-take-01-40-1612103702-360x240.jpg" alt="Grand Beach Hotel">
                                </a>
                                <a class="hotel-item__type" href="hotel-search864d.html?property_type=63">
                                    Hotels
                                </a>
                            </div>
                            <div class="hotel-item__details">
                                <span class="hotel-item__label">Featured</span>
                                <div class="hotel-item__rating">
                                    <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                </div>
                                <h3 class="hotel-item__title"><a href="hotel/grand-beach-hotel.html">Grand Beach Hotel</a></h3>
                                <p class="hotel-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Miami, United States of America</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="hotel-item__price">
                                        <span class="_retail">250đ</span><span class="_unit">night</span>
                                    </div>
                                    <a class="btn btn-primary hotel-item__view-detail" href="hotel/grand-beach-hotel.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="hotel-item hotel-item--grid" data-plugin="matchHeight">
                            <div class="hotel-item__thumbnail">

                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>

                                <a href="hotel/avanti-international-resort.html">
                                    <img src="storage/2021/01/31/2019-02-07-10-20-05-283117-scg997-05-722a7606-1612066411-360x240.jpg" alt="Avanti International Resort">
                                </a>
                                <a class="hotel-item__type" href="hotel-searcha761.html?property_type=67">
                                    Resorts
                                </a>
                            </div>
                            <div class="hotel-item__details">
                                <span class="hotel-item__label">Featured</span>
                                <div class="hotel-item__rating">
                                    <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                </div>
                                <h3 class="hotel-item__title"><a href="hotel/avanti-international-resort.html">Avanti International Resort</a></h3>
                                <p class="hotel-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Orlando, United States of America</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="hotel-item__price">
                                        <span class="_retail">400đ</span><span class="_unit">night</span>
                                    </div>
                                    <a class="btn btn-primary hotel-item__view-detail" href="hotel/avanti-international-resort.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="hotel-item hotel-item--grid" data-plugin="matchHeight">
                            <div class="hotel-item__thumbnail">

                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>

                                <a href="hotel/east-miami.html">
                                    <img src="storage/2021/03/24/resort-1616578386-360x240.jpg" alt="EAST Miami">
                                </a>
                                <a class="hotel-item__type" href="hotel-searcha761.html?property_type=67">
                                    Resorts
                                </a>
                            </div>
                            <div class="hotel-item__details">
                                <span class="hotel-item__label">Featured</span>
                                <div class="hotel-item__rating">
                                    <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                </div>
                                <h3 class="hotel-item__title"><a href="hotel/east-miami.html">EAST Miami</a></h3>
                                <p class="hotel-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Miami, United States of America</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="hotel-item__price">
                                        <span class="_retail">300đ</span><span class="_unit">night</span>
                                    </div>
                                    <a class="btn btn-primary hotel-item__view-detail" href="hotel/east-miami.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="car-type">
            <div class="container py-40">
                <h2 class="section-title mb-20">Car Types</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="car-type__item" data-plugin="matchHeight">
                            <div class="car-type__left">
                                <h3 class="car-type__name"><a href="car-search053c.html?car_type=13">Passenger Van</a></h3>
                                <div class="car-type__description">
                                    5 Adults, 5 Bags
                                </div>
                                <a href="car-search053c.html?car_type=13" class="btn btn-primary car-type__detail">View Detail</a>
                            </div>
                            <div class="car-type__right">
                                <a href="car-search053c.html?car_type=13">
                                    <img class="_image-car" src="storage/2021/01/30/car-type-passenger-van-1612015808-300x200.jpg" alt="Passenger Van">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="car-type__item" data-plugin="matchHeight">
                            <div class="car-type__left">
                                <h3 class="car-type__name"><a href="car-search6807.html?car_type=12">Intermediate</a></h3>
                                <div class="car-type__description">
                                    5 Adults, 3 Bags
                                </div>
                                <a href="car-search6807.html?car_type=12" class="btn btn-primary car-type__detail">View Detail</a>
                            </div>
                            <div class="car-type__right">
                                <a href="car-search6807.html?car_type=12">
                                    <img class="_image-car" src="storage/2021/01/30/car-type-economy-1612015010-300x200.jpg" alt="Intermediate">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="car-type__item" data-plugin="matchHeight">
                            <div class="car-type__left">
                                <h3 class="car-type__name"><a href="car-searchee18.html?car_type=10">Luxury</a></h3>
                                <div class="car-type__description">
                                    5 Adults, 5 Bags
                                </div>
                                <a href="car-searchee18.html?car_type=10" class="btn btn-primary car-type__detail">View Detail</a>
                            </div>
                            <div class="car-type__right">
                                <a href="car-searchee18.html?car_type=10">
                                    <img class="_image-car" src="storage/2021/01/30/car-type-premium-1612015644-300x200.jpg" alt="Luxury">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="car-type__item" data-plugin="matchHeight">
                            <div class="car-type__left">
                                <h3 class="car-type__name"><a href="car-search6a81.html?car_type=9">Premium</a></h3>
                                <div class="car-type__description">
                                    5 Adults, 5 Bags
                                </div>
                                <a href="car-search6a81.html?car_type=9" class="btn btn-primary car-type__detail">View Detail</a>
                            </div>
                            <div class="car-type__right">
                                <a href="car-search6a81.html?car_type=9">
                                    <img class="_image-car" src="storage/2021/01/30/car-type-premium-1612015644-300x200.jpg" alt="Premium">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="car-type__item" data-plugin="matchHeight">
                            <div class="car-type__left">
                                <h3 class="car-type__name"><a href="car-searchf51c.html?car_type=8">Full-size SUV</a></h3>
                                <div class="car-type__description">
                                    5 Adults, 2 Bags
                                </div>
                                <a href="car-searchf51c.html?car_type=8" class="btn btn-primary car-type__detail">View Detail</a>
                            </div>
                            <div class="car-type__right">
                                <a href="car-searchf51c.html?car_type=8">
                                    <img class="_image-car" src="storage/2021/01/30/car-type-standard-1612015281-300x200.jpg" alt="Full-size SUV">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="car-type__item" data-plugin="matchHeight">
                            <div class="car-type__left">
                                <h3 class="car-type__name"><a href="car-search2101.html?car_type=7">Minivan</a></h3>
                                <div class="car-type__description">
                                    5 Adults, 5 Bags
                                </div>
                                <a href="car-search2101.html?car_type=7" class="btn btn-primary car-type__detail">View Detail</a>
                            </div>
                            <div class="car-type__right">
                                <a href="car-search2101.html?car_type=7">
                                    <img class="_image-car" src="storage/2021/01/30/car-type-minivan-1612015418-300x200.jpg" alt="Minivan">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="car-type__item" data-plugin="matchHeight">
                            <div class="car-type__left">
                                <h3 class="car-type__name"><a href="car-searchc242.html?car_type=6">Standard</a></h3>
                                <div class="car-type__description">
                                    5 Adults, 3 Bags
                                </div>
                                <a href="car-searchc242.html?car_type=6" class="btn btn-primary car-type__detail">View Detail</a>
                            </div>
                            <div class="car-type__right">
                                <a href="car-searchc242.html?car_type=6">
                                    <img class="_image-car" src="storage/2021/01/30/car-type-standard-1612015281-300x200.jpg" alt="Standard">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="car-type__item" data-plugin="matchHeight">
                            <div class="car-type__left">
                                <h3 class="car-type__name"><a href="car-search23a6.html?car_type=5">Compact</a></h3>
                                <div class="car-type__description">
                                    4 Adults, 2 Bags
                                </div>
                                <a href="car-search23a6.html?car_type=5" class="btn btn-primary car-type__detail">View Detail</a>
                            </div>
                            <div class="car-type__right">
                                <a href="car-search23a6.html?car_type=5">
                                    <img class="_image-car" src="storage/2021/01/30/car-type-compact-1612015221-300x200.jpg" alt="Compact">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="car-type__item" data-plugin="matchHeight">
                            <div class="car-type__left">
                                <h3 class="car-type__name"><a href="car-searchda20.html?car_type=4">Economy</a></h3>
                                <div class="car-type__description">
                                    2 Adults, 2 Bags
                                </div>
                                <a href="car-searchda20.html?car_type=4" class="btn btn-primary car-type__detail">View Detail</a>
                            </div>
                            <div class="car-type__right">
                                <a href="car-searchda20.html?car_type=4">
                                    <img class="_image-car" src="storage/2021/01/30/car-type-economy-1612015010-300x200.jpg" alt="Economy">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="list-car list-car--grid py-40 bg-gray-100">
            <div class="container">
                <h2 class="section-title mb-20">List Of Cars</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="car-item car-item--grid" data-plugin="matchHeight">
                            <div class="car-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="car/toyota-fortuner-2019.html">
                                    <img src="storage/2021/01/30/toyota-fortuner-2019-gia-xe-fortuner-2019-toyota-hung-vuong-1586274707-1612021912-360x240.jpg" alt="Toyota Prius Plus">
                                </a>
                                <a class="car-item__type" href="car-search053c.html?car_type=13">
                                    Passenger Van
                                </a>
                            </div>
                            <div class="car-item__details">
                                <span class="car-item__label">Featured</span>
                                <h3 class="car-item__title"><a href="car/toyota-fortuner-2019.html">Toyota Prius Plus</a></h3>
                                <div class="car-item__meta">
                                    <div class="i-meta" data-toggle="tooltip" title="Passenger">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                        <g transform="translate(-155.000000, -2016.000000)" stroke="#1A2B50" stroke-width="0.5">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(20.000000, 327.000000)">
                                                                            <g>
                                                                                <circle cx="10" cy="3.125" r="2.5"></circle>
                                                                                <path d="M13.125,11.875 L13.125,10 C13.125,8.27411016 11.7258898,6.875 10,6.875 C8.27411016,6.875 6.875,8.27411016 6.875,10 L6.875,11.875 L8.125,11.875 L8.75,16.875 L11.25,16.875 L11.875,11.875 L13.125,11.875 Z"></path>
                                                                                <circle cx="3.75" cy="5" r="1.875"></circle>
                                                                                <path d="M4.75,8.28916667 C3.79624791,7.9682092 2.74632008,8.12578507 1.92880562,8.71257878 C1.11129116,9.29937249 0.626070499,10.2436921 0.625,11.25 L0.625,11.875 L1.875,11.875 L2.5,15.625 L5,15.625 L5.31333333,13.745"></path>
                                                                                <circle cx="16.25" cy="5" r="1.875"></circle>
                                                                                <path d="M15.25,8.28916667 C16.2037521,7.9682092 17.2536799,8.12578507 18.0711944,8.71257878 C18.8887088,9.29937249 19.3739295,10.2436921 19.375,11.25 L19.375,11.875 L18.125,11.875 L17.5,15.625 L15,15.625 L14.6866667,13.745"></path>
                                                                                <path d="M19.375,17.5 C19.375,18.5358333 15.1775,19.375 10,19.375 C4.8225,19.375 0.625,18.5358333 0.625,17.5"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">7</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Doors">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 20 22" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-309.000000, -2015.000000)" fill="#1A2B50" fill-rule="nonzero" stroke="#FFFFFF">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(125.000000, 326.000000)">
                                                                            <g transform="translate(6.000000, 0.042132)">
                                                                                <g>
                                                                                    <g transform="translate(44.000000, 0.957868)">
                                                                                        <path d="M14.4049515,11.1208738 L14.4049515,8.15165049 L17.2397087,10.9865049 C17.3819417,11.1287379 17.5682524,11.1998058 17.7546602,11.1998058 C17.9409709,11.1998058 18.1273786,11.1287379 18.2696117,10.9865049 C18.5539806,10.7021359 18.5539806,10.241068 18.2696117,9.95679612 L14.4049515,6.09203883 L14.4049515,5.65330097 L14.4049515,2.16990291 C14.4049515,0.973398058 13.3596117,0 12.0748544,0 L6.49135922,0 C5.20660194,0 4.16126214,0.973398058 4.16126214,2.16990291 L4.16126214,5.65330097 L4.16126214,6.09203883 L0.296601942,9.95679612 C0.0122330097,10.241165 0.0122330097,10.702233 0.296601942,10.9865049 C0.438834951,11.1286408 0.625242718,11.1998058 0.811553398,11.1998058 C0.997864078,11.1998058 1.18427184,11.1287379 1.32650485,10.9865049 L4.16126214,8.15165049 L4.16126214,11.1209709 L0.296601942,14.9858252 C0.0122330097,15.2701942 0.0122330097,15.7312621 0.296699029,16.0156311 C0.438834951,16.1578641 0.625242718,16.228932 0.811553398,16.228932 C0.997864078,16.228932 1.18427184,16.1578641 1.32650485,16.0156311 L4.16126214,13.1806796 L4.16126214,15.6059223 L4.16126214,17.7557282 C4.16126214,18.952233 5.20660194,19.9256311 6.49135922,19.9256311 L12.0748544,19.9256311 C13.3596117,19.9256311 14.4049515,18.952233 14.4049515,17.7557282 L14.4049515,15.6058252 L14.4049515,13.1805825 L17.2397087,16.015534 C17.3819417,16.157767 17.5682524,16.228835 17.7546602,16.228835 C17.9409709,16.228835 18.1273786,16.157767 18.2695146,16.015534 C18.5539806,15.731165 18.5539806,15.2701942 18.2696117,14.9857282 L14.4049515,11.1208738 Z M12.9486408,11.4228155 L12.9486408,14.8776699 L5.61757282,14.8776699 L5.61757282,11.4228155 C5.61757282,11.4226214 5.61757282,11.4225243 5.61757282,11.4223301 L5.61757282,6.39417476 C5.61757282,6.3938835 5.61757282,6.39349515 5.61757282,6.39320388 L5.61757282,6.38145631 L12.9486408,6.38145631 L12.9486408,6.39320388 C12.9486408,6.39349515 12.9486408,6.3938835 12.9486408,6.39417476 L12.9486408,11.4223301 C12.9486408,11.4224272 12.9486408,11.4226214 12.9486408,11.4228155 Z M6.49135922,1.45631068 L12.0748544,1.45631068 C12.5485437,1.45631068 12.9486408,1.7831068 12.9486408,2.16990291 L12.9486408,4.92514563 L5.61757282,4.92514563 L5.61757282,2.16990291 C5.61757282,1.7831068 6.0176699,1.45631068 6.49135922,1.45631068 Z M12.0748544,18.4691262 L6.49135922,18.4691262 C6.0176699,18.4691262 5.61757282,18.1423301 5.61757282,17.755534 L5.61757282,16.3339806 L12.9486408,16.3339806 L12.9486408,17.7556311 C12.9486408,18.1424272 12.5485437,18.4691262 12.0748544,18.4691262 Z"></path>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">4</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Baggage">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 21 22" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-259.000000, -2015.000000)" fill="#1A2B50" fill-rule="nonzero" stroke="#FFFFFF" stroke-width="0.2">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(125.000000, 326.000000)">
                                                                            <g transform="translate(0.000000, 1.042132)">
                                                                                <path d="M19.4092827,14.3460535 L17.8059072,14.3460535 C18.1347914,13.9961395 18.3161389,13.5329174 18.3122363,13.0527202 L18.3122363,4.57107461 C18.3122363,3.503986 17.4504219,2.61609571 16.3833333,2.61609571 L12.9535865,2.61609571 L12.9535865,1.22748811 C12.9537382,0.899854993 12.8228435,0.585770667 12.5900649,0.355211302 C12.3572864,0.124651936 12.0419626,-0.00322816269 11.714346,6.19501863e-05 L8.03248945,6.19501863e-05 C7.70487282,-0.00322816269 7.38954907,0.124651936 7.1567705,0.355211302 C6.92399193,0.585770667 6.79309722,0.899854993 6.79324895,1.22748811 L6.79324895,2.61609571 L3.36350211,2.61609571 C2.2964135,2.61609571 1.43459916,3.503986 1.43459916,4.57107461 L1.43459916,13.0527202 C1.43069655,13.5329174 1.61204409,13.9961395 1.94092827,14.3460535 L0.337552743,14.3460535 C0.151139241,14.3460535 0,14.5142392 0,14.7004839 L0,16.7679944 C0,16.9544501 0.151139241,17.0886695 0.337552743,17.0886695 L2.03135021,17.0886695 C1.53379016,17.5396946 1.36504995,18.2503908 1.60676195,18.8769408 C1.84847395,19.5034908 2.45080526,19.9167212 3.12236287,19.9167212 C3.79392048,19.9167212 4.39625179,19.5034908 4.63796379,18.8769408 C4.87967579,18.2503908 4.71093558,17.5396946 4.21337553,17.0886695 L15.5334599,17.0886695 C15.0358999,17.5396946 14.8671597,18.2503908 15.1088717,18.8769408 C15.3505837,19.5034908 15.952915,19.9167212 16.6244726,19.9167212 C17.2960302,19.9167212 17.8983615,19.5034908 18.1400735,18.8769408 C18.3817855,18.2503908 18.2130453,17.5396946 17.7154852,17.0886695 L19.4092827,17.0886695 C19.5956962,17.0886695 19.7468354,16.9546189 19.7468354,16.7679944 L19.7468354,14.7004839 C19.7468354,14.5142392 19.5956962,14.3460535 19.4092827,14.3460535 Z M3.12236287,19.2574459 C2.5980419,19.2574459 2.17299578,18.8323998 2.17299578,18.3080788 C2.17299578,17.7837579 2.5980419,17.3587117 3.12236287,17.3587117 C3.64668383,17.3587117 4.07172996,17.7837579 4.07172996,18.3080788 C4.07112541,18.8321492 3.64643322,19.2568414 3.12236287,19.2574459 L3.12236287,19.2574459 Z M16.6244726,19.2574459 C16.1001516,19.2574459 15.6751055,18.8323998 15.6751055,18.3080788 C15.6751055,17.7837579 16.1001516,17.3587117 16.6244726,17.3587117 C17.1487935,17.3587117 17.5738397,17.7837579 17.5738397,18.3080788 C17.5732351,18.8321492 17.1485429,19.2568414 16.6244726,19.2574459 Z M14.8523207,3.29120119 L14.8523207,14.3038594 L4.89451477,14.3038594 L4.89451477,3.29120119 L14.8523207,3.29120119 Z M17.6371308,4.57107461 L17.6371308,13.0527202 C17.6378305,13.3852181 17.5058736,13.7042605 17.2705122,13.939123 C17.0351508,14.1739854 16.715829,14.3052648 16.3833333,14.3038594 L15.5274262,14.3038706 L15.5274262,3.29120119 L16.3833333,3.29120119 C17.0781857,3.29120119 17.6371308,3.87622229 17.6371308,4.57107461 Z M7.46835443,1.22748811 C7.46800611,1.07883593 7.52771647,0.936345366 7.63393609,0.832350243 C7.7401557,0.72835512 7.88387793,0.67167347 8.03248945,0.675167435 L11.714346,0.675167435 C11.8629575,0.67167347 12.0066797,0.72835512 12.1128994,0.832350243 C12.219119,0.936345366 12.2788293,1.07883593 12.278481,1.22748811 L12.2784825,2.61609571 L7.46835291,2.61609571 L7.46835443,1.22748811 Z M2.10970464,4.57107461 C2.10970464,3.87622229 2.66864979,3.29120119 3.36350211,3.29120119 L4.21940928,3.29120119 L4.21940928,14.3038706 L3.36350211,14.3038594 C3.03100643,14.3052648 2.71168464,14.1739854 2.47632322,13.939123 C2.2409618,13.7042605 2.10900499,13.3852181 2.10970464,13.0527202 L2.10970464,4.57107461 Z M19.07173,16.4135641 L0.675105485,16.4135641 L0.675105485,15.021159 L19.07173,15.021159 L19.07173,16.4135641 Z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">8</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Gear Shift">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 23 20" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-206.000000, -2016.000000)" fill="#1A2B50" fill-rule="nonzero" stroke="#FFFFFF" stroke-width="0.1">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(70.000000, 327.000000)">
                                                                            <g transform="translate(1.000000, 0.000000)">
                                                                                <path d="M19.7745569,0.0513671801 L19.7745392,0.0514139099 C18.3074667,0.0512294327 17.0910913,1.18771017 16.9917569,2.65141594 C16.8924225,4.11512172 17.9440975,5.40552369 19.4409941,5.65309615 L19.3909941,9.66473167 L11.6307137,9.61473167 L11.6741302,5.60479315 C13.1303141,5.41137358 14.1868843,4.12166512 14.0899634,2.65589263 C13.9930424,1.19012015 12.7758553,0.0507588812 11.306882,0.0507588812 C9.83790863,0.0507588812 8.62072156,1.19012015 8.52380058,2.65589263 C8.4268796,4.12166512 9.4834498,5.41137358 10.9830502,5.65435784 L10.9330502,9.66473167 L3.17276982,9.61473167 L3.216023,5.60355344 C4.67176554,5.40530795 5.72422287,4.11193704 5.6224451,2.64628739 C5.52066733,1.18063775 4.2995449,0.0451489602 2.83037373,0.0500155897 C1.36120257,0.0548822192 0.147629469,1.19843593 0.055563751,2.66472769 C-0.0365019666,4.13101944 1.02450076,5.41738951 2.52510626,5.65557279 L2.48152666,14.3711402 C1.02497044,14.5597349 -0.0356560051,15.845726 0.056409469,17.3115528 C0.148474943,18.7773795 1.3616723,19.9205566 2.83037933,19.9254217 C4.29908636,19.9302868 5.51983056,18.7951721 5.62160501,17.3299875 C5.72337946,15.8648028 4.67129589,14.5718133 3.17276982,14.3240307 L3.22276982,10.3123952 L10.9830502,10.3623952 L10.9396337,14.3723337 C9.4834498,14.5657533 8.4268796,15.8554618 8.52380058,17.3212343 C8.62072156,18.7870067 9.83790863,19.926368 11.306882,19.926368 C12.7758553,19.926368 13.9930424,18.7870067 14.0899634,17.3212343 C14.1868843,15.8554618 13.1303141,14.5657533 11.6307137,14.3227691 L11.6807137,10.3123952 L19.7648259,10.3123952 C19.9436732,10.3123952 20.0886577,10.1674108 20.0886577,9.98856344 L20.1322559,5.60598431 C21.5910187,5.41766076 22.6527359,4.12876319 22.5582126,2.66093483 C22.4636894,1.19310648 21.2454256,0.0510321461 19.7745569,0.0513671801 Z M9.16538667,2.84062966 L9.16538664,2.84057279 C9.16538664,1.65785758 10.1241668,0.699077462 11.306882,0.699077462 C12.4895972,0.699077462 13.4483773,1.65785758 13.4483773,2.84057279 C13.4483773,4.023288 12.4895972,4.98206812 11.3068251,4.98206808 C10.1246987,4.98072339 9.16673136,4.02275601 9.16538667,2.84062966 Z M0.697723119,2.84062966 L0.697723087,2.84057279 C0.697723087,1.65785758 1.6565032,0.699077462 2.83921841,0.699077462 C4.02193362,0.699077462 4.98071374,1.65785758 4.98071374,2.84057279 C4.98071374,4.023288 4.02193362,4.98206812 2.83916154,4.98206808 C1.65703519,4.98072339 0.699067809,4.02275601 0.697723119,2.84062966 Z M4.98066698,17.1364972 L4.98066701,17.1365541 C4.98066701,18.0027125 4.45890325,18.7835824 3.65867542,19.1150424 C2.85844758,19.4465024 1.93734851,19.2632763 1.3248889,18.650803 C0.712429292,18.0383298 0.529223852,17.1172266 0.860701716,16.3170062 C1.19217958,15.5167857 1.97306117,14.9950394 2.83927641,14.9950588 C4.02138407,14.9964299 4.97932234,15.9543895 4.98066698,17.1364972 Z M13.4483773,17.1364972 L13.4483773,17.1365541 C13.4483773,18.3192693 12.4895972,19.2780494 11.306882,19.2780494 C10.1241668,19.2780494 9.16538664,18.3192693 9.16538664,17.1365541 C9.16538664,15.9538389 10.1241668,14.9950588 11.3069388,14.9950588 C12.4890652,14.9964035 13.4470326,15.9543709 13.4483773,17.1364972 Z M19.7746002,4.98206809 L19.7745444,4.98206812 C18.5918354,4.98204169 17.6330793,4.02324987 17.6330969,2.84054089 C17.6331145,1.65783191 18.5918992,0.699068654 19.7746082,0.699077462 C20.9573172,0.69908627 21.9160876,1.65786381 21.9160875,2.84062855 C21.9147691,4.02278508 20.9567567,4.98077607 19.7746002,4.98206809 Z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">Auto</span>
                                    </div>
                                </div>
                                <p class="car-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Chicago, United States</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="car-item__price">
                                        <span class="_retail">500đ</span><span class="_unit">per day</span>
                                    </div>
                                    <a class="btn btn-primary car-item__view-detail" href="car/toyota-fortuner-2019.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="car-item car-item--grid" data-plugin="matchHeight">
                            <div class="car-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="car/honda-cr-v.html">
                                    <img src="storage/2021/01/30/c63-mec-design-00005-1586274200-1612021787-360x240.jpg" alt="Honda Civic">
                                </a>
                                <a class="car-item__type" href="car-search6807.html?car_type=12">
                                    Intermediate
                                </a>
                            </div>
                            <div class="car-item__details">
                                <span class="car-item__label">Featured</span>
                                <h3 class="car-item__title"><a href="car/honda-cr-v.html">Honda Civic</a></h3>
                                <div class="car-item__meta">
                                    <div class="i-meta" data-toggle="tooltip" title="Passenger">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                        <g transform="translate(-155.000000, -2016.000000)" stroke="#1A2B50" stroke-width="0.5">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(20.000000, 327.000000)">
                                                                            <g>
                                                                                <circle cx="10" cy="3.125" r="2.5"></circle>
                                                                                <path d="M13.125,11.875 L13.125,10 C13.125,8.27411016 11.7258898,6.875 10,6.875 C8.27411016,6.875 6.875,8.27411016 6.875,10 L6.875,11.875 L8.125,11.875 L8.75,16.875 L11.25,16.875 L11.875,11.875 L13.125,11.875 Z"></path>
                                                                                <circle cx="3.75" cy="5" r="1.875"></circle>
                                                                                <path d="M4.75,8.28916667 C3.79624791,7.9682092 2.74632008,8.12578507 1.92880562,8.71257878 C1.11129116,9.29937249 0.626070499,10.2436921 0.625,11.25 L0.625,11.875 L1.875,11.875 L2.5,15.625 L5,15.625 L5.31333333,13.745"></path>
                                                                                <circle cx="16.25" cy="5" r="1.875"></circle>
                                                                                <path d="M15.25,8.28916667 C16.2037521,7.9682092 17.2536799,8.12578507 18.0711944,8.71257878 C18.8887088,9.29937249 19.3739295,10.2436921 19.375,11.25 L19.375,11.875 L18.125,11.875 L17.5,15.625 L15,15.625 L14.6866667,13.745"></path>
                                                                                <path d="M19.375,17.5 C19.375,18.5358333 15.1775,19.375 10,19.375 C4.8225,19.375 0.625,18.5358333 0.625,17.5"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">4</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Doors">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 20 22" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-309.000000, -2015.000000)" fill="#1A2B50" fill-rule="nonzero" stroke="#FFFFFF">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(125.000000, 326.000000)">
                                                                            <g transform="translate(6.000000, 0.042132)">
                                                                                <g>
                                                                                    <g transform="translate(44.000000, 0.957868)">
                                                                                        <path d="M14.4049515,11.1208738 L14.4049515,8.15165049 L17.2397087,10.9865049 C17.3819417,11.1287379 17.5682524,11.1998058 17.7546602,11.1998058 C17.9409709,11.1998058 18.1273786,11.1287379 18.2696117,10.9865049 C18.5539806,10.7021359 18.5539806,10.241068 18.2696117,9.95679612 L14.4049515,6.09203883 L14.4049515,5.65330097 L14.4049515,2.16990291 C14.4049515,0.973398058 13.3596117,0 12.0748544,0 L6.49135922,0 C5.20660194,0 4.16126214,0.973398058 4.16126214,2.16990291 L4.16126214,5.65330097 L4.16126214,6.09203883 L0.296601942,9.95679612 C0.0122330097,10.241165 0.0122330097,10.702233 0.296601942,10.9865049 C0.438834951,11.1286408 0.625242718,11.1998058 0.811553398,11.1998058 C0.997864078,11.1998058 1.18427184,11.1287379 1.32650485,10.9865049 L4.16126214,8.15165049 L4.16126214,11.1209709 L0.296601942,14.9858252 C0.0122330097,15.2701942 0.0122330097,15.7312621 0.296699029,16.0156311 C0.438834951,16.1578641 0.625242718,16.228932 0.811553398,16.228932 C0.997864078,16.228932 1.18427184,16.1578641 1.32650485,16.0156311 L4.16126214,13.1806796 L4.16126214,15.6059223 L4.16126214,17.7557282 C4.16126214,18.952233 5.20660194,19.9256311 6.49135922,19.9256311 L12.0748544,19.9256311 C13.3596117,19.9256311 14.4049515,18.952233 14.4049515,17.7557282 L14.4049515,15.6058252 L14.4049515,13.1805825 L17.2397087,16.015534 C17.3819417,16.157767 17.5682524,16.228835 17.7546602,16.228835 C17.9409709,16.228835 18.1273786,16.157767 18.2695146,16.015534 C18.5539806,15.731165 18.5539806,15.2701942 18.2696117,14.9857282 L14.4049515,11.1208738 Z M12.9486408,11.4228155 L12.9486408,14.8776699 L5.61757282,14.8776699 L5.61757282,11.4228155 C5.61757282,11.4226214 5.61757282,11.4225243 5.61757282,11.4223301 L5.61757282,6.39417476 C5.61757282,6.3938835 5.61757282,6.39349515 5.61757282,6.39320388 L5.61757282,6.38145631 L12.9486408,6.38145631 L12.9486408,6.39320388 C12.9486408,6.39349515 12.9486408,6.3938835 12.9486408,6.39417476 L12.9486408,11.4223301 C12.9486408,11.4224272 12.9486408,11.4226214 12.9486408,11.4228155 Z M6.49135922,1.45631068 L12.0748544,1.45631068 C12.5485437,1.45631068 12.9486408,1.7831068 12.9486408,2.16990291 L12.9486408,4.92514563 L5.61757282,4.92514563 L5.61757282,2.16990291 C5.61757282,1.7831068 6.0176699,1.45631068 6.49135922,1.45631068 Z M12.0748544,18.4691262 L6.49135922,18.4691262 C6.0176699,18.4691262 5.61757282,18.1423301 5.61757282,17.755534 L5.61757282,16.3339806 L12.9486408,16.3339806 L12.9486408,17.7556311 C12.9486408,18.1424272 12.5485437,18.4691262 12.0748544,18.4691262 Z"></path>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">4</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Baggage">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 21 22" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-259.000000, -2015.000000)" fill="#1A2B50" fill-rule="nonzero" stroke="#FFFFFF" stroke-width="0.2">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(125.000000, 326.000000)">
                                                                            <g transform="translate(0.000000, 1.042132)">
                                                                                <path d="M19.4092827,14.3460535 L17.8059072,14.3460535 C18.1347914,13.9961395 18.3161389,13.5329174 18.3122363,13.0527202 L18.3122363,4.57107461 C18.3122363,3.503986 17.4504219,2.61609571 16.3833333,2.61609571 L12.9535865,2.61609571 L12.9535865,1.22748811 C12.9537382,0.899854993 12.8228435,0.585770667 12.5900649,0.355211302 C12.3572864,0.124651936 12.0419626,-0.00322816269 11.714346,6.19501863e-05 L8.03248945,6.19501863e-05 C7.70487282,-0.00322816269 7.38954907,0.124651936 7.1567705,0.355211302 C6.92399193,0.585770667 6.79309722,0.899854993 6.79324895,1.22748811 L6.79324895,2.61609571 L3.36350211,2.61609571 C2.2964135,2.61609571 1.43459916,3.503986 1.43459916,4.57107461 L1.43459916,13.0527202 C1.43069655,13.5329174 1.61204409,13.9961395 1.94092827,14.3460535 L0.337552743,14.3460535 C0.151139241,14.3460535 0,14.5142392 0,14.7004839 L0,16.7679944 C0,16.9544501 0.151139241,17.0886695 0.337552743,17.0886695 L2.03135021,17.0886695 C1.53379016,17.5396946 1.36504995,18.2503908 1.60676195,18.8769408 C1.84847395,19.5034908 2.45080526,19.9167212 3.12236287,19.9167212 C3.79392048,19.9167212 4.39625179,19.5034908 4.63796379,18.8769408 C4.87967579,18.2503908 4.71093558,17.5396946 4.21337553,17.0886695 L15.5334599,17.0886695 C15.0358999,17.5396946 14.8671597,18.2503908 15.1088717,18.8769408 C15.3505837,19.5034908 15.952915,19.9167212 16.6244726,19.9167212 C17.2960302,19.9167212 17.8983615,19.5034908 18.1400735,18.8769408 C18.3817855,18.2503908 18.2130453,17.5396946 17.7154852,17.0886695 L19.4092827,17.0886695 C19.5956962,17.0886695 19.7468354,16.9546189 19.7468354,16.7679944 L19.7468354,14.7004839 C19.7468354,14.5142392 19.5956962,14.3460535 19.4092827,14.3460535 Z M3.12236287,19.2574459 C2.5980419,19.2574459 2.17299578,18.8323998 2.17299578,18.3080788 C2.17299578,17.7837579 2.5980419,17.3587117 3.12236287,17.3587117 C3.64668383,17.3587117 4.07172996,17.7837579 4.07172996,18.3080788 C4.07112541,18.8321492 3.64643322,19.2568414 3.12236287,19.2574459 L3.12236287,19.2574459 Z M16.6244726,19.2574459 C16.1001516,19.2574459 15.6751055,18.8323998 15.6751055,18.3080788 C15.6751055,17.7837579 16.1001516,17.3587117 16.6244726,17.3587117 C17.1487935,17.3587117 17.5738397,17.7837579 17.5738397,18.3080788 C17.5732351,18.8321492 17.1485429,19.2568414 16.6244726,19.2574459 Z M14.8523207,3.29120119 L14.8523207,14.3038594 L4.89451477,14.3038594 L4.89451477,3.29120119 L14.8523207,3.29120119 Z M17.6371308,4.57107461 L17.6371308,13.0527202 C17.6378305,13.3852181 17.5058736,13.7042605 17.2705122,13.939123 C17.0351508,14.1739854 16.715829,14.3052648 16.3833333,14.3038594 L15.5274262,14.3038706 L15.5274262,3.29120119 L16.3833333,3.29120119 C17.0781857,3.29120119 17.6371308,3.87622229 17.6371308,4.57107461 Z M7.46835443,1.22748811 C7.46800611,1.07883593 7.52771647,0.936345366 7.63393609,0.832350243 C7.7401557,0.72835512 7.88387793,0.67167347 8.03248945,0.675167435 L11.714346,0.675167435 C11.8629575,0.67167347 12.0066797,0.72835512 12.1128994,0.832350243 C12.219119,0.936345366 12.2788293,1.07883593 12.278481,1.22748811 L12.2784825,2.61609571 L7.46835291,2.61609571 L7.46835443,1.22748811 Z M2.10970464,4.57107461 C2.10970464,3.87622229 2.66864979,3.29120119 3.36350211,3.29120119 L4.21940928,3.29120119 L4.21940928,14.3038706 L3.36350211,14.3038594 C3.03100643,14.3052648 2.71168464,14.1739854 2.47632322,13.939123 C2.2409618,13.7042605 2.10900499,13.3852181 2.10970464,13.0527202 L2.10970464,4.57107461 Z M19.07173,16.4135641 L0.675105485,16.4135641 L0.675105485,15.021159 L19.07173,15.021159 L19.07173,16.4135641 Z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">8</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Gear Shift">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 23 20" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-206.000000, -2016.000000)" fill="#1A2B50" fill-rule="nonzero" stroke="#FFFFFF" stroke-width="0.1">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(70.000000, 327.000000)">
                                                                            <g transform="translate(1.000000, 0.000000)">
                                                                                <path d="M19.7745569,0.0513671801 L19.7745392,0.0514139099 C18.3074667,0.0512294327 17.0910913,1.18771017 16.9917569,2.65141594 C16.8924225,4.11512172 17.9440975,5.40552369 19.4409941,5.65309615 L19.3909941,9.66473167 L11.6307137,9.61473167 L11.6741302,5.60479315 C13.1303141,5.41137358 14.1868843,4.12166512 14.0899634,2.65589263 C13.9930424,1.19012015 12.7758553,0.0507588812 11.306882,0.0507588812 C9.83790863,0.0507588812 8.62072156,1.19012015 8.52380058,2.65589263 C8.4268796,4.12166512 9.4834498,5.41137358 10.9830502,5.65435784 L10.9330502,9.66473167 L3.17276982,9.61473167 L3.216023,5.60355344 C4.67176554,5.40530795 5.72422287,4.11193704 5.6224451,2.64628739 C5.52066733,1.18063775 4.2995449,0.0451489602 2.83037373,0.0500155897 C1.36120257,0.0548822192 0.147629469,1.19843593 0.055563751,2.66472769 C-0.0365019666,4.13101944 1.02450076,5.41738951 2.52510626,5.65557279 L2.48152666,14.3711402 C1.02497044,14.5597349 -0.0356560051,15.845726 0.056409469,17.3115528 C0.148474943,18.7773795 1.3616723,19.9205566 2.83037933,19.9254217 C4.29908636,19.9302868 5.51983056,18.7951721 5.62160501,17.3299875 C5.72337946,15.8648028 4.67129589,14.5718133 3.17276982,14.3240307 L3.22276982,10.3123952 L10.9830502,10.3623952 L10.9396337,14.3723337 C9.4834498,14.5657533 8.4268796,15.8554618 8.52380058,17.3212343 C8.62072156,18.7870067 9.83790863,19.926368 11.306882,19.926368 C12.7758553,19.926368 13.9930424,18.7870067 14.0899634,17.3212343 C14.1868843,15.8554618 13.1303141,14.5657533 11.6307137,14.3227691 L11.6807137,10.3123952 L19.7648259,10.3123952 C19.9436732,10.3123952 20.0886577,10.1674108 20.0886577,9.98856344 L20.1322559,5.60598431 C21.5910187,5.41766076 22.6527359,4.12876319 22.5582126,2.66093483 C22.4636894,1.19310648 21.2454256,0.0510321461 19.7745569,0.0513671801 Z M9.16538667,2.84062966 L9.16538664,2.84057279 C9.16538664,1.65785758 10.1241668,0.699077462 11.306882,0.699077462 C12.4895972,0.699077462 13.4483773,1.65785758 13.4483773,2.84057279 C13.4483773,4.023288 12.4895972,4.98206812 11.3068251,4.98206808 C10.1246987,4.98072339 9.16673136,4.02275601 9.16538667,2.84062966 Z M0.697723119,2.84062966 L0.697723087,2.84057279 C0.697723087,1.65785758 1.6565032,0.699077462 2.83921841,0.699077462 C4.02193362,0.699077462 4.98071374,1.65785758 4.98071374,2.84057279 C4.98071374,4.023288 4.02193362,4.98206812 2.83916154,4.98206808 C1.65703519,4.98072339 0.699067809,4.02275601 0.697723119,2.84062966 Z M4.98066698,17.1364972 L4.98066701,17.1365541 C4.98066701,18.0027125 4.45890325,18.7835824 3.65867542,19.1150424 C2.85844758,19.4465024 1.93734851,19.2632763 1.3248889,18.650803 C0.712429292,18.0383298 0.529223852,17.1172266 0.860701716,16.3170062 C1.19217958,15.5167857 1.97306117,14.9950394 2.83927641,14.9950588 C4.02138407,14.9964299 4.97932234,15.9543895 4.98066698,17.1364972 Z M13.4483773,17.1364972 L13.4483773,17.1365541 C13.4483773,18.3192693 12.4895972,19.2780494 11.306882,19.2780494 C10.1241668,19.2780494 9.16538664,18.3192693 9.16538664,17.1365541 C9.16538664,15.9538389 10.1241668,14.9950588 11.3069388,14.9950588 C12.4890652,14.9964035 13.4470326,15.9543709 13.4483773,17.1364972 Z M19.7746002,4.98206809 L19.7745444,4.98206812 C18.5918354,4.98204169 17.6330793,4.02324987 17.6330969,2.84054089 C17.6331145,1.65783191 18.5918992,0.699068654 19.7746082,0.699077462 C20.9573172,0.69908627 21.9160876,1.65786381 21.9160875,2.84062855 C21.9147691,4.02278508 20.9567567,4.98077607 19.7746002,4.98206809 Z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">Auto</span>
                                    </div>
                                </div>
                                <p class="car-item__location"><i class="fas fa-map-marker-alt mr-2"></i>NewYork, US</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="car-item__price">
                                        <span class="_retail">300đ</span><span class="_unit">per day</span>
                                    </div>
                                    <a class="btn btn-primary car-item__view-detail" href="car/honda-cr-v.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="car-item car-item--grid" data-plugin="matchHeight">
                            <div class="car-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="car/nissan-gt-r.html">
                                    <img src="storage/2021/01/30/99-nissan-gt-r-nismo-2020-hero-front-0-1586273089-1612021584-360x240.jpg" alt="Land Rover Evoque">
                                </a>
                                <a class="car-item__type" href="car-searchee18.html?car_type=10">
                                    Luxury
                                </a>
                            </div>
                            <div class="car-item__details">
                                <span class="car-item__label">Featured</span>
                                <h3 class="car-item__title"><a href="car/nissan-gt-r.html">Land Rover Evoque</a></h3>
                                <div class="car-item__meta">
                                    <div class="i-meta" data-toggle="tooltip" title="Passenger">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                        <g transform="translate(-155.000000, -2016.000000)" stroke="#1A2B50" stroke-width="0.5">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(20.000000, 327.000000)">
                                                                            <g>
                                                                                <circle cx="10" cy="3.125" r="2.5"></circle>
                                                                                <path d="M13.125,11.875 L13.125,10 C13.125,8.27411016 11.7258898,6.875 10,6.875 C8.27411016,6.875 6.875,8.27411016 6.875,10 L6.875,11.875 L8.125,11.875 L8.75,16.875 L11.25,16.875 L11.875,11.875 L13.125,11.875 Z"></path>
                                                                                <circle cx="3.75" cy="5" r="1.875"></circle>
                                                                                <path d="M4.75,8.28916667 C3.79624791,7.9682092 2.74632008,8.12578507 1.92880562,8.71257878 C1.11129116,9.29937249 0.626070499,10.2436921 0.625,11.25 L0.625,11.875 L1.875,11.875 L2.5,15.625 L5,15.625 L5.31333333,13.745"></path>
                                                                                <circle cx="16.25" cy="5" r="1.875"></circle>
                                                                                <path d="M15.25,8.28916667 C16.2037521,7.9682092 17.2536799,8.12578507 18.0711944,8.71257878 C18.8887088,9.29937249 19.3739295,10.2436921 19.375,11.25 L19.375,11.875 L18.125,11.875 L17.5,15.625 L15,15.625 L14.6866667,13.745"></path>
                                                                                <path d="M19.375,17.5 C19.375,18.5358333 15.1775,19.375 10,19.375 C4.8225,19.375 0.625,18.5358333 0.625,17.5"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">4</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Doors">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 20 22" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-309.000000, -2015.000000)" fill="#1A2B50" fill-rule="nonzero" stroke="#FFFFFF">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(125.000000, 326.000000)">
                                                                            <g transform="translate(6.000000, 0.042132)">
                                                                                <g>
                                                                                    <g transform="translate(44.000000, 0.957868)">
                                                                                        <path d="M14.4049515,11.1208738 L14.4049515,8.15165049 L17.2397087,10.9865049 C17.3819417,11.1287379 17.5682524,11.1998058 17.7546602,11.1998058 C17.9409709,11.1998058 18.1273786,11.1287379 18.2696117,10.9865049 C18.5539806,10.7021359 18.5539806,10.241068 18.2696117,9.95679612 L14.4049515,6.09203883 L14.4049515,5.65330097 L14.4049515,2.16990291 C14.4049515,0.973398058 13.3596117,0 12.0748544,0 L6.49135922,0 C5.20660194,0 4.16126214,0.973398058 4.16126214,2.16990291 L4.16126214,5.65330097 L4.16126214,6.09203883 L0.296601942,9.95679612 C0.0122330097,10.241165 0.0122330097,10.702233 0.296601942,10.9865049 C0.438834951,11.1286408 0.625242718,11.1998058 0.811553398,11.1998058 C0.997864078,11.1998058 1.18427184,11.1287379 1.32650485,10.9865049 L4.16126214,8.15165049 L4.16126214,11.1209709 L0.296601942,14.9858252 C0.0122330097,15.2701942 0.0122330097,15.7312621 0.296699029,16.0156311 C0.438834951,16.1578641 0.625242718,16.228932 0.811553398,16.228932 C0.997864078,16.228932 1.18427184,16.1578641 1.32650485,16.0156311 L4.16126214,13.1806796 L4.16126214,15.6059223 L4.16126214,17.7557282 C4.16126214,18.952233 5.20660194,19.9256311 6.49135922,19.9256311 L12.0748544,19.9256311 C13.3596117,19.9256311 14.4049515,18.952233 14.4049515,17.7557282 L14.4049515,15.6058252 L14.4049515,13.1805825 L17.2397087,16.015534 C17.3819417,16.157767 17.5682524,16.228835 17.7546602,16.228835 C17.9409709,16.228835 18.1273786,16.157767 18.2695146,16.015534 C18.5539806,15.731165 18.5539806,15.2701942 18.2696117,14.9857282 L14.4049515,11.1208738 Z M12.9486408,11.4228155 L12.9486408,14.8776699 L5.61757282,14.8776699 L5.61757282,11.4228155 C5.61757282,11.4226214 5.61757282,11.4225243 5.61757282,11.4223301 L5.61757282,6.39417476 C5.61757282,6.3938835 5.61757282,6.39349515 5.61757282,6.39320388 L5.61757282,6.38145631 L12.9486408,6.38145631 L12.9486408,6.39320388 C12.9486408,6.39349515 12.9486408,6.3938835 12.9486408,6.39417476 L12.9486408,11.4223301 C12.9486408,11.4224272 12.9486408,11.4226214 12.9486408,11.4228155 Z M6.49135922,1.45631068 L12.0748544,1.45631068 C12.5485437,1.45631068 12.9486408,1.7831068 12.9486408,2.16990291 L12.9486408,4.92514563 L5.61757282,4.92514563 L5.61757282,2.16990291 C5.61757282,1.7831068 6.0176699,1.45631068 6.49135922,1.45631068 Z M12.0748544,18.4691262 L6.49135922,18.4691262 C6.0176699,18.4691262 5.61757282,18.1423301 5.61757282,17.755534 L5.61757282,16.3339806 L12.9486408,16.3339806 L12.9486408,17.7556311 C12.9486408,18.1424272 12.5485437,18.4691262 12.0748544,18.4691262 Z"></path>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">4</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Baggage">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 21 22" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-259.000000, -2015.000000)" fill="#1A2B50" fill-rule="nonzero" stroke="#FFFFFF" stroke-width="0.2">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(125.000000, 326.000000)">
                                                                            <g transform="translate(0.000000, 1.042132)">
                                                                                <path d="M19.4092827,14.3460535 L17.8059072,14.3460535 C18.1347914,13.9961395 18.3161389,13.5329174 18.3122363,13.0527202 L18.3122363,4.57107461 C18.3122363,3.503986 17.4504219,2.61609571 16.3833333,2.61609571 L12.9535865,2.61609571 L12.9535865,1.22748811 C12.9537382,0.899854993 12.8228435,0.585770667 12.5900649,0.355211302 C12.3572864,0.124651936 12.0419626,-0.00322816269 11.714346,6.19501863e-05 L8.03248945,6.19501863e-05 C7.70487282,-0.00322816269 7.38954907,0.124651936 7.1567705,0.355211302 C6.92399193,0.585770667 6.79309722,0.899854993 6.79324895,1.22748811 L6.79324895,2.61609571 L3.36350211,2.61609571 C2.2964135,2.61609571 1.43459916,3.503986 1.43459916,4.57107461 L1.43459916,13.0527202 C1.43069655,13.5329174 1.61204409,13.9961395 1.94092827,14.3460535 L0.337552743,14.3460535 C0.151139241,14.3460535 0,14.5142392 0,14.7004839 L0,16.7679944 C0,16.9544501 0.151139241,17.0886695 0.337552743,17.0886695 L2.03135021,17.0886695 C1.53379016,17.5396946 1.36504995,18.2503908 1.60676195,18.8769408 C1.84847395,19.5034908 2.45080526,19.9167212 3.12236287,19.9167212 C3.79392048,19.9167212 4.39625179,19.5034908 4.63796379,18.8769408 C4.87967579,18.2503908 4.71093558,17.5396946 4.21337553,17.0886695 L15.5334599,17.0886695 C15.0358999,17.5396946 14.8671597,18.2503908 15.1088717,18.8769408 C15.3505837,19.5034908 15.952915,19.9167212 16.6244726,19.9167212 C17.2960302,19.9167212 17.8983615,19.5034908 18.1400735,18.8769408 C18.3817855,18.2503908 18.2130453,17.5396946 17.7154852,17.0886695 L19.4092827,17.0886695 C19.5956962,17.0886695 19.7468354,16.9546189 19.7468354,16.7679944 L19.7468354,14.7004839 C19.7468354,14.5142392 19.5956962,14.3460535 19.4092827,14.3460535 Z M3.12236287,19.2574459 C2.5980419,19.2574459 2.17299578,18.8323998 2.17299578,18.3080788 C2.17299578,17.7837579 2.5980419,17.3587117 3.12236287,17.3587117 C3.64668383,17.3587117 4.07172996,17.7837579 4.07172996,18.3080788 C4.07112541,18.8321492 3.64643322,19.2568414 3.12236287,19.2574459 L3.12236287,19.2574459 Z M16.6244726,19.2574459 C16.1001516,19.2574459 15.6751055,18.8323998 15.6751055,18.3080788 C15.6751055,17.7837579 16.1001516,17.3587117 16.6244726,17.3587117 C17.1487935,17.3587117 17.5738397,17.7837579 17.5738397,18.3080788 C17.5732351,18.8321492 17.1485429,19.2568414 16.6244726,19.2574459 Z M14.8523207,3.29120119 L14.8523207,14.3038594 L4.89451477,14.3038594 L4.89451477,3.29120119 L14.8523207,3.29120119 Z M17.6371308,4.57107461 L17.6371308,13.0527202 C17.6378305,13.3852181 17.5058736,13.7042605 17.2705122,13.939123 C17.0351508,14.1739854 16.715829,14.3052648 16.3833333,14.3038594 L15.5274262,14.3038706 L15.5274262,3.29120119 L16.3833333,3.29120119 C17.0781857,3.29120119 17.6371308,3.87622229 17.6371308,4.57107461 Z M7.46835443,1.22748811 C7.46800611,1.07883593 7.52771647,0.936345366 7.63393609,0.832350243 C7.7401557,0.72835512 7.88387793,0.67167347 8.03248945,0.675167435 L11.714346,0.675167435 C11.8629575,0.67167347 12.0066797,0.72835512 12.1128994,0.832350243 C12.219119,0.936345366 12.2788293,1.07883593 12.278481,1.22748811 L12.2784825,2.61609571 L7.46835291,2.61609571 L7.46835443,1.22748811 Z M2.10970464,4.57107461 C2.10970464,3.87622229 2.66864979,3.29120119 3.36350211,3.29120119 L4.21940928,3.29120119 L4.21940928,14.3038706 L3.36350211,14.3038594 C3.03100643,14.3052648 2.71168464,14.1739854 2.47632322,13.939123 C2.2409618,13.7042605 2.10900499,13.3852181 2.10970464,13.0527202 L2.10970464,4.57107461 Z M19.07173,16.4135641 L0.675105485,16.4135641 L0.675105485,15.021159 L19.07173,15.021159 L19.07173,16.4135641 Z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">8</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Gear Shift">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 23 20" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-206.000000, -2016.000000)" fill="#1A2B50" fill-rule="nonzero" stroke="#FFFFFF" stroke-width="0.1">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(70.000000, 327.000000)">
                                                                            <g transform="translate(1.000000, 0.000000)">
                                                                                <path d="M19.7745569,0.0513671801 L19.7745392,0.0514139099 C18.3074667,0.0512294327 17.0910913,1.18771017 16.9917569,2.65141594 C16.8924225,4.11512172 17.9440975,5.40552369 19.4409941,5.65309615 L19.3909941,9.66473167 L11.6307137,9.61473167 L11.6741302,5.60479315 C13.1303141,5.41137358 14.1868843,4.12166512 14.0899634,2.65589263 C13.9930424,1.19012015 12.7758553,0.0507588812 11.306882,0.0507588812 C9.83790863,0.0507588812 8.62072156,1.19012015 8.52380058,2.65589263 C8.4268796,4.12166512 9.4834498,5.41137358 10.9830502,5.65435784 L10.9330502,9.66473167 L3.17276982,9.61473167 L3.216023,5.60355344 C4.67176554,5.40530795 5.72422287,4.11193704 5.6224451,2.64628739 C5.52066733,1.18063775 4.2995449,0.0451489602 2.83037373,0.0500155897 C1.36120257,0.0548822192 0.147629469,1.19843593 0.055563751,2.66472769 C-0.0365019666,4.13101944 1.02450076,5.41738951 2.52510626,5.65557279 L2.48152666,14.3711402 C1.02497044,14.5597349 -0.0356560051,15.845726 0.056409469,17.3115528 C0.148474943,18.7773795 1.3616723,19.9205566 2.83037933,19.9254217 C4.29908636,19.9302868 5.51983056,18.7951721 5.62160501,17.3299875 C5.72337946,15.8648028 4.67129589,14.5718133 3.17276982,14.3240307 L3.22276982,10.3123952 L10.9830502,10.3623952 L10.9396337,14.3723337 C9.4834498,14.5657533 8.4268796,15.8554618 8.52380058,17.3212343 C8.62072156,18.7870067 9.83790863,19.926368 11.306882,19.926368 C12.7758553,19.926368 13.9930424,18.7870067 14.0899634,17.3212343 C14.1868843,15.8554618 13.1303141,14.5657533 11.6307137,14.3227691 L11.6807137,10.3123952 L19.7648259,10.3123952 C19.9436732,10.3123952 20.0886577,10.1674108 20.0886577,9.98856344 L20.1322559,5.60598431 C21.5910187,5.41766076 22.6527359,4.12876319 22.5582126,2.66093483 C22.4636894,1.19310648 21.2454256,0.0510321461 19.7745569,0.0513671801 Z M9.16538667,2.84062966 L9.16538664,2.84057279 C9.16538664,1.65785758 10.1241668,0.699077462 11.306882,0.699077462 C12.4895972,0.699077462 13.4483773,1.65785758 13.4483773,2.84057279 C13.4483773,4.023288 12.4895972,4.98206812 11.3068251,4.98206808 C10.1246987,4.98072339 9.16673136,4.02275601 9.16538667,2.84062966 Z M0.697723119,2.84062966 L0.697723087,2.84057279 C0.697723087,1.65785758 1.6565032,0.699077462 2.83921841,0.699077462 C4.02193362,0.699077462 4.98071374,1.65785758 4.98071374,2.84057279 C4.98071374,4.023288 4.02193362,4.98206812 2.83916154,4.98206808 C1.65703519,4.98072339 0.699067809,4.02275601 0.697723119,2.84062966 Z M4.98066698,17.1364972 L4.98066701,17.1365541 C4.98066701,18.0027125 4.45890325,18.7835824 3.65867542,19.1150424 C2.85844758,19.4465024 1.93734851,19.2632763 1.3248889,18.650803 C0.712429292,18.0383298 0.529223852,17.1172266 0.860701716,16.3170062 C1.19217958,15.5167857 1.97306117,14.9950394 2.83927641,14.9950588 C4.02138407,14.9964299 4.97932234,15.9543895 4.98066698,17.1364972 Z M13.4483773,17.1364972 L13.4483773,17.1365541 C13.4483773,18.3192693 12.4895972,19.2780494 11.306882,19.2780494 C10.1241668,19.2780494 9.16538664,18.3192693 9.16538664,17.1365541 C9.16538664,15.9538389 10.1241668,14.9950588 11.3069388,14.9950588 C12.4890652,14.9964035 13.4470326,15.9543709 13.4483773,17.1364972 Z M19.7746002,4.98206809 L19.7745444,4.98206812 C18.5918354,4.98204169 17.6330793,4.02324987 17.6330969,2.84054089 C17.6331145,1.65783191 18.5918992,0.699068654 19.7746082,0.699077462 C20.9573172,0.69908627 21.9160876,1.65786381 21.9160875,2.84062855 C21.9147691,4.02278508 20.9567567,4.98077607 19.7746002,4.98206809 Z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">Auto</span>
                                    </div>
                                </div>
                                <p class="car-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Chicago, United States</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="car-item__price">
                                        <span class="_retail">600đ</span><span class="_unit">per day</span>
                                    </div>
                                    <a class="btn btn-primary car-item__view-detail" href="car/nissan-gt-r.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="apartment-type">
            <div class="container py-40">
                <h2 class="section-title mb-20">Apartment Types</h2>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="apartment-type__item" data-plugin="matchHeight">
                            <div class="apartment-type__thumbnail">
                                <a href="apartment-search89fe.html?apartment_type=30">
                                    <img class="_image-apartment" src="storage/2021/01/30/francesca-tosolini-kbxbzm78zpm-unsplash-1578389475-1612022578-250x150.jpg" alt="Apartment">
                                </a>
                            </div>
                            <div class="apartment-type__info">
                                <h3 class="apartment-type__name"><a href="apartment-search89fe.html?apartment_type=30">Apartment</a></h3>
                                <div class="apartment-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="apartment-type__item" data-plugin="matchHeight">
                            <div class="apartment-type__thumbnail">
                                <a href="apartment-search8fc1.html?apartment_type=29">
                                    <img class="_image-apartment" src="storage/2021/01/30/house-1578396998-1612022580-250x150.jpg" alt="Bungalow">
                                </a>
                            </div>
                            <div class="apartment-type__info">
                                <h3 class="apartment-type__name"><a href="apartment-search8fc1.html?apartment_type=29">Bungalow</a></h3>
                                <div class="apartment-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="apartment-type__item" data-plugin="matchHeight">
                            <div class="apartment-type__thumbnail">
                                <a href="apartment-searchd344.html?apartment_type=28">
                                    <img class="_image-apartment" src="storage/2021/01/30/cabin-1578397049-1612022577-250x150.jpg" alt="Cabin">
                                </a>
                            </div>
                            <div class="apartment-type__info">
                                <h3 class="apartment-type__name"><a href="apartment-searchd344.html?apartment_type=28">Cabin</a></h3>
                                <div class="apartment-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="apartment-type__item" data-plugin="matchHeight">
                            <div class="apartment-type__thumbnail">
                                <a href="apartment-searchd857.html?apartment_type=27">
                                    <img class="_image-apartment" src="storage/2021/01/30/guesthouse-1578397030-1612022578-250x150.jpg" alt="Guesthouse">
                                </a>
                            </div>
                            <div class="apartment-type__info">
                                <h3 class="apartment-type__name"><a href="apartment-searchd857.html?apartment_type=27">Guesthouse</a></h3>
                                <div class="apartment-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="apartment-type__item" data-plugin="matchHeight">
                            <div class="apartment-type__thumbnail">
                                <a href="apartment-search89c6.html?apartment_type=26">
                                    <img class="_image-apartment" src="storage/2021/01/30/hostel-1578397015-1612022579-250x150.jpg" alt="Hostel">
                                </a>
                            </div>
                            <div class="apartment-type__info">
                                <h3 class="apartment-type__name"><a href="apartment-search89c6.html?apartment_type=26">Hostel</a></h3>
                                <div class="apartment-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="apartment-type__item" data-plugin="matchHeight">
                            <div class="apartment-type__thumbnail">
                                <a href="apartment-search7643.html?apartment_type=25">
                                    <img class="_image-apartment" src="storage/2021/01/30/bungalow-1578397135-1612022576-250x150.jpg" alt="House">
                                </a>
                            </div>
                            <div class="apartment-type__info">
                                <h3 class="apartment-type__name"><a href="apartment-search7643.html?apartment_type=25">House</a></h3>
                                <div class="apartment-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="list-apartment list-apartment--grid py-40 bg-gray-100">
            <div class="container">
                <h2 class="section-title mb-20">List Of Apartments</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="apartment-item apartment-item--grid" data-plugin="matchHeight">
                            <div class="apartment-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="apartment/de-walden-street.html">
                                    <img src="storage/2021/01/31/2017-03-31-15-15-22-828242-wal543-take-01-69-1612103807-360x240.jpg" alt="De Walden Street">
                                </a>
                                <a class="apartment-item__type" href="apartment-search89c6.html?apartment_type=26">
                                    Hostel
                                </a>
                            </div>
                            <div class="apartment-item__details">
                                <span class="apartment-item__label">Featured</span>
                                <h3 class="apartment-item__title"><a href="apartment/de-walden-street.html">De Walden Street</a></h3>
                                <div class="apartment-item__meta">
                                    <div class="i-meta" data-toggle="tooltip" title="Guests">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                        <g transform="translate(-155.000000, -2016.000000)" stroke="#1A2B50" stroke-width="0.5">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(20.000000, 327.000000)">
                                                                            <g>
                                                                                <circle cx="10" cy="3.125" r="2.5"></circle>
                                                                                <path d="M13.125,11.875 L13.125,10 C13.125,8.27411016 11.7258898,6.875 10,6.875 C8.27411016,6.875 6.875,8.27411016 6.875,10 L6.875,11.875 L8.125,11.875 L8.75,16.875 L11.25,16.875 L11.875,11.875 L13.125,11.875 Z"></path>
                                                                                <circle cx="3.75" cy="5" r="1.875"></circle>
                                                                                <path d="M4.75,8.28916667 C3.79624791,7.9682092 2.74632008,8.12578507 1.92880562,8.71257878 C1.11129116,9.29937249 0.626070499,10.2436921 0.625,11.25 L0.625,11.875 L1.875,11.875 L2.5,15.625 L5,15.625 L5.31333333,13.745"></path>
                                                                                <circle cx="16.25" cy="5" r="1.875"></circle>
                                                                                <path d="M15.25,8.28916667 C16.2037521,7.9682092 17.2536799,8.12578507 18.0711944,8.71257878 C18.8887088,9.29937249 19.3739295,10.2436921 19.375,11.25 L19.375,11.875 L18.125,11.875 L17.5,15.625 L15,15.625 L14.6866667,13.745"></path>
                                                                                <path d="M19.375,17.5 C19.375,18.5358333 15.1775,19.375 10,19.375 C4.8225,19.375 0.625,18.5358333 0.625,17.5"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">9</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Bedroom">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 512 512">
                                                    <path d="M496,344h-8V280a32.042,32.042,0,0,0-32-32V112a32.042,32.042,0,0,0-32-32H88a32.042,32.042,0,0,0-32,32V248a32.042,32.042,0,0,0-32,32v64H16a8,8,0,0,0-8,8v32a8,8,0,0,0,8,8h8v32a8,8,0,0,0,8,8H56a7.99,7.99,0,0,0,7.84-6.43L70.56,392H441.44l6.72,33.57A7.99,7.99,0,0,0,456,432h24a8,8,0,0,0,8-8V392h8a8,8,0,0,0,8-8V352A8,8,0,0,0,496,344ZM72,112A16.021,16.021,0,0,1,88,96H424a16.021,16.021,0,0,1,16,16V248H424V216a32.042,32.042,0,0,0-32-32H296a32.042,32.042,0,0,0-32,32v32H248V216a32.042,32.042,0,0,0-32-32H120a32.042,32.042,0,0,0-32,32v32H72ZM408,216v32H280V216a16.021,16.021,0,0,1,16-16h96A16.021,16.021,0,0,1,408,216Zm-176,0v32H104V216a16.021,16.021,0,0,1,16-16h96A16.021,16.021,0,0,1,232,216ZM40,280a16.021,16.021,0,0,1,16-16H456a16.021,16.021,0,0,1,16,16v64H40Zm9.44,136H40V392H54.24ZM472,416h-9.44l-4.8-24H472Zm16-40H24V360H488Z" />
                                                </svg></i></span>
                                        <span class="i-meta__figure">3</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Bathroom">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 512 512">
                                                    <g fill="#000000">
                                                        <path d="M496,256H96V240a8,8,0,0,0-8-8H80V208H96v8a8,8,0,0,0,16,0V184a8,8,0,0,0-16,0v8H80V96a32.03,32.03,0,0,1,32-32h32a32.03,32.03,0,0,1,32,32v.68A48.069,48.069,0,0,0,136,144a8,8,0,0,0,8,8h80a8,8,0,0,0,8-8,48.069,48.069,0,0,0-40-47.32V96a48.051,48.051,0,0,0-48-48H112A48.051,48.051,0,0,0,64,96V232H56a8,8,0,0,0-8,8v16H16a8,8,0,0,0-8,8v24a8,8,0,0,0,8,8H40v96a48.069,48.069,0,0,0,40,47.32V456a8,8,0,0,0,16,0V440H416v16a8,8,0,0,0,16,0V439.32A48.069,48.069,0,0,0,472,392V296h24a8,8,0,0,0,8-8V264A8,8,0,0,0,496,256ZM184,112a32.058,32.058,0,0,1,30.99,24H153.01A32.058,32.058,0,0,1,184,112ZM64,248H80v8H64ZM456,392a32.03,32.03,0,0,1-32,32H88a32.03,32.03,0,0,1-32-32V296H456Zm32-112H24v-8H488Z" />
                                                        <path d="M80,328h64a8,8,0,0,0,0-16H80a8,8,0,0,0,0,16Z" />
                                                        <path d="M168,328h8a8,8,0,0,0,0-16h-8a8,8,0,0,0,0,16Z" />
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">2</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Size">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 93.849 93.85" style="enable-background:new 0 0 93.849 93.85;" xml:space="preserve">
                                                    <g fill="#000000">
                                                        <g fill="#000000">
                                                            <polygon points="13.36,7.623 62.939,7.623 62.939,10.836 67.347,10.836 67.347,0 62.939,0 62.939,3.215 13.36,3.215 13.36,0 
			8.949,0 8.949,10.836 13.36,10.836 		" />
                                                            <polygon points="85.157,21.524 85.157,17.115 74.319,17.115 74.319,21.524 77.534,21.524 77.534,89.441 74.319,89.441 
			74.319,93.85 85.157,93.85 85.157,89.441 81.943,89.441 81.943,21.524 		" />
                                                            <path d="M8.693,93.85h58.912V17.115H8.693V93.85z M13.47,21.893h49.358v67.182H13.47V21.893z" />
                                                        </g>
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">154.00 m2</span>
                                    </div>
                                </div>
                                <p class="apartment-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Chicago, United States</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="apartment-item__price">
                                        <span class="_retail">99đ</span><span class="_unit">per night</span>
                                    </div>
                                    <a class="btn btn-primary apartment-item__view-detail" href="apartment/de-walden-street.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="apartment-item apartment-item--grid" data-plugin="matchHeight">
                            <div class="apartment-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="apartment/via-della-scala.html">
                                    <img src="storage/2021/01/31/sca999-take-01-6-1612103699-360x240.jpg" alt="Via della Scala">
                                </a>
                                <a class="apartment-item__type" href="apartment-search7643.html?apartment_type=25">
                                    House
                                </a>
                            </div>
                            <div class="apartment-item__details">
                                <span class="apartment-item__label">Featured</span>
                                <h3 class="apartment-item__title"><a href="apartment/via-della-scala.html">Via della Scala</a></h3>
                                <div class="apartment-item__meta">
                                    <div class="i-meta" data-toggle="tooltip" title="Guests">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                        <g transform="translate(-155.000000, -2016.000000)" stroke="#1A2B50" stroke-width="0.5">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(20.000000, 327.000000)">
                                                                            <g>
                                                                                <circle cx="10" cy="3.125" r="2.5"></circle>
                                                                                <path d="M13.125,11.875 L13.125,10 C13.125,8.27411016 11.7258898,6.875 10,6.875 C8.27411016,6.875 6.875,8.27411016 6.875,10 L6.875,11.875 L8.125,11.875 L8.75,16.875 L11.25,16.875 L11.875,11.875 L13.125,11.875 Z"></path>
                                                                                <circle cx="3.75" cy="5" r="1.875"></circle>
                                                                                <path d="M4.75,8.28916667 C3.79624791,7.9682092 2.74632008,8.12578507 1.92880562,8.71257878 C1.11129116,9.29937249 0.626070499,10.2436921 0.625,11.25 L0.625,11.875 L1.875,11.875 L2.5,15.625 L5,15.625 L5.31333333,13.745"></path>
                                                                                <circle cx="16.25" cy="5" r="1.875"></circle>
                                                                                <path d="M15.25,8.28916667 C16.2037521,7.9682092 17.2536799,8.12578507 18.0711944,8.71257878 C18.8887088,9.29937249 19.3739295,10.2436921 19.375,11.25 L19.375,11.875 L18.125,11.875 L17.5,15.625 L15,15.625 L14.6866667,13.745"></path>
                                                                                <path d="M19.375,17.5 C19.375,18.5358333 15.1775,19.375 10,19.375 C4.8225,19.375 0.625,18.5358333 0.625,17.5"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">9</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Bedroom">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 512 512">
                                                    <path d="M496,344h-8V280a32.042,32.042,0,0,0-32-32V112a32.042,32.042,0,0,0-32-32H88a32.042,32.042,0,0,0-32,32V248a32.042,32.042,0,0,0-32,32v64H16a8,8,0,0,0-8,8v32a8,8,0,0,0,8,8h8v32a8,8,0,0,0,8,8H56a7.99,7.99,0,0,0,7.84-6.43L70.56,392H441.44l6.72,33.57A7.99,7.99,0,0,0,456,432h24a8,8,0,0,0,8-8V392h8a8,8,0,0,0,8-8V352A8,8,0,0,0,496,344ZM72,112A16.021,16.021,0,0,1,88,96H424a16.021,16.021,0,0,1,16,16V248H424V216a32.042,32.042,0,0,0-32-32H296a32.042,32.042,0,0,0-32,32v32H248V216a32.042,32.042,0,0,0-32-32H120a32.042,32.042,0,0,0-32,32v32H72ZM408,216v32H280V216a16.021,16.021,0,0,1,16-16h96A16.021,16.021,0,0,1,408,216Zm-176,0v32H104V216a16.021,16.021,0,0,1,16-16h96A16.021,16.021,0,0,1,232,216ZM40,280a16.021,16.021,0,0,1,16-16H456a16.021,16.021,0,0,1,16,16v64H40Zm9.44,136H40V392H54.24ZM472,416h-9.44l-4.8-24H472Zm16-40H24V360H488Z" />
                                                </svg></i></span>
                                        <span class="i-meta__figure">3</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Bathroom">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 512 512">
                                                    <g fill="#000000">
                                                        <path d="M496,256H96V240a8,8,0,0,0-8-8H80V208H96v8a8,8,0,0,0,16,0V184a8,8,0,0,0-16,0v8H80V96a32.03,32.03,0,0,1,32-32h32a32.03,32.03,0,0,1,32,32v.68A48.069,48.069,0,0,0,136,144a8,8,0,0,0,8,8h80a8,8,0,0,0,8-8,48.069,48.069,0,0,0-40-47.32V96a48.051,48.051,0,0,0-48-48H112A48.051,48.051,0,0,0,64,96V232H56a8,8,0,0,0-8,8v16H16a8,8,0,0,0-8,8v24a8,8,0,0,0,8,8H40v96a48.069,48.069,0,0,0,40,47.32V456a8,8,0,0,0,16,0V440H416v16a8,8,0,0,0,16,0V439.32A48.069,48.069,0,0,0,472,392V296h24a8,8,0,0,0,8-8V264A8,8,0,0,0,496,256ZM184,112a32.058,32.058,0,0,1,30.99,24H153.01A32.058,32.058,0,0,1,184,112ZM64,248H80v8H64ZM456,392a32.03,32.03,0,0,1-32,32H88a32.03,32.03,0,0,1-32-32V296H456Zm32-112H24v-8H488Z" />
                                                        <path d="M80,328h64a8,8,0,0,0,0-16H80a8,8,0,0,0,0,16Z" />
                                                        <path d="M168,328h8a8,8,0,0,0,0-16h-8a8,8,0,0,0,0,16Z" />
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">2</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Size">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 93.849 93.85" style="enable-background:new 0 0 93.849 93.85;" xml:space="preserve">
                                                    <g fill="#000000">
                                                        <g fill="#000000">
                                                            <polygon points="13.36,7.623 62.939,7.623 62.939,10.836 67.347,10.836 67.347,0 62.939,0 62.939,3.215 13.36,3.215 13.36,0 
			8.949,0 8.949,10.836 13.36,10.836 		" />
                                                            <polygon points="85.157,21.524 85.157,17.115 74.319,17.115 74.319,21.524 77.534,21.524 77.534,89.441 74.319,89.441 
			74.319,93.85 85.157,93.85 85.157,89.441 81.943,89.441 81.943,21.524 		" />
                                                            <path d="M8.693,93.85h58.912V17.115H8.693V93.85z M13.47,21.893h49.358v67.182H13.47V21.893z" />
                                                        </g>
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">211.00 m2</span>
                                    </div>
                                </div>
                                <p class="apartment-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Chicago, IL 60608, USA</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="apartment-item__price">
                                        <span class="_retail">89đ</span><span class="_unit">per night</span>
                                    </div>
                                    <a class="btn btn-primary apartment-item__view-detail" href="apartment/via-della-scala.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="apartment-item apartment-item--grid" data-plugin="matchHeight">
                            <div class="apartment-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="apartment/ebury-street.html">
                                    <img src="storage/2021/01/31/2019-02-11-11-31-17-806573-ebu122-take-02-275-of-586-edit-edit-1612103563-360x240.jpg" alt="Ebury Street">
                                </a>
                                <a class="apartment-item__type" href="apartment-search89fe.html?apartment_type=30">
                                    Apartment
                                </a>
                            </div>
                            <div class="apartment-item__details">
                                <span class="apartment-item__label">Featured</span>
                                <h3 class="apartment-item__title"><a href="apartment/ebury-street.html">Ebury Street</a></h3>
                                <div class="apartment-item__meta">
                                    <div class="i-meta" data-toggle="tooltip" title="Guests">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                        <g transform="translate(-155.000000, -2016.000000)" stroke="#1A2B50" stroke-width="0.5">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(20.000000, 327.000000)">
                                                                            <g>
                                                                                <circle cx="10" cy="3.125" r="2.5"></circle>
                                                                                <path d="M13.125,11.875 L13.125,10 C13.125,8.27411016 11.7258898,6.875 10,6.875 C8.27411016,6.875 6.875,8.27411016 6.875,10 L6.875,11.875 L8.125,11.875 L8.75,16.875 L11.25,16.875 L11.875,11.875 L13.125,11.875 Z"></path>
                                                                                <circle cx="3.75" cy="5" r="1.875"></circle>
                                                                                <path d="M4.75,8.28916667 C3.79624791,7.9682092 2.74632008,8.12578507 1.92880562,8.71257878 C1.11129116,9.29937249 0.626070499,10.2436921 0.625,11.25 L0.625,11.875 L1.875,11.875 L2.5,15.625 L5,15.625 L5.31333333,13.745"></path>
                                                                                <circle cx="16.25" cy="5" r="1.875"></circle>
                                                                                <path d="M15.25,8.28916667 C16.2037521,7.9682092 17.2536799,8.12578507 18.0711944,8.71257878 C18.8887088,9.29937249 19.3739295,10.2436921 19.375,11.25 L19.375,11.875 L18.125,11.875 L17.5,15.625 L15,15.625 L14.6866667,13.745"></path>
                                                                                <path d="M19.375,17.5 C19.375,18.5358333 15.1775,19.375 10,19.375 C4.8225,19.375 0.625,18.5358333 0.625,17.5"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">10</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Bedroom">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 512 512">
                                                    <path d="M496,344h-8V280a32.042,32.042,0,0,0-32-32V112a32.042,32.042,0,0,0-32-32H88a32.042,32.042,0,0,0-32,32V248a32.042,32.042,0,0,0-32,32v64H16a8,8,0,0,0-8,8v32a8,8,0,0,0,8,8h8v32a8,8,0,0,0,8,8H56a7.99,7.99,0,0,0,7.84-6.43L70.56,392H441.44l6.72,33.57A7.99,7.99,0,0,0,456,432h24a8,8,0,0,0,8-8V392h8a8,8,0,0,0,8-8V352A8,8,0,0,0,496,344ZM72,112A16.021,16.021,0,0,1,88,96H424a16.021,16.021,0,0,1,16,16V248H424V216a32.042,32.042,0,0,0-32-32H296a32.042,32.042,0,0,0-32,32v32H248V216a32.042,32.042,0,0,0-32-32H120a32.042,32.042,0,0,0-32,32v32H72ZM408,216v32H280V216a16.021,16.021,0,0,1,16-16h96A16.021,16.021,0,0,1,408,216Zm-176,0v32H104V216a16.021,16.021,0,0,1,16-16h96A16.021,16.021,0,0,1,232,216ZM40,280a16.021,16.021,0,0,1,16-16H456a16.021,16.021,0,0,1,16,16v64H40Zm9.44,136H40V392H54.24ZM472,416h-9.44l-4.8-24H472Zm16-40H24V360H488Z" />
                                                </svg></i></span>
                                        <span class="i-meta__figure">3</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Bathroom">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 512 512">
                                                    <g fill="#000000">
                                                        <path d="M496,256H96V240a8,8,0,0,0-8-8H80V208H96v8a8,8,0,0,0,16,0V184a8,8,0,0,0-16,0v8H80V96a32.03,32.03,0,0,1,32-32h32a32.03,32.03,0,0,1,32,32v.68A48.069,48.069,0,0,0,136,144a8,8,0,0,0,8,8h80a8,8,0,0,0,8-8,48.069,48.069,0,0,0-40-47.32V96a48.051,48.051,0,0,0-48-48H112A48.051,48.051,0,0,0,64,96V232H56a8,8,0,0,0-8,8v16H16a8,8,0,0,0-8,8v24a8,8,0,0,0,8,8H40v96a48.069,48.069,0,0,0,40,47.32V456a8,8,0,0,0,16,0V440H416v16a8,8,0,0,0,16,0V439.32A48.069,48.069,0,0,0,472,392V296h24a8,8,0,0,0,8-8V264A8,8,0,0,0,496,256ZM184,112a32.058,32.058,0,0,1,30.99,24H153.01A32.058,32.058,0,0,1,184,112ZM64,248H80v8H64ZM456,392a32.03,32.03,0,0,1-32,32H88a32.03,32.03,0,0,1-32-32V296H456Zm32-112H24v-8H488Z" />
                                                        <path d="M80,328h64a8,8,0,0,0,0-16H80a8,8,0,0,0,0,16Z" />
                                                        <path d="M168,328h8a8,8,0,0,0,0-16h-8a8,8,0,0,0,0,16Z" />
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">2</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Size">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 93.849 93.85" style="enable-background:new 0 0 93.849 93.85;" xml:space="preserve">
                                                    <g fill="#000000">
                                                        <g fill="#000000">
                                                            <polygon points="13.36,7.623 62.939,7.623 62.939,10.836 67.347,10.836 67.347,0 62.939,0 62.939,3.215 13.36,3.215 13.36,0 
			8.949,0 8.949,10.836 13.36,10.836 		" />
                                                            <polygon points="85.157,21.524 85.157,17.115 74.319,17.115 74.319,21.524 77.534,21.524 77.534,89.441 74.319,89.441 
			74.319,93.85 85.157,93.85 85.157,89.441 81.943,89.441 81.943,21.524 		" />
                                                            <path d="M8.693,93.85h58.912V17.115H8.693V93.85z M13.47,21.893h49.358v67.182H13.47V21.893z" />
                                                        </g>
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">123.00 m2</span>
                                    </div>
                                </div>
                                <p class="apartment-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Paris, France</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="apartment-item__price">
                                        <span class="_retail">45đ</span><span class="_unit">per night</span>
                                    </div>
                                    <a class="btn btn-primary apartment-item__view-detail" href="apartment/ebury-street.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tour-type">
            <div class="container py-40">
                <h2 class="section-title mb-20">Tour Types</h2>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="tour-type__item" data-plugin="matchHeight">
                            <div class="tour-type__thumbnail">
                                <a href="tour-searchfa11.html?tour_type=120">
                                    <img class="_image-tour" src="storage/2021/05/14/activity-1620961103-250x300.jpg" alt="Activities">
                                </a>
                            </div>
                            <div class="tour-type__info">
                                <h3 class="tour-type__name"><a href="tour-searchfa11.html?tour_type=120">Activities</a></h3>
                                <div class="tour-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="tour-type__item" data-plugin="matchHeight">
                            <div class="tour-type__thumbnail">
                                <a href="tour-searchea36.html?tour_type=119">
                                    <img class="_image-tour" src="storage/2021/05/14/shutterstock-1069866998-copy-1620961143-250x300.jpg" alt="Festival &amp; Events">
                                </a>
                            </div>
                            <div class="tour-type__info">
                                <h3 class="tour-type__name"><a href="tour-searchea36.html?tour_type=119">Festival &amp; Events</a></h3>
                                <div class="tour-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="tour-type__item" data-plugin="matchHeight">
                            <div class="tour-type__thumbnail">
                                <a href="tour-searcha99f.html?tour_type=118">
                                    <img class="_image-tour" src="storage/2021/05/14/independent-1620960956-250x300.png" alt="Independent">
                                </a>
                            </div>
                            <div class="tour-type__info">
                                <h3 class="tour-type__name"><a href="tour-searcha99f.html?tour_type=118">Independent</a></h3>
                                <div class="tour-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="tour-type__item" data-plugin="matchHeight">
                            <div class="tour-type__thumbnail">
                                <a href="tour-search2ff7.html?tour_type=117">
                                    <img class="_image-tour" src="storage/2021/05/14/marine-1620960956-250x300.jpg" alt="Marine">
                                </a>
                            </div>
                            <div class="tour-type__info">
                                <h3 class="tour-type__name"><a href="tour-search2ff7.html?tour_type=117">Marine</a></h3>
                                <div class="tour-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="tour-type__item" data-plugin="matchHeight">
                            <div class="tour-type__thumbnail">
                                <a href="tour-search1079.html?tour_type=116">
                                    <img class="_image-tour" src="storage/2021/05/14/nature-adventure-1620960957-250x300.jpg" alt="Nature &amp; Adventure">
                                </a>
                            </div>
                            <div class="tour-type__info">
                                <h3 class="tour-type__name"><a href="tour-search1079.html?tour_type=116">Nature &amp; Adventure</a></h3>
                                <div class="tour-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="tour-type__item" data-plugin="matchHeight">
                            <div class="tour-type__thumbnail">
                                <a href="tour-search81b9.html?tour_type=115">
                                    <img class="_image-tour" src="storage/2021/05/14/cultural-1620960954-250x300.jpg" alt="Cultural">
                                </a>
                            </div>
                            <div class="tour-type__info">
                                <h3 class="tour-type__name"><a href="tour-search81b9.html?tour_type=115">Cultural</a></h3>
                                <div class="tour-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="list-tour list-tour--grid py-40 bg-gray-100">
            <div class="container">
                <h2 class="section-title mb-20">List Of Tours</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                            <div class="tour-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="tour/giverny-and-versailles-small-group-day-trip.html">
                                    <img src="storage/2021/05/14/gallary-6-1-1620965115-360x240.jpg" alt="Giverny and Versailles Small Group Day Trip">
                                </a>
                                <p class="tour-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Ha Noi, Viet Nam</p>
                            </div>
                            <div class="tour-item__details">
                                <span class="tour-item__label">Featured</span>
                                <h3 class="tour-item__title"><a href="tour/giverny-and-versailles-small-group-day-trip.html">Giverny and Versailles Small Group Day Trip</a></h3>
                                <div class="tour-item__meta">
                                    <div class="meta-item duration">
                                        <i class="fal fa-calendar-alt"></i>
                                        <div class="duration-info">
                                            <span class="label">Duration</span>
                                            <span class="value">2 days</span>
                                        </div>
                                    </div>
                                    <div class="meta-item group-size">
                                        <i class="fal fa-users"></i>
                                        <div class="group-size-info">
                                            <span class="label">Group Size</span>
                                            <span class="value">13 people</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="tour-item__price">
                                        <span class="_retail">50đ</span>
                                    </div>
                                    <a class="btn btn-primary tour-item__view-detail" href="tour/giverny-and-versailles-small-group-day-trip.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                            <div class="tour-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="tour/segway-tour-of-washington-dc-highlights.html">
                                    <img src="storage/2021/05/14/nature-adventure-1620960957-360x240.jpg" alt="Segway Tour of Washington, D.C. Highlights">
                                </a>
                                <p class="tour-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Washington, USA</p>
                            </div>
                            <div class="tour-item__details">
                                <span class="tour-item__label">Featured</span>
                                <h3 class="tour-item__title"><a href="tour/segway-tour-of-washington-dc-highlights.html">Segway Tour of Washington, D.C. Highlights</a></h3>
                                <div class="tour-item__meta">
                                    <div class="meta-item duration">
                                        <i class="fal fa-calendar-alt"></i>
                                        <div class="duration-info">
                                            <span class="label">Duration</span>
                                            <span class="value">1 day</span>
                                        </div>
                                    </div>
                                    <div class="meta-item group-size">
                                        <i class="fal fa-users"></i>
                                        <div class="group-size-info">
                                            <span class="label">Group Size</span>
                                            <span class="value">4 people</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="tour-item__price">
                                        <span class="_retail">100đ</span>
                                    </div>
                                    <a class="btn btn-primary tour-item__view-detail" href="tour/segway-tour-of-washington-dc-highlights.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                            <div class="tour-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="tour/trip-of-new-york-discover-america.html">
                                    <img src="storage/2021/05/14/katherine-hanlon-mod2s3-qfoc-unsplash-1586229918-1620964523-360x240.jpg" alt="Trip of New York – Discover America">
                                </a>
                                <p class="tour-item__location"><i class="fas fa-map-marker-alt mr-2"></i>New South Wales, Úc</p>
                            </div>
                            <div class="tour-item__details">
                                <span class="tour-item__label">Featured</span>
                                <h3 class="tour-item__title"><a href="tour/trip-of-new-york-discover-america.html">Trip of New York – Discover America</a></h3>
                                <div class="tour-item__meta">
                                    <div class="meta-item duration">
                                        <i class="fal fa-calendar-alt"></i>
                                        <div class="duration-info">
                                            <span class="label">Duration</span>
                                            <span class="value">4 days</span>
                                        </div>
                                    </div>
                                    <div class="meta-item group-size">
                                        <i class="fal fa-users"></i>
                                        <div class="group-size-info">
                                            <span class="label">Group Size</span>
                                            <span class="value">12 people</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="tour-item__price">
                                        <span class="_retail">60đ</span>
                                    </div>
                                    <a class="btn btn-primary tour-item__view-detail" href="tour/trip-of-new-york-discover-america.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="space-type">
            <div class="container py-40">
                <h2 class="section-title mb-20">Space Types</h2>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="space-type__item" data-plugin="matchHeight">
                            <div class="space-type__thumbnail">
                                <a href="space-search5d2f.html?space_type=103">
                                    <img class="_image-space" src="storage/2021/03/29/foody-mobile-tt1-jpg-412-635767227674739472-1617011206-250x150.jpg" alt="Cafe">
                                </a>
                            </div>
                            <div class="space-type__info">
                                <h3 class="space-type__name"><a href="space-search5d2f.html?space_type=103">Cafe</a></h3>
                                <div class="space-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="space-type__item" data-plugin="matchHeight">
                            <div class="space-type__thumbnail">
                                <a href="space-search9cbe.html?space_type=102">
                                    <img class="_image-space" src="storage/2021/03/12/photo-1562184647-7c5c35548033-1615512815-250x150.jpg" alt="Office">
                                </a>
                            </div>
                            <div class="space-type__info">
                                <h3 class="space-type__name"><a href="space-search9cbe.html?space_type=102">Office</a></h3>
                                <div class="space-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="space-type__item" data-plugin="matchHeight">
                            <div class="space-type__thumbnail">
                                <a href="space-search43c2.html?space_type=101">
                                    <img class="_image-space" src="storage/2021/03/29/unnamed-1617011129-250x150.jpg" alt="Recording Studio">
                                </a>
                            </div>
                            <div class="space-type__info">
                                <h3 class="space-type__name"><a href="space-search43c2.html?space_type=101">Recording Studio</a></h3>
                                <div class="space-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="space-type__item" data-plugin="matchHeight">
                            <div class="space-type__thumbnail">
                                <a href="space-searchaada.html?space_type=100">
                                    <img class="_image-space" src="storage/2021/03/29/67304856-10157694782729434-1241098832461168640-o-1617011080-250x150.jpg" alt="Yoga Studio">
                                </a>
                            </div>
                            <div class="space-type__info">
                                <h3 class="space-type__name"><a href="space-searchaada.html?space_type=100">Yoga Studio</a></h3>
                                <div class="space-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="space-type__item" data-plugin="matchHeight">
                            <div class="space-type__thumbnail">
                                <a href="space-searche05a.html?space_type=99">
                                    <img class="_image-space" src="storage/2021/03/24/256492322-1616578250-250x150.jpg" alt="Warehouse">
                                </a>
                            </div>
                            <div class="space-type__info">
                                <h3 class="space-type__name"><a href="space-searche05a.html?space_type=99">Warehouse</a></h3>
                                <div class="space-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="space-type__item" data-plugin="matchHeight">
                            <div class="space-type__thumbnail">
                                <a href="space-search206e.html?space_type=98">
                                    <img class="_image-space" src="storage/2021/03/24/resort-1616578386-250x150.jpg" alt="Villa">
                                </a>
                            </div>
                            <div class="space-type__info">
                                <h3 class="space-type__name"><a href="space-search206e.html?space_type=98">Villa</a></h3>
                                <div class="space-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="list-space list-space--grid py-40 bg-gray-100">
            <div class="container">
                <h2 class="section-title mb-20">List Of Space</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="space-item space-item--grid" data-plugin="matchHeight">
                            <div class="space-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="space/gregory-place.html">
                                    <img src="storage/2021/01/31/gre981-take-01-365-1612103174-360x240.jpg" alt="Gregory Place">
                                </a>
                                <a class="space-item__type" href="space-searchaada.html?space_type=100">
                                    Yoga Studio
                                </a>
                            </div>
                            <div class="space-item__details">
                                <span class="space-item__label">Featured</span>
                                <h3 class="space-item__title"><a href="space/gregory-place.html">Gregory Place</a></h3>
                                <div class="space-item__meta">
                                    <div class="i-meta" data-toggle="tooltip" title="Guests">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                        <g transform="translate(-155.000000, -2016.000000)" stroke="#1A2B50" stroke-width="0.5">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(20.000000, 327.000000)">
                                                                            <g>
                                                                                <circle cx="10" cy="3.125" r="2.5"></circle>
                                                                                <path d="M13.125,11.875 L13.125,10 C13.125,8.27411016 11.7258898,6.875 10,6.875 C8.27411016,6.875 6.875,8.27411016 6.875,10 L6.875,11.875 L8.125,11.875 L8.75,16.875 L11.25,16.875 L11.875,11.875 L13.125,11.875 Z"></path>
                                                                                <circle cx="3.75" cy="5" r="1.875"></circle>
                                                                                <path d="M4.75,8.28916667 C3.79624791,7.9682092 2.74632008,8.12578507 1.92880562,8.71257878 C1.11129116,9.29937249 0.626070499,10.2436921 0.625,11.25 L0.625,11.875 L1.875,11.875 L2.5,15.625 L5,15.625 L5.31333333,13.745"></path>
                                                                                <circle cx="16.25" cy="5" r="1.875"></circle>
                                                                                <path d="M15.25,8.28916667 C16.2037521,7.9682092 17.2536799,8.12578507 18.0711944,8.71257878 C18.8887088,9.29937249 19.3739295,10.2436921 19.375,11.25 L19.375,11.875 L18.125,11.875 L17.5,15.625 L15,15.625 L14.6866667,13.745"></path>
                                                                                <path d="M19.375,17.5 C19.375,18.5358333 15.1775,19.375 10,19.375 C4.8225,19.375 0.625,18.5358333 0.625,17.5"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">12</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Bedroom">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 512 512">
                                                    <path d="M496,344h-8V280a32.042,32.042,0,0,0-32-32V112a32.042,32.042,0,0,0-32-32H88a32.042,32.042,0,0,0-32,32V248a32.042,32.042,0,0,0-32,32v64H16a8,8,0,0,0-8,8v32a8,8,0,0,0,8,8h8v32a8,8,0,0,0,8,8H56a7.99,7.99,0,0,0,7.84-6.43L70.56,392H441.44l6.72,33.57A7.99,7.99,0,0,0,456,432h24a8,8,0,0,0,8-8V392h8a8,8,0,0,0,8-8V352A8,8,0,0,0,496,344ZM72,112A16.021,16.021,0,0,1,88,96H424a16.021,16.021,0,0,1,16,16V248H424V216a32.042,32.042,0,0,0-32-32H296a32.042,32.042,0,0,0-32,32v32H248V216a32.042,32.042,0,0,0-32-32H120a32.042,32.042,0,0,0-32,32v32H72ZM408,216v32H280V216a16.021,16.021,0,0,1,16-16h96A16.021,16.021,0,0,1,408,216Zm-176,0v32H104V216a16.021,16.021,0,0,1,16-16h96A16.021,16.021,0,0,1,232,216ZM40,280a16.021,16.021,0,0,1,16-16H456a16.021,16.021,0,0,1,16,16v64H40Zm9.44,136H40V392H54.24ZM472,416h-9.44l-4.8-24H472Zm16-40H24V360H488Z" />
                                                </svg></i></span>
                                        <span class="i-meta__figure">3</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Bathroom">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 512 512">
                                                    <g fill="#000000">
                                                        <path d="M496,256H96V240a8,8,0,0,0-8-8H80V208H96v8a8,8,0,0,0,16,0V184a8,8,0,0,0-16,0v8H80V96a32.03,32.03,0,0,1,32-32h32a32.03,32.03,0,0,1,32,32v.68A48.069,48.069,0,0,0,136,144a8,8,0,0,0,8,8h80a8,8,0,0,0,8-8,48.069,48.069,0,0,0-40-47.32V96a48.051,48.051,0,0,0-48-48H112A48.051,48.051,0,0,0,64,96V232H56a8,8,0,0,0-8,8v16H16a8,8,0,0,0-8,8v24a8,8,0,0,0,8,8H40v96a48.069,48.069,0,0,0,40,47.32V456a8,8,0,0,0,16,0V440H416v16a8,8,0,0,0,16,0V439.32A48.069,48.069,0,0,0,472,392V296h24a8,8,0,0,0,8-8V264A8,8,0,0,0,496,256ZM184,112a32.058,32.058,0,0,1,30.99,24H153.01A32.058,32.058,0,0,1,184,112ZM64,248H80v8H64ZM456,392a32.03,32.03,0,0,1-32,32H88a32.03,32.03,0,0,1-32-32V296H456Zm32-112H24v-8H488Z" />
                                                        <path d="M80,328h64a8,8,0,0,0,0-16H80a8,8,0,0,0,0,16Z" />
                                                        <path d="M168,328h8a8,8,0,0,0,0-16h-8a8,8,0,0,0,0,16Z" />
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">2</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Size">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 93.849 93.85" style="enable-background:new 0 0 93.849 93.85;" xml:space="preserve">
                                                    <g fill="#000000">
                                                        <g fill="#000000">
                                                            <polygon points="13.36,7.623 62.939,7.623 62.939,10.836 67.347,10.836 67.347,0 62.939,0 62.939,3.215 13.36,3.215 13.36,0 
			8.949,0 8.949,10.836 13.36,10.836 		" />
                                                            <polygon points="85.157,21.524 85.157,17.115 74.319,17.115 74.319,21.524 77.534,21.524 77.534,89.441 74.319,89.441 
			74.319,93.85 85.157,93.85 85.157,89.441 81.943,89.441 81.943,21.524 		" />
                                                            <path d="M8.693,93.85h58.912V17.115H8.693V93.85z M13.47,21.893h49.358v67.182H13.47V21.893z" />
                                                        </g>
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">210.00 m2</span>
                                    </div>
                                </div>
                                <p class="space-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Chicago, IL 60607, USA</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="space-item__price">
                                        <span class="_retail">70đ</span><span class="_unit">per day</span>
                                    </div>
                                    <a class="btn btn-primary space-item__view-detail" href="space/gregory-place.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="space-item space-item--grid" data-plugin="matchHeight">
                            <div class="space-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="space/turtle-ridge.html">
                                    <img src="storage/2021/01/31/14067-1-1-1612102960-360x240.jpg" alt="Turtle Ridge">
                                </a>
                                <a class="space-item__type" href="space-searche05a.html?space_type=99">
                                    Warehouse
                                </a>
                            </div>
                            <div class="space-item__details">
                                <span class="space-item__label">Featured</span>
                                <h3 class="space-item__title"><a href="space/turtle-ridge.html">Turtle Ridge</a></h3>
                                <div class="space-item__meta">
                                    <div class="i-meta" data-toggle="tooltip" title="Guests">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                        <g transform="translate(-155.000000, -2016.000000)" stroke="#1A2B50" stroke-width="0.5">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(20.000000, 327.000000)">
                                                                            <g>
                                                                                <circle cx="10" cy="3.125" r="2.5"></circle>
                                                                                <path d="M13.125,11.875 L13.125,10 C13.125,8.27411016 11.7258898,6.875 10,6.875 C8.27411016,6.875 6.875,8.27411016 6.875,10 L6.875,11.875 L8.125,11.875 L8.75,16.875 L11.25,16.875 L11.875,11.875 L13.125,11.875 Z"></path>
                                                                                <circle cx="3.75" cy="5" r="1.875"></circle>
                                                                                <path d="M4.75,8.28916667 C3.79624791,7.9682092 2.74632008,8.12578507 1.92880562,8.71257878 C1.11129116,9.29937249 0.626070499,10.2436921 0.625,11.25 L0.625,11.875 L1.875,11.875 L2.5,15.625 L5,15.625 L5.31333333,13.745"></path>
                                                                                <circle cx="16.25" cy="5" r="1.875"></circle>
                                                                                <path d="M15.25,8.28916667 C16.2037521,7.9682092 17.2536799,8.12578507 18.0711944,8.71257878 C18.8887088,9.29937249 19.3739295,10.2436921 19.375,11.25 L19.375,11.875 L18.125,11.875 L17.5,15.625 L15,15.625 L14.6866667,13.745"></path>
                                                                                <path d="M19.375,17.5 C19.375,18.5358333 15.1775,19.375 10,19.375 C4.8225,19.375 0.625,18.5358333 0.625,17.5"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">8</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Bedroom">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 512 512">
                                                    <path d="M496,344h-8V280a32.042,32.042,0,0,0-32-32V112a32.042,32.042,0,0,0-32-32H88a32.042,32.042,0,0,0-32,32V248a32.042,32.042,0,0,0-32,32v64H16a8,8,0,0,0-8,8v32a8,8,0,0,0,8,8h8v32a8,8,0,0,0,8,8H56a7.99,7.99,0,0,0,7.84-6.43L70.56,392H441.44l6.72,33.57A7.99,7.99,0,0,0,456,432h24a8,8,0,0,0,8-8V392h8a8,8,0,0,0,8-8V352A8,8,0,0,0,496,344ZM72,112A16.021,16.021,0,0,1,88,96H424a16.021,16.021,0,0,1,16,16V248H424V216a32.042,32.042,0,0,0-32-32H296a32.042,32.042,0,0,0-32,32v32H248V216a32.042,32.042,0,0,0-32-32H120a32.042,32.042,0,0,0-32,32v32H72ZM408,216v32H280V216a16.021,16.021,0,0,1,16-16h96A16.021,16.021,0,0,1,408,216Zm-176,0v32H104V216a16.021,16.021,0,0,1,16-16h96A16.021,16.021,0,0,1,232,216ZM40,280a16.021,16.021,0,0,1,16-16H456a16.021,16.021,0,0,1,16,16v64H40Zm9.44,136H40V392H54.24ZM472,416h-9.44l-4.8-24H472Zm16-40H24V360H488Z" />
                                                </svg></i></span>
                                        <span class="i-meta__figure">2</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Bathroom">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 512 512">
                                                    <g fill="#000000">
                                                        <path d="M496,256H96V240a8,8,0,0,0-8-8H80V208H96v8a8,8,0,0,0,16,0V184a8,8,0,0,0-16,0v8H80V96a32.03,32.03,0,0,1,32-32h32a32.03,32.03,0,0,1,32,32v.68A48.069,48.069,0,0,0,136,144a8,8,0,0,0,8,8h80a8,8,0,0,0,8-8,48.069,48.069,0,0,0-40-47.32V96a48.051,48.051,0,0,0-48-48H112A48.051,48.051,0,0,0,64,96V232H56a8,8,0,0,0-8,8v16H16a8,8,0,0,0-8,8v24a8,8,0,0,0,8,8H40v96a48.069,48.069,0,0,0,40,47.32V456a8,8,0,0,0,16,0V440H416v16a8,8,0,0,0,16,0V439.32A48.069,48.069,0,0,0,472,392V296h24a8,8,0,0,0,8-8V264A8,8,0,0,0,496,256ZM184,112a32.058,32.058,0,0,1,30.99,24H153.01A32.058,32.058,0,0,1,184,112ZM64,248H80v8H64ZM456,392a32.03,32.03,0,0,1-32,32H88a32.03,32.03,0,0,1-32-32V296H456Zm32-112H24v-8H488Z" />
                                                        <path d="M80,328h64a8,8,0,0,0,0-16H80a8,8,0,0,0,0,16Z" />
                                                        <path d="M168,328h8a8,8,0,0,0,0-16h-8a8,8,0,0,0,0,16Z" />
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">2</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Size">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 93.849 93.85" style="enable-background:new 0 0 93.849 93.85;" xml:space="preserve">
                                                    <g fill="#000000">
                                                        <g fill="#000000">
                                                            <polygon points="13.36,7.623 62.939,7.623 62.939,10.836 67.347,10.836 67.347,0 62.939,0 62.939,3.215 13.36,3.215 13.36,0 
			8.949,0 8.949,10.836 13.36,10.836 		" />
                                                            <polygon points="85.157,21.524 85.157,17.115 74.319,17.115 74.319,21.524 77.534,21.524 77.534,89.441 74.319,89.441 
			74.319,93.85 85.157,93.85 85.157,89.441 81.943,89.441 81.943,21.524 		" />
                                                            <path d="M8.693,93.85h58.912V17.115H8.693V93.85z M13.47,21.893h49.358v67.182H13.47V21.893z" />
                                                        </g>
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">118.00 m2</span>
                                    </div>
                                </div>
                                <p class="space-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Chicago, IL 60606, USA</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="space-item__price">
                                        <span class="_retail">10đ</span><span class="_unit">per hour</span>
                                    </div>
                                    <a class="btn btn-primary space-item__view-detail" href="space/turtle-ridge.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="space-item space-item--grid" data-plugin="matchHeight">
                            <div class="space-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="space/ebury-street.html">
                                    <img src="storage/2021/01/31/2019-02-11-11-31-17-806573-ebu122-take-02-275-of-586-edit-edit-1612103563-360x240.jpg" alt="Ebury Street">
                                </a>
                                <a class="space-item__type" href="space-search5d2f.html?space_type=103">
                                    Cafe
                                </a>
                            </div>
                            <div class="space-item__details">
                                <span class="space-item__label">Featured</span>
                                <h3 class="space-item__title"><a href="space/ebury-street.html">Ebury Street</a></h3>
                                <div class="space-item__meta">
                                    <div class="i-meta" data-toggle="tooltip" title="Guests">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1">
                                                    <desc>Created with Sketch.</desc>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                        <g transform="translate(-155.000000, -2016.000000)" stroke="#1A2B50" stroke-width="0.5">
                                                            <g transform="translate(135.000000, 1603.000000)">
                                                                <g transform="translate(0.000000, 86.000000)">
                                                                    <g>
                                                                        <g transform="translate(20.000000, 327.000000)">
                                                                            <g>
                                                                                <circle cx="10" cy="3.125" r="2.5"></circle>
                                                                                <path d="M13.125,11.875 L13.125,10 C13.125,8.27411016 11.7258898,6.875 10,6.875 C8.27411016,6.875 6.875,8.27411016 6.875,10 L6.875,11.875 L8.125,11.875 L8.75,16.875 L11.25,16.875 L11.875,11.875 L13.125,11.875 Z"></path>
                                                                                <circle cx="3.75" cy="5" r="1.875"></circle>
                                                                                <path d="M4.75,8.28916667 C3.79624791,7.9682092 2.74632008,8.12578507 1.92880562,8.71257878 C1.11129116,9.29937249 0.626070499,10.2436921 0.625,11.25 L0.625,11.875 L1.875,11.875 L2.5,15.625 L5,15.625 L5.31333333,13.745"></path>
                                                                                <circle cx="16.25" cy="5" r="1.875"></circle>
                                                                                <path d="M15.25,8.28916667 C16.2037521,7.9682092 17.2536799,8.12578507 18.0711944,8.71257878 C18.8887088,9.29937249 19.3739295,10.2436921 19.375,11.25 L19.375,11.875 L18.125,11.875 L17.5,15.625 L15,15.625 L14.6866667,13.745"></path>
                                                                                <path d="M19.375,17.5 C19.375,18.5358333 15.1775,19.375 10,19.375 C4.8225,19.375 0.625,18.5358333 0.625,17.5"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">10</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Bedroom">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 512 512">
                                                    <path d="M496,344h-8V280a32.042,32.042,0,0,0-32-32V112a32.042,32.042,0,0,0-32-32H88a32.042,32.042,0,0,0-32,32V248a32.042,32.042,0,0,0-32,32v64H16a8,8,0,0,0-8,8v32a8,8,0,0,0,8,8h8v32a8,8,0,0,0,8,8H56a7.99,7.99,0,0,0,7.84-6.43L70.56,392H441.44l6.72,33.57A7.99,7.99,0,0,0,456,432h24a8,8,0,0,0,8-8V392h8a8,8,0,0,0,8-8V352A8,8,0,0,0,496,344ZM72,112A16.021,16.021,0,0,1,88,96H424a16.021,16.021,0,0,1,16,16V248H424V216a32.042,32.042,0,0,0-32-32H296a32.042,32.042,0,0,0-32,32v32H248V216a32.042,32.042,0,0,0-32-32H120a32.042,32.042,0,0,0-32,32v32H72ZM408,216v32H280V216a16.021,16.021,0,0,1,16-16h96A16.021,16.021,0,0,1,408,216Zm-176,0v32H104V216a16.021,16.021,0,0,1,16-16h96A16.021,16.021,0,0,1,232,216ZM40,280a16.021,16.021,0,0,1,16-16H456a16.021,16.021,0,0,1,16,16v64H40Zm9.44,136H40V392H54.24ZM472,416h-9.44l-4.8-24H472Zm16-40H24V360H488Z" />
                                                </svg></i></span>
                                        <span class="i-meta__figure">3</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Bathroom">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg width="24px" height="24px" viewBox="0 0 512 512">
                                                    <g fill="#000000">
                                                        <path d="M496,256H96V240a8,8,0,0,0-8-8H80V208H96v8a8,8,0,0,0,16,0V184a8,8,0,0,0-16,0v8H80V96a32.03,32.03,0,0,1,32-32h32a32.03,32.03,0,0,1,32,32v.68A48.069,48.069,0,0,0,136,144a8,8,0,0,0,8,8h80a8,8,0,0,0,8-8,48.069,48.069,0,0,0-40-47.32V96a48.051,48.051,0,0,0-48-48H112A48.051,48.051,0,0,0,64,96V232H56a8,8,0,0,0-8,8v16H16a8,8,0,0,0-8,8v24a8,8,0,0,0,8,8H40v96a48.069,48.069,0,0,0,40,47.32V456a8,8,0,0,0,16,0V440H416v16a8,8,0,0,0,16,0V439.32A48.069,48.069,0,0,0,472,392V296h24a8,8,0,0,0,8-8V264A8,8,0,0,0,496,256ZM184,112a32.058,32.058,0,0,1,30.99,24H153.01A32.058,32.058,0,0,1,184,112ZM64,248H80v8H64ZM456,392a32.03,32.03,0,0,1-32,32H88a32.03,32.03,0,0,1-32-32V296H456Zm32-112H24v-8H488Z" />
                                                        <path d="M80,328h64a8,8,0,0,0,0-16H80a8,8,0,0,0,0,16Z" />
                                                        <path d="M168,328h8a8,8,0,0,0,0-16h-8a8,8,0,0,0,0,16Z" />
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">2</span>
                                    </div>
                                    <div class="i-meta" data-toggle="tooltip" title="Size">
                                        <span class="i-meta__icon"><i class="gmz-icon"><svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 93.849 93.85" style="enable-background:new 0 0 93.849 93.85;" xml:space="preserve">
                                                    <g fill="#000000">
                                                        <g fill="#000000">
                                                            <polygon points="13.36,7.623 62.939,7.623 62.939,10.836 67.347,10.836 67.347,0 62.939,0 62.939,3.215 13.36,3.215 13.36,0 
			8.949,0 8.949,10.836 13.36,10.836 		" />
                                                            <polygon points="85.157,21.524 85.157,17.115 74.319,17.115 74.319,21.524 77.534,21.524 77.534,89.441 74.319,89.441 
			74.319,93.85 85.157,93.85 85.157,89.441 81.943,89.441 81.943,21.524 		" />
                                                            <path d="M8.693,93.85h58.912V17.115H8.693V93.85z M13.47,21.893h49.358v67.182H13.47V21.893z" />
                                                        </g>
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                    <g fill="#000000">
                                                    </g>
                                                </svg></i></span>
                                        <span class="i-meta__figure">123.00 m2</span>
                                    </div>
                                </div>
                                <p class="space-item__location"><i class="fas fa-map-marker-alt mr-2"></i>Paris, France</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="space-item__price">
                                        <span class="_retail">45đ</span><span class="_unit">per day</span>
                                    </div>
                                    <a class="btn btn-primary space-item__view-detail" href="space/ebury-street.html">View Detail </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="beauty-type">
            <div class="container py-40">
                <h2 class="section-title mb-20">Beauty Services</h2>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="beauty-type__item" data-plugin="matchHeight">
                            <div class="beauty-type__thumbnail">
                                <a href="beauty-search9c60.html?service=142">
                                    <img class="_image-beauty" src="storage/2021/05/25/hinh-xam-hoa-co-may-18-1621934145-250x300.jpg" alt="Tattoo">
                                </a>
                            </div>
                            <div class="beauty-type__info">
                                <h3 class="beauty-type__name"><a href="beauty-search9c60.html?service=142">Tattoo</a></h3>
                                <div class="beauty-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="beauty-type__item" data-plugin="matchHeight">
                            <div class="beauty-type__thumbnail">
                                <a href="beauty-search2f74.html?service=141">
                                    <img class="_image-beauty" src="storage/2021/05/25/dying-hair-at-home-red-hair-0bcbe863-1621934145-250x300.jpg" alt="Hair Stylist">
                                </a>
                            </div>
                            <div class="beauty-type__info">
                                <h3 class="beauty-type__name"><a href="beauty-search2f74.html?service=141">Hair Stylist</a></h3>
                                <div class="beauty-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="beauty-type__item" data-plugin="matchHeight">
                            <div class="beauty-type__thumbnail">
                                <a href="beauty-searche17e.html?service=140">
                                    <img class="_image-beauty" src="storage/2021/05/25/loai-hinh-massage-tai-nha-o-ha-noi-min-1621934146-250x300.jpg" alt="Massage">
                                </a>
                            </div>
                            <div class="beauty-type__info">
                                <h3 class="beauty-type__name"><a href="beauty-searche17e.html?service=140">Massage</a></h3>
                                <div class="beauty-type__description">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="beauty-type__item" data-plugin="matchHeight">
                            <div class="beauty-type__thumbnail">
                                <a href="beauty-search4d85.html?service=139">
                                    <img class="_image-beauty" src="storage/2021/05/26/ao-thuat-trang-diem-lam-thon-gon-guong-mat-tron-2-1622000432-250x300.jpg" alt="Makeup">
                                </a>
                            </div>
                            <div class="beauty-type__info">
                                <h3 class="beauty-type__name"><a href="beauty-search4d85.html?service=139">Makeup</a></h3>
                                <div class="beauty-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="beauty-type__item" data-plugin="matchHeight">
                            <div class="beauty-type__thumbnail">
                                <a href="beauty-searchd24b.html?service=138">
                                    <img class="_image-beauty" src="storage/2021/05/26/wax-la-gi-1622000319-250x300.jpg" alt="Waxing">
                                </a>
                            </div>
                            <div class="beauty-type__info">
                                <h3 class="beauty-type__name"><a href="beauty-searchd24b.html?service=138">Waxing</a></h3>
                                <div class="beauty-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="beauty-type__item" data-plugin="matchHeight">
                            <div class="beauty-type__thumbnail">
                                <a href="beauty-searche39b.html?service=137">
                                    <img class="_image-beauty" src="storage/2021/05/25/dia-chi-lam-nail-bien-hoa-2-1621934144-250x300.jpg" alt="Nail">
                                </a>
                            </div>
                            <div class="beauty-type__info">
                                <h3 class="beauty-type__name"><a href="beauty-searche39b.html?service=137">Nail</a></h3>
                                <div class="beauty-type__description">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="list-beauty list-beauty--grid py-40 bg-gray-100">
            <div class="container">
                <h2 class="section-title mb-20">List Of Beauty</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="beauty-item beauty-item--grid" data-plugin="matchHeight">
                            <div class="beauty-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="beauty-service/gel-manicure-and-pedicure.html">
                                    <img src="storage/2021/05/26/23f2a9b95b0178861817ae8de4638075-1622020024-360x240.jpg" alt="Gel manicure and pedicure">
                                </a>
                                <a class="beauty-item__type" href="beauty-searche39b.html?service=137">
                                    Nail
                                </a>
                            </div>
                            <div class="beauty-item__details">
                                <span class="beauty-item__label">Featured</span>
                                <h3 class="beauty-item__title"><a href="beauty-service/gel-manicure-and-pedicure.html">Gel manicure and pedicure</a></h3>
                                <p class="beauty-item__location"><i class="fas fa-map-marker-alt mr-2"></i>222 E 34th St Studio 24, New York, NY 10016, United States</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="beauty-item__price">
                                        <span class="_retail">25đ</span>
                                    </div>
                                    <a class="btn btn-primary beauty-item__view-detail" href="beauty-service/gel-manicure-and-pedicure.html">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="beauty-item beauty-item--grid" data-plugin="matchHeight">
                            <div class="beauty-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="beauty-service/foot-waxing.html">
                                    <img src="storage/2021/05/26/wax-la-gi-1-1622019017-360x240.jpg" alt="Foot waxing">
                                </a>
                                <a class="beauty-item__type" href="beauty-searchd24b.html?service=138">
                                    Waxing
                                </a>
                            </div>
                            <div class="beauty-item__details">
                                <h3 class="beauty-item__title"><a href="beauty-service/foot-waxing.html">Foot waxing</a></h3>
                                <p class="beauty-item__location"><i class="fas fa-map-marker-alt mr-2"></i>42 E 21st St, New York, NY 10010, USA</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="beauty-item__price">
                                        <span class="_retail">60đ</span>
                                    </div>
                                    <a class="btn btn-primary beauty-item__view-detail" href="beauty-service/foot-waxing.html">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="beauty-item beauty-item--grid" data-plugin="matchHeight">
                            <div class="beauty-item__thumbnail">
                                <div class="add-wishlist-wrapper">
                                    <a href="#gmz-login-popup" class="add-wishlist gmz-box-popup" data-effect="mfp-zoom-in"><i class="fal fa-heart"></i></a>
                                </div>
                                <a href="beauty-service/makeup.html">
                                    <img src="storage/2021/05/26/221317223-1622018733-360x240.jpg" alt="Makeup">
                                </a>
                                <a class="beauty-item__type" href="beauty-search4d85.html?service=139">
                                    Makeup
                                </a>
                            </div>
                            <div class="beauty-item__details">
                                <span class="beauty-item__label">Featured</span>
                                <h3 class="beauty-item__title"><a href="beauty-service/makeup.html">Makeup</a></h3>
                                <p class="beauty-item__location"><i class="fas fa-map-marker-alt mr-2"></i>3043 Bainbridge Dr, Lansdale, PA 19446, USA</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="beauty-item__price">
                                        <span class="_retail">95đ</span>
                                    </div>
                                    <a class="btn btn-primary beauty-item__view-detail" href="beauty-service/makeup.html">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="list-location py-40">
            <div class="container">
                <h2 class="section-title mb-30">List Of Destinations</h2>
                <div class="carousel-s1">
                    <div class="location-item">
                        <div class="location-item__thumbnail">
                            <a href=" javascript:void(0); ">
                                <img class="rounded-10" src="storage/2021/01/30/chicago-1578389472-1612023154-250x150.jpg" alt="Chicago">
                            </a>
                        </div>
                        <div class="location-item__details">
                            <h3 class="location-item__title"><a href=" javascript:void(0); ">Chicago</a></h3>
                            <div class="count-service">
                                <a class="" href="apartment-search35ec.html?lat=41.8339037&amp;lng=-87.8720466&amp;address=Chicago">8 Apartments</a>
                                <a class="" href="space-search35ec.html?lat=41.8339037&amp;lng=-87.8720466&amp;address=Chicago">8 Space</a>
                                <a class="" href="car-search35ec.html?lat=41.8339037&amp;lng=-87.8720466&amp;address=Chicago">4 Cars</a>
                                <a class="" href="hotel-search35ec.html?lat=41.8339037&amp;lng=-87.8720466&amp;address=Chicago">0 Hotels</a>
                                <a class="" href="beauty-search35ec.html?lat=41.8339037&amp;lng=-87.8720466&amp;address=Chicago">0 Beauty</a>
                                <a class="" href="tour-search35ec.html?lat=41.8339037&amp;lng=-87.8720466&amp;address=Chicago">0 Tours</a>
                            </div>
                        </div>
                    </div>
                    <div class="location-item">
                        <div class="location-item__thumbnail">
                            <a href=" javascript:void(0); ">
                                <img class="rounded-10" src="storage/2021/01/30/lastvegas-1578405673-1612023736-250x150.jpg" alt="New York">
                            </a>
                        </div>
                        <div class="location-item__details">
                            <h3 class="location-item__title"><a href=" javascript:void(0); ">New York</a></h3>
                            <div class="count-service">
                                <a class="" href="apartment-search36cf.html?lat=40.713847&amp;lng=-74.006225&amp;address=New%20York">1 Apartment</a>
                                <a class="" href="space-search36cf.html?lat=40.713847&amp;lng=-74.006225&amp;address=New%20York">1 Space</a>
                                <a class="" href="car-search36cf.html?lat=40.713847&amp;lng=-74.006225&amp;address=New%20York">2 Cars</a>
                                <a class="" href="hotel-search36cf.html?lat=40.713847&amp;lng=-74.006225&amp;address=New%20York">1 Hotel</a>
                                <a class="" href="beauty-search36cf.html?lat=40.713847&amp;lng=-74.006225&amp;address=New%20York">6 Beauty</a>
                                <a class="" href="tour-search36cf.html?lat=40.713847&amp;lng=-74.006225&amp;address=New%20York">2 Tours</a>
                            </div>
                        </div>
                    </div>
                    <div class="location-item">
                        <div class="location-item__thumbnail">
                            <a href=" javascript:void(0); ">
                                <img class="rounded-10" src="storage/2021/01/30/sanfransico-1578405673-1612023737-250x150.jpg" alt="San Francisco">
                            </a>
                        </div>
                        <div class="location-item__details">
                            <h3 class="location-item__title"><a href=" javascript:void(0); ">San Francisco</a></h3>
                            <div class="count-service">
                                <a class="" href="apartment-searchbb5b.html?lat=37.774201&amp;lng=-122.41423&amp;address=San%20Francisco">0 Apartments</a>
                                <a class="" href="space-searchbb5b.html?lat=37.774201&amp;lng=-122.41423&amp;address=San%20Francisco">0 Space</a>
                                <a class="" href="car-searchbb5b.html?lat=37.774201&amp;lng=-122.41423&amp;address=San%20Francisco">0 Cars</a>
                                <a class="" href="hotel-searchbb5b.html?lat=37.774201&amp;lng=-122.41423&amp;address=San%20Francisco">0 Hotels</a>
                                <a class="" href="beauty-searchbb5b.html?lat=37.774201&amp;lng=-122.41423&amp;address=San%20Francisco">0 Beauty</a>
                                <a class="" href="tour-searchbb5b.html?lat=37.774201&amp;lng=-122.41423&amp;address=San%20Francisco">0 Tours</a>
                            </div>
                        </div>
                    </div>
                    <div class="location-item">
                        <div class="location-item__thumbnail">
                            <a href=" javascript:void(0); ">
                                <img class="rounded-10" src="storage/2021/01/30/california-1578405673-1612023735-250x150.jpg" alt="California">
                            </a>
                        </div>
                        <div class="location-item__details">
                            <h3 class="location-item__title"><a href=" javascript:void(0); ">California</a></h3>
                            <div class="count-service">
                                <a class="" href="apartment-searche470.html?lat=36.567592&amp;lng=-119.645883&amp;address=California">0 Apartments</a>
                                <a class="" href="space-searche470.html?lat=36.567592&amp;lng=-119.645883&amp;address=California">0 Space</a>
                                <a class="" href="car-searche470.html?lat=36.567592&amp;lng=-119.645883&amp;address=California">0 Cars</a>
                                <a class="" href="hotel-searche470.html?lat=36.567592&amp;lng=-119.645883&amp;address=California">0 Hotels</a>
                                <a class="" href="beauty-searche470.html?lat=36.567592&amp;lng=-119.645883&amp;address=California">0 Beauty</a>
                                <a class="" href="tour-searche470.html?lat=36.567592&amp;lng=-119.645883&amp;address=California">0 Tours</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonial py-50">
            <div class="container">
                <div class="carousel-s2">
                    <div class="testimonial-item text-white text-center">
                        <i class="fas fa-quote-left fa-3x"></i>
                        <p class="testimonial-item__comment">Needless to say we are extremely satisfied with the results. Home is awesome! Thanks guys, keep up the good work! I have gotten at least 50 times the value from home</p>
                        <p class="testimonial-item__author">Crocodie</p>
                    </div>
                    <div class="testimonial-item text-white text-center">
                        <i class="fas fa-quote-left fa-3x"></i>
                        <p class="testimonial-item__comment">I can not say enough about home. Home is the most valuable business resource we have ever purchased. Home is the most valuable business resource we have ever purchased.</p>
                        <p class="testimonial-item__author">Rakel France</p>
                    </div>
                    <div class="testimonial-item text-white text-center">
                        <i class="fas fa-quote-left fa-3x"></i>
                        <p class="testimonial-item__comment">If you want real marketing that works and effective implementation - home got you covered. Your company is truly upstanding and is behind its product 100%</p>
                        <p class="testimonial-item__author">Christof JR</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-list blog-list--grid py-40">
            <div class="container">
                <h2 class="section-title mb-20">List Of Blog</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-item blog-item--grid" data-plugin="matchHeight">
                            <div class="blog-item__thumbnail">
                                <a href="post/the-first-line-of-lorem-ipsum.html">
                                    <img src="storage/2021/03/12/sca999-take-01-13-1615512817-360x240.jpg" alt="Contrary to popular belief">
                                </a>
                            </div>
                            <div class="blog-item__details">
                                <a class="blog-item__label" href="blog.html">News</a>
                                <h3 class="blog-item__title"><a href="post/the-first-line-of-lorem-ipsum.html">Contrary to popular belief</a></h3>
                                <div class="blog-item__post-meta">
                                    <span class="_date">On 31-01-2021</span>
                                    <span class="_categories">
                                        In
                                        <a href="category/it-has-roots.html"><span>It has roots</span></a>
                                    </span>
                                </div>
                                <p class="blog-item__excrept pt-3">
                                    <a href="post/the-first-line-of-lorem-ipsum.html">
                                        Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-item blog-item--grid" data-plugin="matchHeight">
                            <div class="blog-item__thumbnail">
                                <a href="post/1914-translation-by-h-rackham.html">
                                    <img src="storage/2021/03/12/photo-1524615688360-e7614ea326b5-1615512816-360x240.jpg" alt="Lorem Ipsum is not simply random text">
                                </a>
                            </div>
                            <div class="blog-item__details">
                                <a class="blog-item__label" href="blog.html">News</a>
                                <h3 class="blog-item__title"><a href="post/1914-translation-by-h-rackham.html">Lorem Ipsum is not simply random text</a></h3>
                                <div class="blog-item__post-meta">
                                    <span class="_date">On 31-01-2021</span>
                                    <span class="_categories">
                                        In
                                        <a href="category/latin-literature.html"><span>Latin literature</span></a>
                                    </span>
                                </div>
                                <p class="blog-item__excrept pt-3">
                                    <a href="post/1914-translation-by-h-rackham.html">
                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-item blog-item--grid" data-plugin="matchHeight">
                            <div class="blog-item__thumbnail">
                                <a href="post/where-can-i-get-some.html">
                                    <img src="storage/2021/03/12/photo-1520466809213-7b9a56adcd45-1615512816-360x240.jpg" alt="Lorem Ipsum is not simply random text">
                                </a>
                            </div>
                            <div class="blog-item__details">
                                <a class="blog-item__label" href="blog.html">News</a>
                                <h3 class="blog-item__title"><a href="post/where-can-i-get-some.html">Lorem Ipsum is not simply random text</a></h3>
                                <div class="blog-item__post-meta">
                                    <span class="_date">On 31-01-2021</span>
                                </div>
                                <p class="blog-item__excrept pt-3">
                                    <a href="post/where-can-i-get-some.html">
                                        The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

