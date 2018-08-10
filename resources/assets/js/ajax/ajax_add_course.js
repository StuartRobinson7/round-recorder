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