// Variables
let canvas,
  gl,
  shaderProgram,
  positionBuffer,
  positionAttributeLocation,
  matrixUniformLocation;

// Vertices del modelo
const vertices = [
  // Cara frontal
  -0.5, -0.5, 0.5, 0.5, -0.5, 0.5, 0.5, 0.5, 0.5, -0.5, 0.5, 0.5,

  // Cara trasera
  -0.5, -0.5, -0.5, -0.5, 0.5, -0.5, 0.5, 0.5, -0.5, 0.5, -0.5, -0.5,

  // Cara superior
  -0.5, 0.5, -0.5, -0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5, -0.5,

  // Cara inferior
  -0.5, -0.5, -0.5, 0.5, -0.5, -0.5, 0.5, -0.5, 0.5, -0.5, -0.5, 0.5,

  // Cara lateral izquierda
  -0.5, -0.5, -0.5, -0.5, -0.5, 0.5, -0.5, 0.5, 0.5, -0.5, 0.5, -0.5,

  // Cara lateral derecha
  0.5, -0.5, 0.5, 0.5, -0.5, -0.5, 0.5, 0.5, -0.5, 0.5, 0.5, 0.5,
];

// Índices para dibujar los triángulos
const indices = [
  0, 1, 2, 0, 2, 3, 4, 5, 6, 4, 6, 7, 8, 9, 10, 8, 10, 11, 12, 13, 14, 12, 14,
  15, 16, 17, 18, 16, 18, 19, 20, 21, 22, 20, 22, 23,
];

// Función para compilar el shader
function compileShader(type, source) {
  const shader = gl.createShader(type);
  gl.shaderSource(shader, source);
  gl.compileShader(shader);

  if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) {
    console.error("Error al compilar el shader:", gl.getShaderInfoLog(shader));
    gl.deleteShader(shader);
    return null;
  }

  return shader;
}

// Función para crear y vincular el programa de shader
function createShaderProgram() {
  const vertexShaderSource = `
    attribute vec3 position;
    uniform mat4 matrix;
    
    void main() {
      gl_Position = matrix * vec4(position, 1.0);
    }
  `;
  const fragmentShaderSource = `
    void main() {
      gl_FragColor = vec4(0.7, 0.7, 0.7, 1.0);
    }
  `;

  const vertexShader = compileShader(gl.VERTEX_SHADER, vertexShaderSource);
  const fragmentShader = compileShader(
    gl.FRAGMENT_SHADER,
    fragmentShaderSource
  );

  const program = gl.createProgram();
  gl.attachShader(program, vertexShader);
  gl.attachShader(program, fragmentShader);
  gl.linkProgram(program);

  if (!gl.getProgramParameter(program, gl.LINK_STATUS)) {
    console.error(
      "Error al vincular el programa de shader:",
      gl.getProgramInfoLog(program)
    );
    return null;
  }

  return program;
}

// Función para crear el búfer de posición
function createPositionBuffer() {
  const buffer = gl.createBuffer();
  gl.bindBuffer(gl.ARRAY_BUFFER, buffer);
  gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(vertices), gl.STATIC_DRAW);
  return buffer;
}

// Función para configurar los atributos del shader
function setupAttributes() {
  positionAttributeLocation = gl.getAttribLocation(shaderProgram, "position");
  gl.enableVertexAttribArray(positionAttributeLocation);
  gl.vertexAttribPointer(positionAttributeLocation, 3, gl.FLOAT, false, 0, 0);
}

// Función para dibujar el modelo
function drawModel() {
  gl.clear(gl.COLOR_BUFFER_BIT | gl.DEPTH_BUFFER_BIT);
  gl.drawElements(gl.TRIANGLES, indices.length, gl.UNSIGNED_SHORT, 0);
}

// Función para animar el modelo
function animate() {
  requestAnimationFrame(animate);

  // Rotar el modelo
  const angle = (performance.now() / 1000 / 6) * 2 * Math.PI;
  const matrix = mat4.create();
  mat4.rotate(matrix, matrix, angle, [0, 1, 0]);
  gl.uniformMatrix4fv(matrixUniformLocation, false, matrix);

  drawModel();
}

// Función para inicializar la aplicación
function init() {
  // Obtener el lienzo WebGL
  canvas = document.getElementById("canvas");
  gl = canvas.getContext("webgl");
  if (!gl) {
    console.error("Tu navegador no soporta WebGL");
    return;
  }

  // Configurar el lienzo WebGL
  gl.viewport(0, 0, canvas.width, canvas.height);
  gl.clearColor(0.9, 0.9, 0.9, 1.0);
  gl.enable(gl.DEPTH_TEST);

  // Crear y compilar el programa de shader
  shaderProgram = createShaderProgram();
  if (!shaderProgram) {
    return;
  }

  // Crear el búfer de posición
  positionBuffer = createPositionBuffer();

  // Configurar los atributos del shader
  setupAttributes();

  // Obtener la ubicación de la matriz uniforme
  matrixUniformLocation = gl.getUniformLocation(shaderProgram, "matrix");

  // Animar el modelo
  animate();
}

// Inicializar la aplicación
init();
