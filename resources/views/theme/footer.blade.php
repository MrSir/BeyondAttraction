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
            <a href="#" target="_blank"><span class="fab fa-facebook"></span></a>
        </div>
        <div class="youtube">
            <a href="#" target="_blank"><span class="fab fa-youtube"></span></a>
        </div>
        <div class="instagram">
            <a href="#" target="_blank"><span class="fab fa-instagram"></span></a>
        </div>
        <div class="twitter">
            <a href="#" target="_blank"><span class="fab fa-twitter-square"></span></a>
        </div>
    </div>
</div>