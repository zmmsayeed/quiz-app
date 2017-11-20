$(document).ready(function(){
    console.log('Hi');    
    $('.quiz').submit(function(event){
        event.preventDefault();
        console.log('form submitted');
        
        if($('input[type="radio"]:checked').hasClass('isCorrect=1')) {
            console.log("Correct!!");
        }
    });
});