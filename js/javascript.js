// script pour garder la date à jour dans le copyright
const year = new Date();
const currentYear = year.getFullYear();
const copyright = document.querySelector("#anneeCopyright");

copyright.innerHTML = "Aline Fierobe &copy; " + currentYear;

// replace text by icon on single-projects.php

const browsers = document.querySelector("#browsers");

document.querySelector("#browsers").innerHTML = document.querySelector("#browsers").innerHTML.replaceAll(",", "");

document.querySelector("#browsers").innerHTML = document.querySelector("#browsers").innerHTML.replace("Google Chrome", '<img src="https://www.aht.li/3561766/011-chrome.png" alt="Google Chrome" title="Google Chrome" class="browserLogo"/>');

document.querySelector("#browsers").innerHTML = document.querySelector("#browsers").innerHTML.replace("Mozilla Firefox", '<img src="https://www.aht.li/3561883/008-firefox.png" alt="Mozilla Firefox" title="Mozilla Firefox" class="browserLogo"/>');

document.querySelector("#browsers").innerHTML = document.querySelector("#browsers").innerHTML.replace("Safari", '<img src="https://www.aht.li/3561884/007-safari.png" alt="Safari" title="Safari" class="browserLogo"/>');

document.querySelector("#browsers").innerHTML = document.querySelector("#browsers").innerHTML.replace("Opera", '<img src="https://www.aht.li/3561885/004-opera.png" alt="Opera" title="Opera" class="browserLogo"/>');

document.querySelector("#browsers").innerHTML = document.querySelector("#browsers").innerHTML.replace("EDGE", '<img src="https://www.aht.li/3561886/006-edge.png" alt="EDGE" title="EDGE" class="browserLogo"/>');
