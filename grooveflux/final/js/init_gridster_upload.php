<?php
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    $grid_file=fopen("$root\grooveflux\scripts\grid.txt","r");
    $grid=fread($grid_file,filesize("$root\grooveflux\scripts\grid.txt"));
    fclose($grid_file);
    $json_grid = json_decode($grid, true);  
?>
<script type="text/javascript">
    $(function(){ //DOM Ready
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
                        url: 'scripts/upload_image.php', 
                        dataType: 'text', 
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,                         
                        type: 'post',
                        success: function(php_script_response){
                            
                            alert(php_script_response); 
                            var file_name=$("#fileToUpload").val().split(/(\\|\/)/g).pop();
                            url='img/'+file_name
                            add_image('img/'+file_name);
                          
                            
                            
                        }
             });

        });
        $("#home").addClass('active');
        //Init Grid
        var gridster=$(".gridster ul").gridster({
            widget_margins: [5, 5],
            widget_base_dimensions:  [300, 50],
            max_size_x: 9,
            max_size_y: 8,
            serialize_params: function ($w, wgd) {
                return {
                    //id: wgd.el[0].id,
                    col: wgd.col,
                    row: wgd.row,
                    size_x: wgd.size_x, 
                    size_y: wgd.size_y, 
                    htmlContent: $($w).html()
                };
            },
            avoid_overlapped_widgets: true
        }).data('gridster').disable();
        
        var grid = <?php echo json_encode($json_grid); ?>;
        $.each(grid, function() {
                gridster.add_widget('<li>'+this.htmlContent+'</li>', this.size_x, this.size_y, this.col, this.row);
        });

    });

</script>