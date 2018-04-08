@extends('layouts.app')
@section('content')

</br>


<div class="container">
     <div class="row">
       <legend> Pending Requests </legend>
   <table class="table table-hover">
     <thead>
       <tr>
         <th scope="col">Booking_ID</th>
         <th scope="col">Product_ID</th>
         <th scope="col">Product_Name</th>
         <th scope="col">Booking Reason</th>
         <th scope="col">Booking Reason</th>
         <th scope="col">Start_Date</th>
         <th scope="col">End Date</th>
         <th scope="col">Booking_Status</th>
       </tr>
     </thead>
     <tbody>
       <tr>

         <td>Column content</td>
         <td>Column content</td>
         <td>Column content</td>
         <td>Column content</td>
         <td>Column content</td>
         <td>Column content</td>
         <td>Column content</td>
         <td>Column content</td>
       </tr>

     </tbody>
   </table>

</div>
</div>

<div class="container">
 <div class="row">
   <legend> Approved Requests </legend>
<table class="table table-hover">
 <thead>
   <tr>
     <th scope="col">Booking_ID</th>
     <th scope="col">Product_ID</th>
     <th scope="col">Product_Name</th>
     <th scope="col">Booking Reason</th>

     <th scope="col">Start_Date</th>
     <th scope="col">End Date</th>
     <th scope="col">Booking_Status</th>
     <th scope="col">Return_Date</th>
   </tr>
 </thead>
 <tbody>
   <tr>
     <td>Column content</td>
     <td>Column content</td>
     <td>Column content</td>
     <td>Column content</td>

     <td>Column content</td>
     <td>Column content</td>
     <td>Column content</td>
     <td>Column content</td>
   </tr>

 </tbody>
</table>

</div>
</div>

<div class="container">
 <div class="row">
   <legend> Declined Requests </legend>
<table class="table table-hover">
 <thead>
   <tr>
     <th scope="col">Booking_ID</th>
     <th scope="col">Product_ID</th>
     <th scope="col">Product_Name</th>
     <th scope="col">Booking Reason</th>

     <th scope="col">Start_Date</th>
     <th scope="col">End Date</th>
     <th scope="col">Booking_Status</th>
     <th scope="col">Return_Date</th>
     <th scope="col">Reject_Comment</th>
   </tr>
 </thead>
 <tbody>
   <tr>
     <td>Column content</td>
     <td>Column content</td>
     <td>Column content</td>
     <td>Column content</td>
     <td>Column content</td>
     <td>Column content</td>
     <td>Column content</td>
     <td>Column content</td>
     <td>Column content</td>
   </tr>

 </tbody>
</table>

</div>
</div>

</br>




@endsection
