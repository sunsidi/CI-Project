$('body').on('click', '.btn-group button', function (e) {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
    
    //do any other button related things
});
/*$(".heade").click(function () {

    $heade = $(this);
    //getting the next element
    $content = $heade.next();
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(500, function () {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
    });

});*/