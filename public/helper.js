document.addEventListener("DOMContentLoaded", () => {
    const download_button = document.getElementById("download_button");
    const show_button = document.getElementById("show_button");
    const gpf_form = document.getElementById("gpf_form");
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
});
