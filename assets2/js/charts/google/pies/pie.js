/* ------------------------------------------------------------------------------
 *
 *  # Google Visualization - pie chart
 *
 *  Google Visualization pie chart demonstration
 *
 *  Version: 1.0
 *  Latest update: August 1, 2015
 *
 * ---------------------------------------------------------------------------- */


// Pie chart
// ------------------------------

// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawPie);


// Chart settings    
function drawPie() {

    // Data
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Jumlah PSB per Lembaga'],
        ['MA Unggulan Amanatul Ummah', <?php echo $psbmau; ?>],
        ['MBI Amanatul Ummah', <?php echo $psbmbi; ?>]
    ]);

    // Options
    var options_pie = {
        fontName: 'Roboto',
        height: 300,
        width: 500,
        chartArea: {
            left: 50,
            width: '90%',
            height: '90%'
        }
    };
    

    // Instantiate and draw our chart, passing in some options.
    var pie = new google.visualization.PieChart($('#google-pie')[0]);
    pie.draw(data, options_pie);
}