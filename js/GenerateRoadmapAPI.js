const apiKey = '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';
const apiUrl = 'https://api.openai.com/v1/completions'; // Update with the correct engine

async function generateGPTResponse(prompt) {
  const headers = {
    'Content-Type': 'application/json',
    'Authorization': `Bearer ${apiKey}`,
  };

  const requestBody = {
    model: 'text-davinci-003', // Update with the correct engine
    prompt: prompt,
    max_tokens: 300,
    temperature: 0.5,
    top_p: 0.7,
  };

  const requestOptions = {
    method: 'POST',
    headers: headers,
    body: JSON.stringify(requestBody),
  };

  try {
    const response = await fetch(apiUrl, requestOptions);
    const data = await response.json();

    if (response.ok) {
      return data.choices[0].text.trim();
    } else {
      throw new Error(`Request failed with status: ${response.status}, ${data.error.message}`);
    }
  } catch (error) {
    console.error('Error:', error.message);
    return null;
  }
}

// Example usage:
const prompt = 'generate a roadmap to learn web development using node.js in three months';
generateGPTResponse(prompt)
  .then(response => {
    console.log('GPT Response:', response);
  })
  .catch(error => {
    console.error('Error:', error);
  });
