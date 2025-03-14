<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPS Report</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #chartsContainer {
            display: block; /* Ensure the charts container is visible */
        }
    </style>
</head>
<body>

<div id="chartsContainer">
    <canvas id="doughnutChart" width="400" height="400"></canvas>
</div>

<script>
    // Static data for the Doughnut chart
    const staticData = {
        labels: ['2023-01', '2023-02', '2023-03', '2023-04', '2023-05'],
        tps: [5, 10, 15, 20, 25] // Example TPS data
    };

    // Function to initialize the Doughnut chart
    function initializeDoughnutChart(data) {
        const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');

        // Check if canvas context is available
        if (!doughnutCtx) {
            console.error('Failed to get canvas context.');
            return;
        }

        // Destroy the existing Doughnut chart if it exists
        if (window.doughnutChart) {
            window.doughnutChart.destroy();
        }

        // Initialize the Doughnut chart
        window.doughnutChart = new Chart(doughnutCtx, {
            type: 'doughnut',
            data: {
                labels: data.labels,  // X-axis labels (dates/weeks/months)
                datasets: [{
                    label: 'TPS',
                    data: data.tps,  // Y-axis data (TPS)
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return `TPS: ${tooltipItem.raw.toFixed(2)}`; // Format the TPS value
                            }
                        }
                    }
                }
            }
        });
    }

    // Log the static data to verify it
    console.log('Static Data:', staticData);

    // Initialize the chart with static data
    initializeDoughnutChart(staticData);
</script>

</body>
</html>
