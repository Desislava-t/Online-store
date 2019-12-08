$(document).ready(function () {
    // Show hide popover
    $(".dropdown").click(function () {
        $(this).find(".dropdown-content").slideToggle("fast");
    });
});
$(document).on("click", function (event) {
    var $trigger = $(".dropdown");
    if ($trigger !== event.target && !$trigger.has(event.target).length) {
        $(".dropdown-content").slideUp("fast");
    }
});

