<% require css('weboftalent/silverstripe-shortcode-youtube: css/youtube.css') %>
<div class='embed-container'>
    <iframe src='https://www.youtube.com/embed/{$YouTubeID}<% if $AutoPlay %>&AutoPlay=1<% end_if %>' frameborder='0' allowfullscreen>
    </iframe>
    <% if $Caption %><p class="caption">$Caption</p><% end_if %>
</div>
