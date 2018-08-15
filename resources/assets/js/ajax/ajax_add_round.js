window.Vue = require('vue');

$(document).ready(function(){
    

// Set round as half(9 holes) or full(18 holes)    
    function roundSize() {

        var selected_size = $(this).val();
    
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    
            $.ajax({         
                url: '/ajax_getcourselist',
                dataType: "json",
                method: 'get',
                data: {selected_size: selected_size},      
                success: function (response) {
                    $("#course_id").html(response),
                    $("#selected_course").html(""),
                    $("#select_nines").html("") 
                      
                }, 
                error:function(error){ 
                    console.log(error) 
                }            
            });           

    }            


// Get selected tee's to display correct colour/yardage 
    function selectYards() {

        var selected_yards = $(this).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $.ajax({         
            url: '/ajax_getcourseyards',
            dataType: "json",
            method: 'get',
            data: {selected_yards: selected_yards},      
            success: function (response) {
                $("#selected_course").html("response")                  
            },
            error:function(error){ 
                console.log(error)
            }            
        });          

    }



// Find out which set of nine holes have been played
    function selectNines() {
        
        var selected_size = $('input:radio[name=size]:checked').val();
        var selected_course_id = $('#course_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $.ajax({         
            url: '/ajax_getcoursenines',
            dataType: "json",
            method: 'get',
            data: {selected_course_id: selected_course_id, selected_size: selected_size},      
            success: function (response) {
                $("#select_nines").html(response), 
                $('input:radio[name=nine]').each(selectCourse),
                $('input:radio[name=nine]').change(selectCourse)       
            },
            error:function(error){ 
                console.log(error)
            }            
        });           

    }


       

// Find selected courses data
    function selectCourse() {
        
            var selected_course_id = $('#course_id').val();
            var selected_yards = $('input:radio[name=yards]:checked').val();
            var selected_size = $('input:radio[name=size]:checked').val();            
            var selected_nine = $('input:radio[name=nine]:checked').val();
    
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                }
            })
    
            $.ajax({         
                url: '/ajax_getcourse',
                dataType: "json",
                method: 'get',
                data: {selected_course_id: selected_course_id, selected_yards: selected_yards, selected_size: selected_size, selected_nine: selected_nine},      
                success: function (response) {
                    $("#selected_course").html(response),
                    new Vue({
                        el: '#app',
                        data: {
                            holes: [{first_nine_1: '', first_nine_2: '', first_nine_3: '', first_nine_4: '', first_nine_5: '', first_nine_6: '', first_nine_7: '', first_nine_8: '', first_nine_9: ''}]
                        },
                        computed: {
                            firstNineTotal: function() {
                                if (!this.values) {
                                    return 0;
                                }
                    
                                return this.holes.reduce(function (firstNineTotal, hole) {
                                    return firstNineTotal + Number(hole.firstNineTotal);
                                }, 0);
                            }
                        }
                    });                                        
                },
                error:function(error){ 
                    console.log(error)
                }            
            });           

    }

// Call the functions
    $('input:radio[name=size]').each(roundSize);    
    $('input:radio[name=size]').change(roundSize);

    $('input:radio[name=yards]').change(selectYards);
    $('input:radio[name=yards]').change(selectCourse); 

    $('#course_id').change(selectNines);


    $('input:radio[name=nine]').change(selectCourse);


    
    // Submit the Round
    $('#add_round').on('submit', function (e) {

        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url: url,
            method: 'post',
            data: $(this).serialize(),
            success: function (data) {

                if (data == "success")
                    window.location.href = '/profile';
                else

                    $.each(data.errors, function (key, value) {
                        $('.alert-danger').show();
                        $('.alert-danger').append('<p>' + value + '</p>');
                        $('input[name="' + key + '"], select[name="' + key + '"]').addClass('is-invalid');

                    });
            },
            error: function (error) {
                console.log(error)
            }

        });
    });


    function resetErrors() {
        $('form input, form select').removeClass('is-invalid');
    }               

});

