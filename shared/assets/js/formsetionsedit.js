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
      var classesLength = _this.classList.length;
      var classesItems = [];

      for (var n = 0; n < classesLength; n++ ) {
        classesItems.push(_this.classList[n]);
      }

      classesItems.splice( (classesItems.indexOf("show-segment--icon")), 1 );

      var targetIndex = classesItems[0][((classesItems[0].length) - 1)];

      $(".section-form-" + targetIndex).slideToggle();
      $(".section-icon-" + targetIndex).toggle();

    });

});