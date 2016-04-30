<?php
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    $grid_file=fopen("$root\grooveflux\scripts\grid.txt","r");
    $grid=fread($grid_file,filesize("$root\grooveflux\scripts\grid.txt"));
    fclose($grid_file);
    $json_grid = json_decode($grid, true);  
?>
<script type="text/javascript">
    $(function(){ //DOM Ready
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