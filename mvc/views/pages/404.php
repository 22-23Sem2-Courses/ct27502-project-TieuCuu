<div>
    <h1 class="mt-5"><?php echo $data["message"] ?? "Page not found" ?></h1>
    <section class="error-container">
        <span class="four"><span class="screen-reader-text">4</span></span>
        <span class="zero"><span class="screen-reader-text">0</span></span>
        <span class="four"><span class="screen-reader-text">4</span></span>
    </section>
    <div class="link-container">
        <a href="<?php echo BASE_URL_PATH . "Home" ?>" class="more-link">Home Page</a>
    </div>
</div>

<style type="text/css">
    @import url(<?php echo BASE_URL_PATH . "assets/css/404.css" ?>);
</style>