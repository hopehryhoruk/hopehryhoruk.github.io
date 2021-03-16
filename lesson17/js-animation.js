let train = document.getElementById('train')

train.onclick = function(){
    let start = Date.now();
    let timer = setInterval(function(){
        let timePassed = Date.now() - start;
        train.style.left = timePassed/ 5 + 'px';


    if(timePassed > 2000) clearInterval(timer);
}, 20);
}

//**************** */

function animate(options) {

    // время старта анимации
   var start = performance.now();
   requestAnimationFrame(function animate(time) {
   // timeFraction от 0 до 1
   var timeFraction = (time - start) / options.duration;
   if (timeFraction > 1) timeFraction = 1;
   // текущее состояние анимации
   var progress = options.timing(timeFraction)
   options.draw(progress);
   if (timeFraction < 1) {
   requestAnimationFrame(animate);
   }
   });
   }
   
   brick.onclick = function() {
   animate({
   duration: 3000,
   // линейное изменение
   timing: power,
   // сдвигаем влево
   draw: function(progress) {
   brick.style.left = progress * 500 + 'px';
   }
   });
   };
   function linear(timeFraction){
       return timeFraction
   }
   function power(timeFraction){
    return Math.pow(timeFraction, 5)
}