<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,body {
            height:100%;
            width:100%;
            background-color:#334;
            overflow:hidden;
            color:white;
            font-family: 'Montserrat', sans-serif;
        }
        .fb-form {
            width:300px;
            top:50%;left:50%;
            position:relative;
        h2 {
                text-align:center;
                font-size:1.4em;
        }
        transform:translateY(-50%) translateX(-50%);
        input {
                margin:15px 0;
        }
        input[type="submit"] {
                margin-top:0;
        }
        textarea {
                height:100px;
        }
        }
        .rating {
            margin:15px auto;
            transform:rotateY(180deg);
            width:100%;
        .fa-star {
                font-size:2em;
                cursor:pointer;
                margin:0 5.1%;
                transition:all .5s ease;
                &.active-rating {
                    transition:all .5s ease;
                    animation:rating-highlight .5s ease forwards;
                    &:nth-child(5) {
                        color:yellow;
                        transition:all .5s ease;
                    }
                    // Loop through "2-5"
                    @for $i from 1 through 4 {
                        &:nth-child(#{$i}) {
                        color:yellow;
                        transition:all .5s ease;
                        & ~ .fa-star {
                            transition:all .5s ease;
                            color:yellow;
                        }
                        }
                    }
                }
                &:hover {
                    &:nth-child(5) {
                        color:yellow;
                        transition:all .5s ease;
                    }
                    // Loop through "2-5"
                    @for $i from 1 through 4 {
                        &:nth-child(#{$i}) {
                        color:yellow;
                        transition:all .5s ease;
                        & ~ .fa-star {
                            color:yellow;
                            transition:all .5s ease;
                        }
                        }
                    }
                }
            }
            }

            @keyframes rating-highlight {
            0% {
                // text-shadow:0 0 20px yellow;
                transform:rotate(-10deg) scale(1.2);
            }
            20% {
                transform:rotate(10deg) scale(.8);
            }
            50% {
                transform:rotate(-5deg) scale(1.1);
            }
            80% {
                transform:rotate(5deg) scale(.9);
            }
            100% {
                // text-shadow:0 0 0 rgba(yellow, 1);
                transform:rotate(0deg) scale(1);
            }
            }
    </style>
</head>
<body>
    <div class='fb-form'>
        <form action='#' class='form-group' method="get">
            <h2>Tell us what you think</h2>
            <input class='form-control' placeholder='Name' name='name' type='text'>
            <input class='form-control' placeholder='Email' name='email' type='text'>
            <textarea class='form-control' id='fb-comment' name='reviews' placeholder='Tell us what you think'></textarea>
            <div class='rating'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            </div>
            <input class='form-control btn btn-primary' type='submit'>
        </form>
    </div>
</body>
</html>
<?
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $reviews = $_REQUEST["reviews"];
    echo $name . " | " . $email . " | " . $reviews;
}

?>









<?
?>