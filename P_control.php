<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SPI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .bg-navy { background-color: #1e3a6d; }
        .text-navy { color: #1e3a6d; }
        .bg-light-blue { background-color: #f0f4f8; }
        
        .donut-chart {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: conic-gradient(#1e3a6d 0% 74%, #adc6ff 74% 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .donut-chart::after {
            content: "";
            position: absolute;
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 50%;
        }
        .donut-content { position: relative; z-index: 10; text-align: center; }
    </style>
</head>
<body class="bg-[#fdfbf2] font-sans text-gray-700">

    <nav class="bg-white border-b px-8 py-3 flex items-center justify-between shadow-sm">
        <div class="flex items-center space-x-2">
            <i class="fas fa-box-open text-navy text-2xl"></i>
            <span class="font-bold text-xl text-navy">SPI</span>
        </div>
        
        <div class="hidden lg:flex space-x-8 text-sm font-medium text-gray-500">
            <a href="#" class="flex items-center space-x-1 hover:text-navy"><i class="fas fa-cubes"></i> <span>Inventario</span></a>
            <a href="#" class="flex items-center space-x-1 hover:text-navy"><i class="fas fa-hand-holding"></i> <span>Pr stamos</span></a>
            <a href="#" class="flex items-center space-x-1 hover:text-navy"><i class="fas fa-user-graduate"></i> <span>Alumnos</span></a>
            <a href="#" class="flex items-center space-x-1 hover:text-navy"><i class="fas fa-chart-bar"></i> <span>Reportes</span></a>
            <a href="#" class="flex items-center space-x-1 hover:text-navy"><i class="fas fa-users-cog"></i> <span>Usuarios</span></a>
            <a href="#" class="flex items-center space-x-1 hover:text-navy"><i class="fas fa-save"></i> <span>Respaldo</span></a>
        </div>

        <div class="flex items-center space-x-4">
            <i class="fas fa-cog text-gray-400 cursor-pointer"></i>
            <i class="fas fa-bell text-gray-400 cursor-pointer"></i>
            <div class="w-10 h-10 bg-navy rounded-full flex items-center justify-center text-white font-bold">A</div>
        </div>
    </nav>

    <main class="p-8">
        <div class="flex justify-between items-end mb-8">
            <h1 class="text-2xl font-bold text-gray-800">MEN  PRINCIPAL</h1>
            <p class="text-navy font-semibold"> Bienvenido administrador!</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-8">
                
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-bold text-gray-600">Inventario Actual</h2>
                        <button class="bg-navy text-white text-xs px-4 py-1 rounded hover:bg-blue-900">Ver mas ></button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-blue-50 p-6 rounded-lg border border-blue-100 relative">
                            <p class="text-sm text-gray-500 mb-2">Total de Inventario</p>
                            <p class="text-3xl font-bold text-navy">1,345</p>
                            <a href="#" class="absolute bottom-6 right-6 text-xs text-navy font-bold">Detalles ></a>
                        </div>
                        <div class="bg-orange-50 p-6 rounded-lg border border-orange-100 relative">
                            <p class="text-sm text-gray-500 mb-2">Objeto m s pedido: Banana</p>
                            <p class="text-3xl font-bold text-orange-600">10</p>
                            <a href="#" class="absolute bottom-6 right-6 text-xs text-navy font-bold">Detalles ></a>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-gray-600">Prestamos Activos</h2>
                        <button class="bg-navy text-white text-xs px-4 py-1 rounded hover:bg-blue-900">Ver mas ></button>
                    </div>
                    <p class="text-xs text-gray-400 mb-4">Este mes (3)</p>

                    <div class="space-y-0 border rounded-lg overflow-hidden">
                        <div class="flex items-center justify-between p-4 border-b hover:bg-gray-50">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gray-100 rounded flex items-center justify-center">
                                    <i class="fas fa-toolbox text-orange-500"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold">Mult metro</p>
                                    <p class="text-xs text-gray-400">1 pieza(s)</p>
                                </div>
                            </div>
                            <span class="px-4 py-1 bg-orange-50 text-orange-500 text-xs font-bold rounded-full border border-orange-200">Prestado</span>
                            <span class="text-xs text-navy font-semibold">10/01/2026 <i class="far fa-calendar-alt ml-1"></i></span>
                        </div>
                        <div class="flex items-center justify-between p-4 border-b hover:bg-gray-50">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gray-100 rounded flex items-center justify-center">
                                    <i class="fas fa-microchip text-blue-500"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold">Osciloscopio</p>
                                    <p class="text-xs text-gray-400">3 pieza(s)</p>
                                </div>
                            </div>
                            <span class="px-4 py-1 bg-orange-50 text-orange-500 text-xs font-bold rounded-full border border-orange-200">Prestado</span>
                            <span class="text-xs text-navy font-semibold">02/03/2026 <i class="far fa-calendar-alt ml-1"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm flex flex-col items-center">
                <h2 class="text-xl font-semibold text-gray-600 self-start mb-12">Detalle semanal</h2>
                
                <div class="donut-chart mb-12">
                    <div class="donut-content">
                        <p class="text-xs text-gray-400 uppercase">Total</p>
                        <p class="text-2xl font-bold text-gray-800">1,345</p>
                    </div>
                </div>

                <div class="w-full space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 bg-navy rounded-full"></div>
                            <span class="text-sm text-gray-600">Material disponible</span>
                        </div>
                        <span class="text-sm font-bold">1,000 piezas</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 bg-[#adc6ff] rounded-full"></div>
                            <span class="text-sm text-gray-600">Material prestado</span>
                        </div>
                        <span class="text-sm font-bold">345 piezas</span>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>
</html>