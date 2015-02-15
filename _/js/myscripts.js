var container1 = document.querySelector('#msnry-cont-4');
var msnry1 = new Masonry (container1, {
    columnWidth: '.art-box-qtr',
    itemSelector: '.art-box-qtr',
});

imagesLoaded( container1, function() {
  msnry1 = new Masonry( container1 );
});

var container2 = document.querySelector('#msnry-cont-3');
var msnry2 = new Masonry (container2, {
    columnWidth: '.art-box-thrd',
    itemSelector: '.art-box-thrd',
});

imagesLoaded( container2, function() {
  msnry2 = new Masonry( container2 );
});
