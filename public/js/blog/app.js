$(document).ready(function(){
  $('.addComment').click(function(){
    var id = $(this).attr('data-id');
    $('#id').val(id);
    $('.modal').modal('show');
  });
});
