function prepareSkill() {
    let template = ``;
    axios({
        method: "GET",
        url: "api/v1/skills",
        headers: {
            Accept: "application/json",
        },
    }).then((response) => {
        // console.log(response.data);
        response.data.data.forEach((value) => {
            template +=
                `
                           <tr>
                        <td>` +
                value.name +
                `</td>
                        <td>
                                <button class="badge bg-danger border-0 ms-2" onclick="deleteSkill(` +
                value.id +
                `)"><span
                                        data-feather="x-circle">Delete</span></button>
                        </td>
                    </tr>
            `;
        });

        $("#skill-items").html(template);
    });
}

function prepareProject() {
    let template = ``;
    axios({
        method: "GET",
        url: "api/v1/projects",
        headers: {
            Accept: "application/json",
        },
    }).then((response) => {
        // console.log(response.data);
        response.data.data.forEach((value) => {
            template +=
                `
                    <tr>
                        <td>` +
                value.name_project +
                `</td>
                        <td>
                                <button class="badge bg-danger border-0 ms-2" onclick="deleteProject(` +
                value.id +
                `)"><span
                                        data-feather="x-circle">Delete</span></button>
                        </td>
                    </tr>
            `;
        });

        $("#project-items").html(template);
    });
}

function prepareEducation() {
    let template = ``;
    axios({
        method: "GET",
        url: "api/v1/education",
        headers: {
            Accept: "application/json",
        },
    }).then((response) => {
        // console.log(response.data);
        response.data.data.forEach((value) => {
            template +=
                `
                    <tr>
                        <td>` +
                value.title +
                `</td>
                        <td>
                                <button class="badge bg-danger border-0 ms-2" onclick="deleteEducation(` +
                value.id +
                `)"><span
                                        data-feather="x-circle">Delete</span></button>
                        </td>
                    </tr>
            `;
        });

        $("#education-items").html(template);
    });
}

function submitExperience() {
    let template = ``;
    axios({
        method: "GET",
        url: "api/v1/experience",
        headers: {
            Accept: "application/json",
        },
    }).then((response) => {
        // console.log(response.data);
        response.data.data.forEach((value) => {
            template +=
                `
                    <tr>
                        <td>` +
                value.title +
                `</td>
                        <td>
                                <button class="badge bg-danger border-0 ms-2" onclick="deleteExperience(` +
                value.id +
                `)"><span
                                        data-feather="x-circle">Delete</span></button>
                        </td>
                    </tr>
            `;
        });

        $("#experience-items").html(template);
    });
}

function prepare() {
    prepareProject();
    prepareSkill();
    prepareEducation();
    submitExperience();
}

prepare();

// end prepare

function deleteProject(id) {
    axios({
        method: "DELETE",
        url: "api/v1/projects/" + id,
        headers: {
            Accept: "application/json",
            Authorization: "Bearer " + sessionStorage.getItem("token"),
        },
    }).then((response) => {
        // console.log(response.data);
        prepareProject();
    });
}

function deleteSkill(id) {
    // console.log(sessionStorage.getItem("token"));
    axios({
        method: "DELETE",
        url: "api/v1/skills/" + id,
        headers: {
            Accept: "application/json",
            Authorization: "Bearer " + sessionStorage.getItem("token"),
        },
    }).then((response) => {
        // console.log(response.data);
        prepareSkill();
    });
}

function deleteEducation(id) {
    axios({
        method: "DELETE",
        url: "api/v1/education/" + id,
        headers: {
            Accept: "application/json",
            Authorization: "Bearer " + sessionStorage.getItem("token"),
        },
    }).then((response) => {
        // console.log(response.data);
        prepareEducation();
    });
}

function deleteExperience(id) {
    axios({
        method: "DELETE",
        url: "api/v1/experience/" + id,
        headers: {
            Accept: "application/json",
            Authorization: "Bearer " + sessionStorage.getItem("token"),
        },
    }).then((response) => {
        // console.log(response.data);
        submitExperience();
    });
}
