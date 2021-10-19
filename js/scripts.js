/*
$(document).ready(function () {
    $('#form1').submit(function (event) {
        event.preventDefault();
        
        var $this = $(this);
        var url = $this.attr('action');
        
        
        $.ajax({
            url : url ,
            type : 'POST' ,
            dataType : 'JSON' ,
            data : $this.serialize() ,
            // withCredentials : true ,
            
        })
            .done(function (response) {
                $('span').empty();
                $('div#results').empty();
                $.each(response , function (index , val) {
                    switch (index) {
                        case "name":
                            $('span#name').html(val);
                            break;
                        case "email":
                            $('span#email').html(val);
                            break;
                        case "website":
                            $('span#website').html(val);
                            break;
                        
                        case "success":
                            $('div#results').html(val);
                            break;
                        
                    }
                });
            })
            .fail(function () {
                $('div#results').text('error !!!');
                console.log('error');
            });
        
    });
});

$('div#results').html('OK !!! : : : ');
*/
