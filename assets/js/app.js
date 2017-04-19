/**
* Setup the app
*/
window.root = location.origin + location.pathname;

var app = Davis(function() {
  this.get(location.pathname + 'problems/:category/:name', function(req) {
    $('#title').text(req.params.name);
    $('#content').load(
      window.root + 'problems/' + req.params.category + '/' + req.params.name
    );
    $('body,html').animate(
      {
        scrollTop: 0
      },
      200
    );
  });
  this.get(location.pathname, function(req) {
    $('#content').load(window.root + 'home.html');
  });
  this.get(location.pathname + ':cat', function(req) {
    $('html,body').animate(
      { scrollTop: $('#' + req.params.cat).offset().top - 50 },
      200
    );
  });
});
$('.prefix-link').each(function(i, l) {
  var href = l.getAttribute('href');
  $(l).attr('href', window.root + href);
  console.log($('.nav a').first());
  $('.nav a').first().click();
});

$('document').ready(function() {
  $.getJSON('./list.json', function(list) {
    for (var category in list) {
      console.info('Loading: ' + category);
      var arr = list[category];
      for (var i in arr.reverse()) {
        var cat = category.toLowerCase();
        $('#' + category.toLowerCase()).after(
          '<li><a href="' +
            window.root +
            'problems/' +
            cat +
            '/' +
            arr[i] +
            '.html">' +
            arr[i] +
            '</a></li>'
        );
      }
    }
  });

  $('#content').load(window.root + 'home.html');
});
