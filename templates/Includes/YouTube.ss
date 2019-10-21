<% require css('weboftalent/silverstripe-shortcode-youtube: css/youtube.css') %>
<div class='embed-container'>
    <iframe src='$URL.RAW' frameborder='0' allowfullscreen>
    </iframe>
    <% if $Caption %><p class="caption">$Caption</p><% end_if %>
</div>
