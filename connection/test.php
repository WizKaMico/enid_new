<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner</title>
    <script src="https://cdn.jsdelivr.net/npm/quagga@0.12.1/dist/quagga.min.js"></script>
</head>
<body>
    <!-- Video element to capture the camera stream -->
    <div id="interactive" class="viewport"></div>
    
    <!-- Display the scanned QR code data -->
    <div id="result"></div>
    
    <!-- Your custom JavaScript code -->
    <script>
        // Access the camera and start scanning
        Quagga.init({
            inputStream : {
                name : "Live",
                type : "LiveStream",
                target: document.querySelector('#interactive'),
            },
            decoder: {
                readers: ["code_128_reader", "ean_reader", "ean_8_reader", "code_39_reader", "code_39_vin_reader", "codabar_reader", "upc_reader", "upc_e_reader", "i2of5_reader", "2of5_reader", "code_93_reader"],
            }
        }, function(err) {
            if (err) {
                console.error(err);
                document.getElementById('result').textContent = 'Error accessing the camera.';
                return;
            }
            Quagga.start();
        });

        Quagga.onDetected(function(result) {
            console.log(result);
            document.getElementById('result').textContent = result.codeResult.code;
            Quagga.stop();
        });
    </script>
</body>
</html>
