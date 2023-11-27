window.addEventListener("load", () => {
  const roadmapContainer = document.getElementById("roadmap-container");

  while (roadmapContainer.firstChild) {
    roadmapContainer.removeChild(roadmapContainer.firstChild);
  }


  const name = sessionStorage.getItem("name");
  const age = sessionStorage.getItem("age");
  const goal = sessionStorage.getItem("goal");
  const skill = sessionStorage.getItem("skill");
  const level = sessionStorage.getItem("level");
  const duration = sessionStorage.getItem("duration");

  const weeksData = JSON.parse(sessionStorage.getItem("weeksData"));
  const weeks = weeksData;
  // Header
  const header = document.createElement("h1");

  const namespan = document.createElement("span");
  namespan.textContent = name + "!";
  header.appendChild(document.createTextNode("Hi "));
  header.appendChild(namespan);
  header.appendChild(document.createTextNode(" Here is your roadmap"));

  roadmapContainer.appendChild(header);



    const infoDiv = document.createElement("div");
    infoDiv.classList.add("card-week");

    //  Head
    let sectionHeadDiv = document.createElement('div');
    sectionHeadDiv.classList.add('section-head');
    sectionHeadDiv.classList.add('section-head-no-bottom-margin');

    //  Head - img
    const img = document.createElement('img');
    img.classList.add('form-head-img');
    img.src = '../media/images/profile.png';
    //  Head - Week
    const h4 = document.createElement('h4');
    h4.textContent = `Roadmap Details`;
    //  Head - hr
    const span = document.createElement('span');
    span.classList.add('h-line');
    const hr = document.createElement('hr');
    span.appendChild(hr);


    const btn = document.createElement('button');
    btn.textContent = "Export";
    btn.classList.add('print-btn');

    btn.addEventListener('click', function() {
      // Specify the element you want to capture
      const elementToCapture = document.getElementById('roadmap-container');
      const h1Element = document.querySelector('#roadmap-container h1');
      h1Element.style.display = 'none';

      // Use HTML2Canvas to capture the content
      html2canvas(elementToCapture).then(function(canvas) {
        // Convert the canvas to a data URL
        const dataURL = canvas.toDataURL('image/png');
    
        // Create a link element to download the image
        const downloadLink = document.createElement('a');
        downloadLink.href = dataURL;
        downloadLink.download = 'Roadmap.png';
    
        // Append the link to the document and trigger the download
        document.body.appendChild(downloadLink);
        downloadLink.click();
        h1Element.style.display = 'block';

        // Clean up: remove the link element from the document
        document.body.removeChild(downloadLink);

      });

    });

    // Append the elements to build the structure
    //  Append to Head
    sectionHeadDiv.appendChild(img);
    sectionHeadDiv.appendChild(h4);
    sectionHeadDiv.appendChild(span);
    sectionHeadDiv.appendChild(btn);

    // Head - Append to Card
    infoDiv.appendChild(sectionHeadDiv);
    // Card - Append to container

    let contentElement = document.createElement("h4");
    contentElement.textContent = "name: ";
    contentElement.classList.add('info-h4');
    infoDiv.appendChild(contentElement)
    contentElement = document.createElement("p");
    contentElement.classList.add('info-p');
    contentElement.textContent = name;
    infoDiv.appendChild(contentElement)

    breaker = document.createElement("br");
    infoDiv.appendChild(breaker)

     contentElement = document.createElement("h4");
    contentElement.textContent = "age: ";
    contentElement.classList.add('info-h4');
    infoDiv.appendChild(contentElement)
    contentElement = document.createElement("p");
    contentElement.classList.add('info-p');
    contentElement.textContent = age;
    infoDiv.appendChild(contentElement)

    breaker = document.createElement("br");
    infoDiv.appendChild(breaker)


    contentElement = document.createElement("h4");
    contentElement.textContent = "goal: ";
    contentElement.classList.add('info-h4');
    infoDiv.appendChild(contentElement)
    contentElement = document.createElement("p");
    contentElement.classList.add('info-p');
    contentElement.textContent = goal;
    infoDiv.appendChild(contentElement)

    breaker = document.createElement("br");
    infoDiv.appendChild(breaker)

     contentElement = document.createElement("h4");
    contentElement.textContent = "skill: ";
    contentElement.classList.add('info-h4');
    infoDiv.appendChild(contentElement)
    contentElement = document.createElement("p");
    contentElement.classList.add('info-p');
    contentElement.textContent = skill;
    infoDiv.appendChild(contentElement)

    breaker = document.createElement("br");
    infoDiv.appendChild(breaker)


    contentElement = document.createElement("h4");
    contentElement.textContent = "level: ";
    contentElement.classList.add('info-h4');
    infoDiv.appendChild(contentElement)
    contentElement = document.createElement("p");
    contentElement.classList.add('info-p');
    contentElement.textContent = level;
    infoDiv.appendChild(contentElement)

    breaker = document.createElement("br");
    infoDiv.appendChild(breaker)

    contentElement = document.createElement("h4");
    contentElement.textContent = "duration: ";
    contentElement.classList.add('info-h4');
    infoDiv.appendChild(contentElement)
    contentElement = document.createElement("p");
    contentElement.classList.add('info-p');
    contentElement.textContent = duration+" weeks";
    infoDiv.appendChild(contentElement)
    roadmapContainer.appendChild(infoDiv);



    
    






  for (const week of weeks) {
    // Card
    const weekDiv = document.createElement("div");
    weekDiv.classList.add("card-week");

    //  Head
    sectionHeadDiv = document.createElement('div');
    sectionHeadDiv.classList.add('section-head');
    //  Head - img
    const img = document.createElement('img');
    img.classList.add('form-head-img');
    img.src = '../media/images/week.png';
    //  Head - Week
    const h4 = document.createElement('h4');
    h4.textContent = `Week #${week.weekNumber}`;
    //  Head - hr
    const span = document.createElement('span');
    span.classList.add('h-line');
    const hr = document.createElement('hr');
    span.appendChild(hr);
    // Append the elements to build the structure
    //  Append to Head
    sectionHeadDiv.appendChild(img);
    sectionHeadDiv.appendChild(h4);
    sectionHeadDiv.appendChild(span);
    // Head - Append to Card
    weekDiv.appendChild(sectionHeadDiv);
    // Card - Append to container
    roadmapContainer.appendChild(weekDiv);

    for (const content of week.weekContent) {
      contentElement = document.createElement("p");
      contentElement.textContent = content;
      weekDiv.appendChild(contentElement);
    }
  }
});
