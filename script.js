let tumble = document.getElementById('inForm')
function TUMBLE(){
    if (tumble.style.display == 'none') {
        tumble.style.display = 'flex'
        tumble2.style.display = 'none'
    } else {
        tumble.style.display = 'none'
    }
}

let tumble2 = document.getElementById('regForm')
function TUMBLE2(){
    if (tumble2.style.display == 'none') {
        tumble2.style.display = 'flex'
        tumble.style.display = 'none'
    } else {
        tumble2.style.display = 'none'
    }
}
let tumble3 = document.getElementById('function')
function TUMBLE3(){
    if (tumble3.style.display == 'none') {
        tumble3.style.display = 'flex'
    } else {
        tumble3.style.display = 'none'
    }
}
let tumble4 = document.getElementById('addForm')
function TUMBLER(){
    if (tumble4.style.display == 'none') {
        tumble4.style.display = 'flex'
        tumble3.style.display = 'none'
    } else {
        tumble4.style.display = 'none'
        tumble3.style.display = 'flex'
    }
}
let tumble5 = document.getElementById('delForm')
function TUMBLE5(){
    if (tumble5.style.display == 'none') {
        tumble5.style.display = 'flex'
        tumble4.style.display = 'none'
        tumble3.style.display = 'none'
    } else {
        tumble5.style.display = 'none'
        tumble3.style.display = 'flex'
    }
}
SmoothScroll({
    // Время скролла 400 = 0.4 секунды
    animationTime    : 800,
    // Размер шага в пикселях 
    stepSize         : 75,
    // Дополнительные настройки:
    // Ускорение 
    accelerationDelta : 30,  
    // Максимальное ускорение
    accelerationMax   : 2,   
    // Поддержка клавиатуры
    keyboardSupport   : true,  
    // Шаг скролла стрелками на клавиатуре в пикселях
    arrowScroll       : 50,
    // Pulse (less tweakable)
    // ratio of "tail" to "acceleration"
    pulseAlgorithm   : true,
    pulseScale       : 4,
    pulseNormalize   : 1,
    // Поддержка тачпада
    touchpadSupport   : true,
})