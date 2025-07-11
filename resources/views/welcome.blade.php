<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Route Line</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/heroicons@1.0.6/dist/outline/heroicons.min.js"></script>
  <style>
    .map-container {
      position: relative;
      width: 100%;
      max-width: 900px;
      border-radius: 1rem;
      overflow: hidden;
    }

    .map-point {
      position: absolute;
      width: 28px;
      height: 28px;
      cursor: pointer;
    }

    /* Posiciones de los puntos */
    #point1 { top: 65%; left: 81%; }
    #point2 { top: 65%; left: 76%; }
    #point3 { top: 30%; left: 64%; }
    #point4 { top: 92%; left: 31%; }
    #point5 { top: 77%; left: 11%; }
    #point6 { top: 57%; left: 8%; }
  </style>
</head>

<body class="bg-gray-50 min-h-screen font-sans">

  <!-- Encabezado -->
  <header class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
    <h1 class="text-3xl font-bold text-gray-800 tracking-wide">📍 ROUTE LINE</h1>
      <a href="/login" class="flex items-center gap-2 bg-blue-100 px-4 py-2 rounded hover:bg-blue-200 transition">
  <span class="text-blue-800 font-semibold text-sm">INICIO SESIÓN</span>
  <img src="{{ asset('iniciosesion.png') }}" alt="Iniciar Sesión" class="h-10 w-auto">
</a>


  </header>

  <!-- Contenido principal -->
  <main class="flex flex-col items-center px-4 py-10">
    
    <!-- Tarjeta del mapa -->
    <div class="bg-white shadow-xl rounded-xl p-4 w-full max-w-4xl">
      <div class="map-container mx-auto">
        <img src="{{ asset('mapa.png') }}" alt="Mapa" class="w-full h-auto">

        <!-- Puntos de ubicación -->
        <img src="{{ asset('puntoubic.png') }}" alt="Punto 1" class="map-point" id="point1" onclick="window.open('/punto1', '_blank')">
        <img src="{{ asset('puntoubic.png') }}" alt="Punto 2" class="map-point" id="point2" onclick="window.open('/punto2', '_blank')">
        <img src="{{ asset('puntoubic.png') }}" alt="Punto 3" class="map-point" id="point3" onclick="window.open('/punto3', '_blank')">
        <img src="{{ asset('puntoubic.png') }}" alt="Punto 4" class="map-point" id="point4" onclick="window.open('/punto4', '_blank')">
        <img src="{{ asset('puntoubic.png') }}" alt="Punto 5" class="map-point" id="point5" onclick="window.open('/punto5', '_blank')">
        <img src="{{ asset('puntoubic.png') }}" alt="Punto 6" class="map-point" id="point6" onclick="window.open('/punto6', '_blank')">
      </div>

      <!-- Botón de filtrado -->
      <div class="flex justify-end mt-6">
        <button class="flex items-center gap-2 bg-green-600 text-white px-5 py-2 rounded-lg hover:bg-green-700 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L15 12.414V19a1 1 0 01-1.447.894l-4-2A1 1 0 019 17V12.414L3.293 6.707A1 1 0 013 6V4z" />
          </svg>
          Filtrar
        </button>
      </div>
    </div>
  </main>

  <!-- Modal -->
  <div id="infoModal" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-6 w-80 shadow-xl relative">
      <button onclick="closeInfo()" class="absolute top-2 right-3 text-gray-400 hover:text-gray-700 text-xl">&times;</button>
      <h2 class="text-lg font-semibold mb-3 text-gray-800">📌 Información del Punto</h2>
      <p id="infoText" class="text-gray-700 text-sm"></p>
    </div>
  </div>

  <!-- Script Modal -->
  <script>
    function showInfo(text) {
      document.getElementById('infoText').innerText = text;
      document.getElementById('infoModal').classList.remove('hidden');
    }

    function closeInfo() {
      document.getElementById('infoModal').classList.add('hidden');
    }
  </script>

</body>
</html>
