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
            url: '/ajax_editholes',
            dataType: "json",
            method: 'get',
            data: {selected_holes: selected_holes, course_id: course_id},      
            success: function (response) {               
                // return holes
                $("#get-holes").html(response);                 
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
    
    // Enable Tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })    

});

$(document).ajaxSuccess(function () {

    // Calculate Course Totals on page load
    $(document).ready(function(){

        function courseTotalsOnLoad($class, $id){
        
            var $total = 0;
                
            $($class).each(function(){
                $total += parseInt($(this).val());   
            });      

            $($id).html($total);

        }

        courseTotalsOnLoad(".first-white-yards","#firstWhiteYards");
        courseTotalsOnLoad(".first-white-par","#firstWhitePar");
        courseTotalsOnLoad(".first-yellow-yards","#firstYellowYards");
        courseTotalsOnLoad(".first-yellow-par","#firstYellowPar"); 
        courseTotalsOnLoad(".first-red-yards","#firstRedYards");
        courseTotalsOnLoad(".first-red-par","#firstRedPar");  

        courseTotalsOnLoad(".second-white-yards","#secondWhiteYards");
        courseTotalsOnLoad(".second-white-par","#secondWhitePar");
        courseTotalsOnLoad(".second-yellow-yards","#secondYellowYards");
        courseTotalsOnLoad(".second-yellow-par","#secondYellowPar"); 
        courseTotalsOnLoad(".second-red-yards","#secondRedYards");
        courseTotalsOnLoad(".second-red-par","#secondRedPar");   
        
        courseTotalsOnLoad(".third-white-yards","#thirdWhiteYards");
        courseTotalsOnLoad(".third-white-par","#thirdWhitePar");
        courseTotalsOnLoad(".third-yellow-yards","#thirdYellowYards");
        courseTotalsOnLoad(".third-yellow-par","#thirdYellowPar"); 
        courseTotalsOnLoad(".third-red-yards","#thirdRedYards");
        courseTotalsOnLoad(".third-red-par","#thirdRedPar"); 

    });


    // Calculate Course totals on change
    function courseTotals($class, $id){

        var $total = 0;
    
        $(document).on("change", $class, function() {
    
            var $total = 0;
            
            $($class).each(function(){
                if($(this).val() != "")
                $total += parseInt($(this).val());   
            });      
            
            $($id).html($total);
            
        });     
    
        $($id).html($total);

    }

    courseTotals(".first-white-yards","#firstWhiteYards");
    courseTotals(".first-white-par","#firstWhitePar");
    courseTotals(".first-yellow-yards","#firstYellowYards");
    courseTotals(".first-yellow-par","#firstYellowPar"); 
    courseTotals(".first-red-yards","#firstRedYards");
    courseTotals(".first-red-par","#firstRedPar");  

    courseTotals(".second-white-yards","#secondWhiteYards");
    courseTotals(".second-white-par","#secondWhitePar");
    courseTotals(".second-yellow-yards","#secondYellowYards");
    courseTotals(".second-yellow-par","#secondYellowPar"); 
    courseTotals(".second-red-yards","#secondRedYards");
    courseTotals(".second-red-par","#secondRedPar");   
    
    courseTotals(".third-white-yards","#thirdWhiteYards");
    courseTotals(".third-white-par","#thirdWhitePar");
    courseTotals(".third-yellow-yards","#thirdYellowYards");
    courseTotals(".third-yellow-par","#thirdYellowPar"); 
    courseTotals(".third-red-yards","#thirdRedYards");
    courseTotals(".third-red-par","#thirdRedPar");     

    // Enable Tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

});