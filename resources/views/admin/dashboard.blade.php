@extends('layout._dashboard-panel')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<div class="row" id="cat-container">
</div>

<script>
    const catNames = [
        "Fluffy", "Whiskers", "Mittens", "Simba", "Luna",
        "Shadow", "Oliver", "Bella", "Charlie"
    ];

    fetch(`https://api.thecatapi.com/v1/images/search?limit=9`, {
        headers: {
            'x-api-key': '{{env("API_KEY")}}'
        }
    })
    .then(response => response.json())
    .then(cats => {
        cats.forEach((cat, index) => {
            const catName = catNames[index] || "Unknown";    $('#cat-container').append(`
                <div class="col-12 col-sm-6 col-md-4 mb-4">  <!-- 3 columns per row -->
                    <div class="card shadow-sm">
                        <img src="${cat.url}" class="card-img-top" alt="Cat Image" style="height: 150px; width: 100%; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-truncate">${catName}</h5>
                        </div>
                    </div>
                </div>
            `);
        });
    })
    .catch(error => {
        $('#cat-container').html('<p class="text-center text-danger">Failed to load cat images. Try again later.</p>');
        console.error('Error fetching cat images:', error);
    });
</script>

</main>

@endsection
