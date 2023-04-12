// console.log("Preparing...");
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
        response.data.data.forEach((skill) => {
            template +=
                `
                            <div class="_re_uy_iu">
                                <div class="_ol_ew_xs">
                                    <span>` +
                skill.name +
                `</span>
                                    <span>` +
                skill.persentase +
                `%</span>
                                </div>
                                <div class="progress">
                                    <div style="width: ` +
                skill.persentase +
                `%" class="progress-bar my-bars" role="progressbar"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="` +
                skill.persentase +
                `"></div>
                                </div>
                            </div>
            `;
        });

        $("#skills-item").html(template);
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
                                            <li>
                                                <div class="head"
                                                    style="
                                                background-color: rgba(241, 12, 12, 0.8);
                                                color: white;
                                                text-align: center;
                                                border-radius: 5px;
                                                ">
                                                    <h2 style="font-size: 15px; padding: 5px;">Backend | ` +
                value.name_project +
                `
                                                    </h2>
                                                </div>
                                                <div class="_ok-vd_zs">
                                                    <figure style="height: 250px;">
                                                        <img src="https://pras-dev.konsulinaja.id/storage/app/${value.image}" />
                                                        <div class="inner-content">
                                                            <a href="` +
                value.link +
                `">Live
                                                                Preview</a>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </li>
            `;
        });

        $("#projects-item").html(template);
    });
}

function prepareEducation() {
    axios({
        method: "GET",
        url: "api/v1/education",
        headers: {
            Accept: "application/json",
        },
    }).then(function (response) {
        // console.log(response.data);
        let template = ``;
        response.data.data.forEach((value) => {
            template += `
                                    <li>
                                        <h4>${value.title}</h4>
                                        <h6>${value.position}</h6>
                                        <span>${value.date}
                                        </span>
                                        <p>
                                            ${value.description}
                                        </p>
                                    </li>
            `;
        });

        $("#education-items").html(template);
    });
}

function prepareExperience() {
    axios({
        method: "GET",
        url: "api/v1/experience",
        headers: {
            Accept: "application/json",
        },
    }).then(function (response) {
        // console.log(response.data);
        let template = ``;
        response.data.data.forEach((value) => {
            template += `
                                    <li>
                                        <h4>${value.title}</h4>
                                        <h6>${value.position}</h6>
                                        <span>${value.date}
                                        </span>
                                        <p>
                                            ${value.description}
                                        </p>
                                    </li>
            `;
        });

        $("#experience-items").html(template);
    });
}

function prepare() {
    // console.log("Preparing...");
    prepareSkill();
    prepareProject();
    prepareEducation();
    prepareExperience();
}

prepare();

function sendEmail() {
    $("#button-send").css("display", "none");
    $("#success-message").html("Email Sending...");

    axios({
        method: "POST",
        url: "/api/v1/send-email",
        headers: {
            Accept: "application/json",
        },
        data: {
            name: $("#name-contact").val(),
            email: $("#email-contact").val(),
            message: $("#message-contact").val(),
        },
    }).then(function (response) {
        console.log(response.data);
        $("#success-message").html("Success Send Email");
        $("#button-send").css("display", "");
        // location.reload();
    });
}
