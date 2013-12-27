<?php readfile('http://www.startribune.com/templates/vh?vid=236193971&sosp=/politics'); ?>

<link rel="stylesheet" href="css/base.css" />
<style>
.fallback {
  display: none;
}
.fallback-info {
  width: 100%;
  padding: 10px 20px;
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 18px;
  background-color: #AAC2AF;
  margin: 60px auto;
}
</style>
<!--[if lte IE 8]>
<style>
.fallback {
  display: block !important;
}
.sentence {
  display: none;
}
</style>
<![endif]-->


<div class='graphic'>
  <div class="fallback fallback-info">Interactive portions of this graphic are not available in this version of Internet Explorer.</div>
  <img class='fallback' src='img/fallback.png' alt='fallback' />
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

  <div class='notes'>Based on average spending between PACs in last three election cycles (2007-2012).</div>
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
        Based in <%= d.pac.CommCity %>, <%= d.pac.CommState %><% if (d.pac.catReadable && d.pac.catReadable !== '') { %>, focuses on <%= d.pac.catReadable %><% } %>.
    </div>
    <li>
      Spent <%= d.pac.spentFormatted %> over the past three election cycles.
    </li>
    <li>
      Raised <%= d.pac.receivedFormatted %> in the same time period.
    </li>
    <% if (d.pac.endcash2012 && d.pac.endcash2012 !== '') { %> <li>Had <%= d.pac.endcash2012 %> on hand at the end of 2012.</li> <% } %>
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

