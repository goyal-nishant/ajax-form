<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <div>
                <h2>Registration Form</h2>
            </div>
            <div class="form">
                <form action="" method="POST" class="form-data">
                    <div class="input-field">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Enter username" />
                    </div>
                    <div class="input-field">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter email" />
                    </div>
                    <div class="input-field">
                        <label for="password">Password</label>
                        <input type="password" name="Password" id="password" placeholder="Enter Password" />
                    </div>
                    <div class="input-field">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Please enter password again" />
                    </div>
                    <div class="btn">
                        <button type="submit" name="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="output"></div>

        </div>
    </div>
    <script src="ajax.js"></script>
</body>
</html>
