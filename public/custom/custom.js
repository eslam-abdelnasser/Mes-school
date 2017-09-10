$(function() {
    // $(".bootstrap-switch-label").on('click',function() {
    //     if(!$('#checkbox').is(':checked')) {
    //         //Do stuff
    //         // alert('test');
    //
    //         $('.date_range_class').toggleClass('hidden');
    //     }
    // });


// $('.test').change(function () {
//     alert('hola');
// });

    $('#element').click(function() {
        if($('#optionsRadios22').is(':checked')) {  $('.date_range_class').toggleClass('hidden'); }
    });

    $('#my-datepicker').datepicker({
        minDate: new Date()
    });

    // alert('goiugosdufui');
})