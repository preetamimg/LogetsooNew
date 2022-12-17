
(() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }   
            form.classList.add('was-validated')
        }, false)
    })
})()


   // Fetch all the forms4 we want to apply custom Bootstrap validation styles to
   const forms5 = document.querySelectorAll('.needs-validation5')

   // Loop over them and prevent submission
   Array.from(forms5).forEach(form => {
     form.addEventListener('submit', event => {
       if (!form.checkValidity()) {
         event.preventDefault()
         event.stopPropagation()
       } else {
        $('.resetForm input').attr("disabled", true);
        $('.resetForm .btnStyle2').addClass('disabled');
        $('.resetForm .btnStyle2 .afterText').removeClass('d-none');
        $('.resetForm .btnStyle2 .beforeText').addClass('d-none');
         setTimeout(() => {
           window.location.href = "/logestoo_frontend_ui/buyerside/buyer-confirm-password.php";
         }, 2000);
       }
       event.preventDefault()
 
       form.classList.add('was-validated')
     }, false)
   })

  // confirm password
  let confirmPass = document.querySelectorAll('.confirmPass');
  let validationCustomNewPass = document.getElementById('validationCustomNewPass');
  let validationCustomConfirmNewPass = document.getElementById('validationCustomConfirmNewPass');
  let resetPass = document.getElementById('resetPass');
  let alertPassword = document.getElementById('alertPassword');


confirmPass.forEach(confirmPass1 => {
    confirmPass1.addEventListener('input', ()=>{    
    if((!validationCustomNewPass.value == "") && (!validationCustomConfirmNewPass.value == "") ) {
        if(validationCustomNewPass.value == validationCustomConfirmNewPass.value) {
            alertPassword.classList.remove('passNotMatch');
            alertPassword.classList.add('passMatch');
            resetPass.disabled = false;
        } else {
                alertPassword.classList.remove('passMatch');
                alertPassword.classList.add('passNotMatch');
                resetPass.disabled = true
            }
    }else { 
        alertPassword.classList.remove('passMatch');
        alertPassword.classList.remove('passNotMatch');
        resetPass.disabled = true
    }
    })
})


  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');
  
  let pass1 = document.getElementById('validationCustomPassword');
  let pass2 = document.getElementById('validationCustomConfirmPassword');
  let invalidPass = document.getElementById('invalidPassword');

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      } 
      
      else {
        if(pass1.value == pass2.value) {
          $('.form1 input').attr("disabled", true);
          $('.form1 .btnStyle2').addClass('disabled');
          $('.form1 .btnStyle2 .afterText').removeClass('d-none');
          $('.form1 .btnStyle2 .beforeText').addClass('d-none');
          setTimeout(() => {
            $('.form1').addClass('d-none');
            $('.form2').removeClass('d-none');
            $('#nav1').removeClass('active');
            $('#nav2').addClass('active');
          }, 1000);
        }
        else {
          pass2.classList.add('invalidPassword');
          invalidPass.classList.remove('d-none');
          pass2.addEventListener('input', ()=> {
            if(pass1.value == pass2.value) {
              pass2.classList.remove('invalidPassword');
              invalidPass.classList.add('d-none');
            } else if(pass2.value == "") {
              pass2.classList.remove('invalidPassword');
              invalidPass.classList.add('d-none');
            }
            else {
              pass2.classList.add('invalidPassword');
              invalidPass.classList.remove('d-none');
            }
          })
          pass1.addEventListener('input', ()=> {
            if(pass1.value == pass2.value) {
              pass2.classList.remove('invalidPassword');
              invalidPass.classList.add('d-none');
            } else if(pass2.value == "") {
              pass2.classList.remove('invalidPassword');
              invalidPass.classList.add('d-none');
            }
            else {
              pass2.classList.add('invalidPassword');
              invalidPass.classList.remove('d-none');
            }
          })
        }
      }
      event.preventDefault()

      form.classList.add('was-validated')
    }, false)
  })

  // Fetch all the forms2 we want to apply custom Bootstrap validation styles to
  const forms2 = document.querySelectorAll('.needs-validation2')

  // Loop over them and prevent submission
  Array.from(forms2).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      } else {
        $('.form2 input').attr("disabled", true);
        $('.form2 .btnStyle2').addClass('disabled');
        $('.form2 .btnStyle2 .afterText').removeClass('d-none');
        $('.form2 .btnStyle2 .beforeText').addClass('d-none');
        setTimeout(() => {
          $('.form2').addClass('d-none');
          $('.form3').removeClass('d-none');
          $('#nav2').removeClass('active');
          $('#nav3').addClass('active');
        }, 1000);
      }
      event.preventDefault()

      form.classList.add('was-validated')
    }, false)
  })

  // Fetch all the forms3 we want to apply custom Bootstrap validation styles to
  const forms3 = document.querySelectorAll('.needs-validation3')

  // Loop over them and prevent submission
  Array.from(forms3).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
        $('#digit-1').focus();
      } else {
        $('#nav3').addClass('active');
        $('.form3 input').attr("disabled", true);
        $('.form3 .btnStyle2').addClass('disabled');
        $('.form3 .btnStyle2 .afterText').removeClass('d-none');
        $('.form3 .btnStyle2 .beforeText').addClass('d-none');
        setTimeout(() => {
          $('.form3').addClass('d-none');
          $('.form4').removeClass('d-none');
        }, 1000);
      }
      event.preventDefault()

      form.classList.add('was-validated')
    }, false)
  })


  // Fetch all the forms4 we want to apply custom Bootstrap validation styles to
  const forms4 = document.querySelectorAll('.needs-validation4')

  // Loop over them and prevent submission
  Array.from(forms4).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
        $('#digit-1').focus();
      } else {
        $('#nav3').addClass('active');
        $('.form4 input').attr("disabled", true);
        $('.form4 .btnStyle2').addClass('disabled');
        $('.form4 .btnStyle2 .afterText').removeClass('d-none');
        $('.form4 .btnStyle2 .beforeText').addClass('d-none');
        setTimeout(() => {
          window.location.href = "/logestoo_frontend_ui/buyerside/success-register-as-buyer.php";
        }, 2000);
      }
      event.preventDefault()

      form.classList.add('was-validated')
    }, false)
  })



  $('#backtofirst').click(function () {
    $('#nav2').removeClass('active');
    $('#nav1').addClass('active');
    $('.form1').removeClass('d-none');
    $('.form2').addClass('d-none');

    $('.form1 input').attr("disabled", false);
    $('.form1 .btnStyle2').removeClass('disabled');
    $('.form1 .btnStyle2 .afterText').addClass('d-none');
    $('.form1 .btnStyle2 .beforeText').removeClass('d-none');
  });
  $('#backtosecond').click(function () {
    $('#nav3').removeClass('active');
    $('#nav2').addClass('active');
    $('.form2').removeClass('d-none');
    $('.form3').addClass('d-none');

    $('.form2 input').attr("disabled", false);
    $('.form2 .btnStyle2').removeClass('disabled');
    $('.form2 .btnStyle2 .afterText').addClass('d-none');
    $('.form2 .btnStyle2 .beforeText').removeClass('d-none');
  });
  $('#backtothird').click(function () {
    $('.form3').removeClass('d-none');
    $('.form4').addClass('d-none');

    $('.form3 input').attr("disabled", false);
    $('.form3 .btnStyle2').removeClass('disabled');
    $('.form3 .btnStyle2 .afterText').addClass('d-none');
    $('.form3 .btnStyle2 .beforeText').removeClass('d-none');
  });

  if ($('input[name=tags-country]').length) {
    var input = document.querySelector('input[name=tags-country]');
    var tagify = new Tagify(input, {
        mode : "select",
        userInput: false,
        editTags: false,
        whitelist: ["first option", "second option", "third option"],
    })
  }
  if ($('input[name=tags-state]').length) {
    var input = document.querySelector('input[name=tags-state]');
    var tagify = new Tagify(input, {
        mode : "select",
        userInput: false,
        editTags: false,
        whitelist: ["first option", "second option", "third option"],
    })
  }

  
document.addEventListener("DOMContentLoaded", function (event) {

    function OTPInput() {
      const inputs = document.querySelectorAll('#otp > *[id]');
      for (let i = 0; i < inputs.length; i++) { 
        inputs[i].addEventListener('keydown', function (event) { 
          if (event.key === "Backspace") { 
          inputs[i].value = ''; 
          setTimeout(() => {
            if (i !== 0) inputs[i - 1].focus(); 
          }, 50);
        } 
        else { 
          if (i === inputs.length - 1 && inputs[i].value !== '') { 
            return true; 
          } 
          else if ((event.keyCode > 47 && event.keyCode < 58) || (event.keyCode > 95 && event.keyCode < 106)) { 
            inputs[i].value = event.key; 
            if (i !== inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); 
            if(i==5){
              $('.verifyBtn').focus(); event.preventDefault(); 
            }
          } 
          else if (event.keyCode > 64 && event.keyCode < 91) { 
            return false; 
          } 
        } 
      }); 
    }
    } OTPInput();
  
    function OTPInput2() {
      const inputs = document.querySelectorAll('#otp2 > *[id]');
      for (let i = 0; i < inputs.length; i++) { 
        
        inputs[i].addEventListener('keydown', function (event) { 
          if (event.key === "Backspace") { 
            inputs[i].value = ''; 
            setTimeout(() => {
              if (i !== 0) inputs[i - 1].focus(); 
            }, 50);
        } 
        else { 
          if (i === inputs.length - 1 && inputs[i].value !== '') { 
            return true; 
          } 
          else if ((event.keyCode > 47 && event.keyCode < 58) || (event.keyCode > 95 && event.keyCode < 106)) { 
            inputs[i].value = event.key; 
            if (i !== inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); 
            if(i==5){
              $('.verifyBtn').focus(); event.preventDefault(); 
            }
          } 
          else if (event.keyCode > 64 && event.keyCode < 91) { 
            return false; 
          } 
        } 
      }); 
    }
    } OTPInput2();
  });
  
  
  function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode != 46 && charCode > 31 &&
      (charCode < 48 || charCode > 57))
      return false;
    else {
      var itemdecimal = evt.srcElement.value.split('.');
      if (itemdecimal.length > 1 && charCode == 46)
        return false;
      return true;
    }
  }

  // data tables

// show data tables after 1 sec
let showTable = document.querySelectorAll('.customTableWrapper')
showTable.forEach(showTable1 =>{
    setTimeout(() => {
          showTable1.style.visibility = "visible";
    }, 1000);
});
// my inquiry table 
$(document).ready(function() {
  $('#inquiryTable').DataTable({
  'columnDefs': [ {
      'targets': [-1], 
      'orderable': false, 
  }],
  "language": {
  "info": "Page _PAGE_ of _PAGES_",
  "paginate": {
  "previous": "&#x3C;",
  "next": "&#x3E;"
  }
  }
  });
  });

  $(document).ready(function() {
    $("#emojionearea5").emojioneArea({
        pickerPosition: "top",
        filtersPosition: "bottom",
        tones: true,
        autocomplete: false,
        inline: false,
        hidePickerOnBlur: true
    });
    });

    $(document).ready(function() {
      $('.js-example-basic-single').select2();
    });

    // inbox send page mobile view
let leftInboxCard = document.querySelectorAll('.leftInboxCard');
let inboxPageInner = document.querySelector('.inboxPageInner');
let backBtn = document.querySelectorAll('.backBtn')

leftInboxCard.forEach(inboxCard =>{
  inboxCard.addEventListener('click', ()=>{
    inboxPageInner.classList.add('show')
  })
})


// inbox page reply btn

let replyBtn = document.querySelectorAll('.replyBtnShow');
let rightInboxInner = document.querySelector('.rightInboxInner');

replyBtn.forEach(replyBtn1 =>{   
  replyBtn1.addEventListener('click', ()=>{
    rightInboxInner.classList.add('sendMessage')
  })
})


backBtn.forEach(backBtn1 =>{
  backBtn1.addEventListener('click', ()=>{
    inboxPageInner.classList.remove('show')
  })
})

if ($('[class*="editor"]').length) {
  // ck editor
  const watchdog = new CKSource.EditorWatchdog();			
        window.watchdog = watchdog;			
        watchdog.setCreator( ( element, config ) => {
          return CKSource.Editor
            .create( element, config )
            .then( editor => {														
              return editor;
            } )
        } );			
        watchdog.setDestructor( editor => {			
          return editor.destroy();
        } );			
        watchdog.on( 'error', handleError );			
        watchdog
          .create( document.querySelector( '.editor' ), {					
            licenseKey: '',					
          } )
          .catch( handleError );
                      watchdog
          .create( document.querySelector( '.editor11' ), {					
            licenseKey: '',					
          } )
          .catch( handleError );
                      watchdog
          .create( document.querySelector( '.editor12' ), {					
            licenseKey: '',					
          } )
          .catch( handleError );			
        function handleError( error ) {
          // console.error( 'Oops, something went wrong!' );
          // console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
          // console.warn( 'Build id: 352rulslewhc-jeqvy27n4m' );
          // console.error( error );
        }
}
$(document).ready(function () {
  $('.preloader').remove();
});

// inquiry page emoji picker
$(document).ready(function() {
  $("#emojionearea6").emojioneArea({
    pickerPosition: "top",
    filtersPosition: "bottom",
    tones: true,
    autocomplete: false,
    inline: false,
    hidePickerOnBlur: true
  });
});
