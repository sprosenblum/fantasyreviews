<!-- Footer -->
<footer class="text-center text-white" style="background-color: #3f51b5">
    <!-- Grid container -->
    <div class="container">
        <section class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-4">
            <!-- Grid column -->
            <div class="col-md-2">
                <h6 class="font-weight-bold">
                    <a href="<?php echo home_url(); ?>" class="text-white">Home</a>
                </h6>
            </div>

            <!-- Grid column -->
            <div class="col-md-2">
                <h6 class="font-weight-bold">
                    <a href="/bookreviews/category-custom-page/?category=2" class="text-white">Children</a>
                </h6>
            </div>

        <!-- Grid column -->
            <div class="col-md-2">
                <h6 class="font-weight-bold">
                    <a href="/bookreviews/category-custom-page/?category=4" class="text-white">Young-Adult</a>
                </h6>
            </div>

        <!-- Grid column -->
            <div class="col-md-2">
                <h6 class="font-weight-bold">
                    <a href="/bookreviews/category-custom-page/?category=3" class="text-white">Adult</a>
                </h6>
            </div>

            <!-- Grid column -->
            <div class="col-md-2">
                <h6 class="font-weight-bold">
                    <a href="#!" class="text-white">Contact</a>
                </h6>
            </div>

    </div>
        <!-- Grid row-->
        </section>
</div>
<!-- Copyright -->
<div
    class="text-center p-3"
    style="background-color: rgba(0, 0, 0, 0.2)"
    >
    <?php echo (new DateTime)->format('Y'); ?> &copy;
    Fantasy Reviews - Site by
      <a href="#" target="_blank">Sarah Rosenblum</a>
</div>

</footer>


<?php wp_footer(); ?>