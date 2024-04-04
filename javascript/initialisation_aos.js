
 

 // use a script tag or an external JS file
 document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(Flip,ScrollTrigger,Observer,ScrollToPlugin,Draggable,MotionPathPlugin,EaselPlugin,PixiPlugin,TextPlugin,RoughEase,ExpoScaleEase,SlowMo,CustomEase)
  // gsap code here!
  gsap.from(".carte", {
    y: 50,
    opacity : 0,
    duration : 1,
    delay: 0.5,
    ease: "power1.inOut",
    stagger : {
        each : 0.5,
       from : "center" 
    },
},)


// gsap.from(".carte_offre", {
//   y: 50,
//   opacity: 0,
//   duration: 0.3,
//   delay: 0,
//   stagger : { 
//     each : 0.1,
//   },
// },)



});

