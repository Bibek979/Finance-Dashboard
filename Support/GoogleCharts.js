// Graphs Function
google.charts.load('current', {packages: ['corechart']});
google.charts.setOnLoadCallback(drawChart);


function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Expense', 'Amount'],
        ['Swimming', 100],
        ['Food', 390],
        ['Commute', 20],
        ['Football', 55],
        ['Entertainment', 44]
    ]);
    var data2 = google.visualization.arrayToDataTable([
        ['Month', 'Income', 'Expenses'],
        ['Jan',  1000,      400],
        ['Feb',  1170,      460],
        ['Mar',  660,       1120],
        ['Apr',  1030,      540]
      ]);

      var data3 = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options3 = {
            title: 'My Daily Activities',
            is3D: true,
            'height': '250px',
            'width': '250px'
          };

  var options = {
    'title': "This Trial",
    'is3D': true,
    'height': '250px',
    'width': '250px'
  }
  var optionForLine = {
    'title': 'Company Performance',
    'curveType': 'function',
    'legend': { position: 'bottom' },
    'height': '250px',
    'width': '250px'
  }
  // Instantiate and draw the chart.
//   options.chartArea = {left: '10%', width: '100%', height: '65%'}
  var chart = new google.visualization.PieChart(document.getElementById('savingsCard'));
  chart.draw(data, options);
  var chart2 = new google.visualization.LineChart(document.getElementById('expenseCard'));
  chart2.draw(data2, optionForLine);

  var chart3 = new google.visualization.PieChart(document.getElementById('goalCard'));
        chart3.draw(data3, options3);
}
