$(document).ready(function(){
    console.log('Hi');    
    $('.quiz').submit(function(event){
        event.preventDefault();
        console.log('form submitted');
        
        var errors= false;

        $('ul').each(function(i){
            console.log($(this).find('input:checked').length);
        if($(this).find('input:checked').length == 0)
        {
            $(this).addClass('wrong');
            errors = true;
        }
       
        });

        // $('body').append('<h1>HI</h1>');
        if (!errors){

        
        let score = 0;
        
        $('.choices').removeClass('correct wrong');
        $('.error-msg').html('').hide();

        $('input:checked').each(function(i) {
           if($(this).hasClass('isCorrect=1')) {
               console.log('Correct');
               $(this).parent().addClass('correct');
               score += 1;
           }  else {
               $(this).parent().addClass('wrong');
           }        
        });
        $('.result').html(`<h1>Your score is: ${score} </h1>` );       
    } else {
        $('.error-msg').text('All Questions must be answered').show();
    }
       
        // if($('input[type="radio"]:checked').hasClass('isCorrect=1')) {
        //     console.log("Correct!!");
        // }
    });
});