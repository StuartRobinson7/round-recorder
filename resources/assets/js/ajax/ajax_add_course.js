$(document).ready(function(){

    // bring back selected holes
    function selectHoles() {

        var selected_holes = $('input[name=holes]:checked').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }          
        })

        $.ajax({         
            url: '/ajax_getholes',
            dataType: "json",
            method: 'get',
            data: {selected_holes: selected_holes},      
            success: function (response) {
                
                // return holes
                $("#get-holes").html(response);

                // show plus/minus icons
                $('.btn-collapse').each(function(){
                    if($(this).hasClass('collapsed')) {
                        $(this).find('i').addClass('fa-plus-circle')
                    }
                    else{
                        $(this).find('i').addClass('fa-minus-circle');
                    }                 
                });    
            
                // toggle icons on click
                $('.btn-collapse').click(function(){
                    $(this).find('i').toggleClass('fa-minus-circle').toggleClass('fa-plus-circle');                 
                });                   
            },
            error:function(error){ 
                console.log(error)
            }            
        });
    }

    // run on page load
    $('input:radio[name=holes]').each(selectHoles);

    // run on radio change
    $('input:radio[name=holes]').change(selectHoles);
            

});


$(document).ajaxSuccess(function () {


    // FIRST NINE ------------------------------------------------------------------------------------------


    var $firstWhiteYards = 0;
    
    $(document).on("change", ".first-white-yards", function() {

        var $firstWhiteYards = 0;
        
        $(".first-white-yards").each(function(){
            if($(this).val() != "")
            $firstWhiteYards += parseInt($(this).val());   
        });      
        
        $("#firstWhiteYards").html($firstWhiteYards);
        
    });     

    $("#firstWhiteYards").html($firstWhiteYards);



    var $firstWhitePar = 0;

    $("#firstWhitePar").html($firstWhitePar);

    $(document).on("change", ".first-white-par", function() {

        var $firstWhitePar = 0;

        $(".first-white-par").each(function(){
            if($(this).val() != "")
            $firstWhitePar += parseInt($(this).val());   
        }); 

        $("#firstWhitePar").html($firstWhitePar);

    }); 



    var $firstYellowYards = 0;
    
    $(document).on("change", ".first-yellow-yards", function() {

        var $firstYellowYards = 0;
        
        $(".first-yellow-yards").each(function(){
            if($(this).val() != "")
            $firstYellowYards += parseInt($(this).val());   
        });      
        
        $("#firstYellowYards").html($firstYellowYards);
        
    });     

    $("#firstYellowYards").html($firstYellowYards);



    var $firstYellowPar = 0;

    $("#firstYellowPar").html($firstYellowPar);

    $(document).on("change", ".first-yellow-par", function() {

        var $firstYellowPar = 0;

        $(".first-yellow-par").each(function(){
            if($(this).val() != "")
            $firstYellowPar += parseInt($(this).val());   
        }); 

        $("#firstYellowPar").html($firstYellowPar);

    }); 
    
    

    var $firstRedYards = 0;
    
    $(document).on("change", ".first-red-yards", function() {

        var $firstRedYards = 0;
        
        $(".first-red-yards").each(function(){
            if($(this).val() != "")
            $firstRedYards += parseInt($(this).val());   
        });      
        
        $("#firstRedYards").html($firstRedYards);
        
    });     

    $("#firstRedYards").html($firstRedYards);



    var $firstRedPar = 0;

    $("#firstRedPar").html($firstRedPar);

    $(document).on("change", ".first-red-par", function() {

        var $firstRedPar = 0;

        $(".first-red-par").each(function(){
            if($(this).val() != "")
            $firstRedPar += parseInt($(this).val());   
        }); 

        $("#firstRedPar").html($firstRedPar);

    });     


    
    // SECOND NINE ------------------------------------------------------------------------------------------


    var $secondWhiteYards = 0;
    
    $(document).on("change", ".second-white-yards", function() {

        var $secondWhiteYards = 0;
        
        $(".second-white-yards").each(function(){
            if($(this).val() != "")
            $secondWhiteYards += parseInt($(this).val());   
        });      
        
        $("#secondWhiteYards").html($secondWhiteYards);
        
    });     

    $("#secondWhiteYards").html($secondWhiteYards);



    var $secondWhitePar = 0;

    $("#secondWhitePar").html($secondWhitePar);

    $(document).on("change", ".second-white-par", function() {

        var $secondWhitePar = 0;

        $(".second-white-par").each(function(){
            if($(this).val() != "")
            $secondWhitePar += parseInt($(this).val());   
        }); 

        $("#secondWhitePar").html($secondWhitePar);

    }); 



    var $secondYellowYards = 0;
    
    $(document).on("change", ".second-yellow-yards", function() {

        var $secondYellowYards = 0;
        
        $(".second-yellow-yards").each(function(){
            if($(this).val() != "")
            $secondYellowYards += parseInt($(this).val());   
        });      
        
        $("#secondYellowYards").html($secondYellowYards);
        
    });     

    $("#secondYellowYards").html($secondYellowYards);



    var $secondYellowPar = 0;

    $("#secondYellowPar").html($secondYellowPar);

    $(document).on("change", ".second-yellow-par", function() {

        var $secondYellowPar = 0;

        $(".second-yellow-par").each(function(){
            if($(this).val() != "")
            $secondYellowPar += parseInt($(this).val());   
        }); 

        $("#secondYellowPar").html($secondYellowPar);

    }); 
    
    

    var $secondRedYards = 0;
    
    $(document).on("change", ".second-red-yards", function() {

        var $secondRedYards = 0;
        
        $(".second-red-yards").each(function(){
            if($(this).val() != "")
            $secondRedYards += parseInt($(this).val());   
        });      
        
        $("#secondRedYards").html($secondRedYards);
        
    });     

    $("#secondRedYards").html($secondRedYards);



    var $secondRedPar = 0;

    $("#secondRedPar").html($secondRedPar);

    $(document).on("change", ".second-red-par", function() {

        var $secondRedPar = 0;

        $(".second-red-par").each(function(){
            if($(this).val() != "")
            $secondRedPar += parseInt($(this).val());   
        }); 

        $("#secondRedPar").html($secondRedPar);

    }); 



    // THIRD NINE ------------------------------------------------------------------------------------------


    var $thirdWhiteYards = 0;
    
    $(document).on("change", ".third-white-yards", function() {

        var $thirdWhiteYards = 0;
        
        $(".third-white-yards").each(function(){
            if($(this).val() != "")
            $thirdWhiteYards += parseInt($(this).val());   
        });      
        
        $("#thirdWhiteYards").html($thirdWhiteYards);
        
    });     

    $("#thirdWhiteYards").html($thirdWhiteYards);



    var $thirdWhitePar = 0;

    $("#thirdWhitePar").html($thirdWhitePar);

    $(document).on("change", ".third-white-par", function() {

        var $thirdWhitePar = 0;

        $(".third-white-par").each(function(){
            if($(this).val() != "")
            $thirdWhitePar += parseInt($(this).val());   
        }); 

        $("#thirdWhitePar").html($thirdWhitePar);

    }); 



    var $thirdYellowYards = 0;
    
    $(document).on("change", ".third-yellow-yards", function() {

        var $thirdYellowYards = 0;
        
        $(".third-yellow-yards").each(function(){
            if($(this).val() != "")
            $thirdYellowYards += parseInt($(this).val());   
        });      
        
        $("#thirdYellowYards").html($thirdYellowYards);
        
    });     

    $("#thirdYellowYards").html($thirdYellowYards);



    var $thirdYellowPar = 0;

    $("#thirdYellowPar").html($thirdYellowPar);

    $(document).on("change", ".third-yellow-par", function() {

        var $thirdYellowPar = 0;

        $(".third-yellow-par").each(function(){
            if($(this).val() != "")
            $thirdYellowPar += parseInt($(this).val());   
        }); 

        $("#thirdYellowPar").html($thirdYellowPar);

    }); 
    
    

    var $thirdRedYards = 0;
    
    $(document).on("change", ".third-red-yards", function() {

        var $thirdRedYards = 0;
        
        $(".third-red-yards").each(function(){
            if($(this).val() != "")
            $thirdRedYards += parseInt($(this).val());   
        });      
        
        $("#thirdRedYards").html($thirdRedYards);
        
    });     

    $("#thirdRedYards").html($thirdRedYards);



    var $thirdRedPar = 0;

    $("#thirdRedPar").html($thirdRedPar);

    $(document).on("change", ".third-red-par", function() {

        var $thirdRedPar = 0;

        $(".third-red-par").each(function(){
            if($(this).val() != "")
            $thirdRedPar += parseInt($(this).val());   
        }); 

        $("#thirdRedPar").html($thirdRedPar);

    }); 



});