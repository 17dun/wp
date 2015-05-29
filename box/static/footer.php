    <div class="wrap footer"> <?php if ( get_option('com_copyright') ) { echo stripslashes(get_option('com_copyright'));} ?></div>

    <script>
        $(document).ready(function(){
        $('#slides').slides({
            preload: true,
            preloadImage: 'images/ajax-loader.gif',
            effect: 'slide',
            play: 5000,
            pause: 2500,
            hoverPause: true
        });
    });
    </script>

</body>
</html>