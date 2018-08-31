
$(document).ready(function(){
 
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



    function fairwaysTotals($class, $id){

        var $inputs = $($class).length;
        var $inputsDisabled = $($class  + 'input:disabled').length;
        var $total = $inputs - $inputsDisabled;

        $count = 0;
        $($id).html($count);
        $($id).after('/' + $total);        

        $(document).on("change", $class, function () {

            var $count = $($class + 'input:checked').length;
    
            $('#' + $id).html($count);
    
        });

    }

    fairwaysTotals(".FirstNineFir", "#FirstNineFirCount");
    fairwaysTotals(".SecondtNineFir", "#SecondNineFirCount");
    fairwaysTotals(".ThirdNineFir", "#ThirdNineFirCount");


    function greensTotals($class, $inputId, $id){

        var $total = 9;

        $count = 0;
        $($id).html($count);
        $($id).after('/' + $total);        

        $(document).on("change", $class, function () {

            var $count = $('#' + $inputId + 'input:checked').length;
    
            $($id).html($count);
    
        });

    }

    greensTotals(".FirstNineGir","firstNineGirs", "#FirstNineGirCount");
    greensTotals(".SecondtNineGir","second9Girs", "#SecondNineGirCount");
    greensTotals(".ThirdNineGir","third9Girs", "#ThirdNineGirCount");




});