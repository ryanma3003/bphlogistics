<div class="widget widget-socials widget-socials-style3">
    <ul>
        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
       target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://pinterest.com/pin/create/button/?{{ 
        http_build_query([
            'url' => $url,
            'media' => $image,
            'description' => $description
        ]) 
        }}" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
        <li><a href="https://plus.google.com/share?url={{ urlencode($url) }}"
       target="_blank"><i class="fa fa-google"></i></a></li>
    </ul>
</div><!-- /widget-socials -->