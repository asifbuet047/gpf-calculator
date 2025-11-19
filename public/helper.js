document.addEventListener("DOMContentLoaded", () => {
    const download_button = document.getElementById("download_button");
    const show_button = document.getElementById("show_button");
    const gpf_form = document.getElementById("gpf_form");
    const july_contribution = document.getElementById("july_contribution");
    const notfillingformalert = document.getElementById("notfillingformalert");
    const samecontribution_checkbox = document.getElementById(
        "samecontribution_checkbox"
    );
    const months = [
        "july",
        "august",
        "september",
        "october",
        "november",
        "december",
        "january",
        "february",
        "march",
        "april",
        "may",
        "june",
    ];
    if (download_button && show_button) {
        download_button.addEventListener("click", () => {
            gpf_form.action = "/gpf/calculation/download";
            gpf_form.submit();
        });

        show_button.addEventListener("click", () => {
            gpf_form.action = "/gpf/calculation/view";
            gpf_form.submit();
        });
    }

    const fiscal_year_select = document.getElementById("financial_year");
    let selected_year = fiscal_year_select.value;
    let first_year = selected_year.split("-")[0];
    let second_year = selected_year.split("-")[1];
    months.forEach((month, index) => {
        if (index <= 5) {
            const each_span = document.getElementById(`${month}`);
            each_span.innerText = first_year;
        } else {
            const each_span = document.getElementById(`${month}`);
            each_span.innerText = second_year;
        }
    });

    fiscal_year_select.addEventListener("click", (event) => {
        selected_year = fiscal_year_select.value;
        first_year = selected_year.split("-")[0];
        second_year = selected_year.split("-")[1];
        console.log(first_year);
        months.forEach((month, index) => {
            if (index <= 5) {
                const each_span = document.getElementById(`${month}`);
                each_span.innerText = first_year;
            } else {
                const each_span = document.getElementById(`${month}`);
                each_span.innerText = second_year;
            }
        });
    });

    samecontribution_checkbox.addEventListener("change", () => {
        if (samecontribution_checkbox.checked) {
            const july_contribution_value = july_contribution.value;
            months.forEach((month, index) => {
                if (index >= 1) {
                    const contribution = document.getElementById(
                        `${month}_contribution`
                    );
                    contribution.value = july_contribution_value;
                }
            });
        }
    });

    gpf_form.addEventListener("keydown", (event) => {
        if (event.key == "Enter") {
            event.preventDefault();
            const toastBootstrap =
                bootstrap.Toast.getOrCreateInstance(notfillingformalert);
            toastBootstrap.show();
        }
    });
});
