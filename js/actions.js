(function($) {
    "use strict";

    var success = '<div class="alert alert-success shadow-lg mt-2 mb-2"><div><svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg><span>Successful!</span></div></div>'
    var error = '<div class="alert alert-error shadow-lg mt-2 mb-2"><div><svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg><span>Incorrect Username and or Password!</span></div></div>'
   
       
    $(document).on('click', '#login', function(event){
        var username = $('#user').val();
        var pass = $('#pass').val();
        var action = 'login';
        // console.log(pass);
        $.ajax(
            {
                url:'actions.php',
                method:"post",
                data:{user:username, pass:pass, action:action},
                dataType:'JSON',
                success:function(data){
                    if(Object.keys(data).length > 0){
                        $('#alert').html(success);
                        window.location.assign('master.php');
                    }else{
                        $('#alert').html(error);
                        window.location.assign('admin.php');
                    }
                    
                    console.log(data);
                    
                },
                error:function(data){
                    $('#alert').html(error);
                }
            });
    });

    $(document).on('click', '#delete', function(event){
        var id = this.name;
        // console.log(id);
        var action = 'delete_blog';
        $.ajax(
            {
                url:'actions.php',
                method:"post",
                data:{action:action, id:id},
                dataType:'JSON',
                success:function(data){
                    if(Object.keys(data).length > 0){
                        $('#alert').html(success);
                        window.location.assign('master.php');
                    }else{
                        $('#alert').html(error);
                        window.location.assign('admin.php');
                    }
                    
                    console.log(data);
                    
                },
                error:function(data){
                    $('#alert').html(error);
                }
            });
    });

    

})(jQuery); // End of use strict