
// JAVASCRIPT CODING EXAMINATION
// MG Baybay | October 26 2021 

// PART 1: Convert string to sentence case and add spaces per word
function toSentenceCase(str) {
  let converted_str = str.match(/([A-Z]?[^A-Z]*)/g).slice(0, -1).join(" ").toLowerCase();
  return converted_str.charAt(0).toUpperCase() + converted_str.slice(1);
}