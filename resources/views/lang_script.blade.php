<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">

  var url = "{{ route('lang.change') }}";

    $('.lang-change').change(function(){
     let lang_code = $(this).val();
      window.location.href = url + "?lang="+ lang_code;
    });

</script>
