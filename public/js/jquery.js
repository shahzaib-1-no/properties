var multipleCardCarousel = document.querySelector("#carouselExampleControls");

if (window.matchMedia("(min-width: 576px)").matches) {
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false
  });

  // Set up variables for scrolling
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;

  // Function to scroll to the next set of items
  function scrollNext() {
    if (scrollPosition < carouselWidth - cardWidth * 3) {
      scrollPosition += cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    } else {
      // If at the end, reset to the beginning
      scrollPosition = 0;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  }

  // Set up autoplay timer
//   var autoplayInterval = 3000; // Adjust the autoplay interval in milliseconds
//   var autoplayTimer = setInterval(scrollNext, autoplayInterval);

  // Stop autoplay when the mouse is over the carousel
  $("#carouselExampleControls").hover(
    function () {
      clearInterval(autoplayTimer);
    },
    function () {
      autoplayTimer = setInterval(scrollNext, autoplayInterval);
    }
  );

  // Handle manual control clicks
  $("#carouselExampleControls .carousel-control-next").on("click", function () {
    scrollNext();
  });

  $("#carouselExampleControls .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    } else {
      // If at the beginning, scroll to the end
      scrollPosition = carouselWidth - cardWidth * 3;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  // For small screens, add 'slide' class to enable one-item-at-a-time sliding
  $(multipleCardCarousel).addClass("slide");
}


document.addEventListener("DOMContentLoaded", function () {
    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
  
    accordionItemHeaders.forEach((accordionItemHeader, index) => {
      accordionItemHeader.addEventListener("click", (event) => {
        const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
        
        if (currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader !== accordionItemHeader) {
          currentlyActiveAccordionItemHeader.classList.toggle("active");
          currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
        }
        
        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
  
        if (accordionItemHeader.classList.contains("active")) {
          accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        } else {
          accordionItemBody.style.maxHeight = 0;
        }
      });
  
      // Trigger click on the first accordion item header
      if (index === 0) {
        accordionItemHeader.click();
      }
    });
  });


  $(document).ready(function(){
    var clickedTab = $(".tabs-search > .active");
    var tabWrapper = $(".tab__content");
    var activeTab = tabWrapper.find(".active");
    var activeTabHeight = activeTab.outerHeight();
    
    // Show tab on page load
    activeTab.show();
    
    // Set height of wrapper on page load
    tabWrapper.height(activeTabHeight);
    
    // Handle tab click event
    $(".tabs-search > li").on("click touchstart", function(e) {
        e.preventDefault(); // Prevent default action
        
        // Remove class from active tab
        $(".tabs-search > li").removeClass("active");
        
        // Add class active to clicked tab
        $(this).addClass("active");
        
        // Update clickedTab variable
        clickedTab = $(".tabs-search .active");
        
        // Fade out active tab
        activeTab.fadeOut(250, function() {
            // Remove active class from all tabs
            $(".tab__content > li").removeClass("active");
            
            // Get index of clicked tab
            var clickedTabIndex = clickedTab.index();

            // Add class active to corresponding tab
            $(".tab__content > li").eq(clickedTabIndex).addClass("active");
            
            // Update new active tab
            activeTab = $(".tab__content > .active");
            
            // Update variable
            activeTabHeight = activeTab.outerHeight();
            
            // Animate height of wrapper to new tab height
            tabWrapper.stop().delay(50).animate({
                height: activeTabHeight
            }, 500, function() {
                // Fade in active tab
                activeTab.delay(50).fadeIn(250);
            });
        });
    });

    // Recalculate tab content height on window resize
    $(window).on("resize", function() {
        activeTabHeight = activeTab.outerHeight();
        tabWrapper.height(activeTabHeight);
    });
});



  


  
  
  