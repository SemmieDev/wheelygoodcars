@extends("layouts.app")

@section("content")
    <form action="{{ route("placeOffer.submit") }}" method="post">
        @csrf

        <div>
            <label for="licensePlate">Kenteken:</label>
            <input type="text" name="licensePlate" id="licensePlate" required>
        </div>

        <div>
            <label for="price">Prijs:</label>
            <input type="number" name="price" id="price" required>
        </div>

        <input type="submit" value="Plaats aanbod">
    </form>
@endsection
