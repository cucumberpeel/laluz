$(function () {






// locations

    $("#pic").mouseover(function () {
        $("#pic").attr("src", "images/meme.jpg")
    })

    $("#pic").mouseout(function(){
        $("#pic").attr("src", "images/shop.jpg")
    })

    $("#button").click(function () {
      $("#button").text("just kidding")
    })

    $("#button2").click(function () {
        $("#button2").animate({
            height: 'toggle'
        });
            
      })

// about_us

    const tooltipTriggerList = document.querySelectorAll(
        '[data-bs-toggle="tooltip"]'
      )
      const tooltipList = [...tooltipTriggerList].map(
        tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl)
      )

})
  