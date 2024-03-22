
 

 // use a script tag or an external JS file
 document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(Flip,ScrollTrigger,Observer,ScrollToPlugin,Draggable,MotionPathPlugin,EaselPlugin,PixiPlugin,TextPlugin,RoughEase,ExpoScaleEase,SlowMo,CustomEase)
  // gsap code here!
  gsap.from(".carte", {y: 200,
    opacity : 0,
    duration : 1,
    delay: 0.5,
    ease: "power1.inOut",
    stagger : {
        each : 0.1,
       from : "center" 
    },
},)
 });

