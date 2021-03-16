localStorage.setItem('default_color', 'green')
let color = localStorage.getItem('default_color')
document.querySelector('body').style.backgroundColor = color

document.querySelector('#changeColor').onclick = function(){
    localStorage.setItem('default_color', 'red')
    document.querySelector('body').style.backgroundColor = localStorage.getItem('default_color')
}

document.querySelector('#restoreColor').onclick = function(){
    localStorage.setItem('default_color', 'green')
    document.querySelector('body').style.backgroundColor = localStorage.getItem('default_color')
}

localStorage.removeItem('default_color')
console.log( localStorage.getItem('default_color'))

localStorage.setItem('object', {
    name: 'vvv',
    age: 26
})
console.log(localStorage.getItem('object'))

///
document.querySelector('#applySettings').onclick = function(){
    let fontSize = document.querySelector('#fontSize').value
    let textColor = document.querySelector('#textColor').value
    let textBackgroundColor = document.querySelector('#textBackgroundColor').value
    let text = document.querySelector('#text')
    text.style.fontSize = fontSize+'px';
    text.style.color = textColor;
    text.style.backgroundColor = textBackgroundColor;

    localStorage.setItem('#fontSize', fontSize)
    localStorage.setItem('#textColor', textColor)
    localStorage.setItem('#textBackgroundColor', textBackgroundColor)
}

let saveSize = localStorage.getItem('#fontSize')
let saveColor = localStorage.getItem('#textColor')
let saveBackgroundColor = localStorage.getItem('#textBackgroundColor')

if (saveSize){
    document.getElementById('fontSize').value = saveSize
    text.style.fontSize = saveSize+'px';
}
if (saveColor){
    document.getElementById('textColor').value = saveColor
    text.style.color = saveColor;
}
if (saveBackgroundColor){
    document.getElementById('textBackgroundColor').value = saveBackgroundColor
    text.style.backgroundColor = saveBackgroundColor;
}