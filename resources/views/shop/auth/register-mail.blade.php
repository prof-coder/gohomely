<p><strong>goHomely Chef Registration Mail</strong></p>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="10%" colspan="4" bgcolor="#061558" style="padding:5px;color:rgb(255,255,255);font-weight:bold;">New Chef Details</td>
    </tr>
    <tr>
      <td style="padding:5px;font-weight:bold">Name:</td>
      <td style="padding:5px">{{ $name }}</td>
    </tr>

    <tr>
      <td style="padding:5px;font-weight:bold">Email :</td>
      <td style="padding:5px"><a href="mailto:{{ $email }}" target="_blank">{{ $email }}</a></td>
    </tr>
    <tr>
      <td style="padding:5px;font-weight:bold">Phone Number:</td>
      <td style="padding:5px">{{ $phone }}</td>
    </tr>
    <tr>
      <td style="padding:5px;font-weight:bold">cuisine:</td>
      <td style="padding:5px">{{ $cuisine }}</td>
    </tr>
    <tr>
      <td style="padding:5px;font-weight:bold">Address:</td>
      <td style="padding:5px">{{ $address }}</td>
    </tr>
    <tr>
      <td style="padding:5px;font-weight:bold">Post code :</td>
      <td style="padding:5px">{{ $pin_code }}</td>
    </tr>
    <tr>
      <td style="padding:5px;font-weight:bold">CreatedDate</td>
      <td style="padding:5px">{{ $current_date }}</td>
    </tr>
</tbody>
</table>