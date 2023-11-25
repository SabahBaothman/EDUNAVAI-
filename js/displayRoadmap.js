window.addEventListener("load", () => {
  const roadmapContainer = document.getElementById("roadmap-container");

  while (roadmapContainer.firstChild) {
    roadmapContainer.removeChild(roadmapContainer.firstChild);
  }

  const weeksData = JSON.parse(sessionStorage.getItem("weeksData"));
  const weeks = weeksData;
  // Header
  const header = document.createElement("h1");
  const name = sessionStorage.getItem("name");
  const namespan = document.createElement("span");
  namespan.textContent = name + "!";
  header.appendChild(document.createTextNode("Hi "));
  header.appendChild(namespan);
  header.appendChild(document.createTextNode(" Here is your roadmap"));

  roadmapContainer.appendChild(header);

  for (const week of weeks) {
    const weekDiv = document.createElement("div");
    weekDiv.classList.add("card-week");


    const sectionHeadDiv = document.createElement('div');
    sectionHeadDiv.classList.add('section-head');

    const img = document.createElement('img');
    img.classList.add('form-head-img');
    img.src = '../media/images/week.png';

    const h4 = document.createElement('h4');
    h4.textContent = `Week #${week.weekNumber}`;

    const span = document.createElement('span');
    span.classList.add('h-line');

    const hr = document.createElement('hr');

    // Append the elements to build the structure
    span.appendChild(hr);
    sectionHeadDiv.appendChild(img);
    sectionHeadDiv.appendChild(h4);
    sectionHeadDiv.appendChild(span);

    // Append the sectionHeadDiv to the targetDiv
    weekDiv.appendChild(sectionHeadDiv);



    roadmapContainer.appendChild(weekDiv);

    for (const content of week.weekContent) {
      const contentElement = document.createElement("p");
      contentElement.textContent = content;
      weekDiv.appendChild(contentElement);
    }
  }
});
