document.querySelector('form').onsubmit = function(event){
    event.preventDefault()
    console.log(event)

    let form = event.target
    console.log(form['like'].chaked)

    if(!form['like'].chaked){
        document.querySelector('input[name=like]').style.color = 'red'
    }
}