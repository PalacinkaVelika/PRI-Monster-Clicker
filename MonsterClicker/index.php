<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main Container</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e9T9hXmJ58bldgTk+"
      crossorigin="anonymous"
    />
    <style>
      .main-container {
        height: 500px;
        overflow-y: auto;
        background-color: white;
      }
      .blue-container {
        height: 200px;
        background-color: blue;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid main-container">
      <div class="blue-container">
        <h1>Container 1</h1>
        <p>Element 1</p>
        <p>Element 2</p>
        <p>Element 3</p>
        <p>Element 4</p>
        <p>Element 5</p>
      </div>
      <div class="blue-container">
        <h1>Container 2</h1>
        <p>Element 1</p>
        <p>Element 2</p>
        <p>Element 3</p>
        <p>Element 4</p>
        <p>Element 5</p>
      </div>
      <div class="blue-container">
        <h1>Container 3</h1>
        <p>Element 1</p>
        <p>Element 2</p>
        <p>Element 3</p>
        <p>Element 4</p>
        <p>Element 5</p>
      </div>
    </div>
  </body>
</html>