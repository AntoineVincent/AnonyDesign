$(document).ready(function(){
  $('#landing-content').mousemove(function(e){
    var x = -(e.pageX + this.offsetLeft) / 10;
    var y = -(e.pageY + this.offsetTop) / 10;
    $(this).css('background-position', x + 'px ' + y + 'px');
  });    
});