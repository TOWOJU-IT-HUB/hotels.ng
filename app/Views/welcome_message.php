<div class="site-content">
	<style>
		.hotel_img {
			max-width: 358px;
			max-height: 238px;
		}

		@media (max-width: 800px) {
			.ism {
				min-height: 700px;
			}
		}
	</style>
	<section class="hero-slider" style="min-height: 350px">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<!-- <div class="container-fluid no-gutters p-0"> -->
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100 ism" src="<?= base_url() ?>/storage/2021/slider04.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 ism" src="<?= base_url() ?>/storage/2021/slider02.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 ism" src="<?= base_url() ?>/storage/2021/slider03.jpg" alt="Third slide">
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
												<input type="text" id="search" name="location" placeholder="City Name" class="location" autocomplete="off" value="">
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
											<div class="search-form__from date-group">
												<i class="fal fa-hospital"></i>
												<select class="location" name="room_type">
													<option value="Hotel" selected>Hotel</option>
													<option value="Apartment">Apartment</option>
													<option value="Resorts">Resorts</option>
													<option value="Villas">Villas</option>
													<option value="Cabins">Cabins</option>
													<option value="Guest House">Guest House</option>
													<option value="Motels">Motels</option>
													<option value="Cottage">Cottage</option>
													<option value="Glamping">Glamping</option>
													<option value="Vacations">Vacations</option>
													<option value="Hostels">Hostels</option>
													<option value="Farm Stay">Farm Stay</option>
													<option value="Luxury Tents">Luxury Tents</option>
												</select>
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
	<section class="list-hotel list-hotel--grid py-40 bg-gray-100">
		<div class="container">
			<h2 class="section-title mb-20">List Of Hotels</h2>
			<div class="row"> <?php if (!empty($response)) : ?>
					<?php foreach ($response as $key => $rex) : ?>
						<?php // http_build_query()
										$es = [
											'hotel_id'		=>	$rex['hotel_id'],
											// 'data-hotel' 	=> 	$rex['hotel_name'],
											// 'data-city' 	=> 	$rex['city'],
											// 'data-country' 	=> 	$rex['country_trans'],
											// 'data-type' 	=> 	$rex['accommodation_type_name'],
											// 'ratings'		=> 	$rex['review_score'],
											// 'checkin'		=> 	$rex['checkin'],
											// 'checkout'		=> 	$rex['checkout'],
										];
										$es = '?' . http_build_query($es);
										$final_url = route_to('hotels.view') . $es;
										// $final_url = "https://google.com";
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
											Hotels
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