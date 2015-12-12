        <footer>
            <ul>
                <li>
                    <a href="https://twitter.com/jensandersson92" alt="Twitter" target="_blank" class="twitter fa fa-twitter"></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/profile/view?id=282888602" alt="Linkedin" target="_blank" class="linkedin fa fa-linkedin"></a>
                </li>
                <li>
                    <a href="http://stackoverflow.com/users/1410735/someone?tab=profile" alt="Stackoverflow" target="_blank" class="stackoverflow fa fa-stack-overflow"></a>
                </li>
                <li>
                    <a href="https://github.com/Someone92" alt="Github" target="_blank" class="github fa fa-github"></a>
                </li>
                <li>
                    <a href="http://codepen.io/Someone92/" alt="Codepen" target="_blank" class="codepen fa fa-codepen"></a>
                </li>
            </ul>
            <div class="email">
                <a href="mailto:jensandersson112@gmail.com" alt="jensandersson112@gmail.com">jensandersson112@gmail.com</a>
            </div>
            <div class="copyright">
                &copy; 2015 -
                <a href="#">Jensandersson.nu</a>
            </div>
        </footer>
    <!-- JS -->
    <script src="js/jquery.2.1.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Navigation Click
            $("nav a[href^='#']").on('click', function(e) {
                e.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 300, function() {
                    window.location.hash = hash;
                });
            });

            // Responsive menu
            $(".hamburger").click(function() {
                $(this).toggleClass("clicked");
            });
        });
    </script>
    </body>
</html>
<?php include("include/db/db_close.php") ?>