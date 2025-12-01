function openAddGoalModal() {
    document.getElementById("goal-modal").classList.add("active");

    // Clear inputs (important)
    document.getElementById("goal-title").value = "";
    document.getElementById("target-amount").value = "";
    document.getElementById("target-date").value = "";
    document.getElementById("goal-category").value = "";
    document.getElementById("editing-goal-id").value = "";
}

function closeModal() {
    document.querySelectorAll(".modal").forEach(m => m.classList.remove("active"));
}
