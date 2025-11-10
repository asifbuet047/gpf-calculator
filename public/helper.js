document.addEventListener("DOMContentLoaded", () => {
    const fiscal_year_select = document.getElementById("financial_year");
    fiscal_year_select.addEventListener("click", (event) => {
        const selected_year = fiscal_year_select.value;
        const first_year = selected_year.split("-")[0];
        const second_year = selected_year.split("-")[1];
        const year_element = document.getElementById("year");
        year_element.innerText = first_year;
    });
});
