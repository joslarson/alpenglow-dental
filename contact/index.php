<?php
$PAGE = 'contact';
include('../_header.php');
?>
    <div class="hero"></div>
    <section>
        <h1>Contact Us</h1>

        <div class="address-wrapper">
            <address>
                <h2>Address</h2>
                Alpenglow Dental<br/>
                3000 Hospital Way<br/>
                Whitefish, MT 59937
            </address>

            <address>
                <h2>Phone</h2>
                (406) 862-3839<br/>
                (406) 892-5668
            </address>

            <address>
            </address>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2650.0478015261224!2d-114.33093600000001!3d48.3788179999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5366429ccde8ca47%3A0x4a1b3301e0aee387!2sAlpenglow+Dental!5e0!3m2!1sen!2sus!4v1411238039890" width="100%" height="500" frameborder="0" style="border:0"></iframe>
        <script type="text/javascript">$(function(){
            var iframe = $('iframe');
            iframe.attr('height', (iframe.outerWidth() * (2/3)));
            $( window ).resize(function() {
                iframe.attr('height', (iframe.outerWidth() * (2/3)));
            });
        });</script>
    </section>
<?php include('../_footer.php'); ?>