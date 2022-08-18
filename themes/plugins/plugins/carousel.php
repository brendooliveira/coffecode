<div class="container">

    <div class="carousel owl-carousel owl-theme">
        <div class="card bg-dark border-20">
            <div class="card-body text-white text-center">
                CAROUSEL 1
            </div>
        </div>


        <div class="card bg-dark border-20">
            <div class="card-body text-white text-center">
                CAROUSEL 2
            </div>
        </div>
    </div>

</div>

<script>
    $('.carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autoplay:true,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>