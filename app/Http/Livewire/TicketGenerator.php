<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
class TicketGenerator extends Component
{
    public $pdfBase64;

    public function render()
    {
        return view('livewire.ticket-generator');
    }
    public function imprimir()
    {
         $usuario = 'Denisse Cumbal';
    $cedula = '1721355061001';
        $items = [
            ['name' => 'Producto 1', 'price' => 5],
            ['name' => 'Producto 2', 'price' => 10],
        ];
    
         $pdf = Pdf::loadView('ticket', compact('usuario', 'cedula'))
        ->setPaper([0, 0, 200.77, 226.77], 'portrait');

        // Codificar el PDF en base64
        $pdfBase64 = 'data:application/pdf;base64,' . base64_encode($pdf->output());

        // Guardarlo en la propiedad para pasarlo a JS
        $this->pdfBase64 = $pdfBase64;

        // Disparar evento a JS
       $this->dispatchBrowserEvent('imprimir-pdf', ['base64' => $pdfBase64]);
}
}
