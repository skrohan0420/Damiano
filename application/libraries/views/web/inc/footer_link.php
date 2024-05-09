<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/lib/easing/easing.min.js"></script>
<script src="<?= base_url() ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url() ?>assets/lib/counterup/counterup.min.js"></script>
<script src="<?= base_url() ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url() ?>assets/js/main.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var navbarToggler = document.querySelector('.navbar-toggler');
        var navbarCollapse = document.getElementById('navbarCollapse');
        var navbarCloseButton = document.querySelector('.navbar-close');

        // Toggle navbar on clicking the toggler
        navbarToggler.addEventListener('click', function (event) {
            event.stopPropagation();
            navbarCollapse.classList.toggle('show');
        });

        // Close navbar on clicking the close button
        navbarCloseButton.addEventListener('click', function () {
            navbarCollapse.classList.remove('show');
        });

        // Close navbar when clicking outside of it
        document.addEventListener('click', function (event) {
            if (!navbarCollapse.contains(event.target) && !navbarToggler.contains(event.target)) {
                navbarCollapse.classList.remove('show');
            }
        });

        // Prevent closing when clicking inside the navbar
        navbarCollapse.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    });
</script>

<script>
    var youtubeIframe = document.getElementById('youtube-video');

    youtubeIframe.addEventListener('click', function () {
        var iframeSrc = youtubeIframe.src;
        youtubeIframe.src = iframeSrc.replace("&mute=1", "&mute=0");
    });
</script>

<script>
    // JavaScript to toggle the sub action buttons
    document.addEventListener('DOMContentLoaded', function () {
        var mainFab = document.getElementById('customFabMain');
        var fabOptions = document.querySelector('.custom-fab-options');

        mainFab.addEventListener('click', function () {
            // Toggle display of the sub action buttons
            fabOptions.style.display = fabOptions.style.display === 'none' ? 'block' : 'none';
        });

        // Optional: Hide sub action buttons when clicking anywhere else on the page
        document.addEventListener('click', function (event) {
            if (!mainFab.contains(event.target) && !fabOptions.contains(event.target)) {
                fabOptions.style.display = 'none';
            }
        });
    });  
</script>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        var music = document.getElementById("background-music");
        var button = document.getElementById("music-toggle");

        // Delay the autoplay
        setTimeout(() => {
            music.volume = 0.3; // Set the volume between 0 (silent) and 1 (maximum)
            music.play()
                .then(() => {
                    // Autoplay started
                    button.textContent = 'Pause Music';
                    button.style.display = 'block';
                })
                .catch(e => {
                    // Autoplay was prevented
                    console.log('Autoplay was prevented.');
                    button.textContent = 'Want Play a Music?';
                    button.style.display = 'block';
                });
        }, 3000); // Delay in milliseconds (3000ms = 3s)

        // Hide the button after 20 seconds
        setTimeout(() => {
            button.style.display = 'none';
        }, 20000); // 20 seconds delay
    });

    // Function to play/pause the music
    function toggleMusic() {
        var music = document.getElementById("background-music");
        var button = document.getElementById("music-toggle");

        if (music.paused) {
            music.play();
            button.textContent = 'Pause Music';
        } else {
            music.pause();
            button.textContent = 'Want Play a Music?';
        }
    }
</script>

<?php

if (!empty($footer_link)) {
    foreach ($footer_link as $link) {
        echo "<script src='" . base_url() . "assets/js/" . $link . "'></script>";
    }

}
?>
</body>

</html>