<?php $this->view("showcase/header", $data); ?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary"><?= $data['image']->title?></h2>
        </div>
        <div class="row tm-mb-90">            
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <img src="<?=ROOT . $data['image']->image?>" alt="Image" class="img-fluid">
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <h3 class="tm-text-gray-dark mb-3" style="font-family: Snell Roundhand, cursive";>Photography Quotes</h3>
                    <br>
                    <p class="mb-4" style="font-family: ABookman, URW Bookman L, serif";>
                        "Photography takes an instant out of time, altering life by holding it still."
                    </p>
                    <p style="font-family:American Typewriter, serif";>~Dorothea Lange</p>
                    <br>
                    <p class="mb-4"style="font-family: ABookman, URW Bookman L, serif";>
                        "There is only you and your camera. The limitations in your photography are in yourself, for what we see is what we are."
                    </p>
                    <p style="font-family:American Typewriter, serif";>~Ernst Haas</p> 
                    <br>
                    <p class="mb-4" style="font-family: ABookman, URW Bookman L, serif";>
                        "It’s one thing to make a picture of what a person looks like; it’s another thing to make a portrait of who they are."
                    </p>
                    <p style="font-family:American Typewriter, serif";>~Paul Caponigro</p>                   
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Related Photos
            </h2>
        </div>
        <div class="row mb-3 tm-gallery">
            <?php
                if(is_array($data['random_images'])){

                    foreach ($data['random_images'] as $row) {
                        # code...
                        $this->view("showcase/single_image",$row); 
                    }
                }
            ?>        
        </div> <!-- row -->
    </div> <!-- container-fluid, tm-container-content -->

    <?php $this->view("showcase/footer"); ?>
    
  
