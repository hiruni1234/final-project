<p style=" color:green;">Hi, This is {{ $data['to_mail'] }}</p>
<p style=" color:green;">Hello {{ $data['from_mail'] }}.</p>
<p style=" color:blue ;">{{ $data['subject'] }}.</p>
<p style=" color:blue;">I'm {{ $data['name'] }}.</p>
<p style=" color:blue;">I have some query like {{ $data['message'] }}.</p>
<p style=" color:blue;">{{ $data['address_line_1'] }}.</p>
<p style=" color:blue;">{{ $data['address_line_2'] }}.</p>
<p style=" color:blue;">{{ $data['address_line_3'] }}.</p>
<p  style=" color:blue;">{{ $data['address_line_4'] }}.</p>
<p  style=" color:blue;">{{ $data['contact_number'] }}.</p>
<img src="{{ url('img/logo2.jpg') }}" alt="logo" align="middle">
