$(document).ready(function(){
    console.log('Hi');    
    $('.quiz').submit(function(event){
        event.preventDefault();
        console.log('form submitted');
        
        // $('body').append('<h1>HI</h1>');
        let score = 0;
        $('input:checked').each(function(i) {
           if($(this).hasClass('isCorrect=1')) {
               console.log('Correct');
               $(this).parent().addClass('correct');
               score += 1;
           }  else {
               $(this).parent().addClass('wrong');
           }        
        });
        $('body').append(`<h1>Your score is: ${score} </h1>` );       


        // if($('input[type="radio"]:checked').hasClass('isCorrect=1')) {
        //     console.log("Correct!!");
        // }
    });
});