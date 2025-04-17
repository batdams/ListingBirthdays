</main>
<footer class="footer">
    <div class="footer-section">
        <div id="time" class="footer-item">
            <img src="<?php echo BASE_URL; ?>/public/pictures/calendar-icon.svg" alt="calendar" class="footer-icon">
            <p class="date-text">
                <a id="day">1</a> 
                <a id="month">Janvier</a> 
                <a id="year">2023</a>
            </p>
        </div>
        <div id="clock" class="footer-item">
            <img src="<?php echo BASE_URL; ?>/public/pictures/clock.svg" alt="clock" class="footer-icon">
            <p class="date-text">:
                <a id="hour">12</a> h
                <a id="minute">00</a>
            </p>
        </div>
    </div>
    <div class="footer-section">
        <div id="weather" class="footer-item">
            météo : <span id="weather-info"></span>
        </div>
        <div id="temp" class="footer-item">
            <img src="<?php echo BASE_URL; ?>/public/pictures/thermometer.svg" alt="temperature" class="footer-icon">
            <p> : <span id="temp-info">xxx</span></p>
        </div>
    </div>
    <div class="footer-section">
        <a class="footer-link" href="<?php echo BASE_URL;?>/aboutView">Contact</a>
        <a class="footer-link" href="<?php echo BASE_URL;?>/aboutView">Mentions légales</a>
        <a class="footer-link" href="<?php echo BASE_URL;?>/aboutView">CGU</a>
    </div>
</footer>
<script>
    const BASE_URL = "<?php echo BASE_URL; ?>";
    const WEATHER_API_KEY = "<?php echo WEATHER_API_KEY; ?>";
</script>
<script src="<?php echo BASE_URL; ?>/public/js/app.js" type="module"></script>
</body>
</html>