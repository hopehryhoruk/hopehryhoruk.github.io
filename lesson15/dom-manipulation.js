let gallery = document.getElementById('cats-gallery')

for (let i=1; i<=4; i++){
    let img = document.createElement('img')
    img.src = 'img/image' + i + '.jpg'

    gallery.appendChild(img)
}

let count = gallery.children.length
let totalElements = document.getElementById('total-cats')
totalElements.innerText = count

 let firstImage = document.querySelector('.gallery img:first-child') /* psevdoclas */

/*  firstImage.style.borderStyle='solid';
 firstImage.style.borderWidth='0.25rem'; *//* nagarno */


 function handleClick(){
     console.log('fddfd')
 }
 
