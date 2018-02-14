
$(document).on("scroll", function(){ 
    // or as a shorthand $(document).scroll(function(){
    if($(document).scrollTop() > 255)
        {
            //begin to scroll
            $("navbar").css("position","fixed");
            $("navbar").css("top",0);
        }
        else
        {
            //lock it back into place
            $("navbar").css("position","relative");
        }
});