
<div class="row">

<!-- <legend> Declined Requests </legend> -->

<div class="row">
              <table>
                <thead>
                  <tr>
                    <th style="width:100%"><legend> Declined Requests </legend> </th>
<th><a href="/zo/qo" class="btn btn-primary" style="align:Right">Export to Excel</a></th>
</tr>

</thead>
</table>
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Transaction ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Description</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Reason</th>


    </tr>
  </thead>
  <tbody>
    @if(count($articles)>0)
      @foreach($articles as $article)

      <td> {{ $article->booking_id}}</td>
      <td>{{$article->user_id}}</td>
      <td>{{$article->product_id}}</td>
      <td>welcome</td>
      <td>{{$article->booking_reason}}</td>
      <td>{{$article->start_date}}</td>
      <td>{{$article->end_date}}</td>
      <td>{{$article->reject_comment}}</td>


    </tr>
    @endforeach
     @endif
    </tbody>
</table>
<!-- <a href="zo/qo" class="btn btn-primary">Export to Excel</a> -->
      </div>
