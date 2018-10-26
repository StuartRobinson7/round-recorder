// Allow tool tips on the profile page
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

function charts(){

    // Doughnut charts ==================================================================================


    chart_career_fir = new Chartist.Pie('#chart-career-fir', { series: [career_firs, career_firs_leftover] }, {
        donut: true,
        donutWidth: 10,
        startAngle: 270,
        total: 100,
        showLabel: false
    });  
                         
    chart_career_gir = new Chartist.Pie('#chart-career-gir', { series: [career_girs, career_girs_leftover] }, {
        donut: true,
        donutWidth: 10,
        startAngle: 270,
        total: 100,
        showLabel: false
    }); 
    
    chart_career_scrambling = new Chartist.Pie('#chart-career-scrambling', { series: [career_scrambling, career_scrambling_leftover] }, {
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
        
    chart_career_fir.on('draw', drawHandler);
    chart_career_gir.on('draw', drawHandler);
    chart_career_scrambling.on('draw', drawHandler);


    // Line charts ======================================================================================

    // create handicap chart
    var handicap_chart = new Chartist.Line('#chart-handicap',
    { labels: handicap_dates, series: [player_handicap]},
    {axisX:{labelInterpolationFnc: function(value) {return moment(value).format('Do MMM YYYY');}},
    fullWidth: true,
    chartPadding: {right: 40},
    });

    // Add tool tips on draw
    handicap_chart.on("draw", function(data) {

        if (data.type === "point") {
            data.element._node.setAttribute("title", data.value.y);
            data.element._node.setAttribute("data-chart-tooltip", "chart-handicap");
        }   

    })

    // Add tool tips on creation
    handicap_chart.on("created", function() {
        seq = 0;
        // Initiate Tooltip
        $("#chart-handicap").tooltip({
            selector: '[data-chart-tooltip="chart-handicap"]',
            container: ".chart-handicap-holder",
            html: true
        });
    })    


    // create points chart
    var points_chart = new Chartist.Line('#chart-points',
    { labels: points_dates, series: [points]},
    {axisX:{labelInterpolationFnc: function(value) {return moment(value).format('Do MMM YYYY');}},
    fullWidth: true,
    chartPadding: {right: 40},
    });

    // Add tool tips on draw
    points_chart.on("draw", function(data) {

        if (data.type === "point") {
            data.element._node.setAttribute("title", data.value.y);
            data.element._node.setAttribute("data-chart-tooltip", "chart-points");
        }   

    })

    // Add tool tips on creation
    points_chart.on("created", function() {
        seq = 0;
        // Initiate Tooltip
        $("#chart-points").tooltip({
            selector: '[data-chart-tooltip="chart-points"]',
            container: ".chart-points-holder",
            html: true
        });
    })     

    var seq = 0,
    delays = 40,
    durations = 250;

    function drawChart(data) {

        seq++;
        
        if(data.type === 'line') {
            // If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
            data.element.animate({
            opacity: {
                // The delay when we like to start the animation
                begin: seq * delays + 1000,
                // Duration of the animation
                dur: durations,
                // The value where the animation should start
                from: 0,
                // The value where it should end
                to: 1
            }
            });
        } else if(data.type === 'label' && data.axis === 'x') {
            data.element.animate({
            y: {
                begin: seq * delays,
                dur: durations,
                from: data.y + 100,
                to: data.y,
                // We can specify an easing function from Chartist.Svg.Easing
                easing: 'easeOutQuart'
            }
            });
        } else if(data.type === 'label' && data.axis === 'y') {
            data.element.animate({
            x: {
                begin: seq * delays,
                dur: durations,
                from: data.x - 100,
                to: data.x,
                easing: 'easeOutQuart'
            }
            });
        } else if(data.type === 'point') {
            data.element.animate({
            x1: {
                begin: seq * delays,
                dur: durations,
                from: data.x - 10,
                to: data.x,
                easing: 'easeOutQuart'
            },
            x2: {
                begin: seq * delays,
                dur: durations,
                from: data.x - 10,
                to: data.x,
                easing: 'easeOutQuart'
            },
            opacity: {
                begin: seq * delays,
                dur: durations,
                from: 0,
                to: 1,
                easing: 'easeOutQuart'
            }
            });
        } else if(data.type === 'grid') {
            // Using data.axis we get x or y which we can use to construct our animation definition objects
            var pos1Animation = {
            begin: seq * delays,
            dur: durations,
            from: data[data.axis.units.pos + '1'] - 30,
            to: data[data.axis.units.pos + '1'],
            easing: 'easeOutQuart'
            };
        
            var pos2Animation = {
            begin: seq * delays,
            dur: durations,
            from: data[data.axis.units.pos + '2'] - 100,
            to: data[data.axis.units.pos + '2'],
            easing: 'easeOutQuart'
            };
        
            var animations = {};
            animations[data.axis.units.pos + '1'] = pos1Animation;
            animations[data.axis.units.pos + '2'] = pos2Animation;
            animations['opacity'] = {
            begin: seq * delays,
            dur: durations,
            from: 0,
            to: 1,
            easing: 'easeOutQuart'
            };
        
            data.element.animate(animations);
        }

    }

    handicap_chart.on('draw', drawChart);
    points_chart.on('draw', drawChart);

};

// run charts function
charts();


$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
   
    charts();

});
