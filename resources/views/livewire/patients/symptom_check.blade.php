<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div style="text-align: center;">
        <h3>Por favor, ingrese sus datos para el análisis:</h3>

        <!-- Formulario para edad y temperatura -->
        <form wire:submit.prevent="analyze()">
            <div class="mt-4">
                <label for="age">Edad:</label>
                <input type="number" id="age" wire:model="age" class="border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mt-2">
                <label for="temp">Temperatura:</label>
                <input type="number" id="temp" step="0.01" wire:model="temp" class="border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded" wire:loading.attr="disabled">
                    Enviar a análisis
                </button>
            </div>
        </form>

        <!-- Mostrar resultados -->
        @if (!empty($results))
            <div class="mt-4">
                <h3>Resultados del análisis:</h3>
                <ul>
                    @foreach ($results as $disease => $percentage)
                        <li>{{ $disease }}: {{ $percentage }}%</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Mostrar mensaje de error si hay uno -->
        @if ($error)
            <div class="mt-4 error-message">
                {{ $error }}
            </div>
        @endif

        <!-- Mostrar mensaje de éxito después de enviar el formulario -->
        @if ($successMessage)
            <div class="mt-4 text-green-500">
                {{ $successMessage }}
            </div>
        @endif

        <!-- Mostrar respuesta de la API -->
        @if ($apiResponse)
            <div class="mt-4">
                <h3>Respuesta de la API:</h3>
                <pre>{{ json_encode($apiResponse, JSON_PRETTY_PRINT) }}</pre>
            </div>
        @endif
    </div>
</div>

