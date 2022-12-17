// Example starter JavaScript for disabling form submissions if there are invalid fields
document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  // In your Javascript (external .js resource or <script> tag)
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
  });

  
$("#validationCustomProductCategory").select2({
  placeholder: "select",
});
$("#validationCustomProductCategory2").select2({
    placeholder: "select",
});

   // Fetch all the forms4 we want to apply custom Bootstrap validation styles to
   const resetPassForm = document.querySelectorAll('.needs-reset-validation5')

   // Loop over them and prevent submission
   Array.from(resetPassForm).forEach(form => {
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
           window.location.href = "/logestoo_frontend_ui/confirm-password.php";
         }, 2000);
       }
       event.preventDefault()
 
       form.classList.add('was-validated')
     }, false)
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
          window.location.href = "/logestoo_frontend_ui/success-register-as-seller.php";
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



  $('.inArabicBtn').click(function () {
    $(this).parent().find('.inArabicInput').addClass("active");
  });



  if ($('input[name=tags-disabled-user-input]').length) {
    var input = document.querySelector('input[name=tags-disabled-user-input]');
    new Tagify(input, {
      whitelist: ['Auto Parts & Accessories', 'Consumer Electronics', 'Electronics', 'Accessories'],
      userInput: false
    })
  }

  if ($('input[name=validationCustomProductSize]').length) {
    var input = document.querySelector('input[name=validationCustomProductSize]');
    new Tagify(input, {
      whitelist: ['Product size 1', 'Product size 2', 'Product size 3', 'Product size 4'],
      userInput: false
    })
  }
  if ($('input[name=validationCustomProductSize2]').length) {
    var input = document.querySelector('input[name=validationCustomProductSize2]');
    new Tagify(input, {
      whitelist: ['حجم المنتج 1', 'حجم المنتج 2', 'حجم المنتج 3', 'حجم المنتج 4'],
      userInput: false
    })
  }

  if ($('input[name=validationCustomOtherVariants]').length) {
    var input = document.querySelector('input[name=validationCustomOtherVariants]');
    new Tagify(input, {
      whitelist: ['Variant 1', 'Variant 2', 'Variant 3', 'Variant 4'],
      userInput: false
    })
  }
  if ($('input[name=validationCustomOtherVariants2]').length) {
    var input = document.querySelector('input[name=validationCustomOtherVariants2]');
    new Tagify(input, {
      whitelist: ['البديل 1', 'البديل 2', 'البديل 3', 'البديل 4'],
      userInput: false
    })
  }

  


  if ($('input[name=validationCustomProductColor2]').length) {
    var input = document.querySelector('input[name=validationCustomProductColor2]');
    new Tagify(input, {
      whitelist: ['البديل 1', 'البديل 2', 'البديل 3', 'البديل 4'],
      userInput: false
    })
  }
  
  if ($('input[name=validationCustomProductKeywords]').length) {
    var input = document.querySelector('input[name=validationCustomProductKeywords]');
    new Tagify(input, {
      whitelist: ['Product Keyword 1', 'Product Keyword 2', 'Product Keyword 3', 'Product Keyword 4'],
      userInput: false
    })
  }
  if ($('input[name=validationCustomProductKeywords2]').length) {
    var input = document.querySelector('input[name=validationCustomProductKeywords2]');
    new Tagify(input, {
      whitelist: ['كلمة المنتج 1' , 'الكلمة الرئيسية للمنتج 2' , 'الكلمة الرئيسية للمنتج 3' , 'كلمة المنتج 4'],
      userInput: false
    })
  }


});



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


function fileSelected() {
  document.getElementById('fileName').innerHTML = 'Click to upload file';
  var file = document.getElementById('validationcerificate').files[0];
  if (file) {
    var fileSize = 0;
    if (file.size > 1024 * 1024)
      fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
    else
      fileSize = (Math.round(file.size * 100 / 1024) / 100).toString() + 'KB';
    document.getElementById('fileName').innerHTML = file.name;
  }
}


// dropify for ad packages page
$(document).ready(function () {
  $('.dropify').dropify({
    messages: {
      default: 'Click or Drag to upload your ad creative',
    }

  });
})

// dropify for add product page add video

$(document).ready(function () {
  $('.dropifyVideo').dropify({
    messages: {
      default: 'Add Video',
    }

  });
})

// dropify for add product page add image

$(document).ready(function () {
  $('.dropifyImage').dropify({
    messages: {
      default: 'Add Image',
    }

  });
})

// dropify for add product page add extra

$(document).ready(function () {
  $('.dropifyExtra').dropify({
    messages: {
      default: 'Minimum Size 500(w)×(h)',
    }

  });
})

// dropify for add product page add image next

$(document).ready(function () {
  $('.dropifyImage1').dropify({
    messages: {
      default: 'Add Image',
    }

  });
})


// glightbox
var lightbox = GLightbox();
lightbox.on('open', (target) => {
});


if ($('input[name=validationCustomProductColor]').length) {
  var inputElm = document.querySelector('[name=validationCustomProductColor]');
  
  function tagTemplate(tagData){
      return `
          <tag title="${tagData.email}"
                  tabIndex="-1"
                  class="tagify__tag ${tagData.class ? tagData.class : ""}"
                  ${this.getAttributes(tagData)}>
              <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
              <div>
                  <div class='tagify__tag__avatar-wrap' style="background-color:${tagData.colorCode};"></div>
                  <span class='tagify__tag-text'>${tagData.colorName}</span>
              </div>
          </tag>
      `
  }
  
  function suggestionItemTemplate(tagData){
      return `
          <div ${this.getAttributes(tagData)}
              class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
              tabindex="0"
              role="option">
              ${ tagData.colorCode ? `
              <div class='tagify__dropdown__item__avatar-wrap' style="background-color:${tagData.colorCode};"></div>` : ''
              }
              <strong>${tagData.colorName}</strong>
          </div>
      `
  }
  
  // initialize Tagify on the above input node reference
  var tagify = new Tagify(inputElm, {
      tagTextProp: 'colorName', // very important since a custom template is used with this property as text
      // enforceWhitelist: true,
      skipInvalid: true, // do not remporarily add invalid tags
      dropdown: {
          closeOnSelect: false,
          enabled: 0,
          classname: 'users-list',
          searchKeys: ['colorName', 'email']  // very important to set by which keys to search for suggesttions when typing
      },
      templates: {
          tag: tagTemplate,
          dropdownItem: suggestionItemTemplate,
          // dropdownHeader: dropdownHeaderTemplate
      },
      whitelist: [
          {
              "value": 1,
              "colorName": "Silver",
              "colorCode": "silver",
              "email": "admin@gmail.com"
          },
          {
              "value": 2,
              "colorName": "Gray",
              "colorCode": "gray",
              "email": "admin@gmail.com"
          },
          {
              "value": 3,
              "colorName": "Dark Gray",
              "colorCode": "darkgray",
              "email": "admin@gmail.com"
          },
          {
              "value": 4,
              "colorName": "Maroon",
              "colorCode": "maroon",
              "email": "admin@gmail.com"
          },
      ],
      transformTag: (tagData, originalData) => {
          var {colorName, email} = parseFullValue(tagData.colorName)
          tagData.colorName = colorName
          tagData.email = email || tagData.email
      },
      validate({colorName, email}) {
          // when editing a tag, there will only be the "name" property which contains name + email (see 'transformTag' above)
          if( !email && colorName ) {
              var parsed = parseFullValue(colorName)
              colorName = parsed.colorName
              email = parsed.email
          }
  
          if( !colorName ) return "Missing name"
          if( !validateEmail(email) ) return "Invalid email"
  
          return true
      }
  })
  
  // attach events listeners
  tagify.on('dropdown:select', onSelectSuggestion) // allows selecting all the suggested (whitelist) items
        // .on('edit:start', onEditStart)  // show custom text in the tag while in edit-mode
  
  function onSelectSuggestion(e){
      // custom class from "dropdownHeaderTemplate"
      if( e.detail.elm.classList.contains(`${tagify.settings.classNames.dropdownItem}__addAll`) )
          tagify.dropdown.selectAll();
  }
  
  // https://stackoverflow.com/a/9204568/104380
  function validateEmail(email) {
      return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
  }
  
  function parseFullValue(value) {
      // https://stackoverflow.com/a/11592042/104380
      var parts = value.split(/<(.*?)>/g),
      colorName = parts[0].trim(),
          email = parts[1]?.replace(/<(.*?)>/g, '').trim();
  
      return {colorName, email}
  }
  
}

if ($('input[name=validationCustomProductColor2]').length) {
var inputElm = document.querySelector('[name=validationCustomProductColor2]');

function tagTemplate(tagData){
    return `
        <tag title="${tagData.email}"
                tabIndex="-1"
                class="tagify__tag ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
            <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
            <div>
                <div class='tagify__tag__avatar-wrap' style="background-color:${tagData.colorCode};"></div>
                <span class='tagify__tag-text'>${tagData.colorName}</span>
            </div>
        </tag>
    `
}

function suggestionItemTemplate(tagData){
    return `
        <div ${this.getAttributes(tagData)}
            class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
            tabindex="0"
            role="option">
            ${ tagData.colorCode ? `
            <div class='tagify__dropdown__item__avatar-wrap' style="background-color:${tagData.colorCode};"></div>` : ''
            }
            <strong>${tagData.colorName}</strong>
        </div>
    `
}

// initialize Tagify on the above input node reference
var tagify = new Tagify(inputElm, {
    tagTextProp: 'colorName', // very important since a custom template is used with this property as text
    // enforceWhitelist: true,
    skipInvalid: true, // do not remporarily add invalid tags
    dropdown: {
        closeOnSelect: false,
        enabled: 0,
        classname: 'users-list',
        searchKeys: ['colorName', 'email']  // very important to set by which keys to search for suggesttions when typing
    },
    templates: {
        tag: tagTemplate,
        dropdownItem: suggestionItemTemplate,
        // dropdownHeader: dropdownHeaderTemplate
    },
    whitelist: [
        {
            "value": 1,
            "colorName": "فضة",
            "colorCode": "silver",
            "email": "admin@gmail.com"
        },
        {
            "value": 2,
            "colorName": "رمادي",
            "colorCode": "gray",
            "email": "admin@gmail.com"
        },
        {
            "value": 3,
            "colorName": "الرمادي الداكن",
            "colorCode": "darkgray",
            "email": "admin@gmail.com"
        },
        {
            "value": 4,
            "colorName": "مارون",
            "colorCode": "maroon",
            "email": "admin@gmail.com"
        },
    ],
    transformTag: (tagData, originalData) => {
        var {colorName, email} = parseFullValue(tagData.colorName)
        tagData.colorName = colorName
        tagData.email = email || tagData.email
    },
    validate({colorName, email}) {
        // when editing a tag, there will only be the "name" property which contains name + email (see 'transformTag' above)
        if( !email && colorName ) {
            var parsed = parseFullValue(colorName)
            colorName = parsed.colorName
            email = parsed.email
        }

        if( !colorName ) return "Missing name"
        if( !validateEmail(email) ) return "Invalid email"

        return true
    }
})

// attach events listeners
tagify.on('dropdown:select', onSelectSuggestion) // allows selecting all the suggested (whitelist) items
      // .on('edit:start', onEditStart)  // show custom text in the tag while in edit-mode

function onSelectSuggestion(e){
    // custom class from "dropdownHeaderTemplate"
    if( e.detail.elm.classList.contains(`${tagify.settings.classNames.dropdownItem}__addAll`) )
        tagify.dropdown.selectAll();
}

// https://stackoverflow.com/a/9204568/104380
function validateEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}

function parseFullValue(value) {
    // https://stackoverflow.com/a/11592042/104380
    var parts = value.split(/<(.*?)>/g),
    colorName = parts[0].trim(),
        email = parts[1]?.replace(/<(.*?)>/g, '').trim();

    return {colorName, email}
}
}

// flatpicker
$("#startDate").flatpickr({
  allowInput:true,
  disableMobile: "true"
});
$("#endDate").flatpickr({
  allowInput:true,
  disableMobile: "true"
});
$("#tentativeDate").flatpickr({
  allowInput:true,
  disableMobile: "true"
});
$("#dateRange").flatpickr({
  allowInput:true,
  disableMobile: "true",
  // mode: "range",
  // minDate: "today",
});
$("#dateRange2").flatpickr({
  allowInput:true,
  disableMobile: "true"
});













  // Fetch all the addProductForm we want to apply custom Bootstrap validation styles to
  const addProductForm = document.querySelectorAll('.addProductForm_needs-validation')

  // Loop over them and prevent submission
  Array.from(addProductForm).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      } else {
        $('.addProductForm1 input, .addProductForm1 select').attr("disabled", true);
        $('.addProductForm1 .btnStyle2').addClass('disabled');
        $('.addProductForm1 .btnStyle2 .afterText').removeClass('d-none');
        $('.addProductForm1 .btnStyle2 .beforeText').addClass('d-none');
        setTimeout(() => {
          $('.addProductForm1').addClass('d-none');
          $('.addProductForm2').removeClass('d-none');
          $('#nav1').removeClass('active');
          $('#nav2').addClass('active');
        }, 1000);
      }
      event.preventDefault()

      form.classList.add('was-validated')
    }, false)
  })

  // Fetch all the addProductForm2 we want to apply custom Bootstrap validation styles to
  const addProductForm2 = document.querySelectorAll('.addProductForm_needs-validation2')

  // Loop over them and prevent submission
  Array.from(addProductForm2).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      } else {
        $('.addProductForm2 input').attr("disabled", true);
        $('.addProductForm2 .btnStyle2').addClass('disabled');
        $('.addProductForm2 .btnStyle2 .afterText').removeClass('d-none');
        $('.addProductForm2 .btnStyle2 .beforeText').addClass('d-none');
        setTimeout(() => {
          $('.addProductForm2').addClass('d-none');
          $('.addProductForm3').removeClass('d-none');
          $('#nav2').removeClass('active');
          $('#nav3').addClass('active');
        }, 1000);
      }
      event.preventDefault()

      form.classList.add('was-validated')
    }, false)
  })

  // Fetch all the addProductForm3 we want to apply custom Bootstrap validation styles to
  const addProductForm3 = document.querySelectorAll('.addProductForm_needs-validation3')

  // Loop over them and prevent submission
  Array.from(addProductForm3).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      } else {
        $('.addProductForm3 input, .addProductForm3 select').attr("disabled", true);
        $('.addProductForm3 .btnStyle2').addClass('disabled');
        $('.addProductForm3 .btnStyle2 .afterText').removeClass('d-none');
        $('.addProductForm3 .btnStyle2 .beforeText').addClass('d-none');
        setTimeout(() => {
          $('.addProductForm3').addClass('d-none');
          $('.addProductForm4').removeClass('d-none');
          $('#nav3').removeClass('active');
          $('#nav4').addClass('active');
        }, 1000);
      }
      event.preventDefault()

      form.classList.add('was-validated')
    }, false)
  })


  // Fetch all the addProductForm4 we want to apply custom Bootstrap validation styles to
  const addProductForm4 = document.querySelectorAll('.addProductForm_needs-validation4')

  // Loop over them and prevent submission
  Array.from(addProductForm4).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      } else {
        $('.addProductForm4 input, .addProductForm4 select').attr("disabled", true);
        $('.addProductForm4 .btnStyle2').addClass('disabled');
        $('.addProductForm4 .btnStyle2 .afterText').removeClass('d-none');
        $('.addProductForm4 .btnStyle2 .beforeText').addClass('d-none');
        setTimeout(() => {
          $('.addProductForm4').addClass('d-none');
          $('.addProductForm5').removeClass('d-none');
          $('#nav4').removeClass('active');
          $('#nav5').addClass('active');
        }, 1000);
      }
      event.preventDefault()

      form.classList.add('was-validated')
    }, false)
  })


  // Fetch all the addProductForm5 we want to apply custom Bootstrap validation styles to
  const addProductForm5 = document.querySelectorAll('.addProductForm_needs-validation5')

  // Loop over them and prevent submission
  Array.from(addProductForm5).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      } else {
        $('.addProductForm5 input, .addProductForm5 select').attr("disabled", true);
        $('.addProductForm5 .btnStyle2').addClass('disabled');
        $('.addProductForm5 .btnStyle2 .afterText').removeClass('d-none');
        $('.addProductForm5 .btnStyle2 .beforeText').addClass('d-none');
        setTimeout(() => {
          $('.addProductForm5').addClass('d-none');
          $('.addProductForm6').removeClass('d-none');
          $('#nav5').removeClass('active');
          $('#nav6').addClass('active');
        }, 1000);
      }
      event.preventDefault()

      form.classList.add('was-validated')
    }, false)
  })


  // Fetch all the addProductForm6 we want to apply custom Bootstrap validation styles to
  const addProductForm6 = document.querySelectorAll('.addProductForm_needs-validation6')

  // Loop over them and prevent submission
  Array.from(addProductForm6).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      } else {
        $('.addProductForm6 input, .addProductForm6 select').attr("disabled", true);
        $('.addProductForm6 .btnStyle2').addClass('disabled');
        $('.addProductForm6 .btnStyle2 .afterText').removeClass('d-none');
        $('.addProductForm6 .btnStyle2 .beforeText').addClass('d-none');
        setTimeout(() => {
          $('.addProductForm6').addClass('d-none');
          $('.addProductForm7').removeClass('d-none');
          $('#nav6').removeClass('active');
          $('#nav7').addClass('active');
        }, 2000);
      }
      event.preventDefault()

      form.classList.add('was-validated')
    }, false)
  })


  // Fetch all the addProductForm7 we want to apply custom Bootstrap validation styles to
  const addProductForm7 = document.querySelectorAll('.addProductForm_needs-validation7')

  // Loop over them and prevent submission
  Array.from(addProductForm7).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      } else {
        $('.addProductForm7 input, .addProductForm7 select').attr("disabled", true);
        $('.addProductForm7 .btnStyle2').addClass('disabled');
        $('.addProductForm7 .btnStyle2 .afterText').removeClass('d-none');
        $('.addProductForm7 .btnStyle2 .beforeText').addClass('d-none');
        // setTimeout(() => {
        //   window.location.href = "/logestoo_frontend_ui/success-register-as-seller.php";
        // }, 2000);
      }
      event.preventDefault()

      form.classList.add('was-validated')
    }, false)
  })

  $('#backtofirst').click(function () {
    $('#nav2').removeClass('active');
    $('#nav1').addClass('active');
    $('.addProductForm1').removeClass('d-none');
    $('.addProductForm2').addClass('d-none');

    $('.addProductForm1 input, .addProductForm1 select').attr("disabled", false);
    $('.addProductForm1 .btnStyle2').removeClass('disabled');
    $('.addProductForm1 .btnStyle2 .afterText').addClass('d-none');
    $('.addProductForm1 .btnStyle2 .beforeText').removeClass('d-none');
  });

  $('#backtosecond').click(function () {
    $('#nav3').removeClass('active');
    $('#nav2').addClass('active');
    $('.addProductForm2').removeClass('d-none');
    $('.addProductForm3').addClass('d-none');

    $('.addProductForm2 input, .addProductForm2 select').attr("disabled", false);
    $('.addProductForm2 .btnStyle2').removeClass('disabled');
    $('.addProductForm2 .btnStyle2 .afterText').addClass('d-none');
    $('.addProductForm2 .btnStyle2 .beforeText').removeClass('d-none');
  });

  $('#backtothird').click(function () {
    $('#nav4').removeClass('active');
    $('#nav3').addClass('active');
    $('.addProductForm3').removeClass('d-none');
    $('.addProductForm4').addClass('d-none');

    $('.addProductForm3 input, .addProductForm3 select').attr("disabled", false);
    $('.addProductForm3 .btnStyle2').removeClass('disabled');
    $('.addProductForm3 .btnStyle2 .afterText').addClass('d-none');
    $('.addProductForm3 .btnStyle2 .beforeText').removeClass('d-none');
  });

  $('#backtofourth').click(function () {
    $('#nav5').removeClass('active');
    $('#nav4').addClass('active');
    $('.addProductForm4').removeClass('d-none');
    $('.addProductForm5').addClass('d-none');

    $('.addProductForm4 input, .addProductForm4 select').attr("disabled", false);
    $('.addProductForm4 .btnStyle2').removeClass('disabled');
    $('.addProductForm4 .btnStyle2 .afterText').addClass('d-none');
    $('.addProductForm4 .btnStyle2 .beforeText').removeClass('d-none');
  });

  $('#backtofifth').click(function () {
    $('#nav6').removeClass('active');
    $('#nav5').addClass('active');
    $('.addProductForm5').removeClass('d-none');
    $('.addProductForm6').addClass('d-none');

    $('.addProductForm5 input, .addProductForm5 select').attr("disabled", false);
    $('.addProductForm5 .btnStyle2').removeClass('disabled');
    $('.addProductForm5 .btnStyle2 .afterText').addClass('d-none');
    $('.addProductForm5 .btnStyle2 .beforeText').removeClass('d-none');
  });

  $('#backtosixth').click(function () {
    $('#nav7').removeClass('active');
    $('#nav6').addClass('active');
    $('.addProductForm6').removeClass('d-none');
    $('.addProductForm7').addClass('d-none');

    $('.addProductForm6 input, .addProductForm6 select').attr("disabled", false);
    $('.addProductForm6 .btnStyle2').removeClass('disabled');
    $('.addProductForm6 .btnStyle2 .afterText').addClass('d-none');
    $('.addProductForm6 .btnStyle2 .beforeText').removeClass('d-none');
  });
  $('#backtoseventh').click(function () {
    $('.addProductForm7').removeClass('d-none');
    $('.addProductForm8').addClass('d-none');

    $('.addProductForm7 input, .addProductForm7 select').attr("disabled", false);
    $('.addProductForm7 .btnStyle2').removeClass('disabled');
    $('.addProductForm7 .btnStyle2 .afterText').addClass('d-none');
    $('.addProductForm7 .btnStyle2 .beforeText').removeClass('d-none');
  });





  if ($('input[name=validationCustomProductColor1]').length) {
  // new tagify

  var inputElm = document.querySelector('[name=validationCustomProductColor1]');

function tagTemplate(tagData){
    return `
        <tag title="${tagData.email}"
                tabIndex="-1"
                class="tagify__tag ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
            <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
            <div>
                <div class='tagify__tag__avatar-wrap' style="background-color:${tagData.colorCode};"></div>
                <span class='tagify__tag-text'>${tagData.colorName}</span>
            </div>
        </tag>
    `
}

function suggestionItemTemplate(tagData){
    return `
        <div ${this.getAttributes(tagData)}
            class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
            tabindex="0"
            role="option">
            ${ tagData.colorCode ? `
            <div class='tagify__dropdown__item__avatar-wrap' style="background-color:${tagData.colorCode};"></div>` : ''
            }
            <strong>${tagData.colorName}</strong>
        </div>
    `
}

// initialize Tagify on the above input node reference
var tagify = new Tagify(inputElm, {
    tagTextProp: 'colorName', // very important since a custom template is used with this property as text
    // enforceWhitelist: true,
    skipInvalid: true, // do not remporarily add invalid tags
    dropdown: {
        closeOnSelect: false,
        enabled: 0,
        classname: 'users-list',
        searchKeys: ['colorName', 'email']  // very important to set by which keys to search for suggesttions when typing
    },
    templates: {
        tag: tagTemplate,
        dropdownItem: suggestionItemTemplate,
        // dropdownHeader: dropdownHeaderTemplate
    },
    whitelist: [
        {
            "value": 1,
            "colorName": "Silver",
            "colorCode": "silver",
            "email": "admin@gmail.com"
        },
        {
            "value": 2,
            "colorName": "Gray",
            "colorCode": "gray",
            "email": "admin@gmail.com"
        },
        {
            "value": 3,
            "colorName": "Dark Gray",
            "colorCode": "darkgray",
            "email": "admin@gmail.com"
        },
        {
            "value": 4,
            "colorName": "Maroon",
            "colorCode": "maroon",
            "email": "admin@gmail.com"
        },
    ],
    transformTag: (tagData, originalData) => {
        var {colorName, email} = parseFullValue(tagData.colorName)
        tagData.colorName = colorName
        tagData.email = email || tagData.email
    },
    validate({colorName, email}) {
        // when editing a tag, there will only be the "name" property which contains name + email (see 'transformTag' above)
        if( !email && colorName ) {
            var parsed = parseFullValue(colorName)
            colorName = parsed.colorName
            email = parsed.email
        }

        if( !colorName ) return "Missing name"
        if( !validateEmail(email) ) return "Invalid email"

        return true
    }
})

// attach events listeners
tagify.on('dropdown:select', onSelectSuggestion) // allows selecting all the suggested (whitelist) items
      // .on('edit:start', onEditStart)  // show custom text in the tag while in edit-mode

function onSelectSuggestion(e){
    // custom class from "dropdownHeaderTemplate"
    if( e.detail.elm.classList.contains(`${tagify.settings.classNames.dropdownItem}__addAll`) )
        tagify.dropdown.selectAll();
}
  }


  if ($('input[name=validationCustomProductColor4]').length) {
  // new tagify arabic

  var inputElm = document.querySelector('[name=validationCustomProductColor4]');

function tagTemplate(tagData){
    return `
        <tag title="${tagData.email}"
                tabIndex="-1"
                class="tagify__tag ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
            <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
            <div>
                <div class='tagify__tag__avatar-wrap' style="background-color:${tagData.colorCode};"></div>
                <span class='tagify__tag-text'>${tagData.colorName}</span>
            </div>
        </tag>
    `
}

function suggestionItemTemplate(tagData){
    return `
        <div ${this.getAttributes(tagData)}
            class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
            tabindex="0"
            role="option">
            ${ tagData.colorCode ? `
            <div class='tagify__dropdown__item__avatar-wrap' style="background-color:${tagData.colorCode};"></div>` : ''
            }
            <strong>${tagData.colorName}</strong>
        </div>
    `
}

// initialize Tagify on the above input node reference
var tagify = new Tagify(inputElm, {
    tagTextProp: 'colorName', // very important since a custom template is used with this property as text
    // enforceWhitelist: true,
    skipInvalid: true, // do not remporarily add invalid tags
    dropdown: {
        closeOnSelect: false,
        enabled: 0,
        classname: 'users-list',
        searchKeys: ['colorName', 'email']  // very important to set by which keys to search for suggesttions when typing
    },
    templates: {
        tag: tagTemplate,
        dropdownItem: suggestionItemTemplate,
        // dropdownHeader: dropdownHeaderTemplate
    },
    whitelist: [
        {
            "value": 1,
            "colorName": "فضة",
            "colorCode": "silver",
            "email": "admin@gmail.com"
        },
        {
            "value": 2,
            "colorName": "رمادي",
            "colorCode": "gray",
            "email": "admin@gmail.com"
        },
        {
            "value": 3,
            "colorName": "الرمادي الداكن",
            "colorCode": "darkgray",
            "email": "admin@gmail.com"
        },
        {
            "value": 4,
            "colorName": "مارون",
            "colorCode": "maroon",
            "email": "admin@gmail.com"
        },
    ],
    transformTag: (tagData, originalData) => {
        var {colorName, email} = parseFullValue(tagData.colorName)
        tagData.colorName = colorName
        tagData.email = email || tagData.email
    },
    validate({colorName, email}) {
        // when editing a tag, there will only be the "name" property which contains name + email (see 'transformTag' above)
        if( !email && colorName ) {
            var parsed = parseFullValue(colorName)
            colorName = parsed.colorName
            email = parsed.email
        }

        if( !colorName ) return "Missing name"
        if( !validateEmail(email) ) return "Invalid email"

        return true
    }
})

// attach events listeners
tagify.on('dropdown:select', onSelectSuggestion) 

function onSelectSuggestion(e){
    if( e.detail.elm.classList.contains(`${tagify.settings.classNames.dropdownItem}__addAll`) )
        tagify.dropdown.selectAll();
}
  }


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
          .create( document.querySelector( '.editor1' ), {					
            licenseKey: '',					
          } )
          .catch( handleError );
                      watchdog
          .create( document.querySelector( '.editor3' ), {					
            licenseKey: '',					
          } )
          .catch( handleError );
                      watchdog
          .create( document.querySelector( '.editor4' ), {					
            licenseKey: '',					
          } )
          .catch( handleError );
                      watchdog
          .create( document.querySelector( '.editor5' ), {					
            licenseKey: '',					
          } )
          .catch( handleError );
                      watchdog
          .create( document.querySelector( '.editor6' ), {					
            licenseKey: '',					
          } )
          .catch( handleError );
                      watchdog
          .create( document.querySelector( '.editor7' ), {					
            licenseKey: '',					
          } )
          .catch( handleError );
                      watchdog
          .create( document.querySelector( '.editor8' ), {					
            licenseKey: '',					
          } )
          .catch( handleError );
                      watchdog
          .create( document.querySelector( '.editor9' ), {					
            licenseKey: '',					
          } )
          .catch( handleError );
                      watchdog
          .create( document.querySelector( '.editor10' ), {					
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


// inbox send page mobile view
let leftInboxCard = document.querySelectorAll('.leftInboxCard');
let inboxPageInner = document.querySelector('.inboxPageInner');
let backBtn = document.querySelectorAll('.backBtn')

leftInboxCard.forEach(inboxCard =>{
  inboxCard.addEventListener('click', ()=>{
    inboxPageInner.classList.add('show')
  })
})


// dropify for ad packages page
$(document).ready(function () {
  $('.preloader').remove();
});

backBtn.forEach(backBtn1 =>{
  backBtn1.addEventListener('click', ()=>{
    inboxPageInner.classList.remove('show')
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

  // dashboard inbox table
  $(document).ready(function() {
    $('#dashboardInboxTable').DataTable({
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

    // dashboard inquiry table
    $(document).ready(function() {
      $('#dashboardInquiryTable').DataTable({
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
      
      // product list table
      $(document).ready(function() {
        let example = $('#productListTable').DataTable({
            columnDefs: [ {
            className: 'select-checkbox',
            targets:   1,
            orderable: false,
            } ],
            select: {
                style:    'multi',
                selector: 'td:nth-child(2)'
            },
            order: [[ 1, 'asc' ]],
            "language": {
            "info": "Page _PAGE_ of _PAGES_",
            "paginate": {
            "previous": "&#x3C;",
            "next": "&#x3E;"
            }}
        });
        example.on("click", "th.select-checkbox .box", function() {
        if ($("th.select-checkbox .box").hasClass("selected")) {
            example.rows().deselect();
            $("th.select-checkbox .box").removeClass("selected");
        } else {
            example.rows().select();
            $("th.select-checkbox .box").addClass("selected");
        }
        }).on("select deselect", function() {
        ("Some selection or deselection going on")
        if (example.rows({
            selected: true
            }).count() !== example.rows().count()) {
            $("th.select-checkbox .box").removeClass("selected");
        } else {
            $("th.select-checkbox .box").addClass("selected");
        }
        });
        });

        // my inquiry table 
$(document).ready(function() {
  $('#reviewTable').DataTable({
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

  // chat page emoji picker
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

// inquiry page reply btn



  
  // chat page emoji picker show after 1 sec

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