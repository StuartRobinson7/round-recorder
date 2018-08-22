
$(document).ready(function(){
 

// Set round as half(9 holes) or full(18 holes)    
function roundSize() {

    var selected_size = $('input:radio[name=size]:checked').val();

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
                console.log('size has changed'),
                $("#course_id").html(response),
                $("#selected_course").html(""),
                $("#select_nines").html("");
                  
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
                $("#selected_course").html("response");                  
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
                $("#select_nines").html(response); 
                $('input:radio[name=nine]').each(selectCourse);
                $('input:radio[name=nine]').change(selectCourse);      
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
                    $("#selected_course").html(response); 
  
                    //$('input:radio[name=size]').on('change', selectSize());
                    
                        //$('input:radio[name=size]').change(roundSize);
                        //$('input:radio[name=yards]').change(selectYards);
                        //$('input:radio[name=yards]').change(selectCourse); 
                    
                        //$('#course_id').change(selectNines);
                    
                        //$('input:radio[name=nine]').change(selectCourse);                                           



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
            url: '/rounds',
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




$(document).ajaxSuccess(function () {

    // First 9 Fairways
    var $firstNineInputs = $('#first9Firs input').length;
    var $firstNineDisabled = $('#first9Firs input:disabled').length;
    var firstNineFirTotal = $firstNineInputs - $firstNineDisabled;

    $firstNineFirCount = 0;
    $('#FirstNineFirCount').html($firstNineFirCount);
    $('#FirstNineFirCount').after('/' + firstNineFirTotal);

    // First 9 Greens
    var $firstNineGirTotal = 9;

    $firstNineGirCount = 0;
    $('#FirstNineGirCount').html($firstNineGirCount);
    $('#FirstNineGirCount').after('/' + $firstNineGirTotal);    

    // Update on change
    $(document).on("change", ".FirstNineFir, .FirstNineGir", function () {

        var $firstNineFirCount = $('#first9Firs input:checked').length;
        var $firstNineGirCount = $("#firstNineGirs input:checked").length;

        $('#FirstNineFirCount').html($firstNineFirCount);
        $('#FirstNineGirCount').html($firstNineGirCount);

    });


    // First Nine Score
    var $firstNineScore = 0;

    $("#firstNineScore").html($firstNineScore);

    $(document).on("change", ".first-nine-score", function() {

        var $firstNineScore = 0;

        $(".first-nine-score").each(function(){
            if($(this).val() != "")
            $firstNineScore += parseInt($(this).val());   
        });
        
        $("#firstNineScore").html($firstNineScore);
    })  
    
    // First Nine Putts
    var $firstNinePutts = 0;

    $("#firstNinePutts").html($firstNinePutts);

    $(document).on("change", ".first-nine-putts", function() {

        var $firstNinePutts = 0;

        $(".first-nine-putts").each(function(){
            if($(this).val() != "")
            $firstNinePutts += parseInt($(this).val());   
        });
        
        $("#firstNinePutts").html($firstNinePutts);
    })    
    
    // First Nine Drops
    var $firstNineDrops = 0;

    $("#firstNineDrops").html($firstNineDrops);

    $(document).on("change", ".first-nine-drops", function() {

        var $firstNineDrops = 0;

        $(".first-nine-drops").each(function(){
            if($(this).val() != "")
            $firstNineDrops += parseInt($(this).val());   
        });
        
        $("#firstNineDrops").html($firstNineDrops);
    })         



    // second 9 Fairways
    var $secondNineInputs = $('#second9Firs input').length;
    var $secondNineDisabled = $('#second9Firs input:disabled').length;
    var secondNineFirTotal = $secondNineInputs - $secondNineDisabled;

    $secondNineFirCount = 0;
    $('#secondNineFirCount').html($secondNineFirCount);
    $('#secondNineFirCount').after('/' + secondNineFirTotal);

    // second 9 Greens
    var $secondNineGirTotal = 9;

    $secondNineGirCount = 0;
    $('#secondNineGirCount').html($secondNineGirCount);
    $('#secondNineGirCount').after('/' + $secondNineGirTotal);    

    // Update on change
    $(document).on("change", ".secondNineFir, .secondNineGir", function () {

        var $secondNineFirCount = $('#second9Firs input:checked').length;
        var $secondNineGirCount = $("#secondNineGirs input:checked").length;

        $('#secondNineFirCount').html($secondNineFirCount);
        $('#secondNineGirCount').html($secondNineGirCount);

    });

    // second Nine Score
    var $secondNineScore = 0;

    $("#secondNineScore").html($secondNineScore);

    $(document).on("change", ".second-nine-score", function() {

        var $secondNineScore = 0;

        $(".second-nine-score").each(function(){
            if($(this).val() != "")
            $secondNineScore += parseInt($(this).val());   
        });
        
        $("#secondNineScore").html($secondNineScore);
    })  
    
    // second Nine Putts
    var $secondNinePutts = 0;

    $("#secondNinePutts").html($secondNinePutts);

    $(document).on("change", ".second-nine-putts", function() {

        var $secondNinePutts = 0;

        $(".second-nine-putts").each(function(){
            if($(this).val() != "")
            $secondNinePutts += parseInt($(this).val());   
        });
        
        $("#secondNinePutts").html($secondNinePutts);
    })    
    
    // second Nine Drops
    var $secondNineDrops = 0;

    $("#secondNineDrops").html($secondNineDrops);

    $(document).on("change", ".second-nine-drops", function() {

        var $secondNineDrops = 0;

        $(".second-nine-drops").each(function(){
            if($(this).val() != "")
            $secondNineDrops += parseInt($(this).val());   
        });
        
        $("#secondNineDrops").html($secondNineDrops);
    })  





    // third 9 Fairways
    var $thirdNineInputs = $('#third9Firs input').length;
    var $thirdNineDisabled = $('#third9Firs input:disabled').length;
    var thirdNineFirTotal = $thirdNineInputs - $thirdNineDisabled;

    $thirdNineFirCount = 0;
    $('#thirdNineFirCount').html($thirdNineFirCount);
    $('#thirdNineFirCount').after('/' + thirdNineFirTotal);

    // third 9 Greens
    var $thirdNineGirTotal = 9;

    $thirdNineGirCount = 0;
    $('#thirdNineGirCount').html($thirdNineGirCount);
    $('#thirdNineGirCount').after('/' + $thirdNineGirTotal);    

    // Update on change
    $(document).on("change", ".thirdNineFir, .thirdNineGir", function () {

        var $thirdNineFirCount = $('#third9Firs input:checked').length;
        var $thirdNineGirCount = $("#thirdNineGirs input:checked").length;

        $('#thirdNineFirCount').html($thirdNineFirCount);
        $('#thirdNineGirCount').html($thirdNineGirCount);

    });

    // third Nine Score
    var $thirdNineScore = 0;

    $("#thirdNineScore").html($thirdNineScore);

    $(document).on("change", ".third-nine-score", function() {

        var $thirdNineScore = 0;

        $(".third-nine-score").each(function(){
            if($(this).val() != "")
            $thirdNineScore += parseInt($(this).val());   
        });
        
        $("#thirdNineScore").html($thirdNineScore);
    })  
    
    // third Nine Putts
    var $thirdNinePutts = 0;

    $("#thirdNinePutts").html($thirdNinePutts);

    $(document).on("change", ".third-nine-putts", function() {

        var $thirdNinePutts = 0;

        $(".third-nine-putts").each(function(){
            if($(this).val() != "")
            $thirdNinePutts += parseInt($(this).val());   
        });
        
        $("#thirdNinePutts").html($thirdNinePutts);
    })    
    
    // third Nine Drops
    var $thirdNineDrops = 0;

    $("#thirdNineDrops").html($thirdNineDrops);

    $(document).on("change", ".third-nine-drops", function() {

        var $thirdNineDrops = 0;

        $(".third-nine-drops").each(function(){
            if($(this).val() != "")
            $thirdNineDrops += parseInt($(this).val());   
        });
        
        $("#thirdNineDrops").html($thirdNineDrops);
    })  






    

});



