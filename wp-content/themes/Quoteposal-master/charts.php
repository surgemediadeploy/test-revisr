
<script>
var data = [
    {
        value: <?php the_field('status')?>,
        color: "#16b9de",
        highlight: "#16b9de",
        label: "Completed"
    },
       {
        value: <?php $todo =  100 - get_field('status');
        echo $todo ?>,
        color: "#FFF",
        highlight: "#FFF",
        label: "Incomplete"
    },
    
]


  // Get the context of the canvas element we want to select
var ctx = document.getElementById("myChart").getContext("2d");
// And for a doughnut chart
var myDoughnutChart = new Chart(ctx).Doughnut(data);


  </script>


