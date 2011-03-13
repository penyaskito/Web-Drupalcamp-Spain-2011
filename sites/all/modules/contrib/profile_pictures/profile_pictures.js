// $Id: profile_pictures.js,v 1.3 2010/07/06 11:28:30 yeputons Exp $

$(function() {
  f = function(obj) {
    $('.profile_pictures_max_dims').css('display', (obj.value == '') ? 'block' : 'none');
  }
  obj = $('select.profile_pictures_imagecache_preset');
  obj.each(function() { f(this); });
  obj.change(function() { f(this); });
});
