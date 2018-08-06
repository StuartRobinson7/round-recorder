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

    $('.percent-counter').countTo({
        from: 0,
        decimals: 2,
        refreshInterval: 2,
    });     
     

    
    $('.btn-collapse').each(function(){
        if($(this).hasClass('collapsed')) {
            $(this).find('i').addClass('fa-plus-circle')
        }
        else{
            $(this).find('i').addClass('fa-minus-circle');
        }                 
    });    

    $('.btn-collapse').click(function(){
        $(this).find('i').toggleClass('fa-minus-circle').toggleClass('fa-plus-circle');                 
    }); 

    //$('.btn-collapse').click(function(){
    //    if($(this).hasClass('collapsed')) {
    //        $(this).find('i').removeClass('fa-minus-circle').addClass('fa-plus-circle');
    //    }
    //    else{
    //        $(this).find('i').addClass('fa-minus-circle').removeClass('fa-plus-circle');
    //    }        
   // });    



 
    chart_round_fir = new Chartist.Pie('#chart-round-fir', { series: [round_firs, round_firs_leftover] }, {
        donut: true,
        donutWidth: 10,
        startAngle: 270,
        total: 100,
        showLabel: false
    });  
                         
    chart_round_gir = new Chartist.Pie('#chart-round-gir', { series: [round_girs, round_girs_leftover] }, {
        donut: true,
        donutWidth: 10,
        startAngle: 270,
        total: 100,
        showLabel: false
    }); 
    
    chart_round_scrambling = new Chartist.Pie('#chart-round-scrambling', { series: [round_scrambling, round_scrambling_leftover] }, {
        donut: true,
        donutWidth: 10,
        startAngle: 270,
        total: 100,
        showLabel: false
    });        
    
    
    function drawHandler(data) {
        
        if(data.type === 'slice') {

            var pathLength = data.element._node.getTotalLength();
        
            data.element.attr({
              'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
            });
        
            var animationDefinition = {
              'stroke-dashoffset': {
                id: 'anim' + data.index,
                dur: 1000,
                from: -pathLength + 'px',
                to:  '0px',
                easing: Chartist.Svg.Easing.easeOut,
                fill: 'freeze'
              }
            };
        
            if(data.index !== 0) {
              animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
            }
        
            data.element.attr({
              'stroke-dashoffset': -pathLength + 'px'
            });
        
            data.element.animate(animationDefinition, false);
          }

    }    
   
    chart_round_fir.on('draw', drawHandler);
    chart_round_gir.on('draw', drawHandler);
    chart_round_scrambling.on('draw', drawHandler);



    //=======================================================================================
    //  If in viewport
    // ======================================================================================

 

        //    chart_round_fir.update(),
        //    chart_round_gir.update(),
        //    chart_round_scrambling.update();  
     











});   


















