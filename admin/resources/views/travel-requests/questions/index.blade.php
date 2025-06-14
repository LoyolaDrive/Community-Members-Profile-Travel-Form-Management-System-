@extends('layouts.app')

@section('title', 'Travel Request Questions')

@section('styles')
<style>

    body {
        background-color: #f0f2f5;
        color: #17224D;
        font-family: 'Inter', sans-serif;
        padding: 40px;
    }

    .container-custom {
        max-width: 800px;
        margin: auto;
        padding-top: 20px;
    }

   
    .card {
        border-radius: 12px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
        background: rgba(255, 255, 255, 0.95);
        padding: 30px;
        margin-bottom: 50px;
    }

    .card-header {
        background-color: #17224D;
        color: white;
        font-size: 18px;
        font-weight: bold;
        border-radius: 6px 6px 0 0;
        padding: 15px;
        text-align: center;
    }

 
    .success-message {
        color: green;
        font-weight: bold;
        text-align: center;
        margin-bottom: 15px;
    }


    .add-btn {
        background-color: #17224D;
        color: white;
        font-size: 16px;
        font-weight: bold;
        padding: 12px;
        border-radius: 6px;
        display: block;
        width: 100%;
        text-align: center;
        text-decoration: none;
        margin-bottom: 20px;
    }

    .add-btn:hover {
        background-color: #1f2f5f;
    }

    
    .table {
        width: 100%;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.95);
    }

    .table thead {
        background-color: #17224D;
        color: white;
        font-size: 16px;
    }

    .table th, .table td {
        padding: 12px;
        border: 1px solid #17224D;
    }

    
    .edit-btn {
        background-color: #2980b9;
        color: white;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 14px;
        text-decoration: none;
        display: inline-block;
    }

    .edit-btn:hover {
        background-color: #21618C;
    }

    .disable-btn {
        background-color: red;
        color: white;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 14px;
        border: none;
        cursor: pointer;
    }

    .disable-btn:hover {
        background-color: darkred;
    }

    .disabled-text {
        color: rgb(255, 251, 251);
    }
</style>
@endsection

@section('content')

<div class="container-custom">

    <div class="card">
        <div class="card-header">Travel Request Questions</div>
        <div class="card-body">
            
            @if(session('success'))
                <p class="success-message">{{ session('success') }}</p>
            @endif

            <a href="{{ route('travel-request-questions.create') }}" class="add-btn">+ Add New Question</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($questions as $q)
                        <tr>
                            <td>{{ $q->question }}</td>
                            <td>{{ ucfirst($q->status) }}</td>
                            <td>
                                <a href="{{ route('travel-request-questions.edit', $q->id) }}" class="edit-btn">Edit</a>

                                @if($q->status === 'active')
                                <form action="{{ route('travel-request-questions.destroy', $q->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="disable-btn" onclick="return confirm('Disable this question?')">Disable</button>
                                </form>
                                @else
                                <span class="disabled-text">(Disabled)</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection