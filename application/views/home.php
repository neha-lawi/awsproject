<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            flex: 1;
        }
        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: auto;
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo URL; ?>">AWS Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="<?php echo URL; ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo URL; ?>/about">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-4">
                <h4>Add User</h4>
                <form id="userForm" method="post" action="<?php echo URL; ?>/home/store">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>

            <!-- Table Section -->
            <div class="col-md-8">
                <h4>Users List</h4>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        <?php foreach ($infos as $info) { ?>
                            <tr>
                                <td><?php echo $info->id; ?></td>
                                <td><?php echo $info->name; ?></td>
                                <td><?php echo $info->email; ?></td>
                                <td>
                                    <a href="<?php echo URL; ?>/home/deleteRow/<?php echo $info->id; ?>" class="btn btn-danger btn-sm">
                                        Delete
                                    </a>
                                </td>
                                <td>
                                    <?php if ($info->status == 0) { ?>
                                        <a href="<?php echo URL; ?>/home/active/<?php echo $info->id; ?>" class="btn btn-danger btn-sm">
                                            Inactive
                                        </a>
                                    <?php } else { ?>
                                        <a href="<?php echo URL; ?>/home/inactive/<?php echo $info->id; ?>" class="btn btn-success btn-sm">
                                            Active
                                        </a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 AWS Project. All Rights Reserved.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
