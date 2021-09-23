var ModalClass = function(){
  var root = this;
  this.construct = function(){
      $.extend();
  };

  this.construct();

  this.showModal = function(){
    $.fn.modal.Constructor.prototype._enforceFocus = function() {};
    $(document).find('#app_modal').modal('show');
  }

  this.closeModal = function(){
    $(document).find('#app_modal').modal('hide');
  }

  this.resetModal = function(){
      $(document).find('#app_modal_title').text("");
      $(document).find('#app_modal_overlay').removeClass('d-none').addClass('d-flex');
      $(document).find('#app_modal_content').empty().html('');
  }
  this.setTitleModal = function(_title){
    $(document).find('#app_modal_title').text(_title);
  }
  this.setContentModal = function(_html){
    $(document).find('#app_modal_content').html(_html);
    $(document).find('#app_modal_overlay').removeClass('d-flex').addClass('d-none');
  }

}

$('#app_modal').on('hidden.bs.modal',function(){
  $modal = new ModalClass();
  $modal.resetModal();
});

function display_message(message,type,duration,position,align,icon){
  $.notify({
    icon: icon,
    message: message
  }, {
    type: type,
    timer: duration,
    placement: {
      from: position,
      align: align
    }
  });
}
