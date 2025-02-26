<?php

// Template Name: part3

?>

<?php
$BookTrip = get_field('book_trip');
$Steps = get_field('steps');
$StepsDescription = get_field('steps_description');
$PeopleSay = get_field('people_say');
$Images3 = get_field('3_image');
$Joe = get_field('-jeo_stanlee');
$SubText = get_field("sub_text");
$serviceText = get_field("service_text");
$serviceText2 = get_field('service_text_2');
$serviceCards = get_field('service_cards');
$destinationText = get_field('destination_text');
$destionationCards = get_field('destination_cards');
$ourService = get_field("our_services");
$service = get_field("service");
$packageButtons = get_field('packages_buttons');
$packageCardsInsides = get_field('package_cards_insides');


// ---------------------------------------

// Avoid potential undefined index errors using `?? ''`
$Book1Image = $BookTrip['book_1']['book_1_image'] ?? '';
$Book1title = $BookTrip['book_1']['book_1_title'] ?? '';
$Book1text = $BookTrip['book_1']['book_1_text'] ?? '';

$Book2Image = $BookTrip['book_2']['book_2_image'] ?? '';
$Book2title = $BookTrip['book_2']['book_2_title'] ?? '';
$Book2text = $BookTrip['book_2']['book_2_text'] ?? '';

$Book3Image = $BookTrip['book_3']['book_3_image'] ?? '';
$Book3title = $BookTrip['book_3']['book_3_title'] ?? '';
$Book3text = $BookTrip['book_3']['book_3_text'] ?? '';

// ---------------------------------------

$Left = $Images3['left'] ?? ''; 
$Middle = $Images3['middle'] ?? '';
$Right = $Images3['right'] ?? '';

// ---------------------------------------

$profilePicture = $Joe['profile_picture'] ?? '';
$talk = $Joe['talk'] ?? '';
$author = $Joe['author'] ?? '';

// ---------------------------------------



// echo '<pre>';
// var_dump($packageButtons);
// echo '</pre>';

// echo '<pre>';
// var_dump($packageCardsInsides);
// echo '</pre>';

?>

<main>

    <!----------------- header, our servece - ვახო -------------------->
    <?php get_header()?>

    <section class="home-section-2">
        <div class="container-for-service">
            <h2 class="secondary-title portfolio-text-center">Our Service</h2>
            <div class="service">
                <?php 
                    foreach ($service as $card) {
                        echo '
                        <div class="service-card">
                            <div class="service-card-header">
                                <div class="service-card-img">
                                    <img src="' . esc_url($card['service_images']) . '" alt="' . esc_attr($card['service_title']) . '">
                                </div>
                                <h3 class="service-card-title">
                                    ' . esc_html($card['service_title']) . '
                                </h3>
                            </div>
                            <p class="service-card-text">
                                ' . esc_html($card['service_small_text']) . '
                            </p>                    
                        </div>';
                    }
                ?>  
            </div>
        </div>
    </section>



    <!----------------- best service - ნუცა -------------------->
    <section class="best-service" id="best-service">
        <div class="best-service-parts">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/worldmap.png" alt="Image 1">
            <div class="best-service-text">
                <h2><?php echo $serviceText;?></h2>
                <p><?php echo $serviceText2;?></p>
            </div>


            <div class="service-cards">
                <?php
                    foreach ($serviceCards as $card) {
                        echo '
                        <div class="cards-insides">
                            <img src="' . esc_url($card['image1'] ?? $card['image2'] ?? $card['image3'] ?? $card['image4'] ?? '') . '" alt="Service Image">
                            <p class="numbers">' . $card['numbers'] . '</p>
                            <div>
                                <p class="nub-descriptions">' . $card['cards_text'] . '</p>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </section>


    <!----------------- popular destinations, best packages - ხატია -------------------->

    <section class="popular-destionations">

        <div class="popular-destionation-parts">
            <h2><?php echo $destinationText?></h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/worldmap.png" alt="Image 1">
            <div class= "dots1">
                <div></div>
            </div>
            <div class= "dots2">
                <div></div>
            </div>
            <div class= "dots3">
                <div></div>
            </div>
            <div class="popular-destionation-parts-cards-container">
                <?php 
                    foreach($destionationCards as $card) {
                        echo '
                        <div class="popular-destionation-parts-cards">
                            <img src="'. $card["image"] .'" alt="">
                            <p class="destination-text">'.  $card["destination"] .' </p>
                            <div>
                                <p class="spot-text">'.  $card["spots"] .'</p>
                            </div>
                            <a href="' . site_url('/popular-destinations-page/') . '">
                                <img src="' . get_template_directory_uri() . '/assets/images/ic_round-navigate-next.png" alt="next">
                            </a>
                        </div>';
                    } 
                ?>
            </div>
        </div>
        
    </section>



    <section class='mainwp-container' id="mainwp-container">
        <div class="container1">
            <div class="best-packages-for-you">

                <h2>Best Packages For You</h2>

                <div class="packages-buttons">
                    <?php
                        if ($packageButtons && is_array($packageButtons)) {
                            foreach ($packageButtons as $button_text) {
                                echo '<button>' . htmlspecialchars($button_text) . '</button>';
                            }
                        }
                    ?>


                </div>

                <div class="tour-cards">
                    <?php
                    if ($packageCardsInsides && is_array($packageCardsInsides)) :
                        foreach ($packageCardsInsides as $package) : ?>
                            <div class="tour-card">
                                <img src="<?php echo esc_url($package['package_card_image']); ?>" alt="Tour Image">

                                <div class="tour-card-info">
                                    <div class="time-price">
                                        <p><?php echo esc_html($package['duration']); ?></p>
                                        <p><?php echo esc_html($package['price']); ?></p>
                                    </div>
                                    <p><?php echo esc_html($package['package_description']); ?></p>
                                    <div class="countries-more">
                                        <div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ep_location.png" alt="Location Icon">
                                            <p><?php echo esc_html($package['countries']); ?></p>
                                        </div>
                                        <p><?php echo esc_html($package['know_more']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;
                    endif;
                    ?>
                </div>
                
                <button>Discover More</button>
            </div>
        </div>   
    </section>
               
    
    <!----------------- book your next trip, what people say, subscribe, footer - შალვა -------------------->
    
    <section class="book-your-next-trip">
        <div class="propertis">
            <h2><?php echo $Steps; ?></h2>
            <p><?php echo $StepsDescription; ?></p>

            <div class="properties-outer">
                <div class="to-do-list">

                <?php
                    foreach ($BookTrip as $book) {
                        echo '
                        <div class="to-do">
                            <img src="' . esc_url(current($book)) . '" alt="">
                            <div class="to-do-text">
                                <p>' . htmlspecialchars(next($book)) . '</p>
                                <p>' . htmlspecialchars(next($book)) . '</p>
                            </div>
                        </div>';
                    }
                ?>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image (1).png" alt="Image 1">
            </div>
        </div>
    </section>


    <section class="what-people-say">
        <h2><?php echo $PeopleSay?></h2>
        <div class="iamges-3">
            <img src="<?php echo $Left;?>" alt="">
            <img src="<?php echo $Middle;?>" alt="">
            <img src="<?php echo $Right;?>" alt="">
        </div>
       
        <div class="people">
            <img src="<?php echo $profilePicture;?>" alt="">
            <div class="he-says">
                <p><?php echo $talk;?></p>
            </div>
            
            <p class="saxeli-gvari"><?php echo $author;?></p>
        </div>
    </section>
    

    <section class="subscribe">
        <div class="sub">
            <div class="input-container">
                <div>
                    <p><?php echo $SubText;?></p>
                </div>
                <div class="subscribe-field">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 46.png" alt="Image 2">
                    <input type="text" name="username" placeholder="Enter your name">
                    <a href="<?php echo site_url('/subscribe-page/'); ?>" class="btn">
                        <button type="button">Subscribe</button>
                    </a>

                </div>
                
            </div>

            <img class="telegram" src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 77.png" alt="Image 2">
            <img class="bottom-cycles" src="<?php echo get_template_directory_uri(); ?>/assets/images/Mask Group.png" alt="Image 2">
            <img class="top-cycles" src="<?php echo get_template_directory_uri(); ?>/assets/images/Mask Group (1).png" alt="Image 3">
            <img class="dots" src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 5.png" alt="Image 4">
        </div>
    </section>

   
    <?php
        get_footer();
    ?>
</main>



