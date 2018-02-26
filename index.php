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
$( "#city" ).autocomplete({
source: function( request, response ) {
$.ajax({
url: "http://api.addressify.com.au/address/suburbAutoComplete",
dataType: "jsonp",
data: {
term: request.term,
api_key: "b03cb8bf-4b5c-482d-a11e-3c8884ea5b44"
},
success: function( data ) {
response( data );
}
});
},
minLength: 3,
select: function( event, ui ) {
log( ui.item ?
"Selected: " + ui.item.label :
"Nothing selected, input was " + this.value);
},
open: function() {
$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
},
close: function() {
$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
}
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
