document.addEventListener("DOMContentLoaded", () => {
    const fiscal_year_select = document.getElementById("financial_year");
    fiscal_year_select.addEventListener("click", (event) => {
        const selected_year = fiscal_year_select.value;
        const first_year = selected_year.split("-")[0];
        const second_year = selected_year.split("-")[1];
        const first_year_element = document.getElementById("first_year");
        const second_year_element = document.getElementById("second_year");
        first_year_element.innerText = first_year;
        second_year_element.innerText = second_year;
    });
});
