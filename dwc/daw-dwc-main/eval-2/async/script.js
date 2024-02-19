'use strict';

const input = document.querySelector('#usr');
const div = document.querySelector('#resultado');

const btn = document.querySelector('#buscar');

input.addEventListener('keyup', (e) => {
  e.preventDefault();

  if (e.key === 'Enter') btn.click();
});

btn.addEventListener('click', async () => {
  div.innerText = '';

  const res = await fetch(`https://api.github.com/users/${input.value}`);
  const data = await res.json();

  const img = document.createElement('img');
  img.src = data.avatar_url;
  div.appendChild(img);

  // const keys = Object.keys(data);

  // for await (const key of keys) {
  //   let element;

  //   if (key === 'avatar_url') {
  //     element = document.createElement('img');
  //     element.src = data[key];
  //   } else {
  //     element = document.createElement('p');
  //     element.innerText = `${key}: ${data[key]}`;
  //   }

  //   div.appendChild(element);
  // }
});
