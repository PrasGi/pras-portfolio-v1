function submitProject() {
    var formData = new FormData();
    formData.append("image", $("#image").prop("files")[0]);
    formData.append("name_project", $("#name_project").val());
    formData.append("name_company", $("#name_company").val());
    formData.append("description", $("#description").val());
    formData.append("link", $("#link").val());

    console.log(sessionStorage.getItem("token"));
    axios({
        method: "post",
        url: "/api/v1/projects",
        headers: {
            Accept: "application/json",
            Authorization: "Bearer " + sessionStorage.getItem("token"),
        },
        data: formData,
    }).then(function (response) {
        // console.log(response);
        location.reload();
    });
}
function submitSkill() {
    var formData = new FormData();
    formData.append("name", $("#name").val());
    formData.append("persentase", $("#persentase").val());

    console.log(sessionStorage.getItem("token"));
    axios({
        method: "post",
        url: "/api/v1/skills",
        headers: {
            Accept: "application/json",
            Authorization: "Bearer " + sessionStorage.getItem("token"),
        },
        data: formData,
    }).then(function (response) {
        // console.log(response);
        location.reload();
    });
}

function submitEducation() {
    var formData = new FormData();
    formData.append("title", $("#education-title").val());
    formData.append("description", $("#education-description").val());
    formData.append("position", $("#education-position").val());
    formData.append("date", $("#education-date").val());
    axios({
        method: "post",
        url: "/api/v1/education",
        headers: {
            Accept: "application/json",
            Authorization: "Bearer " + sessionStorage.getItem("token"),
        },
        data: formData,
    }).then(function (response) {
        // console.log(response);
        location.reload();
    });
}

function submitExperience() {
    var formData = new FormData();
    formData.append("title", $("#experience-title").val());
    formData.append("description", $("#experience-description").val());
    formData.append("position", $("#experience-position").val());
    formData.append("date", $("#experience-date").val());

    axios({
        method: "post",
        url: "/api/v1/experience",
        headers: {
            Accept: "application/json",
            Authorization: "Bearer " + sessionStorage.getItem("token"),
        },
        data: formData,
    }).then(function (response) {
        // console.log(response);
        location.reload();
    });
}
