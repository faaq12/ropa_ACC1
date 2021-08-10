const  slider= document.querySelector(".glide");

new Glide(slider,{
    type:"carousel",
    startAt: 0,
    perView: 1,
    animationDuration:800,
    animationTimingFunc:"linear",

}).mount(); 