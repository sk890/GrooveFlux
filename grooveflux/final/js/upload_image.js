var url;
var size;
function add_image(url){ 
    var img = new Image();
    img.onload = function(){
        size = {w:this.width, h:this.height};
        display_image()
    };
    img.src = url;
}
function display_image(){
    gridster.add_widget('<li ><img src="'+url+'"></li>',Math.ceil(size.w/300),Math.ceil(size.h/50));
    var grids = gridster.serialize();
    $.ajax({
        type: 'POST',
        url: 'scripts/save_grid.php',
        data: {json: JSON.stringify(grids)},
        dataType: 'json'
    })                  
}

$('#upload_button').on('click', function() {
    var file_data = $('#fileToUpload').prop('files')[0];   
    var form_data = new FormData();                  
    form_data.append('file', file_data);
    $.ajax({
                url: 'scripts/upload_image.php', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(php_script_response){
                    
                    alert(php_script_response); // display response from the PHP script, if any
                    var file_name=$("#fileToUpload").val().split(/(\\|\/)/g).pop();
                    url='img/'+file_name
                    add_image('img/'+file_name);
                  
                    
                    
                }
     });

});