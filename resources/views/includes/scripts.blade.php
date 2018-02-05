    <script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('js/price-range.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>

    function slugify(string) {
      return string
        .toString()
        .trim()
        .toLowerCase()
        .replace(/\s+/g, "-")
        .replace(/[^\w\-]+/g, "")
        .replace(/\-\-+/g, "-")
        .replace(/^-+/, "")
        .replace(/-+$/, "");
    }

    $("#title").keyup(function(){
            var Text = $(this).val();
            Text = slugify(Text);
            $("#slug").val(Text);
    });

   </script>
   <script type="application/javascript">
       $('#confirm-delete').on('show.bs.modal', function (e) {
           $(this).find('.form-delete').attr('action', $(e.relatedTarget).data('action'));
           $(this).find('.nombre').text($(e.relatedTarget).data('name'));
       });
   </script>