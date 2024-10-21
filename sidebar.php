<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            width: 280px;
            height: 100vh;
        }

    </style>
</head>
<body>
  
  <main class="d-flex flex-nowrap">
    
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark sidebar">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">Dashboard</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto" id="sidebar-nav">
                <li class="nav-item">
                    <a href="sidebar.php" class="nav-link text-white">Home</a>
                </li>
                <li>
                    <a href="dashboard.html" class="nav-link text-white">Dashboard</a>
                </li>
                <li>
                    <a href="orders.html" class="nav-link text-white">Orders</a>
                </li>
                <li>
                    <a href="products.html" class="nav-link text-white">Products</a>
                </li>
                <li>
                    <a href="customers.html" class="nav-link text-white">Customers</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#"> New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        
        <div class="flex-grow-1 d-flex flex-column">
          <nav class="navbar bg-dark search-nav">
            <div class="container-fluid justify-content-end">
              <form class="d-flex" role="search">
                <input class="form-control me-2 bg-dark text-white border-secondary" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = window.location.pathname.split('/').pop();
            const sidebarNav = document.getElementById('sidebar-nav');
            const links = sidebarNav.getElementsByTagName('a');

            for (let link of links) {
                if (link.getAttribute('href') === currentPage) {
                    link.classList.add('active');
                    link.classList.remove('text-white');
                    link.setAttribute('aria-current', 'page');
                } else {
                    link.classList.remove('active');
                    link.classList.add('text-white');
                    link.removeAttribute('aria-current');
                }
            }
        });
    </script>
</body>
</html>