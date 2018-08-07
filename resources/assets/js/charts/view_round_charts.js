
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