<!-- Footer -->
<div class="footer">
    <div class="container">

        <div class="footer-info">
            <div class="col-md-3 col-sm-3 footer-info-grid newsletter wow fadeInLeft animated" data-wow-delay=".5s">
                <h4>NEWSLETTER</h4>
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>

                <form action="#" method="post" class="newsletter">
                    <input class="email" type="email" placeholder="Your email...">
                    <input type="submit" class="submit" value="">
                </form>
            </div>
            <div class="col-md-6 col-sm-6 footer-info-grid address animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                <h4>ADDRESS</h4>
                <address>
                    <ul>
                        <li>Quis autem vel</li>
                        <li>Sydney, Australia</li>
                        <li>Telephone : +2 (354) 456-78950</li>
                        <li>Email : <a class="mail" href="mailto:mail@example.com">info@example.com</a></li>
                    </ul>
                </address>
            </div>
           
            <div class="col-md-3 col-sm-3 footer-info-grid social wow fadeInRight animated" data-wow-delay=".5s">
                <h4>Follow Us</h4>
                <ul>
                    <li><a href="#"><span class="fa"> </span></a></li>
                    <li><a href="#"><span class="tw"> </span></a></li>
                    <li><a href="#"><span class="g"> </span></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="copyright animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
            <p>&copy; 2016 Arbitrary . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
        </div>

    </div>
</div>
<!-- //Footer -->
<script>
  CKEDITOR.replace('editor1');
</script>
<script>

</script>
<script>$(".form").validate();</script>
<script type="text/javascript">
  jssor_1_slider_init = function () {

      var jssor_1_options = {
          $AutoPlay: 1,
          $Idle: 2000,
          $SlideEasing: $Jease$.$InOutSine,
          $ArrowNavigatorOptions: {
              $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
              $Class: $JssorBulletNavigator$
          }
      };

      var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

      /*#region responsive code begin*/
      /*remove responsive code if you don't want the slider scales while window resizing*/
      function ScaleSlider() {
          var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
          if (refSize) {
              refSize = Math.min(refSize, 980);
              jssor_1_slider.$ScaleWidth(refSize);
          }
          else {
              window.setTimeout(ScaleSlider, 30);
          }
      }
      ScaleSlider();
      $Jssor$.$AddEvent(window, "load", ScaleSlider);
      $Jssor$.$AddEvent(window, "resize", ScaleSlider);
      $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
      /*#endregion responsive code end*/
  };
  
  
</script>
<style>
    /* jssor slider loading skin double-tail-spin css */

    .jssorl-004-double-tail-spin img {
        animation-name: jssorl-004-double-tail-spin;
        animation-duration: 1.2s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-004-double-tail-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    .jssorb052 .i {position:absolute;cursor:pointer;}
    .jssorb052 .i .b {fill:#000;fill-opacity:0.3;stroke:#fff;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.7;}
    .jssorb052 .i:hover .b {fill-opacity:.7;}
    .jssorb052 .iav .b {fill-opacity: 1;}
    .jssorb052 .i.idn {opacity:.3;}

    .jssora053 {display:block;position:absolute;cursor:pointer;}
    .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
    .jssora053:hover {opacity:.8;}
    .jssora053.jssora053dn {opacity:.5;}
    .jssora053.jssora053ds {opacity:.3;pointer-events:none;}
</style>
<script type="text/javascript">jssor_1_slider_init();</script>


</body>
</html>