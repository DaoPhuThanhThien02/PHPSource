<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
            .error {color: #FF0000;}
        </style>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>", method="post">
        <?php
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $nameErr = $emailErr = $commentErr = $websiteErr = $genderErr = "";
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST["name"])){
                $nameErr = "Yêu cầu tên";
            } else {
                $name = test_input($_POST["name"]);
            }
            if (empty($_POST["email"])){
                $emailErr = "Yêu cầu ê meo";
            } else {
                $email = test_input($_POST["email"]);
            }
            if (empty($_POST["website"])){
                $websiteErr = "Yêu cầu quép";
            } else {
                $website = test_input($_POST["website"]);
            }
            if (empty($_POST["comment"])){
                $commentErr = "Yêu cầu còm men";
            } else {
                $comment = test_input($_POST["comment"]);
            }
            if (empty($_POST["gender"])){
                $genderErr = "Yêu cầu giới tính";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }
        ?>
       
                <h1>PHP Form Validation Example</h1>
                <h5 style="color: red;">*require field</h5>
                <div class="mb-3">
                    <label for="" class="form-label">Name:</label>
                    <span class="error"> * <?php echo $nameErr;?></span>
                    <input
                        type="name"
                        class="form-control"
                        name="name"
                        id=""
                        placeholder="A"
                    />
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">Email:</label>
                    <span class="error"> * <?php echo $emailErr;?></span>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id=""
                        placeholder="abc@mail.com"
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Website</label>
                    <span class="error"> * <?php echo $websiteErr;?></span>
                    <input
                        type="website"
                        class="form-control"
                        name="website"
                        id=""
                        placeholder="abc.com"
                    />
                </div>
                <div>
                    <label for="" class="form-label">Comment:</label>
                    <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <textarea class="form-control" name="comment" id="" rows="3"></textarea>
                    </div>
                </div>
                <div>
                    <label for="" class="form-label">Gender:</label>
                    <span class="error"> * <?php echo $genderErr;?></span>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" value="Female" id="" name="gender"/>
                        <label class="form-check-label" for="">Female</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" value="Male" id="" name="gender"/>
                        <label class="form-check-label" for="">Male</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" value="Other" id="" name="gender"/>
                        <label class="form-check-label" for="">Other</label>
                    </div>
                </div>
            <button
                type="submit"
                class="btn btn-primary"

            >
                Submit
            </button>
            
        <?php
        echo "<br>" . test_input($name) . "<br>";
        echo test_input($email) . "<br>";
        echo test_input($website) . "<br>";
        echo test_input($comment) . "<br>";
        echo test_input($gender) . "<br>";
        ?>
                      
            </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
