(function() {
  var template = Handlebars.template, templates = Handlebars.templates = Handlebars.templates || {};

  Handlebars.partials = Handlebars.templates;
templates['sidebar.bar'] = template(function (Handlebars,depth0,helpers,partials,data) {
  this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Handlebars.helpers); data = data || {};
  


  return "<svg class=\"close-button\" width=\"20\" height=\"20\">\n    <g class=\"cross\">\n    <rect x=\"9\" y=\"0\" width=\"2\" height=\"20\" fill=\"white\" />\n    <rect x=\"0\" y=\"9\" width=\"20\" height=\"2\" fill=\"white\" />\n    </g>\n</svg>\n<section>\n    <h2>Ny barkveld</h2>\n    Opprett nye skift for en barkveld.\n</section>\n<section style=\"height:270px; overflow:hidden;\">\n    <header class=\"row\">\n        <span class=\"large-3\">Dato</span>\n        <span class=\"large-9 selected-date hidden\"></span>\n    </header>\n    <table class=\"datepicker\">\n    </table>\n</section>\n<section>\n    <header>\n        Skift\n    </header>\n    <!--<div class=\"shift row\">\n        <span class=\"large-8\">1x Skjenkemester</span>\n        <span class=\"large-4 text-right time\">17:00 - 03:00</span>\n    </div>-->\n    <div class=\"add-shift\">\n        + legg til et skift\n    </div>\n</section>\n<section>\n    <header>\n        Kommentar\n    </header>\n    <textarea></textarea>\n</section>\n<section>\n    <button id=\"save-night\">Lagre</button>\n</section>\n";
  });
})();