<!-- resources/views/layouts/mobile.blade.php -->
@section('styles')
<style>
    @media screen and (max-width: 768px) {
        body {
            padding: 10px;
        }

        .container-custom {
            max-width: 95%;
            padding: 10px;
            margin: auto;
        }

        h2 {
            font-size: 22px;
            text-align: center;
            margin-bottom: 15px;
        }

        .card {
            padding: 15px;
            margin-bottom: 15px;
        }

        table {
            display: block;
            overflow-x: auto;
        }

        table th, table td {
            font-size: 14px;
            padding: 8px;
        }

        .back-btn {
            font-size: 14px;
            padding: 10px;
            width: 100%;
            text-align: center;
        }

        .sidebar {
            width: 70px !important;
            transition: width 0.3s ease;
        }

        .content {
            margin-left: 80px !important;
            padding: 15px;
        }

        .topbar {
            padding: 8px 15px;
        }

        button {
            padding: 8px 20px;
            font-size: 14px;
        }
    }
</style>
@endsection