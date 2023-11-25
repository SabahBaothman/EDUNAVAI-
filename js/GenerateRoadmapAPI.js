// const prompt = 'generate a roadmap to learn AI/ML specific skills are: Python, the learning duration is 4 weeks';
//   generateGPTResponse(prompt)
//     .then(response => {
//       console.log(response) ;
//       console.log(response) ;
//     })
//     .catch(error => {
//       console.error('Error:', error);
//     });

const weeks = [];

async function generateGPTResponse(prompt) {
  const apiKey = "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";
  const apiUrl = "https://api.openai.com/v1/completions";
  const headers = {
    "Content-Type": "application/json",
    Authorization: `Bearer ${apiKey}`,
  };

  const requestBody = {
    model: "text-davinci-003", // Update with the correct engine
    prompt: prompt,
    max_tokens: 300,
    temperature: 0.5,
    top_p: 0.7,
  };

  const requestOptions = {
    method: "POST",
    headers: headers,
    body: JSON.stringify(requestBody),
  };

  try {
    const response = await fetch(apiUrl, requestOptions);
    const data = await response.json();

    if (response.ok) {
      return data.choices[0].text.trim();
    } else {
      throw new Error(
        `Request failed with status: ${response.status}, ${data.error.message}`
      );
    }
  } catch (error) {
    console.error("Error:", error.message);
    return null;
  }
}

// Assuming your form has the ID 'roadmap-form'
const form = document.getElementById("roadmap-form");

form.addEventListener("submit", async function (event) {
  sessionStorage.clear();
  event.preventDefault(); // Prevent the default form submission behavior

  // Get the form values and generate the GPT response
  const formValues = getFormValues(form);
  const prompt = `generate a roadmap to learn ${formValues.goalInput}, specific skills are: ${formValues.skillsInput}, the learning duration is ${formValues.durationInput} weeks`;

  try {
    const response = await generateGPTResponse(prompt);

    const weekRegex = /Week (\d+):(.*?)(?=(Week \d+:|$))/gs;

    let match;
    let weeks = [];

    while ((match = weekRegex.exec(response)) !== null) {
      const weekNumber = match[1];
      const weekContent = match[2]
        .trim()
        .split(/\r?\n|\r/)
        .filter((line) => line !== "");

      weeks.push({
        weekNumber,
        weekContent,
      });
    }

    // Store the weeks data in sessionStorage
    sessionStorage.setItem("name", formValues.nameInput);
    sessionStorage.setItem("weeksData", JSON.stringify(weeks));
    window.open("../pages/Roadmap.php", "_self");
  } catch (error) {
    console.error("Error:", error);
  }
});

// Function to get form values
function getFormValues(form) {
  const inputs = form.querySelectorAll("input, select");
  const formValues = {};

  for (const input of inputs) {
    const name = input.name;
    const value = input.value;
    if (value) {
      formValues[name] = value;
    }
  }

  return formValues;
}

function scrollToSection(sectionId) {
  document.getElementById(sectionId).scrollIntoView({
    behavior: "smooth",
  });
}

window.addEventListener("load", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
