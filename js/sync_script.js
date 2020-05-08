var MCORP_MOTION_NAME = "test";
var MCORP_APPID = "1821391690000833816";
var timingProvider;
var app = MCorp.app(MCORP_APPID, {anon:true});
app.run = function () {
  timingProvider = app.motions[MCORP_MOTION_NAME];
  if (document.readyState === "complete") {run(timingProvider);console.log('running timer');}
  else {window.onload = function () {run(timingProvider);};}
};
app.init();

  var m, w;
    // timing object
    var to;
  
  var run = function () {        
    to = new TIMINGSRC.TimingObject({provider:timingProvider});
  
    // set up button click handlers
    var buttonsElem = document.getElementById("buttons");
    var self = this;
    buttonsElem.onclick = function (e) {
      var elem, evt = e ? e:event;
      if (evt.srcElement)  elem = evt.srcElement;
      else if (evt.target) elem = evt.target;
      if (elem.id === "pause") {
        to.update({velocity:0.0});
        //console.log(to._vector);
        myPlayer.pause();
      }
      else if (elem.id === "tostart") { 
        to.update({position:0.0});
      } 
      else if (elem.id === "skipforward") {
        to.update({position: to.query().position + 5});
      } 
      else if (elem.id === "skipbackward") {
        to.update({position: to.query().position - 5});
      } 
      else if (elem.id === "forward") {
        var v = to.query();
        if (v.position === 100 && v.velocity === 0) {
          to.update({position:0.0, velocity: 1.0});
        } else to.update({velocity:1.0});
        myPlayer.play();
      }
      else if (elem.id === "toend") {
        to.update({position:100.0});
      }
    }

    // set up refresh of timingobject position
    to.on("timeupdate", function () {
      document.getElementById("position").innerHTML = to.query().position.toFixed(2);
    });

    // set up video sync
    // var sync1 = MCorp.mediaSync(document.getElementById('player1'), to);

    // // set up video sync
    // var sync2 = MCorp.mediaSync(document.getElementById('player2'), to);



  };
  if (document.readyState === "complete") run();
  else window.onload = run;

var myPlayer;
if (document.getElementById("my_video_1")) {
videojs("my_video_1").ready(function() {
console.log('ready');
myPlayer = this;

//Set initial time to 0
var currentTime = 0;

//This example allows users to seek backwards but not forwards.
//To disable all seeking replace the if statements from the next
//two functions with myPlayer.currentTime(currentTime);

var position;
setInterval(function() {
  // if (!myPlayer.paused()) {
    currentTime = myPlayer.currentTime();
  // }
  console.log(to._vector);
  // to.query();
  // if (to._vector['velocity'] != 0) {
      position = to.query().position.toFixed(2);
      console.log(position);
      console.log('currr');
      console.log(currentTime);
      if ( position > currentTime ) { //if the global timer is more than local
        if (myPlayer.paused()) { //continue playing if paused
          myPlayer.play();
        }
      } else {
        myPlayer.pause();
      }
  // } 
}, 3000);

myPlayer.on("play", function(event) {
  console.log('play');  
  if (position == 0) {
    playGlobal();
  } else if (m) {

  }
});

myPlayer.on("pause", function(event) {
  console.log('pause');
  // pauseGlobal();
});


myPlayer.on("seeking", function(event) {
  if (position < myPlayer.currentTime()) {
    myPlayer.currentTime(position);
  }
});

myPlayer.on("seeked", function(event) {
  if (position < myPlayer.currentTime()) {
    myPlayer.currentTime(position);
  }
});

});
}
function playGlobal() {
  document.getElementById('forward').click();          
}
function pauseGlobal() {
  document.getElementById('pause').click();      
}
function reset() {
  document.getElementById('tostart').click();      
}


