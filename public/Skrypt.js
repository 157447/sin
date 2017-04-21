console.log("dziala");

var bgmode = 0;
function changeBg (url, originUrl) {         
if (bgmode ==0) {
    $('body').css('background', 'url('+url+') no-repeat fixed').css('background-size', 'cover');
    bgmode = 1;
} else {
    $('body').css('background', 'url('+originUrl+') no-repeat fixed').css('background-size', 'cover');
    bgmode = 0;
}
}

function validInput () {
    var input = $('#name').val();
    if (input.length > 0) {
        $('button[type=submit]').removeAttr('disabled');
    
}else {
    $('button[type=submit]').attr('disabled', 'disabled');
}
    
}
 

   
