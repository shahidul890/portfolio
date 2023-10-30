<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

    $('.owl-carousel').owlCarousel({
        loop:true,
        items: 1,
        margin:0,
        nav:false,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
    })

    window.addEventListener('load', function() {
        const preloader = document.getElementById('preloader');
        // const content = document.getElementById('content');

        // Hide preloader and show content
        preloader.style.display = 'none';
        // content.style.display = 'block';
    });
</script>

@stack('script')