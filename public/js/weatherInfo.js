export function weatherInfo() {

  // START METEO SCRIPT
  // fonction asynchrone pour récupérer les données météo via l'API OpenWeather
  async function getData(city, callback) {
    try {
      const response = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${WEATHER_API_KEY}&units=metric`);
      const data = await response.json();
      callback(data);
    } catch {
      console.log('error');
    }
  }
  //fonction de callback pour afficher les données météo obtenues
  function affData(dt) {
    const tempInfo = document.getElementById('temp-info');
    const weatherInfo = document.getElementById('weather-info');

    tempInfo.textContent =  `${dt.main.temp} °C`;

    const weatherIconInfo = dt.weather[0].icon;

    //weatherInfo.textContent = '';

    const weatherIcon = document.createElement('img');
    weatherIcon.alt = 'Weather Icon';
    weatherIcon.classList.add('footer-icon-weather'); // Ajout d'une classe pour styliser l'image

    switch (weatherIconInfo) {
      case '01n':
        weatherIcon.src = `${BASE_URL}/public/pictures/weatherIcons/01n.png`;
        break;
      case '01d':
        weatherIcon.src = `${BASE_URL}/public/pictures/weatherIcons/01d.png`;
        break;
      default:
        weatherIcon.src = `${BASE_URL}/public/pictures/weatherIcons/01d.png`;
        break;
    }
    weatherInfo.appendChild(weatherIcon);
  }
// Appel de la fct
getData('Evreux', affData);
// END METEO SCRIPT
}