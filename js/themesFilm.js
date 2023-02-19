var $ = document; // shortcut

var cssId = 'projectTheme';  // you could encode the css path itself to generate id..
var head  = $.getElementsByTagName('head')[0];
var link  = $.createElement('link');
link.id   = cssId;
link.rel  = 'stylesheet';
link.type = 'text/css';
link.media = 'all';

let theme = localStorage.getItem('theme');

let darkTheme = $.getElementsByClassName("dark-theme-label")[0];
let lightTheme = $.getElementsByClassName("light-theme-label")[0];

if (theme === "light") {
    link.href = '../../css/appLight.css';
    head.appendChild(link)
    $.getElementsByTagName("body")[0].style.backgroundColor = "#fff";
    $.getElementsByClassName("light-theme-label")[0].style.backgroundColor = "#143f62";
    darkTheme.style.backgroundColor = "none";
} else if (theme === "dark") {
    link.href = '../../css/app.css';
    head.appendChild(link)
    $.getElementsByTagName("body")[0].style.backgroundColor = "None";
    $.getElementsByClassName("light-theme-label")[0].style.backgroundColor = "none";
    darkTheme.style.backgroundColor = "#fff";
} else {
    link.href = '../../css/app.css';
    head.appendChild(link)
    $.getElementsByTagName("body")[0].style.backgroundColor = "None";
    $.getElementsByClassName("light-theme-label")[0].style.backgroundColor = "none";
    darkTheme.style.backgroundColor = "#fff";
}
