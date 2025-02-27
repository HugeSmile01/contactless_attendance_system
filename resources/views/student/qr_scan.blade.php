<!DOCTYPE html>
<html>
<head>
    <title>QR Scan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Scan QR Code</h2>
        <div id="qr-reader" style="width: 500px"></div>
        <div id="qr-reader-results"></div>
        <a href="{{ route('student.home') }}" class="btn btn-secondary">Back to Home</a>
    </div>
    <script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // Handle the scanned code as you like, for example:
            console.log(`Code matched = ${decodedText}`, decodedResult);
            document.getElementById('qr-reader-results').innerHTML = `<p>Scanned Code: ${decodedText}</p>`;
        }

        function onScanFailure(error) {
            // Handle scan failure, usually better to ignore and keep scanning.
            console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
</body>
</html>
