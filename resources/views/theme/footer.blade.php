<div class="footer-grid">
    <div class="links">
        <ul>
            <li><a href="/privacy">PRIVACY</a></li>
            <li><a href="/articles">CONTACT</a></li>
            <li><a href="/contact">SUBSCRIBE</a></li>
            @if(Auth::check())
                <li><a href="/nova">NOVA</a></li>
            @else
                <li><a href="/login/google">LOG IN</a></li>
            @endif
        </ul>
    </div>
    <div class="copyright">
        &copy; 2016-{{ now()->year }} Beyond Attraction. All Rights Reserved.
    </div>
    <div class="social">
        <div class="facebook">
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="instagram">
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="mail">
            <a href="mailto:email@byeondattraction.net" target="_blank"><i class="far fa-envelope"></i></a>
        </div>
    </div>
</div>
<script type="text/javascript">
  $('.nav-grid-button').click(
    function() {
      let menu = $('#menu');
      
      if (!menu.hasClass('show')) {
        menu.addClass('show');
      } else {
        menu.removeClass('show');
      }
    }
  );

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    //>=, not <=
    if (scroll >= 100) {
      $(".menu-grid").addClass("opaque");
    }

    if (scroll === 0) {
      $(".menu-grid").removeClass("opaque");
    }
  });
</script>