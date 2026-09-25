<div style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>New Contact Form Submission</h2>

    <p><strong>Name:</strong> {{ $data['name'] ?? 'N/A' }}</p>

    @if(isset($data['email']))
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
    @endif

    @if(isset($data['phone']))
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    @endif

    @if(isset($data['address']))
        <p><strong>Address:</strong> {{ $data['address'] }}</p>
    @endif

    @if(isset($data['gender']))
        <p><strong>Gender:</strong> {{ $data['gender'] }}</p>
    @endif

    @if(isset($data['dob']))
        <p><strong>DOB:</strong> {{ $data['dob'] }}</p>
    @endif

    @if(isset($data['service']))
        <p><strong>Service:</strong> {{ $data['service'] }}</p>
    @endif

    @if(isset($data['appointment_date']))
        <p><strong>Appointment Date:</strong> {{ $data['appointment_date'] }}</p>
    @endif

    @if(isset($data['appointment_time']))
        <p><strong>Appointment Time:</strong> {{ $data['appointment_time'] }}</p>
    @endif

    @if(isset($data['message']))
        <p><strong>Message:</strong></p>
        <p>{{ $data['message'] }}</p>
    @endif
</div>
