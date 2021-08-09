// This module will have a lot of drawing on canvas helper functions and classes.

// **************************************************************
// The function that draws the co-ordintate axis on the page.
// Parameters: context obj, color.
// Input: the width and the height of the canvas.
// Output: the co-ordinate axis is drawn in the color specified.
// Note: It draw an axis over the entire canvas.
// **************************************************************
function draw_coordinate_axis(ctx, width, height, color){
    // Drawing the co-ordinate axis.
    // -----------------------------
    // Setting color and style.
    ctx.lineWidth = 1;
    ctx.strokeStyle = color;
    // Drawing y-axis.
    ctx.beginPath();
    ctx.moveTo(width/2, 0);
    ctx.lineTo(width/2, height);
    ctx.stroke();
    // Drawing x-axis.
    ctx.beginPath();
    ctx.moveTo(0, height/2);
    ctx.lineTo(width, height/2);
    ctx.stroke();

}


// This is a better grid than the one above.
// **************************************************************
// The function that draws the co-ordintate axis on the page.
// Parameters: x_dist_g_lines, y_distance_g_lines is the number of units untill we draw the co-ordinate axxis.
//          
// Input: the width and the height of the canvas.
// Output: the co-ordinate axis is drawn in the color specified.
// Note: It draw an axis over the entire canvas.
// **************************************************************
function draw_xy_axis(canvas_id, pixels_per_unit, x_dist_g_lines, y_dist_g_lines, x_axis_starting_point, y_axis_starting_point){
    // Dimensions of the canvas.
    var canvas_width = parseFloat($("#" + canvas_id).css("width"));
    var canvas_height = parseFloat($("#" +  canvas_id).css("height"));
    var canvas_ctx = document.getElementById(canvas_id).getContext("2d");
    
    // num of grid lines.
    var num_hori_lines = Math.floor(canvas_height/ pixels_per_unit),
        num_verti_lines = Math.floor(canvas_width/ pixels_per_unit);


    // Drawing lines paralell to x-axis. (horizontal)
    for(var i = 0; i < num_hori_lines; i++){
        canvas_ctx.beginPath();
        canvas_ctx.lineWidth = 1;
        // Drawing x-axis
        if(i == x_dist_g_lines){
            canvas_ctx.strokeStyle = "#000000";
        }else{
            canvas_ctx.strokeStyle = "#e9e9e9";
        }
        // Fixing the blurry 1px line.
        if(i == num_hori_lines) {
            canvas_ctx.moveTo(0, i*pixels_per_unit);
            canvas_ctx.lineTo(canvas_width, i*pixels_per_unit);
        }else{
            canvas_ctx.moveTo(0, i*pixels_per_unit +0.5);
            canvas_ctx.lineTo(canvas_width, i*pixels_per_unit+0.5);
        }
        canvas_ctx.stroke();
        
    }
    // Drawing lines paralell to y-axis. (vertical)
    for(var i = 0; i < num_verti_lines; i++){
        canvas_ctx.beginPath();
        canvas_ctx.lineWidth = 1;
        // Drawing y-axis.
        if(i == y_dist_g_lines){
            canvas_ctx.strokeStyle = "#000000";
        }else{
            canvas_ctx.strokeStyle = "#e9e9e9";
        }
        // Fixing the blurry 1px line.
        if(i == num_verti_lines) {
            canvas_ctx.moveTo(i*pixels_per_unit, 0);
        canvas_ctx.lineTo(i*pixels_per_unit, canvas_height);
        }else{
            canvas_ctx.moveTo(i*pixels_per_unit + 0.5, 0);
            canvas_ctx.lineTo(i*pixels_per_unit + 0.5, canvas_height);
        }
        
        canvas_ctx.stroke();
    
    }
    // Move the point (0,0) from the top left corner to the cross section of the axis.
    canvas_ctx.translate(y_dist_g_lines*pixels_per_unit, x_dist_g_lines*pixels_per_unit);

    // Drawing tick marks.

    // Ticks marks along the positive X-axis
    // =====================================
    for(i=1; i<(num_verti_lines - y_dist_g_lines); i++) {
        canvas_ctx.beginPath();
        canvas_ctx.lineWidth = 1;
        canvas_ctx.strokeStyle = "#000000";

        // Draw a tick mark 6px long (-3 to 3)
        canvas_ctx.moveTo(pixels_per_unit*i+0.5, -3);
        canvas_ctx.lineTo(pixels_per_unit*i+0.5, 3);
        canvas_ctx.stroke();

        // Text value at that point
        canvas_ctx.font = '9px Arial';
        canvas_ctx.textAlign = 'start';
        canvas_ctx.fillText(x_axis_starting_point.number*i + x_axis_starting_point.suffix, pixels_per_unit*i-2, 15);
    }

    // Ticks marks along the negative X-axis
    // =====================================
    for(i=1; i<y_dist_g_lines; i++) {
        canvas_ctx.beginPath();
        canvas_ctx.lineWidth = 1;
        canvas_ctx.strokeStyle = "#000000";

        // Draw a tick mark 6px long (-3 to 3)
        canvas_ctx.moveTo(-pixels_per_unit*i+0.5, -3);
        canvas_ctx.lineTo(-pixels_per_unit*i+0.5, 3);
        canvas_ctx.stroke();

        // Text value at that point
        canvas_ctx.font = '9px Arial';
        canvas_ctx.textAlign = 'end';
        canvas_ctx.fillText(-x_axis_starting_point.number*i + x_axis_starting_point.suffix, -pixels_per_unit*i+3, 15);
    }

    // Ticks marks along the positive Y-axis
    // =====================================
    // Positive Y-axis of graph is negative Y-axis of the canvas
    for(i=1; i<(num_hori_lines - x_dist_g_lines); i++) {
        canvas_ctx.beginPath();
        canvas_ctx.lineWidth = 1;
        canvas_ctx.strokeStyle = "#000000";

        // Draw a tick mark 6px long (-3 to 3)
        canvas_ctx.moveTo(-3, pixels_per_unit*i+0.5);
        canvas_ctx.lineTo(3, pixels_per_unit*i+0.5);
        canvas_ctx.stroke();

        // Text value at that point
        canvas_ctx.font = '9px Arial';
        canvas_ctx.textAlign = 'start';
        canvas_ctx.fillText(-y_axis_starting_point.number*i + y_axis_starting_point.suffix, 8, pixels_per_unit*i+3);
    }

    // Ticks marks along the negative Y-axis
    // =====================================
    // Negative Y-axis of graph is positive Y-axis of the canvas
    for(i=1; i<x_dist_g_lines; i++) {
        canvas_ctx.beginPath();
        canvas_ctx.lineWidth = 1;
        canvas_ctx.strokeStyle = "#000000";

        // Draw a tick mark 6px long (-3 to 3)
        canvas_ctx.moveTo(-3, -pixels_per_unit*i+0.5);
        canvas_ctx.lineTo(3, -pixels_per_unit*i+0.5);
        canvas_ctx.stroke();

        // Text value at that point
        canvas_ctx.font = '9px Arial';
        canvas_ctx.textAlign = 'start';
        canvas_ctx.fillText(y_axis_starting_point.number*i + y_axis_starting_point.suffix, 8, -pixels_per_unit*i+3);
    }
}    