var services = function(){
  var root = this;
  this.construct = function(){
      $.extend();
  };

  this.construct();

  this.setupAjax = function(){

  }

  this.callApi = function(_endpoint,_method,_data){
    return $.ajax(
      {
        url : _endpoint,
        method : _method,
        data : _data,
        headers: {
            'ALMACEN-API-KEY':'kEy$sw14Almacen'
        }
      }
    );
  }
}

function fill_validations(id_form,validations){
  $.each(validations, function(key, value) {
      var property =  $(document).find('#'+id_form).find('input[name="'+key+'"],textarea[name="'+key+'"],select[name="'+key+'"]').addClass('is-invalid');
      property.closest('.form-group').addClass('has-danger');
      if(property.prop('tagName')==="INPUT" || property.prop('tagName') == "TEXTAREA"){
          property.after("<small class='invalid-feedback'>"+value+"</small>");
      }else if(property.prop('tagName')==="SELECT"){
        if(property.next('span').length > 0){
          property.next('span').after("<small class='invalid-feedback'>"+value+"</small>");
        }else{
          property.after("<small class='invalid-feedback'>"+value+"</small>");
        }
      }
  });
}

function clearValidations(_idForm){
    var  _inputs = $(document).find('#'+_idForm).find('input,select,textarea');
    $(document).find('#'+_idForm).find('.invalid-feedback').remove();
    $.each(_inputs,function(){
        $(this).removeClass('is-invalid');
        $(this).closest('.form-group').removeClass('has-danger');
    });
}

$.fn.uploadFiles = function(_endPoint,data,_containerData){
  clearValidations(_containerData);
  return $.ajax({
      url : _endPoint,
      type: "POST",
      data:  new FormData(data),
      contentType: false,
      cache: false,
      processData:false,
      /*headers: {
          'ALMACEN-API-KEY':'kEy$sw14Almacen'
      },*/
  });
}

$.fn.clearForm = function() {
    return this.each(function() {
        var type = this.type, tag = this.tagName.toLowerCase();
        if (tag === 'form')
            return $(':input',this).clearForm();
        if (type === 'text' || type === 'password' || tag === 'textarea' || type === 'email') {
            this.value = '';
            $(this).addClass('empty');
        }

        else if (type === 'checkbox' || type === 'radio')
            this.checked = false;
        else if (tag === 'select'){
            $(this).val(null).trigger('change');
        }
    });
}
