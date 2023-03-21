<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .fakeimg {
      height: 50px;
      background: #aaa;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-6">
        <img width="500" height="500" src="/product/img/TUK-Pallete_empty-600x601.png"
          class="attachment-woocommerce_single size-woocommerce_single" alt="" loading="lazy" />
      </div>
      <div class="col-sm-6">
        <h2>Makeup product</h2>

        <td class="value">
          <ul>
            <li class="iconic-was-swatches__item">
              <div class="iconic-was-swatch__container" style="width: 50px; height: 50px;">
                <img width="150" height="150" src="/product/img/B_CAPRI_SWATCH.png" />
              </div>
            </li>
            <li class="iconic-was-swatches__item">
              <div class="iconic-was-swatch__container" style="width: 50px; height: 50px;">
                <img width="150" height="150" src="/product/img/B_RIO_SWATCH-1.png" />
              </div>
            </li>
            <li class="iconic-was-swatches__item">
              <div class="iconic-was-swatch__container" style="width: 50px; height: 50px;">
                <img width="150" height="150" src="/product/img/BP1_CRETE_SWATCH.jpg" />
              </div>
            </li>
            <li class="iconic-was-swatches__item">
              <div class="iconic-was-swatch__container" style="width: 50px; height: 50px;">
                <img width="150" height="150" src="/product/img/BP2_LOCARNO_SWATCH.jpg" />
              </div>
            </li>
          </ul>
        </td>
      </div>
    </div>
  </div>
<script>
// Get the list of swatch items
const swatchItems = document.querySelectorAll('.iconic-was-swatches__item');

// Add a click event listener to each swatch item
swatchItems.forEach(swatchItem => {
  swatchItem.addEventListener('click', () => {
    // Get the image element inside the clicked swatch item
    const swatchImage = swatchItem.querySelector('img');
    // Get the source URL of the clicked image
    const swatchImageSrc = swatchImage.getAttribute('src');
    // Update the main image with the clicked swatch image
    const mainImage = document.querySelector('.col-sm-6 img');
    mainImage.setAttribute('src', swatchImageSrc);
  });
});
</script>
</body>

</html>