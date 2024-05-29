<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-header {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h1 class="text-center">Insert</h1>
        </div>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $newAction = "";
            } else {
            $newAction = "./insertProduct";
            }
        ?>
        <form method="post" enctype="multipart/form-data" action="<?php echo $newAction; ?>">
            <div class="mb-3">
                <label for="productId" class="form-label"><h4>ID Product</h4></label>
                <input type="text" class="form-control" name="pid" id="productId" placeholder="Enter product ID">
            </div>
            <div class="mb-3">
                <label for="productName" class="form-label"><h4>Product Name</h4></label>
                <input type="text" class="form-control" name="pname" id="productName" placeholder="Enter product name">
            </div>
            <div class="mb-3">
                <label for="companyId" class="form-label"><h4>ID Company</h4></label>
                <input type="text" class="form-control" name="Company" id="companyId" placeholder="Enter company ID">
            </div>
            <div class="mb-3">
                <label for="selectBand" class="form-label"><h4>Select Band</h4></label>
                <select class="form-select form-select-lg" name="selectBand" id="selectBand">
                    <option selected>Select one</option>
                    <option value="Minocin">Minocin</option>
                    <option value="Istanbul">Istanbul</option>
                    <option value="Jakarta">Jakarta</option>
                </select>
            </div>
            <label for="" class="from-label">Select Year</label>
                <select class="form-select form-select-lg" name="selectYear" id="">
                <?php
                    for ($year = 2015; $year <= 2025; $year++) {
                    echo '<option value="' . $year . '">' . $year . '</option>';
                    }
                ?>
                </select>
            <div class="mb-3">
                <label for="fileInput" class="form-label"><h4>Choose Image</h4></label>
                <input type="file" class="form-control" name="ImageFile" id="fileInput">
                <div id="fileHelpId" class="form-text">Select an image file to upload</div>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg" name="btInsert">Insert</button>
            </div>
        </form>
        <?php
        if(isset($data["result"])) {
            if($data["result"]) {
                echo "Thêm mới thành công";
            } else {
                echo "Thêm mới không thành công";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>