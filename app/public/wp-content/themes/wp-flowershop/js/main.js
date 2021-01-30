jQuery(document).ready(function (jQuery) {
  jQuery("#search__button").click(function () {
    jQuery("#search__popup").slideToggle("slow");
    jQuery("#search__button").remove();
  });
  jQuery("#menu__Button").click(function () {
    jQuery("#nav__Items").toggle("slow");
  });
});
