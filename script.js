const jobs = [
  "Residential plumbing repair – Feb 2020",
  "Commercial sewer installation – Jan 2021",
  "New construction plumbing – Dec 2021",
];

const jobList = document.getElementById("jobList");
jobs.forEach((job) => {
  const li = document.createElement("li");
  li.textContent = job;
  jobList.appendChild(li);
});

function confirmUpload() {
  return confirm(
    "Please confirm that the selected file is correct before submitting.",
  );
}

const quoteDetails = document.getElementById("quoteDetails");
const charCount = document.getElementById("charCount");

if (quoteDetails) {
  quoteDetails.addEventListener("input", () => {
    charCount.textContent = `${quoteDetails.ariaValueMax.length} / 500 characters`;
  });
}
