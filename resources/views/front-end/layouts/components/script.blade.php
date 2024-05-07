<!-- Vendor JS Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="{{ asset('front-end/bootslander/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('front-end/bootslander/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('front-end/bootslander/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{ asset('front-end/bootslander/vendor/php-email-form/validate.js')}}"></script>
<script src="{{ asset('front-end/bootslander/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{ asset('front-end/bootslander/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('front-end/bootslander/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('front-end/bootslander/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('front-end/bootslander/vendor/aos/aos.js')}}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('front-end/bootslander/js/main.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#submit').click(function() {
            $.ajax({
                
                method: "POST",
                data: $('#message-form').serialize(),
                beforeSend: function() {
                    console.log($('#message-form').serialize());
                    $('.loading').html(
                        '<div class="sent-message text-center" >Loading response...</div>'
                    );
                },
                success: function(response) {
                    $('.loading').html(
                        '<div class="sent-message text-center">Your message has been sent. Thank you!</div>'
                    );
                    $('#name').val('');
                    $('#email').val('');
                    $('#subject').val('');
                    $('textarea').val('')
                    setTimeout(() => {
                        $('.loading').html(
                            '<div class="sent-message text-center"></div>');
                    }, 3000);
                }
            });
        });
    });
</script>

</body>

<!-- jQuery CDN Link -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap 5 JS CDN Links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

<!-- Owl Carousel JS Links-->
<script src="{{ asset('front-end/bootslander/vendor/owl.carousel/assets/owl.carousel.min.css') }}"></script>

<!-- custom js file link  -->
<script src="{{ asset('front-end/bootslander/js/custom.js') }}"></script>

</html>
