$(document).ready(function () {
    $('.confirm').on('click', function () {
        return confirm('Êtes vous vraiment sur ? ');
    });

    $('.deco').on('click', function () {
        alert('A la prochaine ! :)');
    });

    var $slider = $('.slider'), 
        $img = $('.slider ul li'),
        indexImg = $img.length - 1,
        i = 0, 
        $currentImg = $img.eq(i); 
    $img.css('display', 'none'); 
    $currentImg.css('display', 'block'); 
    $('.next').click(function () { 

        i++; 

        if (i <= indexImg) {
            $img.css('display', 'none'); 
            $currentImg = $img.eq(i); 
            $currentImg.css('display', 'block'); 
        }
        else {
            i = indexImg;
        }

    });

    $('.prev').click(function () { 

        i--;

        if (i >= 0) {
            $img.css('display', 'none');
            $currentImg = $img.eq(i);
            $currentImg.css('display', 'block');
        }
        else {
            i = 0;
        }

    }); 
    
    $("#inscription").click(function () {
      
        $.ajax({
            url: 'inscription.php', 
            type: 'GET'
        });

    });
    
    $('.dropdown-content').hide();

    $('.dropdown span').hover(function(){
        $('.dropdown-content').show("fast");    
    });

    $('.dropdown').mouseleave(function(){
        $('.dropdown-content').hide("fast");
    });
    

});
