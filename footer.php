<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package resprolabs
 */
?>

<footer class="footer-wrapper">

    <div class="row footer">
        <div class="medium-6 large-3 columns">
            <nav class="footer-menu">
                <h5 class="footer-title">Quick Links</h5>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Workshops</a></li>
                    <li><a href="">Learn</a></li>
                    <li><a href="">Gallery</a>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Workshops</a>
                                <ul>
                                    <li><a href="">Home</a></li>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Workshops</a>
                                        <ul>
                                            <li><a href="">Home</a></li>
                                            <li><a href="">About Us</a></li>
                                            <li><a href="">Workshops</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="medium-6 large-3 columns">
            <nav class="footer-menu">
                <h5 class="footer-title">Quick Links</h5>
                <ul>
                    <li><a href="">Career</a></li>
                    <li><a href="">Feedback</a></li>
                    <li><a href="">Sitemap</a></li>

                </ul>
            </nav>
        </div>
        <div class="clearfix visible-for-medium-down"></div>
        <div class="medium-6 large-3 columns">
            <h5 class="footer-title">Contact</h5>
            <p>
                No.123, Chennai <br/>
                Tamilnadu, <br/>
                India
            </p>
        </div>
        <div class="medium-6 large-3 columns">
            <h5 class="footer-title">Contact</h5>
            <p>
                P : 987654321<br/>
                E : test@resprolabs.com <br/>
                E : test@resprolabs.com <br/>

            </p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>


<script>
    $(function(){
        $(".widget li").prepend("<span class='fa fa-chevron-right' ></span>");
    });
</script>

</body>
</html>
