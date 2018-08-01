
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

    $('.counter').counterUp({ 
        delay: 10,
        time: 1000
    });







});










