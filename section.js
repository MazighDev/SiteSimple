var age = document.getElementById("age");
var section = document.getElementById("section");

age.addEventListener("blur", checkAge);

function checkAge() {
  if (age.value >= 1 && age.value <= 3) {
    section.value = "Petite Section";
  } else if (age.value > 3 && age.value < 4){
    section.value = "Moyenne Section";
  } else if (age.value > 4 && age.value <= 5){
    section.value = "Grande Section";

  }else {
    section.value = " ";
  }
}