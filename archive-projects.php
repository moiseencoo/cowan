<?php get_header(); ?>
	<main class="b-content">
		<div class="filter-b">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-md-auto col-12">
						<div class="filter-title"><?php the_archive_title(); ?></div>
					</div>
					<div class="col-md-auto col-12">
						<div class="row justify-content-between align-items-center">
							<div class="col-lg-auto col-md-3 col-12">
								<div class="filter-inner-title">Filter</div>
							</div>
							<div class="col-lg-auto col-md-9 col-12">
								<div class="row justify-content-center align-items-center filter-links filters-button-group button-group">
									<div class="col-sm-auto col-6 filter-link">
										<a href="#" data-filter=".Refurbishment" class="is-checked">Refurbishment</a>
									</div>
									<div class="col-sm-auto col-6 filter-link">
										<a href="#" data-filter=".new">New Build</a>
									</div>
									<div class="col-sm-auto col-6 filter-link">
										<a href="#" data-filter=".Conservation">Conservation</a>
									</div>
									<div class="col-sm-auto col-6 filter-link">
										<a href="#" data-filter=".Maintenance">Maintenance</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row b-20 works-filter-area">
				<div class="col-md-6 b20 works-filter-item Refurbishment" data-category="Refurbishment">
					<a href="#" class="pr-filter-v">
						<img src="img/filter01.jpg" alt="">
						<div class="pr-filter-v-info">
							Bla School Name, Essex
						</div>
					</a>
				</div>
				<div class="col-md-6 b20 works-filter-item Refurbishment" data-category="Refurbishment">
					<a href="#" class="pr-filter-v">
						<img src="img/filter01.jpg" alt="">
						<div class="pr-filter-v-info">
							Bla School Name, Essex
						</div>
					</a>
				</div> 
				<div class="col-md-6 b20 works-filter-item Refurbishment" data-category="Refurbishment">
					<a href="#" class="pr-filter-v">
						<img src="img/filter01.jpg" alt="">
						<div class="pr-filter-v-info">
							Bla School Name, Essex
						</div>
					</a>
				</div>
				<div class="col-md-6 b20 works-filter-item new" data-category="new">
					<a href="#" class="pr-filter-v">
						<img src="img/filter01.jpg" alt="">
						<div class="pr-filter-v-info">
							Bla School Name, Essex
						</div>
					</a>
				</div>
				<div class="col-md-6 b20 works-filter-item new" data-category="new">
					<a href="#" class="pr-filter-v">
						<img src="img/filter01.jpg" alt="">
						<div class="pr-filter-v-info">
							Bla School Name, Essex
						</div>
					</a>
				</div>
				<div class="col-md-6 b20 works-filter-item new" data-category="new">
					<a href="#" class="pr-filter-v">
						<img src="img/filter01.jpg" alt="">
						<div class="pr-filter-v-info">
							Bla School Name, Essex
						</div>
					</a>
				</div>
				<div class="col-md-6 b20 works-filter-item Conservation" data-category="Conservation">
					<a href="#" class="pr-filter-v">
						<img src="img/filter01.jpg" alt="">
						<div class="pr-filter-v-info">
							Bla School Name, Essex
						</div>
					</a>
				</div> 
				<div class="col-md-6 b20 works-filter-item Maintenance" data-category="Maintenance">
					<a href="#" class="pr-filter-v">
						<img src="img/filter01.jpg" alt="">
						<div class="pr-filter-v-info">
							Bla School Name, Essex
						</div>
					</a>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>