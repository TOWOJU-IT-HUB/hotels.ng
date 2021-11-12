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

			.ncities {
				column-count: 2;
			}
		}

		@media (min-width: 800px) {
			.ncities {
				column-count: 4;
				align-items: left;
				justify-content: space-between;
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

											<div class="search-form__guest hotel">
												<div class="dropdown">
													<div class="dropdown-toggle" id="dropdownGuestButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="fal fa-user"></i>
														<span class="guest-render">
															<span id="adults_num"> 1 Adult </span> • <span id="childs_num"> 0 Children </span> • <span id="rooms_num"> 0 Rooms </span><span class="ml-3"></span>
														</span>
													</div>
													<div class="dropdown-menu" aria-labelledby="dropdownGuestButton">
														<div class="item d-flex align-items-center justify-content-between">
															<div class="label">Rooms</div>
															<div class="value">
																<select class="form-control" onchange="rooms_num(this.value)" id="number_room" name="number_room">
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
																<select class="form-control" onchange="adults_num(this.value)" id="adult" name="adult">
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
																<select class="form-control" onchange="childs_num(this.value)" id="children" name="children">
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
														<input type="text" class="price-range-slider" name="price_range" value="" data-min="0.00" data-max="10800.00" data-form="250.00" data-to="8000.00" data-prefix="" data-postfix="" />

													</div>
													<div class="col-md-6 gmz-checkbox-wrapper">
														<div class="search-form__label">Types</div>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Hotel">Hotel</label>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Apartment">Apartment</label>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Resorts">Resorts</label>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Resorts">Resorts</label>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Villas">Villas</label>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Guest House">Guest House</label>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Motels">Motels</label>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Cottage">Cottage</label>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Glamping">Glamping</label>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Vacations">Vacations</label>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Hostels">Hostels</label>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Farm Stay">Farm Stay</label>
														<label class="checkbox-inline"><input type="checkbox" class="gmz-checkbox-item" name="room_type[]" value="Luxury Tents">Luxury Tents</label>
														<!-- <input type="hidden" name="room_type[]" value="" /> -->
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

	<!-- Deals for you -->
	<section class="tour-type">
		<div class="container py-40">
			<h2 class="section-title mb-20">Deals for you.</h2>
			<div class="row">
				<?php foreach ($by_country as $country) : ?>
					<div class="col-lg-2 col-md-4 col-6">
						<div class="tour-type__item" data-plugin="matchHeight">
							<div class="tour-type__thumbnail">
								<a href="<?= base_url('home/search?location=' . $country['city']) ?>">
									<img class="_image-tour" src="<?= $country['hotel_thumbnail'] ?>" alt="Activities">
								</a>
							</div>
							<div class="tour-type__info">
								<h3 class="tour-type__name"><a href="<?= base_url('home/search?location=' . $country['city']) ?>"><?= $country['city'] ?></a></h3>
								<div class="tour-type__description">

								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>


	<!-- Browse By Property Types -->
	<section class="tour-type bg-gray-100">
		<div class="container py-40">
			<h2 class="section-title mb-20">Browse By Property Types</h2>
			<div class="row">
				<div class="col-lg-2 col-md-4 col-6">
					<div class="tour-type__item" data-plugin="matchHeight">
						<div class="tour-type__thumbnail">
							<a href="<?= base_url('home/search?room_type=hotels') ?>">
								<img class="_image-tour" src="https://t-cf.bstatic.com/xdata/images/xphoto/square300/57584488.webp?k=bf724e4e9b9b75480bbe7fc675460a089ba6414fe4693b83ea3fdd8e938832a6&o=" alt="Hotels">
							</a>
						</div>
						<div class="tour-type__info">
							<h3 class="tour-type__name"><a href="<?= base_url('home/search?room_type=hotels') ?>">Hotels</a></h3>
							<div class="tour-type__description">

							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6">
					<div class="tour-type__item" data-plugin="matchHeight">
						<div class="tour-type__thumbnail">
							<a href="<?= base_url('home/search?room_type=Apartments') ?>">
								<img class="_image-tour" src="https://t-cf.bstatic.com/static/img/theme-index/carousel_320x240/card-image-apartments_300/9f60235dc09a3ac3f0a93adbc901c61ecd1ce72e.jpg" height="170px" alt="Apartments">
							</a>
						</div>
						<div class="tour-type__info">
							<h3 class="tour-type__name"><a href="<?= base_url('home/search?room_type=Apartments') ?>">Apartments</a></h3>
							<div class="tour-type__description">

							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6">
					<div class="tour-type__item" data-plugin="matchHeight">
						<div class="tour-type__thumbnail">
							<a href="<?= base_url('home/search?room_type=Resorts') ?>">
								<img class="_image-tour" src="https://t-cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_resorts/6f87c6143fbd51a0bb5d15ca3b9cf84211ab0884.jpg" height="170px" alt="Resorts">
							</a>
						</div>
						<div class="tour-type__info">
							<h3 class="tour-type__name"><a href="<?= base_url('home/search?room_type=Resorts') ?>">Resorts</a></h3>
							<div class="tour-type__description">

							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6">
					<div class="tour-type__item" data-plugin="matchHeight">
						<div class="tour-type__thumbnail">
							<a href="<?= base_url('home/search?room_type=Villas') ?>">
								<img class="_image-tour" src="https://t-cf.bstatic.com/static/img/theme-index/carousel_320x240/card-image-villas_300/dd0d7f8202676306a661aa4f0cf1ffab31286211.jpg" height="170px" alt="Villas">
							</a>
						</div>
						<div class="tour-type__info">
							<h3 class="tour-type__name"><a href="<?= base_url('home/search?room_type=Villas') ?>">Villas</a></h3>
							<div class="tour-type__description">

							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6">
					<div class="tour-type__item" data-plugin="matchHeight">
						<div class="tour-type__thumbnail">
							<a href="<?= base_url('home/search?room_type=Motels') ?>">
								<img class="_image-tour" src="https://t-cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_motels/9673cd1b55cbc1e1cdaeae09d87d16aa9d84d5f7.jpg" height="170px" alt="Motels">
							</a>
						</div>
						<div class="tour-type__info">
							<h3 class="tour-type__name"><a href="<?= base_url('home/search?room_type=Motels') ?>">Motels</a></h3>
							<div class="tour-type__description">

							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6">
					<div class="tour-type__item" data-plugin="matchHeight">
						<div class="tour-type__thumbnail">
							<a href="<?= base_url('home/search?room_type=Hostels') ?>">
								<img class="_image-tour" src="https://t-cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_bed_and_breakfast/a6a4a3f904284337c187771d94a4bb6169b168d7.jpg" height="170px" alt="Hostels">
							</a>
						</div>
						<div class="tour-type__info">
							<h3 class="tour-type__name"><a href="<?= base_url('home/search?room_type=Hostels') ?>">Hostels</a></h3>
							<div class="tour-type__description">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- browse by countries -->
	<section class="tour-type">
		<div class="container py-40">
			<h2 class="section-title mb-20">Browse by dream countries to visit.</h2>
			<div class="row">
				<?php $k = 1;
				foreach ($_country as $country) : ?>
					<div class="<?php if ($k == 1 or $k == 6) {
									echo 'col-lg-6 col-md-4';
								} else {
									echo 'col-lg-3 col-md-4';
								} ?>">
						<div class="tour-type__item" data-plugin="matchHeight" style="height: 238px; width:100%; margin:20px">
							<div class="tour-type__thumbnail">
								<a href="<?= base_url('home/search?country=' . $country['country_trans']) ?>">
									<img style="height: 238px; width:100%;" class="_image-tour" src="<?= $country['hotel_thumbnail'] ?>" alt="Activities">
								</a>
							</div>
							<div class="tour-type__info">
								<h3 class="tour-type__name h1 mb-5 float-left ml-3" style="font-weight: bolder; font-size: 24px"><a href="<?= base_url('home/search?country=' . $country['country_trans']) ?>"><?= $country['country_trans'] ?></a></h3>
								<div class="tour-type__description mt-5" style="padding-top: 90px;"><a href="<?= base_url('home/search?country=' . $country['country_trans']) ?>">
									<span class="btn bg-secondary text-white float-right mr-3">From: <?= COUNTRY_CURRENCY . number_format(convertedCurrency($country['min_total_price'], $country['currencycode']), 2) ?></span></a>
								</div>
							</div>
						</div>
					</div>
				<?php $k++;
				endforeach ?>
			</div>
		</div>
	</section>

	<!-- Destinations we love -->
	<section class="bg-grey-100">
		<div class="container">
			<h2 class="section-title mb-20">Destinations we love</h2>
			<div class="row">
				<div class="col-12">
					<ul class="nav">
						<div class="ncities mt-3">
							<?php foreach ($cities as $city) : ?>
								<a href="<?= base_url('home/search?location=' . $city['city']) ?>">
									<li class="list-group-item mb-3">
										<?= $city['city'] ?>
										<span class="badge badge-primary badge-pill ml-1 float-right"><?= count_hotel($city['city']) ?></span>
									</li>
								</a>
							<?php endforeach ?>
						</div>
					</ul>
				</div>
			</div>
		</div>
	</section>
</div>

<?php
function count_hotel($city_name)
{
	$db = \Config\Database::connect();
	$query = $db->table('hotels')->where('city', $city_name)->countAllResults();
	return $query;
}

?>

<script>
	function rooms_num() {
		var x = $("#number_room").val();
		$("#rooms_num").html(x + ' Rooms  ');
	}

	function childs_num() {
		var x = $("#children").val();
		$("#childs_num").html(x + ' childrens  ');
	}

	function adults_num() {
		var x = $("#adult").val();
		$("#adults_num").html(x + ' Adults  ');
	}
</script>