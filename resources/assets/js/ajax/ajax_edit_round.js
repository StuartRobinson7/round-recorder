$(document).ready(function(){

    if ($(this).prop("checked")) {
        $('.show-stats').show();
    } else {
        $('.show-stats').hide();
    }
   

    $('#stats_round').change(function(){

        if ($(this).prop("checked")) {
            $('.show-stats').show();
        } else {
            $('.show-stats').hide();
        }

    });    
 
    function roundTotals($class, $id){
        
        var $total = 0;
            
        $($class).each(function(){
            $total += parseInt($(this).val());   
        });      

        $($id).html($total);

    }
          
    roundTotals(".first-nine-score","#firstNineScore"); 
    roundTotals(".first-nine-putts","#firstNinePutts"); 
    roundTotals(".first-nine-drops","#firstNineDrops"); 

    roundTotals(".second-nine-score","#secondNineScore"); 
    roundTotals(".second-nine-putts","#secondNinePutts"); 
    roundTotals(".second-nine-drops","#secondNineDrops");
    
    roundTotals(".third-nine-score","#thirdNineScore"); 
    roundTotals(".third-nine-putts","#thirdNinePutts"); 
    roundTotals(".third-nine-drops","#thirdNineDrops"); 


    function fairwaysTotals($class, $rowId, $id){

        var $inputs = $($class).length;
        var $inputsDisabled = $($rowId + ' ' + 'input:disabled').length;
        var $total = $inputs - $inputsDisabled;

        $count = 0;
        $($id).html($count);
        $($id).after('/' + $total);
        
        $(document).ready(function(){
            var $count = $($rowId + ' ' + 'input:checked').length;
            $($id).html($count);
        });

        $(document).on("change", $class, function () {

            var $count = $($rowId + ' ' + 'input:checked').length;

            $($id).html($count);
    
        });

    }

    fairwaysTotals(".FirstNineFir","#FirstNineFirs", "#FirstNineFirCount");
    fairwaysTotals(".SecondNineFir","#SecondNineFirs", "#SecondNineFirCount");
    fairwaysTotals(".ThirdNineFir","#ThirdNineFirs", "#ThirdNineFirCount");


    function greensTotals($class, $inputId, $id){

        var $total = 9;

        $count = 0;
        $($id).html($count);
        $($id).after('/' + $total);   
        
        $(document).ready(function(){
            var $count = $($inputId + ' ' + 'input:checked').length;
            $($id).html($count);
        });        

        $(document).on("change", $class, function () {

            var $count = $($inputId + ' ' + 'input:checked').length;
    
            $($id).html($count);
    
        });

    }

    greensTotals(".FirstNineGir","#FirstNineGirs", "#FirstNineGirCount");
    greensTotals(".SecondNineGir","#SecondNineGirs", "#SecondNineGirCount");
    greensTotals(".ThirdNineGir","#ThirdNineGirs", "#ThirdNineGirCount");


});