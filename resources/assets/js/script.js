
$(document).ready(function () {

    //=======================================================================================
    //  Add Round Date Picker
    // ======================================================================================

        // find our today's date
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

        // set datepicker options
        $('#round_date').datepicker({
                endDate: '+0d',
                format: 'dd/mm/yyyy'
        });

        // autoselect today's date
        $('#round_date').datepicker('setDate', today);

    // ======================================================================================

    //=======================================================================================
    //  Number Animations
    // ======================================================================================

	$(".stat-total").circliful({
        decimals: 4,
        alwaysDecimals: true,        
        animationStep: 5,
        foregroundBorderWidth: 5,
        backgroundBorderWidth: 15,
        fontColor: "#018f6e",
        foregroundColor: "#018f6e",
        backgroundColor: "#e9ecef",
        percentageY: 109,
        percentageX: 102,
        animateInView: true
        
   });      


   $('.counter').countTo({
        from: 0,
        refreshInterval: 2,
    }); 
   

   $('.putt-counter').countTo({
        from: 0,
        decimals: 2,
        refreshInterval: 2,
    }); 
    
    
  
  });   

















