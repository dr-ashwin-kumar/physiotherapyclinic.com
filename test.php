<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Before After Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- JuxtaposeJS CSS -->
  <link rel="stylesheet" href="https://cdn.knightlab.com/libs/juxtapose/latest/css/juxtapose.css">
  <style>
    .juxtapose {
      width: 100%;
      max-width: 800px;
      aspect-ratio: 16 / 9;
      margin: 50px auto;
    }

    .juxtapose-label,
    .juxtapose-credit {
      display: none !important;
    }

    body {
      margin: 0;
      padding: 0;
      background: #f4f4f4;
      font-family: sans-serif;
    }
  </style>
</head>
<body>

  <div id="whyChooseUs-comparison" class="juxtapose"></div>

  <!-- JuxtaposeJS JS -->
  <script src="https://cdn.knightlab.com/libs/juxtapose/latest/js/juxtapose.min.js"></script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    new juxtapose.JXSlider('#whyChooseUs-comparison', [
      {
        src: './assets/images/index-why-choose-us/before.jpg',
        label: ''
      },
      {
        src: './assets/images/index-why-choose-us/after.jpg',
        label: ''
      }
    ], {
      animate: true,
      showLabels: false,
      showCredits: false,
      startingPosition: "50%",
      makeResponsive: true
    });
  });
</script>

</body>
</html>
