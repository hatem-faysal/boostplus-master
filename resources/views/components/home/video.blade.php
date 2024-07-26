<div class="video-content-bg"
    style="background-image:url({{ asset($data->getFirstMediaUrl('Page') )}})">
    <div class="bg-overlay"></div>
    <a href="{{ $data->route }}" class="video-play-button popup-youtube pointer-large">
        <span></span>
    </a>
</div><!-- video-content-bg end -->