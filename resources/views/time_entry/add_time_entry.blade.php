@extends('components.app')
@section('content')

{{-- Live Date & Time --}}
<div class="row mb-3">
    <div class="col-md">
        <div id="liveTime" class="d-flex justify-content-center fw-medium primary-color" style="font-size: 5rem;"></div>
        <div id="liveDate" class="d-flex justify-content-center fw-medium primary-color" style="font-size: 1rem;"></div>
    </div>
</div>
<div class="row">
    <div class="col-md d-flex justify-content-center">
        <button class="btn primary-btn">AM TIME IN <i class='bx bx-time-five'></i></button>
    </div>
</div>

<h5 class="page-title fw-bold">Todays Record</h5>

<div class="row mb-4">
    <div class="col-md">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h1>00:00 --</h1>
                <label class="">AM Time In</label>
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h1>00:00 --</h1>
                <label class="">AM Time Out</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h1>00:00 --</h1>
                <label class="">PM Time In</label>
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h1>00:00 --</h1>
                <label class="">PM Time Out</label>
            </div>
        </div>
    </div>
</div>

@endsection

@section('components.specific_page_scripts')
  <script>
    $(document).ready(function () {
        function updateDateTime() {
            let now = new Date();

            // Format time in 24-hour format
            let timeString = now.toLocaleTimeString('en-US', { hour12: false });

            // Format date: March 03, 2025 (Monday)
            let options = { year: 'numeric', month: 'long', day: '2-digit', weekday: 'long' };
            let formattedDate = now.toLocaleDateString('en-US', options);

            // Custom formatting to match "March 03, 2025 (Monday)"
            let dateParts = formattedDate.split(' '); // Split into parts
            let formattedString = `${dateParts[0]} ${dateParts[1]}, ${dateParts[2]} (${dateParts[3]})`;

            $('#liveTime').text(timeString);
            $('#liveDate').text(formattedString);
        }

        // Update every second
        setInterval(updateDateTime, 1000);

        // Initial call to display immediately
        updateDateTime();
    });
  </script>
@endsection
