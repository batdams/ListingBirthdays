export function updateClock() {

// selection des éléments html
const day = document.getElementById("day");
const month = document.getElementById("month");
const year = document.getElementById("year");

const hour = document.getElementById("hour");
const minute = document.getElementById("minute");

// création de la date
const date = new Date();

//constitution de la date actuelle
const dateNumber = date.getDate();
const dateMonth = date.getMonth();
const dateMonthNames = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
const dateMonthName = dateMonthNames[dateMonth];
const dateYear = date.getFullYear();
const dateHour = date.getHours();
let dateMinute = date.getMinutes();
if(dateMinute < 10) {
    dateMinute = "0" + dateMinute;
}

// mise à jour du contenu html
day.innerHTML = dateNumber;
month.innerHTML = dateMonthName;
year.innerHTML = dateYear;
hour.innerHTML = dateHour;
minute.innerHTML = dateMinute;

}

/*
Number.prototype.pad = function(n) {
    for (var r = this.toString(); r.length < n; r = 0 + r);
    return r;
  };
  
  function updateClock() {
    var now = new Date();
    var min = now.getMinutes(),
      hou = now.getHours(),
      mo = now.getMonth(),
      dy = now.getDate(),
      yr = now.getFullYear();
    var months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
    var tags = ["mon", "d", "y", "h", "m"],
      corr = [months[mo], dy, yr, hou.pad(2), min.pad(2)];
    for (var i = 0; i < tags.length; i++)
      document.getElementById(tags[i]).textContent = corr[i];
  }
  document.addEventListener("DOMContentLoaded", function() {
    initClock();
});
  function initClock() {
    updateClock();
    window.setTimeout(initClock, 10);
  }
}*/