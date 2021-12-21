

$.getJSON("https://api.openweathermap.org/data/2.5/weather?lat=3.36&lon=101.6&units=metric&appid=9410382b1dedeb2b4ecff1efd4b7e9b8", 
function(data){
    console.log(data);
    
    var name = data.name;
    var icon = 
        "https://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
    var temp = Math.floor(data.main.temp) + "°C";
    var weather = data.weather[0].main;
    var description = data.weather[0].description;

    $('.name').append(name);
    $('.icon').attr('src', icon);
    $('.weather').append(weather);
    $('.description').append(description);
    $('.temp').append(temp);
});