$('document').ready(function(){
    
    function cl(){
        $.ajax({
            url: 'ppl.json',
            type: 'get',
            dataType: 'JSON',
            cache: false,
            success: function(data){
                console.log(data);
                $.each(data, function(index, values){
                    console.log(index);
//                    console.log(values);
                    console.log(values.id);
                    console.log(values.name);
                    console.log(values.gender);
                    $('#profile').append(`
                        <div class="person" id="p${values.id}">
                        <h3>${values.id}</h3>
                        <div class="profileImage">
                        <img src=img/${values.id}.jpg>
                        </div>
                        <h4>Name: ${values.name}</h4>
                        <p>Gender: ${values.gender}</p>
                        </div>
                        `)
                    
                });
            }
            
        });
        
    };
    
    cl();
    
    $('form').submit(function(e){
        
        var fd = new FormData($(this)[0]);
        $(".person").remove();
        $.ajax({
            url:'ajaxprocess.php',
            type:'post',
            data: fd,
            cache:false,
            contentType:false,
            processData:false,
            success: function(){
                cl();
                
            }
        });
        
        e.preventDefault();
    });
 
    
});