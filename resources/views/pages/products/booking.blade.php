<x-app-layout title="Update Product">
    <style>
        .container {
            margin-top: 5rem;
        }
        .card {
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #6ab994;
            color: #fff;
            text-align: center;
            padding: 1rem;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }
        .card-header h2 {
            margin: 0;
        }
        .card-body {
            padding: 2rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-label {
            font-weight: bold;
            display: block;
            margin-bottom: 0.5rem;
        }
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.5rem;
            width: 100%;
        }
        .form-control:focus {
            border-color: #ced4da;
            box-shadow: 0 0 0 0.2rem rgba(114, 173, 132, 0.25);
        }
        .invalid-feedback {
            color: #dc3545;
        }
        .btn-primary {
            background-color: #6ab994;
            border-color: #6ab994;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #6ab994;
            border-color: #004085;
        }
    </style>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Edit Product</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('booking.store') }}" method="POST" class="p-4" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group">
                        <label for="play_date" class="form-label">Select Date</label>
                        <input type="date" name="play_date" id="play_date" class="form-control @error('play_date') is-invalid @enderror">
                        @error('play_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="timeInput">Mulai:</label>
                        <input type="time" class="form-control @error('start_at') is-invalid @enderror"
                            value="{{ old('start_at') }}" id="timeInput" name="start_at">
                        @error('start_at')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="timeInput">Sampai:</label>
                        <input type="time" class="form-control @error('end_at') is-invalid @enderror"
                            value="{{ old('price') }}" id="timeInput" name="end_at">
                        @error('end_at')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="payment_method" class="form-label">Payment Method</label>
                        <select id="status" name="payment_method" class="form-control @error('payment_method') is-invalid @enderror">
                            <option value="" selected>Select</option>
                            <option value="COD" {{ old('payment_method') == 'COD' ? 'selected' : '' }}>COD</option>
                        </select>
                        @error('payment_method')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input hidden type="text" id="name" name="product_id" class="form-control" value="{{ $product->id }}">
                    </div>
                    <button type="submit" class="btn mt-5 btn-primary">Update Product</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
