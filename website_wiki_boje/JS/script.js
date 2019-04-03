let root = document.documentElement;


function setBlue() {
  root.style.setProperty("--color","dodgerblue");
};

function setGreen() {
  root.style.setProperty("--color","limegreen");
};

function setYellow() {
  root.style.setProperty("--color","yellow");
};

function setOrange() {
  root.style.setProperty("--color","darkorange");
};

function setRed() {
  root.style.setProperty("--color","crimson");
};

function setPink() {
  root.style.setProperty("--color","hotpink");
};

var dark = true;

function darkMode() {
  if(dark == true){
    dark = false;
    root.style.setProperty("--background-color","#ddd");
    root.style.setProperty("--background-color-back","#eee");
    root.style.setProperty("--background-color-secondary","#eee");
    root.style.setProperty("--text-color","black");
    root.style.setProperty("--shadow","rgba(0, 0, 0, 0.1)");
  }else{
    dark = true;
    root.style.setProperty("--background-color","#1A1A1D");
    root.style.setProperty("--background-color-back","#161618");
    root.style.setProperty("--background-color-secondary","#1F1F22");
    root.style.setProperty("--text-color","white");
    root.style.setProperty("--shadow","rgba(0, 0, 0, 0.5)");
  }
};
