// ===============================
// MATRIX BACKGROUND
// ===============================
const canvas = document.getElementById("matrix");
const ctx = canvas.getContext("2d");

const chars =
  "アイウエオカキクコサシスセソタチツテトナニヌネノ" +
  "ハヒフヘホマミムメモヤユヨラリルレロワヲン" +
  "ガギグゲゴザジズゼゾダヂヅデドバビブベボ" +
  "パピプペポ+-*/:<>-_[]{}?$%&''`!€#@§ˆ≠=|" +
  "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

const fontSize = 16;
let drops = [];
let isResizing = false;

function resize() {
  isResizing = true;
  const oldDrops = drops.slice();

  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  const newColumns = Math.floor(canvas.width / fontSize);
  const newDrops = [];

  for (let i = 0; i < newColumns; i++) {
    newDrops[i] =
      oldDrops[i] !== undefined
        ? oldDrops[i]
        : Math.random() * (canvas.height / fontSize);
  }

  drops = newDrops;
  isResizing = false;
}

resize();
window.addEventListener("resize", resize);

function draw() {
  if (isResizing) return;

  ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
  ctx.fillRect(0, 0, canvas.width, canvas.height);

  ctx.fillStyle = "rgb(0, 255, 0)";
  ctx.font = `${fontSize}px monospace`;

  for (let i = 0; i < drops.length; i++) {
    const char = chars[Math.floor(Math.random() * chars.length)];
    ctx.fillText(char, i * fontSize, drops[i] * fontSize);

    if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
      drops[i] = 0;
    }
    drops[i]++;
  }
}

setInterval(draw, 40);

// ===============================
// HOME BOOT (no Enter here)
// ===============================
document.addEventListener("DOMContentLoaded", () => {
  const overlay = document.querySelector(".overlay");
  const content = document.getElementById("intro");
  const navbar = document.querySelector(".navbar");
  
  // stato "entrato" sempre nella home
  document.body.classList.add("entered");
  
  // overlay sempre attivo nella home
  if (overlay) overlay.style.opacity = 1;
  
  // mostra navbar
  if (navbar) {
    navbar.classList.remove("hidden");
    navbar.classList.add("show");
  }
  
  // mostra header content
  if (content) content.classList.add("show");
  
  // avvia terminal header (se presente)
  if (typeof startTerminalHeader === "function") {
    startTerminalHeader();
  }
});


// ===============================
// TERMINAL TYPE + ERASE/RETYPE
// ===============================
function sleep(ms) {
  return new Promise((r) => setTimeout(r, ms));
}

async function typeAppend(el, text, speedMs) {
  for (let i = 0; i < text.length; i++) {
    el.textContent += text[i];
    await sleep(speedMs);
  }
}

async function typeWord(el, word, speedMs) {
  el.textContent = "";
  for (let i = 0; i < word.length; i++) {
    el.textContent += word[i];
    await sleep(speedMs);
  }
}

async function eraseWord(el, speedMs) {
  while (el.textContent.length > 0) {
    el.textContent = el.textContent.slice(0, -1);
    await sleep(speedMs);
  }
}

let terminalStarted = false;

async function startTerminalHeader() {
  if (terminalStarted) return;
  terminalStarted = true;
  
  const prefixEl = document.getElementById("cmdPrefix");
  const wordEl = document.getElementById("cmdWord");
  const cursor = document.getElementById("cursor");
  const wordline = document.querySelector(".wordline");
  
  if (!prefixEl || !wordEl || !cursor || !wordline) return;
  
  // reset
  prefixEl.textContent = "";
  wordEl.textContent = "";
  prefixEl.classList.remove("on");
  cursor.classList.remove("on");
  
  // piccola pausa per far vedere >_
  await sleep(500);
  
  // scrive prefisso (cursor segue)
  const prefixText = "Welcome to Presto.it";
  await typeAppend(prefixEl, prefixText, 80);
  
  // sposta cursore sulla riga delle parole (così segue cancellazione/riscrittura)
  wordline.appendChild(cursor);
  
  // da qui in poi verde
  
  cursor.classList.add("on");
  
  const words = [
    "Trova la tua occasione",
    "Esplora il futuro degli annunci",
    
    

  ];
  
  let i = 0;
  
  await typeWord(wordEl, words[i], 120);
  await sleep(1200);
  
  while (true) {
    await eraseWord(wordEl, 100);
    await sleep(180);
    
    i = (i + 1) % words.length;
    
    await typeWord(wordEl, words[i], 120);
    await sleep(1200);
  }
}
