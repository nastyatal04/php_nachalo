<?require_once("connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.php" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Отзывы</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">Товары</a></li>
            </ul>
        </nav>
        <div class="user">
            <?
            //проверяем авторизацию пользователя
            $isLoggedId = false;//предположим что пользователь не авторизован
            if($isLoggedId){
                echo "<a href='#'>Личный кабинет</a>";
            }else{
                echo "<a href='#'>Войти</a>";
            }
            ?>
        </div>
    </header>
    <div class="content">
        <div class="slider">
            <div class="slides">
                <?php  
                if ($connect->connect_error) {
                    die("Connection failed: " . $connect->connect_error);
                }
                // Получение слайдов из базы данных
                $sql = "SELECT * FROM banners";
                $result = $connect->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="slide"><h2>' . $row["text"] . '</h2><img src="' . $row["img"] . '"></div>';
                    }
                } else {
                    echo "0 results";
                }
                
                $connect->close();
                ?>
            </div>
        </div>
    </div>
    <script>
    let slides = document.querySelector('.slides');
    let slideCount = slides.childElementCount;
    let currentIndex = 0;
    
    function nextSlide() {
        currentIndex = (currentIndex + 1) % slideCount;
        slides.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
    }
    
    setInterval(nextSlide, 3000);
    </script>
</body>
</html>