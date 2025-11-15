const ioniconsModule = document.createElement("script");
ioniconsModule.type = "module";
ioniconsModule.src =
  "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js";
document.head.appendChild(ioniconsModule);

const ioniconsNomodule = document.createElement("script");
ioniconsNomodule.noModule = true;
ioniconsNomodule.src =
  "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js";
document.head.appendChild(ioniconsNomodule);
