$(document).ready(function(){
  $('#landing-content').mousemove(function(e){
    var x = -(e.pageX + this.offsetLeft) / 15;
    var y = -(e.pageY + this.offsetTop) / 15;
    $(this).css('background-position', x + 'px ' + y + 'px');
  });    
});