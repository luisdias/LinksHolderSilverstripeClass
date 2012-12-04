$Content
$Form
$PageComments
<% if Links %>
    <ul class="ss-links-holder">
    <% control Links %>
        <li><a href="$SiteUrl" target="blank">$SiteName</a></li>
    <% end_control %>
    </ul>
<% else %>
    <p>No links</p>
<% end_if %>