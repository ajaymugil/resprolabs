var section = ".tutorial_by_parts";
var pagination_container = ".pagination";
var next_class = ".next";
var prev_class = ".prev";
$(section + ":not(:nth-of-type(1))").hide();
next_links();

function clean_class(str) {
    return str.replace(".", "");
}

function next_links() {
    var next_heading = $(section + ":visible").next(section).find("h3").text();
    var prev_heading = $(section + ":visible").prev(section).find("h3").text();
    var links = "";
    if (prev_heading.length > 0) {
        links = links + "<a href='#' class='links " + clean_class(prev_class) + "'>&larr; " + prev_heading + "</a> ";
    }
    if (next_heading.length > 0) {
        links = links + "<a href='#' class='links " + clean_class(next_class) + "'>" + next_heading + " &rarr; </a> ";
    }
    $(pagination_container).html(links);


}

function toc(){
      var toc_content = "<p><strong>Table Of Contents</strong></p><ul>";

      $(".tutorial_by_parts h3").each(function(i){
        toc_content = toc_content + "<li><a href='#' data-link='"+i+"' class='toc_links'> <span class='fa fa-angle-double-right'></span> " + $(this).text() + "</a> </li>";
      });
      var toc_content = toc_content + "</ul>";

      $(".toc").addClass("panel").html(toc_content).prepend("<span class='fa fa-times close-toc'> </span>");
}


$("body").on("click", next_class, function(e) {
    e.preventDefault();


    $(section + ":visible").hide().next(section).fadeIn();
        $('html, body').animate({scrollTop:$(section + ":visible").position().top}, 'slow');
    next_links();
});
$("body").on("click", prev_class, function(e) {
    e.preventDefault();

    $(section + ":visible").hide().prev(section).fadeIn();
     $('html, body').animate({scrollTop:$(section + ":visible").position().top}, 'slow');


    next_links();
});
$("body").on("click", ".toc-trigger", function() {
   toc();
    $(".toc").fadeToggle('slow', function() {

        $(".toc-trigger").hide();

    });
});

$("body").on("click", ".close-toc", function() {
    $(".toc").fadeOut(function(){
        $(".toc-trigger").show();
    });
});

$("body").on("click", ".toc a", function() {
var link = $(this).data('link');

if($(section+ ":visible").attr("id") != "section_"+link){

$(section + ":visible").fadeOut(function(){

    $("#section_" +link ).fadeIn();
    next_links();
    toc();
});
}

});