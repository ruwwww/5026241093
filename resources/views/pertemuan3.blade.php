<!doctype html>
<html lang="en">
  <head>
    <title>Input</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Tugas pertemuan 3 - Input</h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="usr">Input Type Text</label>
            <input type="text" class="form-control" id="usr" />
          </div>
          <div class="form-group">
            <label for="pwd">Input Type Password</label>
            <input type="password" class="form-control" id="pwd" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="comment">Input Type Textarea</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">Input Type Checkbox</div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="" />Option
              1
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="" />Option
              2
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input
                type="checkbox"
                class="form-check-input"
                value=""
                disabled
              />Option 3
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">Input Type Radio Button</div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="" />Option
              1
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="" />Option
              2
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input
                type="checkbox"
                class="form-check-input"
                value=""
                disabled
              />Option 3
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="sel1">Input Type Select</label>
        <select class="form-control" id="sel1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="customRange1">Input Type Range</label>
      <input type="range" class="form-control-range" id="customRange1" />
    </div>
    <div class="form-group">
      <label for="inputFile1">Input Type File</label>
      <input type="file" class="form-control-range" id="inputFile1" />
    </div>
  </body>
</html>
