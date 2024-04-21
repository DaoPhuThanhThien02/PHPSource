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
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <form action = "Test.php" , method="post">
                <h1 style="text-align: center;">Novell Services Login</h1>
                <div class="mb-3">
                    <label for="" class="form-label">Username</label>
                    <input
                        type="text"
                        class="form-control"
                        name="username"
                        id=""
                        placeholder="A"
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        id=""
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">City of Employment</label>
                    <input
                        type="text"
                        class="form-control"
                        name="cof"
                        id=""
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Web server</label>
                    <select
                        class="form-select form-select-lg"
                        name="sv"
                        id=""
                    >
                        <option selected>--Choose a server--</option>
                        <option value="New Delhi" >New Delhi</option>
                        <option value="Istanbul" >Istanbul</option>
                        <option value="Jakarta" >Jakarta</option>
                    </select>
                </div>
                <div>Please specify your role</div>
                <div class="form-check">
                    <input 
                        class="form-check-input"
                        type="checkbox"
                        value="Admin"
                        id="adcheckbox"
                        name="checkbox"/>
                    <label class="form-check-label" for=""> Admin </label>
                </div>
                <div class="form-check">
                    <input 
                        class="form-check-input"
                        type="checkbox"
                        value="Engineer"
                        id=""
                        name="checkbox"/>
                    <label class="form-check-label" for=""> Engineer </label>
                </div>
                <div class="form-check">
                    <input 
                        class="form-check-input"
                        type="checkbox"
                        value="Manager"
                        id=""
                        name="checkbox"/>
                    <label class="form-check-label" for=""> Manager </label>
                </div>
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value="Guest"
                        id=""
                        name="checkbox"
                    />
                    <label class="form-check-label" for=""> Guest </label>
                </div>
                <div>Single Sign-on to the following</div>
                <div class="form-check">
                    <input 
                        class="form-check-input"
                        type="checkbox"
                        value="Mail"
                        id=""
                        name="check[]"/>
                    <label class="form-check-label" for=""> Mail </label>
                </div>
                <div class="form-check">
                    <input 
                        class="form-check-input"
                        type="checkbox"
                        value="Payroll"
                        id=""
                        name="check[]"/>
                    <label class="form-check-label" for=""> Payroll </label>
                </div>
                <div class="form-check">
                    <input 
                        class="form-check-input"
                        type="checkbox"
                        value="Sell-service"
                        id=""
                        name="check[]"/>
                    <label class="form-check-label" for=""> Sell-service </label>
                </div>
            <div class="buttons">
                <input type="submit" value="Login" href="Test.php"/>
                <input type="reset" value="Reset" href="Week2.1.php"/>
            </div>
                
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
