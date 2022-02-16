$(document).ready(function(){

  var segments = $(".show-segment--icon");
  var segmemtsAmount = Math.ceil(segments.length * 0.5);

  $(".section-icon-1:nth-child(1)").hide();

  for (var i = 0; i < segmemtsAmount; i++) {
    var c = i + 1;

    if (c > 1) {
      $(".section-icon-" + c +":nth-child(2)").hide();
      $(".section-form-" + c ).hide();
    }

  }

    // hide/show segments
    $(".show-segment--icon").click(function(){
      var _this = this;
      var classes = _this.classList;
      classes.remove("show-segment--icon");
      var classItem = classes[0];
      var targetIndex = classItem[ classItem.length - 1 ];

      $(".section-form-" + targetIndex).slideToggle();
      $(".section-icon-" + targetIndex).toggle();

      _this.classList.add("show-segment--icon");
    });

});