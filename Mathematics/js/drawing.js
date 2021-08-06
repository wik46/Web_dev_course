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
    ctx.lineWidth = 0.5;
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
    // Drawing the markers.
}