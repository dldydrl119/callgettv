$(document).ready(function(){
  $(document).ready(function(){
    /*var url = window.location.href;
    if(url.indexOf('cafe24') != -1) {
        location.href = "http://callgettv.cafe24.com/";
    }
	if(url.indexOf('www') != -1) {
        location.href = "http://callgettv.cafe24.com/";
    }*/
});

    function comm() {
        this.co = function() {

            jsonreturn = function(url,data) {
                var option = {
                    url : 'https://callgettv.com'+url,
                    async:false
                };
                if(data){
                    option.data = data;
                    option.type = "post";
                    option.contentType = false;
                    option.processData = false
                }
                $.ajax(
                    option
                ).done(function(data){
                    result = data;
                });
                return result;
            }

            json = function(url,data) {
                var option = {
                    url : 'https://callgettv.com'+url,
                    data : data,
                    type : "post",
                    async:false
                };
                $.ajax(
                    option
                ).done(function(data){
                    result = data;
                });
                return result;
            }

            uploadImage = function(form) {
                var image = new FormData();
                for (var I = 0; I < form[0].files.length; I++) {
                    image.append('images[]', form[0].files[I]);
                }
                if (form.data('width')) {
                    image.append('x', form.data('width'));
                    if (form.data('height')) {
                        image.append('y', form.data('height'));
                    }
                }
                return this.jsonreturn('/main/uploadimage', image);
            }

            emailsend = function() {
                var email = $('#email').val();
                var title = '??????????????? ?????????????????? v ';
                var text = "???????????? \n\r?????? : "+$('#name').val()+"\n\r????????? : "+$('#phone').val()+"\n\r????????? : "+$('#email').val()+"\n\r?????? : "+$('#address').val()+"\n\r???????????? :"+$('#question').val();
                var result = json('/main/sendmail/',{'title':title,'text':text,'email':email});
                if(result.result == true) {
                    location.href = "https://callgettv.com/";
                    alert("????????? ?????????????????????");
                }
            }

          emailsend2 = function() {
              var email = $('#email_').val();
              var title = '????????????????????? ??????????????????';
              var text = "???????????? \n\r ?????? : "+$('#name_').val() +"\n\r????????? : "+$('#phone_').val()+"\n\r????????? : "+$('#company_').val()+"\n\r??????/?????? : "+$('#manager_').val()+'\n\r????????? : '+$('#email_').val()+'\n\r???????????? :'+$('#text_').val();
              var result = json('/main/sendmail/',{'title':title,'text':text,'email':email});
              if(result.result == true) {
                location.href = "https://callgettv.com/";
                alert("????????? ?????????????????????");
              }
          }
        }
    }
    
    var comm = new comm();
    comm.co();



});
