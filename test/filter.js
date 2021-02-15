<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script>
  $(document).ready(function(){
    $('.category').on('change', function(){
      var category_list = [];
      $('#filters :input:checked').each(function(){
        var category = $(this).val();
        category_list.push(category);
      });
 
      if(category_list.length == 0)
        $('.resultblock').fadeIn();
      else {
        $('.resultblock').each(function(){
          var item = $(this).attr('data-tag');
          if(jQuery.inArray(item,category_list) > -1)
            $(this).fadeIn('slow');
          else
            $(this).hide();
        });
      }   
    });
  }); 
  </script>