function login() {
    axios({
        method: "post",
        url: "/api/v1/login-admin",
        headers: {
            Accept: "application/json",
        },
        data: {
            email: $("#email").val(),
            password: $("#password").val(),
        },
    }).then((response) => {
        // console.log(response);
        // console.log(response.data.token);
        if (!response.data.error) {
            sessionStorage.setItem("token", response.data.token);
            window.location.href = "/admin-page";
        }
    });
}
