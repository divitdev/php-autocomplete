<!DOCTYPE html>
<html>
<head>
  <title>Laravel - Dynamic autocomplete search using select2 JS Ajax</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>
<body class="bg-dark">
<div class="container mt-4">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
          <h4>Laravel Dynamic autocomplete search using select2 JS Ajax</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <select class="itemName form-control" name="itemName"></select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript">
$('.itemName').select2({
  placeholder: 'Select an item',
  ajax: {
    url: "{{route('select2-autocomplete-ajax')}}",
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {
                  text: item.name,
                  id: item.id
              }
          })
      };
    },
    cache: true
  }
});
</script>
</html>