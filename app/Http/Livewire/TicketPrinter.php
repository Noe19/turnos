<?php
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class TicketPrinter extends Component
{
    public function render()
    {
        return view('livewire.ticket-printer');
    }
    public function imprimir()
    {
        $items = [
            ['name' => 'Producto 1', 'price' => 5],
            ['name' => 'Producto 2', 'price' => 10],
        ];
        $total = collect($items)->sum('price');

        $pdf = Pdf::loadView('ticket', compact('items', 'total'))
            ->setPaper([0, 0, 226.77, 841.89]); // 80mm de ancho

        // Guardar PDF temporalmente
        $filename = 'ticket.pdf';
        Storage::put("public/{$filename}", $pdf->output());

        // Opcional: abrir en nueva ventana para imprimir
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, $filename);
    }
}
