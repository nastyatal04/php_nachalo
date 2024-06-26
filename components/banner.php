
<!doctype html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ItcSlider - Example 01</title>
  <link href="/examples/libs/ui-components/itc-slider/itc-slider.css" rel="stylesheet">
  <script src="/examples/libs/ui-components/itc-slider/itc-slider.js" defer></script>
  <style>
    *,
    *::before,
    *::after {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto,
      'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
      'Segoe UI Symbol';
    }

    .container {
      max-width: 700px;
      margin: 0 auto;
    }

    .itc-slider__items {
      counter-reset: slide;
    }

    .itc-slider__item {
      flex: 0 0 100%;
      max-width: 100%;
      counter-increment: slide;
      height: 250px;
      position: relative;
    }

    .itc-slider__item::before {
      content: counter(slide) "/5";
      position: absolute;
      top: 10px;
      right: 20px;
      color: #fff;
      font-style: italic;
      font-size: 32px;
      font-weight: bold;
      display: block;
    }

    .itc-slider__item:nth-child(1) {
      background-color: #f44336;
    }

    .itc-slider__item:nth-child(2) {
      background-color: #9c27b0;
    }

    .itc-slider__item:nth-child(3) {
      background-color: #3f51b5;
    }

    .itc-slider__item:nth-child(4) {
      background-color: #03a9f4;
    }

    .itc-slider__item:nth-child(5) {
      background-color: #4caf50;
    }
  </style>
</head>

<body>

<div class="container">

  <div class="itc-slider" data-slider="itc-slider" data-loop="false" data-autoplay="false">
    <div class="itc-slider__wrapper">
      <div class="itc-slider__items">
        <div class="itc-slider__item">
          <!-- Контент 1 слайда -->
        </div>
        <div class="itc-slider__item">
          <!-- Контент 2 слайда -->
        </div>
        <div class="itc-slider__item">
          <!-- Контент 3 слайда -->
        </div>
        <div class="itc-slider__item">
          <!-- Контент 4 слайда -->
        </div>
        <div class="itc-slider__item">
        </div>
      </div>
    </div>
    <button class="itc-slider__btn itc-slider__btn_prev"></button>
    <button class="itc-slider__btn itc-slider__btn_next"></button>
  </div>

</div>

</body>

</html>

						