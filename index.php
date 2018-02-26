<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Autocomplete - Remote JSONP datasource</title>
<link rel="stylesheet" href="jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

<style>
.ui-autocomplete-loading {
background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
}
#city { width: 25em; }
</style>
<script>
$(function() {
function log( message ) {
$( "<div>" ).text( message ).prependTo( "#log" );
$( "#log" ).scrollTop( 0 );
}
$(function() {

$( "#city" ).autocomplete({
source: "getSuburb.php",
minLength: 3

})
});

});
</script>
</head>
<body>
<div class="ui-widget">
<label for="city">Your city: </label>
<input id="city">
Powered by <a href="http://geonames.org">geonames.org</a>
</div>
<div class="ui-widget" style="margin-top:2em; font-family:Arial">
Result:
<div id="log" style="height: 200px; width: 300px; overflow: auto;" class="ui-widget-content"></div>
</div>
</body>
</html>
