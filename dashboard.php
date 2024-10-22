<?php
include_once 'sidebar.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body>
        <div class="main-content">
            <H2>Dashboard-></H2>

            <ul class="box-info">
                <li>
                <i class="fa-solid fa-users icon"></i>
                    <span class="text">
                        <h3>2450</h3>
                        <p>Users</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle icon'></i>
                    <span class="text">
                        <h3>3</h3>
                        <p>Suppliers</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-cart icon'></i>
                    <span class="text">
                        <h3>654</h3>
                        <p>Items</p>
                    </span>
                </li>
            </ul>
            <div class=" chart-container">
                <div class="sales-chart-cont">
                    
                    <canvas id="sales-chart" ></canvas>
                </div>
                <div class="stock-chart-cont">
                    <canvas id="stock-chart" ></canvas>
                </div>
            </div>
            
        </div>
    </body>
    <script>
        const ctx = document.getElementById('sales-chart').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
        datasets: [{
            label: 'Sales',
            data: [1000, 2000, 5, 1300, 1400],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const ctx2 = document.getElementById('stock-chart').getContext('2d');
new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Product A', 'Product B', 'Product C', 'Product D', 'Product E'],
        datasets: [{
            label: 'Stock Levels',
            data: [500, 400, 300, 200, 100],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
    </script>
</html>
