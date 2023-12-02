@component('mail::message')
# Welcome to Boost Consultancy & Coaching Hub Ltd

Dear {{ $student->fname }} {{ $student->lname }},

We are delighted to welcome you to Boost Consultancy & Coaching Hub Ltd. Your new account has been successfully created, and we look forward to working with you.

Your Registration number is <strong>{{ $student->regnumber }}</strong> <br>

Please feel free to reach out to our team if you have any questions or need assistance. We are here to support you in your journey with us.

Thank you for choosing Boost Consultancy & Coaching Hub Ltd.

Best regards,
Jeab Paul HATEGEKIMANA
Managing Director

@endcomponent
