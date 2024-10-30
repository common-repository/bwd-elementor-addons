const nextButton = document.getElementById("next");
const prevButton = document.getElementById("prev");
const skipButton = document.getElementById("skip");

const progressBarFront = document.querySelector(".bwd-progress-bar-front");

const steps = document.querySelectorAll(".bwd-step");
const forms = document.querySelectorAll(".bwd-form");

let currentStep = 1;

nextButton.addEventListener("click", () => {
    currentStep++;
    if (currentStep > steps.length) {
        currentStep = steps.length;
    }
    updateProgress();
});

prevButton.addEventListener("click", () => {
    currentStep--;
    if (currentStep < 1) {
        currentStep = 1;
    }
    updateProgress();
});

function updateProgress() {
    steps.forEach((step, index) => {
        if (index < currentStep) {
            step.classList.add("bwd-checked");
        } else {
            step.classList.remove("bwd-checked");
        }
    });

    const progressPercentage = ((currentStep - 1) / (steps.length - 1)) * 100;
    progressBarFront.style.width = `${progressPercentage}%`;

    prevButton.hidden = currentStep === 1;

    if (currentStep === steps.length) {
        nextButton.hidden = true;
        prevButton.hidden = true;
        skipButton.hidden = true;
    } else {
        nextButton.hidden = false;
        nextButton.textContent = "Next ⇒";
    }

    updateFormVisibility();
}

function updateFormVisibility() {
    forms.forEach((form, index) => {
        form.style.display = index + 1 === currentStep ? "block" : "none";
    });
}

updateProgress();
