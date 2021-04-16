$(document).ready(function() {

  $('#dataTable').DataTable({
    ordering:  false,
    paging:  false
  });

  $("#logout").click(function(){
    $('#logoutModal').modal('show');
  });
  $(".close").click(function(){
    $('#logoutModal').modal('hide');
  });

  $("#tambah").click(function(){
    $('#tambahModal').modal('show');
  });
  $(".close").click(function(){
    $('#tambahModal').modal('hide');
  });

  $("#edit-1").click(function(){
    $('#editModal-1').modal('show');
  });
  $(".close").click(function(){
    $('#editModal').modal('hide');
  });
  
  $("#hapus").click(function(){
    $('#hapusModal').modal('show');
  });
  $(".close").click(function(){
    $('#hapusModal').modal('hide');
  });

});