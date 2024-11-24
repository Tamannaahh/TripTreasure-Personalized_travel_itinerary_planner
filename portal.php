<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TripTreasure</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">

        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
    </head>
    <body>

<style>
	header.masthead{
		background-image: url('<?php echo validate_image($_settings->info('cover')) ?>') !important;
		
	}
	
</style>

<!-- header -->
<header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1>Unlock Your Next Adventure</h1>
                    <p>Unlock Your Next Adventure with TripTreasure. Discover hidden gems and create unforgettable memories.</p>
                </div>
                <div class = "header-form">
                    <h2>TripTreasure's Travel locations:</h2>
                    <form action = "destination.php" class = "flex" method="get" onsubmit="handleSearch(event)">
                        
                        <select class="form-control custom-dropdown">
                            <option value="" disabled selected>View TripTreasure's Destination</option>
                            <option value="Vanuatu">Himachal Pradesh</option>
                            <option value="South Korea">Manali-Kathkuni Home</option>
                            <option value="Indonesia">Naldera-Rajasthan</option>
                            <option value="Peru">Curtorim</option>
                            <option value="Europe">Leh-Ladakh</option>
                            <option value="Europe">Kashmir</option>
                            <option value="Switzerland">Andaman</option>
                            <option value="India">Kerala</option>
                            <option value="Italy">Singapore</option>
                            <option value="India">Dubai</option>
                            <option value="India">Maldives</option>
                            <option value="India">Thailand</option>
                        </select>                        
                        
                        <!-- <input type="date" class = "form-control" placeholder="Date"> -->
                        <!-- <input type="number" class = "form-control" placeholder="Price (INR)"> -->
                        <a href = "packages2.php" input type="submit" class = "btn" value = "Search">Explore Our Packages</a>

                    </form>
                </div>
            </div>
        </header>
        <!-- header -->


<!-- About-->
<section class="page-section" id="about">
	
		<div class="text-center">
			<h2 class="section-heading text-uppercase">featured places</h2>
		</div>
		<div>
			<?php echo file_get_contents(base_app.'about.html') ?>	
		</div>
	
</section>



<!-- featured section -->


<section id = "featured" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about some places before your travel</span>
                    <h2 class = "lg-title"></h2>
                </div>

                <div class = "featured-row">
                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-reo-de-janeiro-brazil.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Reo De Janeiro, Brazil
                            </span>
                            <div>
                                <p class = "text">Rio de Janeiro, Brazil, is famous for its stunning beaches and the iconic Christ the Redeemer statue. The city is vibrant and full of life, especially during Carnival.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-north-bondi-australia.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                North Bondi, Australia
                            </span>
                            <div>
                                <p class = "text">North Bondi, Australia, is a laid-back coastal suburb known for its beautiful beach. It's a popular spot for surfers and locals looking to enjoy the ocean.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-berlin-germany.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Berlin, Germany
                            </span>
                            <div>
                                <p class = "text">Berlin, Germany, is a vibrant city rich in history and culture, famous for its dynamic art scene and iconic landmarks like the Berlin Wall.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-khwaeng-wat-arun-thailand.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Khwaeng wat arun, thailand
                            </span>
                            <div>
                                <p class = "text">Khwaeng Wat Arun, Thailand, is home to the stunning Temple of Dawn, a riverside landmark renowned for its striking spires and intricate porcelain decoration.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-rome-italy.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Rome, Italy
                            </span>
                            <div>
                                <p class = "text">Rome, Italy, is a city steeped in history, where ancient ruins like the Colosseum and the Roman Forum stand alongside Renaissance art and vibrant modern culture.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-fuvahmulah-maldives.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                fuvahmulah, maldives
                            </span>
                            <div>
                                <p class = "text">Fuvahmulah, Maldives, is a unique atoll known for its stunning beaches, and distinct one-island structure that sets it apart from the rest of the archipelago.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of featured section -->


<!-- services section -->
 
<section id = "services" class = "py-4" style="margin-top: 80px;">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about services that we offer</span>
                    <h2 class = "lg-title">Our services</h2>
                </div>

                <div class = "services-row">
                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-hotel"></i>
                        </span>
                        <h3>Luxurious Hotel</h3>
                        <p class = "text">A luxurious hotel offers unparalleled comfort and opulence, combining exquisite design with world-class amenities for an indulgent experience. Personalized service and stunning surroundings elevate the stay to a truly memorable retreat.</p>
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <h3>Trave Guide</h3>
                        <p class = "text">A travel guide provides essential tips, recommendations, and insights for exploring a destination, helping travelers make informed decisions and experience the best a location has to offer. From must-see attractions to local customs, it serves as a valuable companion for any journey.</p>
                        <a href = "packages2.php" class = "btn">Read more</a>
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-money-bill"></i>
                        </span>
                        <h3>Suitable Price</h3>
                        <p class = "text">A suitable price offers good value for money, balancing quality and affordability to meet the needs and expectations of the buyer.Finding a suitable price ensures that you get the best possible deal without compromising on the essential features or services.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of services section -->





<!-- Services-->

<section class="page-section bg-dark" id="home">
	<div class="container">
		<h2 class="text-center">Tour Packages</h2>
	<div class="d-flex w-100 justify-content-center">
		<hr class="border-warning" style="border:3px solid" width="15%">
	</div>
	<div class="row">
		<?php
		$packages = $conn->query("SELECT * FROM `packages` order by rand() limit 3");
			while($row = $packages->fetch_assoc() ):
				$cover='';
				if(is_dir(base_app.'uploads/package_'.$row['id'])){
					$img = scandir(base_app.'uploads/package_'.$row['id']);
					$k = array_search('.',$img);
					if($k !== false)
						unset($img[$k]);
					$k = array_search('..',$img);
					if($k !== false)
						unset($img[$k]);
					$cover = isset($img[2]) ? 'uploads/package_'.$row['id'].'/'.$img[2] : "";
				}
				$row['description'] = strip_tags(stripslashes(html_entity_decode($row['description'])));

				$review = $conn->query("SELECT * FROM `rate_review` where package_id='{$row['id']}'");
				$review_count =$review->num_rows;
				$rate = 0;
				while($r= $review->fetch_assoc()){
					$rate += $r['rate'];
				}
				if($rate > 0 && $review_count > 0)
				$rate = number_format($rate/$review_count,0,"");
		?>
			<div class="col-md-4 p-4 ">
				<div class="card w-100 rounded-0">
					<img class="card-img-top" src="<?php echo validate_image($cover) ?>" alt="<?php echo $row['title'] ?>" height="200rem" style="object-fit:cover">
					<div class="card-body">
					<h5 class="card-title truncate-1 w-100"><?php echo $row['title'] ?></h5><br>
					<div class=" w-100 d-flex justify-content-start">
						<div class="stars stars-small">
								<input disabled class="star star-5" id="star-5" type="radio" name="star" <?php echo $rate == 5 ? "checked" : '' ?>/> <label class="star star-5" for="star-5"></label> 
								<input disabled class="star star-4" id="star-4" type="radio" name="star" <?php echo $rate == 4 ? "checked" : '' ?>/> <label class="star star-4" for="star-4"></label> 
								<input disabled class="star star-3" id="star-3" type="radio" name="star" <?php echo $rate == 3 ? "checked" : '' ?>/> <label class="star star-3" for="star-3"></label> 
								<input disabled class="star star-2" id="star-2" type="radio" name="star" <?php echo $rate == 2 ? "checked" : '' ?>/> <label class="star star-2" for="star-2"></label> 
								<input disabled class="star star-1" id="star-1" type="radio" name="star" <?php echo $rate == 1 ? "checked" : '' ?>/> <label class="star star-1" for="star-1"></label> 
						</div>
                    </div>
    				<p class="card-text truncate"><?php echo $row['description'] ?></p>
					<div class="w-100 d-flex justify-content-end">
						<a href="./?page=view_package&id=<?php echo md5($row['id']) ?>" class="btn btn-sm btn-flat btn-warning">View Package <i class="fa fa-arrow-right"></i></a>
					</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	<div class="d-flex w-100 justify-content-end">
		<a href="./?page=packages" class="btn btn-flat btn-warning mr-4">Explore Package <i class="fa fa-arrow-right"></i></a>
	</div>
	</div>
</section>


        <!-- testimonials section -->
        <section id = "testimonials" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">what our clients say about us</span>
                    <h2 class = "lg-title">testimonials</h2>
                </div>

                <div class = "test-row">
                    <div class = "test-item">
                        <p class = "text">A trip to Brazil offers an unforgettable blend of vibrant culture, stunning landscapes, and rich history. From the lively rhythms of Rio de Janeiro's Carnival to the awe-inspiring Amazon Rainforest, Brazil is a feast for the senses.</p>
                        <div class = "test-item-info">
                            <img src = "images/review3.png" alt = "testimonial">
                            <div>
                                <h3>Tamanna Parmar</h3>
                                <p class = "text">Trip to Brazil</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">A trip to the Maldives promises idyllic overwater bungalows, crystal-clear turquoise waters, and pristine white-sand beaches, perfect for a luxurious escape and vibrant marine life encounters.</p>
                        <div class = "test-item-info">
                            <img src = "images/review2.png" alt = "testimonial">
                            <div>
                                <h3>Manasvi Mehta</h3>
                                <p class = "text">Trip to Maldives</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">A trip to Thailand offers a vibrant mix of stunning beaches, rich cultural experiences, bustling markets, and exquisite cuisine, making it a captivating destination for adventure and relaxation.</p>
                        <div class = "test-item-info">
                            <img src = "images/test-3.jpg" alt = "testimonial">
                            <div>
                                <h3>Hasti Gadhiya</h3>
                                <p class = "text">Trip to Thailand</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of testimonials section -->

       <!-- Video Section -->
<section id="video">
    <div class="video-wrapper flex">
        <video id="video-element" loop muted>
            <source src="videos/video-section.mp4" type="video/mp4">
        </video>
        <button type="button" id="play-btn">
            <i class="fas fa-play"></i>
        </button>
    </div>
</section>


<script>
    const video = document.getElementById("video-element");
    const playButton = document.getElementById("play-btn");
    const playIcon = playButton.querySelector("i");

    playButton.addEventListener("click", () => {
        if (video.paused) {
            video.play();
            playIcon.classList.remove("fa-play");
            playIcon.classList.add("fa-pause");
        } else {
            video.pause();
            playIcon.classList.remove("fa-pause");
            playIcon.classList.add("fa-play");
        }
    });
</script>
<!-- End of Video Section -->







<!-- Contact-->
<section class="page-section" id="contact">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Contact Us</h2>
			<h3 class="section-subheading text-muted">Send us a message for inquiries.</h3>
		</div>
		<!-- * * * * * * * * * * * * * * *-->
		<!-- * * SB Forms Contact Form * *-->
		<!-- * * * * * * * * * * * * * * *-->
		<!-- This form is pre-integrated with SB Forms.-->
		<!-- To make this form functional, sign up at-->
		<!-- https://startbootstrap.com/solution/contact-forms-->
		<!-- to get an API token!-->
		<form id="contactForm" >
			<div class="row align-items-stretch mb-5">
				<div class="col-md-6">
					<div class="form-group">
						<!-- Name input-->
						<input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required />
					</div>
					<div class="form-group">
						<!-- Email address input-->
						<input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
					</div>
					<div class="form-group mb-md-0">
						<input class="form-control" id="subject" name="subject" type="subject" placeholder="Subject *" required />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group form-group-textarea mb-md-0">
						<!-- Message input-->
						<textarea class="form-control" id="message" name="message" placeholder="Your Message *" required></textarea>
					</div>
				</div>
			</div>
			<div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
		</form>
	</div>
</section>
<script>
$(function(){
	$('#contactForm').submit(function(e){
		e.preventDefault()
		$.ajax({
			url:_base_url_+"classes/Master.php?f=save_inquiry",
			method:"POST",
			data:$(this).serialize(),
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("an error occured",'error')
				end_loader()
			},
			success:function(resp){
				if(typeof resp == 'object' && resp.status == 'success'){
					alert_toast("Inquiry sent",'success')
					$('#contactForm').get(0).reset()
				}else{
					console.log(resp)
					alert_toast("an error occured",'error')
					end_loader()
				}
			}
		})
	})
})
</script>
</body>
</html>