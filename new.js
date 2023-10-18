var bannerstatus = 1;
var bannertimer = 3000;
window.onload = function() {
  bannerloop();
};
var startBannerLoop = setInterval(function() {
  bannerloop();
}, bannertimer);

document.getElementById("imgbanbtn-next").onclick = function() {
  bannerloop();
};
function bannerloop() {
  if (bannerstatus === 1) {
    document.getElementById("imgban2").style.opacity = "0";
    setTimeout(function() {
      document.getElementById("imgban1").style.right = "0px";
      document.getElementById("imgban1").style.zIndex = "1000";
      document.getElementById("imgban2").style.right = "-100vw";
      document.getElementById("imgban2").style.zIndex = "1500";
      document.getElementById("imgban3").style.right = "100vw";
      document.getElementById("imgban3").style.zIndex = "500";
    }, 500);
    setTimeout(function() {
      document.getElementById("imgban2").style.opacity = "1";
    }, 1000);
    bannerstatus = 2;
  } else if (bannerstatus === 2) {
    document.getElementById("imgban3").style.opacity = "0";
    setTimeout(function() {
      document.getElementById("imgban2").style.right = "0px";
      document.getElementById("imgban2").style.zIndex = "1000";
      document.getElementById("imgban3").style.right = "-100vw";
      document.getElementById("imgban3").style.zIndex = "1500";
      document.getElementById("imgban1").style.right = "100vw";
      document.getElementById("imgban1").style.zIndex = "500";
    }, 500);
    setTimeout(function() {
      document.getElementById("imgban3").style.opacity = "1";
    }, 1000);
    bannerstatus = 3;
  } else if (bannerstatus === 3) {
    document.getElementById("imgban1").style.opacity = "0";
    setTimeout(function() {
      document.getElementById("imgban3").style.right = "0px";
      document.getElementById("imgban3").style.zIndex = "1000";
      document.getElementById("imgban1").style.right = "-100vw";
      document.getElementById("imgban1").style.zIndex = "1500";
      document.getElementById("imgban2").style.right = "100vw";
      document.getElementById("imgban2").style.zIndex = "500";
    }, 500);
    setTimeout(function() {
      document.getElementById("imgban1").style.opacity = "1";
    }, 1000);
    bannerstatus = 1;
  }
}

document.getElementById("imgbanbtn-prev").onclick = function() {
  bannerloop2();
};
function bannerloop2() {
  if (bannerstatus === 1) {
    document.getElementById("imgban3").style.opacity = "0";
    setTimeout(function() {
      document.getElementById("imgban1").style.right = "0px";
      document.getElementById("imgban1").style.zIndex = "1000";
      document.getElementById("imgban3").style.right = "100vw";
      document.getElementById("imgban3").style.zIndex = "1500";
      document.getElementById("imgban2").style.right = "-100vw";
      document.getElementById("imgban2").style.zIndex = "500";
    }, 400);
    setTimeout(function() {
      document.getElementById("imgban3").style.opacity = "1";
    }, 800);
    bannerstatus = 2;
  } else if (bannerstatus === 2) {
    document.getElementById("imgban2").style.opacity = "0";
    setTimeout(function() {
      document.getElementById("imgban3").style.right = "0px";
      document.getElementById("imgban3").style.zIndex = "1000";
      document.getElementById("imgban2").style.right = "100vw";
      document.getElementById("imgban2").style.zIndex = "1500";
      document.getElementById("imgban1").style.right = "-100vw";
      document.getElementById("imgban1").style.zIndex = "500";
    }, 400);
    setTimeout(function() {
      document.getElementById("imgban2").style.opacity = "1";
    }, 800);
    bannerstatus = 3;
  } else if (bannerstatus === 3) {
    document.getElementById("imgban1").style.opacity = "0";
    setTimeout(function() {
      document.getElementById("imgban2").style.right = "0px";
      document.getElementById("imgban2").style.zIndex = "1000";
      document.getElementById("imgban1").style.right = "100vw";
      document.getElementById("imgban1").style.zIndex = "1500";
      document.getElementById("imgban3").style.right = "-100vw";
      document.getElementById("imgban3").style.zIndex = "500";
    }, 400);
    setTimeout(function() {
      document.getElementById("imgban1").style.opacity = "1";
    }, 800);
    bannerstatus = 1;
  }
}

