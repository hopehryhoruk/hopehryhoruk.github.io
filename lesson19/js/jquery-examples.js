// $
// $('<div></div>')

$('<img></img>', 
    {src: 'img/image1.jpg', 
    title: 'Cat',
    click: function(){
        alert('caaat');
    }
}).appendTo('body')

$('#text').text('kadfkljfalkjflajflkjaslfklksad;lkass')
$('#style').addClass('betterStyle')

$('#clickme').click(function(){
    $('#cat').slideDown('slow', function(){})
})