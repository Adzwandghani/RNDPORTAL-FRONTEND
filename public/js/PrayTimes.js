

$.getJSON("https://api.pray.zone/v2/times/today.json?city=serendah&school=9&timeformat=1", 
function(data){
    console.log(data);
	
	var gregorian = data.results.datetime[0].date.gregorian;
	var hijri = data.results.datetime[0].date.hijri;
	var city = data.results.location.city;
	// var latitude = Math.floor(data.results.location.latitude);
	// var longitude = Math.floor(data.results.location.longitude);
	var Fajr = data.results.datetime[0].times.Fajr;
	var Dhuhr = data.results.datetime[0].times.Dhuhr;
	var Asr = data.results.datetime[0].times.Asr;
	var Maghrib = data.results.datetime[0].times.Maghrib;
	var Isha = data.results.datetime[0].times.Isha;
    
    $('.gregorian').append(gregorian);
	$('.hijri').append(hijri);
    $('.city').append(city);
	// $('.latitude').append(latitude);
	// $('.longitude').append(longitude);
	$('.Fajr').append(Fajr);
	$('.Dhuhr').append(Dhuhr);
	$('.Asr').append(Asr);
	$('.Maghrib').append(Maghrib);
	$('.Isha').append(Isha);

});