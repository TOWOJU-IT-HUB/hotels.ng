<div class="site-content">
	<section class="hero-slider" style="min-height: 350px">
		<div class="container-fluid no-gutters p-0">
			<div class="slider" data-plugin="slick">
				<div class="item">
					<img src="<?= base_url() ?>/storage/2021/slider04.jpg" alt="home slider">
				</div>
				<div class="item">
					<img src="<?= base_url() ?>/storage/2021/slider02.jpg" alt="home slider">
				</div>
				<div class="item">
					<img src="<?= base_url() ?>/storage/2021/slider03.jpg" alt="home slider">
				</div>
			</div>

			<div class="search-center">
				<div class="container">
					<p class="search-center__title">Browse Through our Catalogue of Hotels All Around The World</p>
					<div class="search-form-wrapper">
						<div class="tab-content" id="searchFormTab">
							<div class="tab-pane fade show active hotel-search-form" id="hotel-search" role="tabpanel" aria-labelledby="hotel-search-tab">
								<form id="search-hotel" method="GET" class="search-form hotel" action="/search">
									<div class="search-form__basic">
										<div class="search-form__address">
											<i class="fal fa-city"></i>
											<input type="text" id="search-box" name="location" class="location" autocomplete="off" value="">
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
													<input type="text" class="price-range-slider" name="price_range" value="" data-min="150.00" data-max="500.00" data-form="150.00" data-to="500.00" data-prefix="$" data-postfix="" />

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
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="list-hotel list-hotel--grid py-40 bg-gray-100">
		<div class="container">
			<style>
				.hotel_img {
					max-width: 358px;
					max-height: 238px;
				}
			</style>
			<h2 class="section-title mb-20">List Of Hotels</h2>
			<div class="row"> <?php if (!empty($news)) : ?>
					<?php foreach ($news as $key => $rex) : ?>
						<a href="<?= $final_url = 'WE'; ?>">
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="hotel-item hotel-item--grid" data-plugin="matchHeight">
									<div class="hotel-item__thumbnail">
										<a href="<?= $final_url ?>">
											<img class="hotel_img" src="<?= base_url($rex['image']) ?>" alt="<?= $rex['title'] ?>" width="358px" height="238px">
										</a>
									</div>
									<div class="hotel-item__details">
										<h3 class="hotel-item__title"><a href="<?= base_url('uploads/blog/'.$rex['image']) ?>"><?= $rex['title'] ?></a></h3>
										<div class="d-flex justify-content-between align-items-center">
											<a class="btn btn-primary hotel-item__view-detail" href="<?= $final_url ?>">View Detail </a>
										</div>
									</div>
								</div>
							</div>
						</a>
				<?php endforeach; endif ?>
			</div>
			<div class="row">
				<div class="col-12">
					<?= $pager->simpleLinks() ?>
				</div>
			</div>
		</div>
	</section>
</div>