<?php

namespace App\Http\Livewire\Patients;

use App\Http\Controllers\AnalyzeController;
use Illuminate\Http\Request;
use Livewire\Component;

class SymptomCheck extends Component
{
    // Propiedades públicas para almacenar datos y estados relevantes
    public $symptoms = [];
    public $age;
    public $temp;
    public $results = [];
    public $error;
    public $successMessage;
    public $apiResponse; 

    /**
     * Renderiza el componente y pasa datos a la vista.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.patients.symptom_check', [
            'error' => $this->error,
            'results' => $this->results,
            'successMessage' => $this->successMessage,
            'apiResponse' => $this->apiResponse, 
        ])->layout('patient.layouts.app');
    }

    public function analyze()
    {
        try {
            $symptoms = new Request([
                'age' => $this->age,
                'temp' => $this->temp,
            ]);

            // Llamar al método analyzeSymptoms del controlador AnalyzeController
            $analyzeController = new AnalyzeController();
            $response = $analyzeController->analyzeSymptoms($symptoms);
            $content = $response->getContent();
            $data = json_decode($content, true);
            $this->apiResponse = $data;
          
        } catch (\Exception $e) {
            // Manejar cualquier excepción y registrar el error
            $this->error = 'Error al obtener los resultados. Por favor, inténtalo de nuevo.';
            $this->results = [];
            // Limpiar mensaje de éxito
            $this->successMessage = null;
            // Limpiar respuesta de la API
            $this->apiResponse = null;
        }

        // Limpiar los campos después de enviar los datos
        $this->reset(['age', 'temp', 'symptoms']);
    }
}
