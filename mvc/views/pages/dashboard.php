<?php
if (!checkAdminLogin()) {
    redirect('ErrorPage');
}

// print_r($data["products"][0]['ProductInfo']);
?>

<div class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <a class="navbar-brand ps-3" href="<?php echo BASE_URL_PATH . "Home" ?>">Dandelion Dashboard</a>

        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>

        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="">Settings</a></li>
                    <li><a class="dropdown-item" href="">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?php echo BASE_URL_PATH . "Signin/logout" ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Products Table
                        </a>
                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 pb-2 border-bottom">Products Table</h1>

                    <div class="mt-5 mb-3 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add</button>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Products List
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Img</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Img</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php
                                    $productArr = $data["products"];
                                    foreach ($productArr as $product) {
                                    ?>
                                        <tr>
                                            <td><?php echo $product["ProductID"] ?></td>
                                            <td><?php echo $product["ProductName"] ?></td>
                                            <td><?php echo $product["CategoryID"] ?></td>
                                            <td>
                                                <img src="<?php echo BASE_URL_PATH . "assets/img/products/" . $product["ProductImg"] ?>" class="rounded-1" style="width: 80px; height:40px; object-fit: cover;">
                                            </td>
                                            <td><?php echo $product["ProductPrice"] ?></td>
                                            <td><?php echo $product["ProductQuantity"] ?></td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <form action="/Admin/DeleteProduct" method="POST" class="d-inline-block">
                                                    <input type="hidden" name="product_id" value="<?php echo $product["ProductID"] ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete-product">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>

                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
</div>

<script>
    window.addEventListener('DOMContentLoaded', event => {

        // Toggle the side navigation
        const sidebarToggle = document.body.querySelector('#sidebarToggle');
        if (sidebarToggle) {
            // Uncomment Below to persist sidebar toggle between refreshes
            // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
            //     document.body.classList.toggle('sb-sidenav-toggled');
            // }
            sidebarToggle.addEventListener('click', event => {
                event.preventDefault();
                document.body.classList.toggle('sb-sidenav-toggled');
                localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
            });
        }

    });
</script>

<script src="<?php echo BASE_URL_PATH . "assets/datatable/datatable.js" ?>"></script>
<script src="<?php echo BASE_URL_PATH . "assets/datatable/simple-datatables.min.js" ?>"></script>

<?php
if (isset($data["result"])) {
    echo $data["result"];
}
?>