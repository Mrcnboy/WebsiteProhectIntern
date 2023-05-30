$(function(){

    $(document).on('click touchstart', '.brick.closed', function(event){
      var _this = $(this)
      _this.animate({'width': '100%'}, 'fast', function(){
        _this.removeClass('closed');
        _this.addClass('open');
      })
    });
    
    $(document).on('click touchstart', '.brick a.close', function(event){
      var _brick = $(this).closest('.brick');
      // console.log(_brick);
      _brick.animate({'width': '120px'}, 'fast', function(){
        _brick.removeClass('open');
        _brick.addClass('closed');
      })
    });
    
    
    });