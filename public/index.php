<?php readfile('http://www.startribune.com/templates/vh?vid=236193971&sosp=/politics'); ?>

<link rel="stylesheet" href="css/base.css" />

<div class='graphic'>
  <div class='sentence'>

    <form class='form-inline'>
      If I donated
      <div id='amount-wrapper' class='col-md-2 form-group input-group'>
        <span class="input-group-addon">$</span>
        <input type='text' id='amount' class='form-control' value='100' />
      </div>
      to
      <div id='pac-wrapper' class='form-group'>
        <select class='form-control combobox'></select>
      </div>
    </form>
  </div>

  <div id='sentence-results-target'></div>

  <div class='notes'>Based on average spending between PACs in last three election cycles (2006-2012).</div>
  <div class='notes'>Donations calculated to be less than $0.01 are not shown.</div>
  <div class='notes'>Source: Star Tribune analysis of Minnesota Campaign Finance and Disclosure Board data</div>
</div>

<script id='sentence-results-template' type='text/template'>
<% _.each(amounts, function(d) { %>
  <div class='amount<% if (d.pacid === initialSrc) { %> initial-src<% } %>'>
    <span class='value'>
      <%= d.amountFormatted %>
    </span>
    <% if (d.pacid === initialSrc) { %>
      was spent directly by
    <% } else { %>
      went to
    <% } %>
    <span class='committee'>
      <%= d.pac.Committee %>
    </span>
    <div class='info'>
      A <span class='info-value'><%= d.pac.cat2 %> <%= d.pac.stype %></span> based in <span class='info-value'><%= d.pac.CommCity %>, <%= d.pac.CommState %></span>.
    </div>
    <div class='info'>
      Spent <span class='info-value'><%= d.pac.spentFormatted %></span> over the past three election cycles.
    </div>
    <div class='info'>
      Raised <span class='info-value'><%= d.pac.receivedFormatted %></span> in the same time period.
    </div>
    <div class='info'>
      Had <span class='info-value'><%= d.pac.endcash2012 %></span> on hand at the end of 2012.
    </div>
  </div>
<% }); %>
</script>

<script src="lib/d3.v3.js" type="text/javascript" charset="utf-8"></script>
<script src="lib/underscore-min.js" type="text/javascript" charset="utf-8"></script>
<script src="lib/queue.v1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="lib/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="lib/bootstrap-combobox.js" type="text/javascript" charset="utf-8"></script>
<script src="js/base.js" type="text/javascript" charset="utf-8"></script>

<?php readfile('http://www.startribune.com/templates/vf?vid=236193971&sosp=/politics'); ?>

