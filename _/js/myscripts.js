var container = document.querySelector('#container');
var msnry = new Masonry (container, {
    columnWidth: '.art-box',
    itemSelector: '.art-box',
});

imagesLoaded( container, function() {
  msnry = new Masonry( container );
});
