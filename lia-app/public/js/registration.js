function updateFileName(inputId) {
    const fileInput = document.getElementById(inputId);
    const fileLabel = fileInput.nextElementSibling;
    const fileName = fileInput.files[0]
        ? fileInput.files[0].name
        : "Choose File";
    fileLabel.textContent = fileName;
    fileLabel.setAttribute("data-file-name", fileName);
    fileLabel.classList.toggle("red", fileName !== "Choose File");
}

document.addEventListener("DOMContentLoaded", function () {
    const radioButtons = document.querySelectorAll(
        '.radio-button-container input[type="radio"]'
    );

    radioButtons.forEach((radioButton) => {
        radioButton.addEventListener("mouseover", function () {
            this.parentElement.classList.add("hover");
        });
        radioButton.addEventListener("mouseout", function () {
            this.parentElement.classList.remove("hover");
        });
        radioButton.addEventListener("change", function () {
            radioButtons.forEach((rb) => {
                rb.parentElement.classList.remove("selected");
            });

            if (this.checked) {
                this.parentElement.classList.add("selected");
            }
        });
    });
});
