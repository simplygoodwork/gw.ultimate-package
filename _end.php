        <div id="footer" role="contentinfo">

            <p class="copyright">&copy; <?php echo date('Y') ?> Site name</p>
            <p class="credit">Site by <a href="http://erskinedesign.com/">Erskine Design</a></p>

        </div> <!-- // #footer -->

    </div> <!-- // #page -->

    <!-- JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="/static/js/EDJ.js"></script>

    <!-- CALL DOC READY FUNCTIONS -->
    <script>
    $(document).ready(function() {
        var settings = {
            debug: true,
            STATIC_URL: '/static/'
        };
        EDJ.on_ready(settings);
    });
    </script>

    </body>
</html>
