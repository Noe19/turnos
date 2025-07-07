<div>
    <button wire:click="imprimir">Imprimir Ticket</button>
    <script>
        /*  window.addEventListener('imprimir-pdf', function(event) {
                    const base64Pdf = event.detail.base64;

                    const a = document.createElement('a');
                    a.href = base64Pdf;
                    a.download = 'ticket.pdf';
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                });*/
        /* window.addEventListener('imprimir-pdf', function (event) {
            const base64Pdf = event.detail.base64;

            // Abrir PDF base64 en nueva pestaña
            const pdfWindow = window.open("");
            pdfWindow.document.write(
                `<iframe width='100%' height='100%' src='${base64Pdf}'></iframe>`
            );

            // Opcional: imprimir desde nueva pestaña (puede requerir interacción del usuario)
            pdfWindow.onload = function () {
                pdfWindow.focus();
                pdfWindow.print();
                pdfWindow.close();
            };
        });*/

        /*window.addEventListener('imprimir-pdf', function(event) {
            const base64Pdf = event.detail.base64;

            const pdfWindow = window.open('', '_blank');
            if (!pdfWindow) {
                alert('Por favor permite ventanas emergentes para imprimir');
                return;
            }

            const html = `
            <html>
                <head>
                    <title>Imprimir Ticket</title>
                    <style>
                        html, body {
                            margin: 0; padding: 0; height: 100%; background: white;
                        }
                        embed, object {
                            width: 100%; height: 100%; border: none;
                        }
                    </style>
                </head>
                <body>
                    <embed src="${base64Pdf}" type="application/pdf" />
                    <script>
                        (function() {
                            window.onload = function() {
                                window.focus();
                                window.print();
                            };
                        })();
                    <\/script>
                </body>
            </html>
        `;

            pdfWindow.document.open();
            pdfWindow.document.write(html);
            pdfWindow.document.close();
        });*/
        /*
        window.addEventListener('imprimir-pdf', function(event) {
            const base64Pdf = event.detail.base64;

            const pdfWindow = window.open("");
            pdfWindow.document.write(
                `<iframe width='100%' height='100%' src='${base64Pdf}'></iframe>`
            );

            // Espera un poco para asegurarse que el PDF cargue antes de imprimir
            setTimeout(() => {
                pdfWindow.focus();
                pdfWindow.print();
            }, 1000); // Ajusta el tiempo si es necesario
        });*/

        /*
         let printIframe = document.createElement('iframe');
            printIframe.style.display = 'none';
            document.body.appendChild(printIframe);

            window.addEventListener('imprimir-pdf', function (event) {
                const url = event.detail.url;

                printIframe.src = url;

                printIframe.onload = function () {
                    setTimeout(() => {
                        printIframe.contentWindow.focus();
                        printIframe.contentWindow.print();
                    }, 500);
                };
            });*/
        let printIframe = document.createElement('iframe');
        printIframe.style.display = 'none';
        document.body.appendChild(printIframe);

        window.addEventListener('imprimir-pdf', function(event) {
            const url = event.detail.url;
            console.log("Recibido URL para imprimir:", url); // debug

            if (!url) {
                alert("No se recibió URL válida para impresión.");
                return;
            }

            printIframe.src = url;

            printIframe.onload = function() {
                setTimeout(() => {
                    printIframe.contentWindow.focus();
                    printIframe.contentWindow.print();
                    setTimeout(() => {
                        //window.location.href = '/'; // Redirige a la raíz
                         if(confirm("¿Terminaste de imprimir?")) {
                window.location.href = '/'; // O cualquier otra acción
            }
                    }, 1000);

                }, 500);
            };
        });
    </script>

</div>
