const container = document.getElementById("equalizer");

// Cantidad de barras que se quieren crear
const numBars = 50;

for (let i = 0; i < numBars; i++) {
  const bar = document.createElement("div");
  bar.classList.add("bar");

  // Generar valores aleatorios para la animación
  const animDuration = Math.floor(Math.random() * 2000) + 1000;
  const animDelay = Math.floor(Math.random() * 800);
  const animHeight = Array.from({ length: 11 }, () => Math.floor(Math.random() * 70) + 10);

  const keyframes = animHeight.map((height, j) => {
    const percent = j * 10;
    return `${percent}% { height: ${height}px; }`;
  }).join(" ");

  const animName = `grow${i}`;
  const animStyle = `@keyframes ${animName} { ${keyframes} }`;

  // Añadir la animación al documento
  const style = document.createElement("style");
  style.appendChild(document.createTextNode(animStyle));
  document.head.appendChild(style);

  // Aplicar la animación a la barra
  bar.style.animation = `${animName} ${animDuration}ms alternate infinite ${animDelay}ms`;

  // Añadir la barra al contenedor
  container.appendChild(bar);
}