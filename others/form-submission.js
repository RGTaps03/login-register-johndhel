const formIds = {
    register: '#registration-form',
    login: '#login-form',
    logout: '#sign-out-link',
    updateProfile: '#update-profile-form'
  };

  const formData = {
    registration: function () {
      return {
        fullName: $('input[name="registrationFullName"]').val(),
        email: $("input[name='registrationEmail']").val(),
        phoneNumber: $("input[name='registrationPhoneNumber']").val(),
        address: $("input[name='registrationAddress']").val(),
        citycode: $("input[name='registrationCityCode']").val(),
        bday: $("input[name='registrationBday']").val(),
        password: $("input[name='registrationPassword']").val(),
        password2: $("input[name='registrationPassword2']").val(),
        submitBtn: $('input[name="registerSubmitBtn"]').val() // for server $_POST
      };
    },
    login: function () {
        return {
          email: $('input[name="loginEmail"]').val(),
          password: $('input[name="loginPassword"]').val(),
          submitBtn: $('input[name="loginSubmitBtn"]').val()
        };
},
updateProfile: function () {
    return {
      cid: $('input[name="customerId"]').val(),
      fullName: $('input[name="updateFullName"]').val(),
      phone: $("input[name='updatePhoneNumber']").val(),
      email: $("input[name='updateEmail']").val(),
      newPassword: $("input[name='updatePassword']").val(),
      submitBtn: $('input[name="updateProfileSubmitBtn"]').val()
    };
  }
  };

  const registrationSubmit = function () {
    let registrationData = formData.registration();
    registrationData.submitBtn = 'updatebtn'; // to exclude from reserved words
    let dataStr = Object.values(registrationData).join(' ');
    if (!new UtilityFunctions().findMatchReservedWords(dataStr)) {
      $.ajax({
        url: 'process_registration.php',
        type: 'post',
        data: registrationData
      }).done(function (response) {
        $(formIds.register).find('.alert').remove();
        $(formIds.register).prepend(response);
      });
    } else {
      console.error('found reserved words');
      alert('Something went wrong!');
    }
  };