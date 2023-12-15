$(document).ready(function(){

    // banner owl carousel        الثلاث صور الي في اول الموقع 
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    })



    // top sale    carousel

    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,     // Infinite loop (carousel will keep going in a loop)
        nav: true,      // Display navigation arrows (previous/next)
        dots: false,    // Do not display  dots under image
    
        responsive: {             // Responsive Func
            0: {
                items: 1    // Number of items to display at 0px and above viewport width
            },
            600: {
                items: 3    // Number of items to display at 600px and above viewport width
            },
            1000: {
                items: 5    // Number of items to display at 1000px and above viewport width
            }
        }
    });

    // New Phones 

    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,     // Infinite loop (carousel will keep going in a loop)
        nav: true,      // Display navigation arrows (previous/next)
        dots: false,    // Do not display  dots under image
    
        responsive: {             // Responsive Func
            0: {
                items: 1    // Number of items to display at 0px and above viewport width
            },
            600: {
                items: 3    // Number of items to display at 600px and above viewport width
            },
            1000: {
                items: 5    // Number of items to display at 1000px and above viewport width
            }
        }
    });

    // isotop filter                       الجزء ده يخص الي بيحصل في الفتلر بتاعنا ان لما ادوس علي نوع موبيل يخفي الباقي ويظهر النوع فقط 

    var $grid =$(".grid").isotope({
        itemSelector:'.grid-item',    // Name OF class ابللل
        layoutMode:'fitRows'               //المنتجات هتظهر بشكل عمودي
    });



     // filter items on button click
     $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    })



    //هنا علشان اظهر حاجه ال فون الجديد            NEW-Phone owl carousel 
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,     // Infinite loop (carousel will keep going in a loop)
        nav: false,      // Display navigation arrows (previous/next)
        dots: true,    // Do not display  dots under image
    
        responsive: {
            0: {
                items: 1    // Number of items to display at 0px and above viewport width
            },
            600: {
                items: 3    // Number of items to display at 600px and above viewport width
            },
            1000: {
                items: 5    // Number of items to display at 1000px and above viewport width
            }
        }


    });

    // product qty section
    let $qty_up=$(".qty .qty-up");
    let $qty_down=$(".qty .qty-down");
    // let $input=$(".qty .qty-input");

    //click on qty-up button
    $qty_up.click(function(e){
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if($input.val()>=1 && $input.val()<=9){
            $input.val(function(i,oldval){
                    return ++oldval;
            })
        }
    })

    //click on qty-down button
    $qty_down.click(function(e){
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if($input.val()>1 && $input.val()<=10){
            $input.val(function(i,oldval){
                return --oldval;
            })
        }
    })


});