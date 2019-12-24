//読み込みtest用
$('h1').on('click', function() {
  console.log('test');
});

$(
  '#input1,#input2,#input3,#input4,#input5,#input6,#input7,#input8,#input9,.input10'
).on('change', function() {
  let v1 = $('#input1').val().length;
  let v2 = $('#input2').val().length;
  let v3 = $('#input3').val().length;
  let v4 = $('#input4').val().length;
  let v5 = $('#input5').val().length;
  let v6 = $('#input6').val().length;
  let v7 = $('#input7').val().length;
  let v8 = $('#input8').val().length;
  let v9 = $('#input9').val().length;
  let v10 = $('.input10').val().length;
  //displaytukeru
  if (v1 && v2 && v3 && v4 && v5 && v6 && v7 && v8 && v9 && v10) {
    $('#button1').css('display', 'none');
    $('#button2').css('display', 'block');
    $('#alert').css('display', 'none');
  }
});

$('#button1').on('click', function() {
  $('#alert').css('display', 'block');
});
