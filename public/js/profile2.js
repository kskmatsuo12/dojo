//読み込みtest用
// $('h1').on('click', function() {
//   console.log('test');
// });

$('#user_profile').on('change', function(e) {
  console.log('test');
  let file = e.target.files[0];
  let blobUrl = window.URL.createObjectURL(file);
  $('#user_profile_preview').attr('src', blobUrl);
});
