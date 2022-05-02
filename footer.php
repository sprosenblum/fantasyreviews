<footer class="">
        <div class="row">
        	<div class="col-md-3">
                <p class="fs-6">
                    ©<?php echo date("Y"); ?>
                    Fantasy Reviews
                </p>
            </div>
        	<div class="col-md-4">
            	<h4>Menu</h4>
            	<div class="col-md-6">

                    <a class="nav-link active" aria-current="page" href="
                            <?php echo home_url(); ?>
                            ">Home
                    </a>

                    <a class="nav-link active" href=
                            "/bookreviews/category-custom-page/?category=4">
                            Children
                    </a>


                    <a class="nav-link active" href=
                            "/bookreviews/category-custom-page/?category=2">
                            Young-Adult
                    </a>


                    <a class="nav-link active" href=
                            "/bookreviews/category-custom-page/?category=3">
                            Adult
                    </a>


                </div>
            </div>
        </div>


    </footer>

<?php wp_footer(); ?>