<?php include "app/app.php";
$page = 2;
head($page); ?>

<body>
    <header> <?php navbar($page); ?>
    </header>


    <main>
        <div class="container division">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="">Se connecter</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos beatae a perspiciatis omnis repudiandae ratione unde, magnam praesentium atque fugiat ad, facilis consequuntur! Dicta animi officia voluptates, provident exercitationem reprehenderit!</p>
                </div>
            </div>
            <div class="purple-div">
            <div class="white-div">
                <h2 class="text-center mb-4">Se connecter</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel laboriosam quae eaque quasi fugit nesciunt laborum porro quod pariatur, corrupti voluptatem quibusdam molestiae dolor aliquam necessitatibus tenetur optio obcaecati quisquam!</p>
                <form class="mx-5" action="" method="post">
        <div class="form-group my-4">
            <label for="email"></label>
            <input type="email" class="form-control p-3" id="url" name="url" placeholder="url de la société">
        </div>
        <div class="form-group my-4">
            <label for="password"></label>
            <input type="password" class="form-control p-3" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group my-4">
            <label for="password"></label>
            <input type="password" class="form-control p-3" id="password" name="password" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-dark btn-block ">Se connecter</button>
    </form>
</div>
</div>
</div>
</html>
</body>
<footer> <?php footer(); ?> </footer>