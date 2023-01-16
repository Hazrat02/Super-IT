

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Facebook Profile</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- Navigation -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <!-- Main Content -->
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Dashboard</h1>
                        <p class="card-text">Welcome back, John Doe</p>
                        <div class="row">
                            <div class="col-md-8">
                                <!-- Graph -->
                                <canvas id="myChart"></canvas>
                            </div>
                            <div class="col-md-4">
                                <!-- Summary -->
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge badge-primary">$1,234</span>
                                        Sales
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-secondary">12</span>
                                        Orders
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-success">$456</span>
                                        Profit
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
