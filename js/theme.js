jQuery.noConflict();
jQuery( document ).ready(function( $ ) {
  
   $("#tabbed-nav").zozoTabs({
        position: "top-center",
        responsive: true,
        orientation: "horizontal", 
        shadows: false,    
        animation: {
            duration: 600,
            effects: "slideH"
        },
        defaultTab: "tab1"
    });

    $(".nested-tabs").zozoTabs({
        position: "top-left",
        // style: "underlined",
        shadows: false,    
        animation: {
            easing: "easeInOutCirc",
            effects: "slideV"
        },
        defaultTab: "tab1"
    });

    $("#demo-accordion").zozoAccordion({
        // theme: "crystal",
        active: 0,
        sectionSpacing: 0,
        contentSpacing: 0,
        bordered: true,
	});

	$(".vertical-nested-tabs").zozoTabs({
		position: "top-left",
		theme: "clean",
		bordered: true,
        orientation: "vertical",
        defaultTab: "tab1",
        shadows: false,    
        animation: {
            easing: "easeInQuad",
            effects: "slideH"
        },
    });

    //Wrap centered images in a newfigure element
    $( 'img.aligncenter' ).wrap( '<figure class="centered-image"></figure>' );

});