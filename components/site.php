<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .container {
        display: flex;
        flex-direction: column;
        gap: 12px;
      }
      .container label {
        display: flex;
        flex-direction: column;
        gap: 4px;
      }

      .container {
        width: 400px;
        padding: 16px;
        font-size: 20px;
        border-radius: 16px;
        background: linear-gradient(
          to bottom right,
          rgba(255, 255, 255),
          rgb(148, 101, 215)
        );
        font-family: Georgia, "Times New Roman", Times, serif;
      }
      .container input,
      textarea {
        border-radius: 4px;
        padding: 8px;
        border: 1px solid rgb(84, 43, 142);
        outline: none;
        font-family: Georgia, "Times New Roman", Times, serif;
      }
      button {
        padding: 8px 12px;
        width: max-content;
        background-color: rgb(84, 43, 142);
        font-size: 20px;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-family: Georgia, "Times New Roman", Times, serif;
      }
      button:hover {
        background-color: rgb(73, 32, 131);
      }
    </style>
  </head>
  <body>
    <form action="">
      <div class="container">
        <label for="">Имя<input type="text" /></label>
        <label for="">Email<input type="text" /></label>
        <label for="">
          Отзыв
          <textarea name="" id="" cols="30" rows="10"></textarea>
        </label>
        <button>Отправить</button>
      </div>
    </form>
  </body>
</html>
