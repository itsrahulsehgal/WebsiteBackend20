// Render Google Sign-in button
function renderButton() {
  gapi.signin2.render("gSignIn", {
    scope: "profile email",
    width: 200,
    height: 30,
    longtitle: true,
    theme: "dark",
    onsuccess: onSuccess,
    onfailure: onFailure,
  });
}

// Sign-in success callback
async function onSuccess(googleUser) {
  // Get the Google profile data (basic)
  // get id token
  var id_token = googleUser.getAuthResponse().id_token;
  console.log("ID Token: " + id_token);
  // get the profile name
  var profile = googleUser.getBasicProfile();
  // get the profile email
  var email = profile.getEmail();
  console.log("Email: " + email);
  // get name
  var name = profile.getName();
  console.log("Name: " + name);

  //get photo
  var photo = profile.getImageUrl();
  console.log("Photo: " + photo);

  const url = "https://us-central1-techspardha-87928.cloudfunctions.net/api2/";
  const loginUrl = url + "login";

  let data = {
    idToken: id_token,
  };
  gapi.auth2
    .getAuthInstance()
    .disconnect()
    .then(function () {});

  $.ajax({
    url: loginUrl,
    data: data,
    type: "POST",
    success: function (result) {
      console.log(result);
      if (result.success == true) {
        var jwt = result.data.token;
        // set jwt in cookie with path
        console.log(result.data);
        const  user = result.data.user;
        console.log(user);
        const { role } = user;
        Cookies.set("jwt", jwt, {
          expires: 1,
          path: "/",
          domain: document.domain,
        });
        window.localStorage.setItem("jwt", jwt);
        window.localStorage.setItem("name", name);
        window.localStorage.setItem("email", email);
        window.localStorage.setItem("photo", photo);
        window.localStorage.setItem("role", role);
        window.location.href = "/";
      } else {
        alert("Login Failed");
      }
    },
  });
}

// Sign-in failure callback
function onFailure(error) {
  console.log(error);
  alert("login failed");
}
