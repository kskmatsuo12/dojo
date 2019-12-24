$(
  '#top_form1,#top_form2,#top_form3,#top_form4,#top_form5,#top_form6,#top_form7'
).on('change', function() {
  let v1 = $('#top_form1').val();
  let v2 = $('#top_form2').val();
  let v3 = $('#top_form3').val();
  let v4 = $('#top_form4').val();
  let v5 = $('#top_form5').val();
  let v6 = $('#top_form6').val();
  let v7 = $('#top_form7').val();
  if (v1 && v2 && v3 && v4 && v5 && v6.length >= 6 && v7.length >= 6) {
    $('#button1').css('display', 'none');
    $('#button2').css('display', 'block');
  }
});
