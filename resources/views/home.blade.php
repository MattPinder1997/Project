@extends('layouts.app')
@extends('layouts.home')

<style scoped>
  .fa {
    font-size: 30px;
  }

  th,
  td {
    border-right: 1px solid #fff;
    text-align: center;
  }

  .fa-eye {
    margin-right: 2px;
    cursor: pointer;
  }

  .fa-copy {
    margin-left: 2px;
    cursor: pointer;
  }
</style>

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">

    </div>
  </div>

  {{-- Add search bar here --}}


  <div class="row justify-content-space-around">
    <button class="btn btn-outline-dark" onclick="location.href='/add'">+ Add Item</button>
  </div>

  <div class="row justify-content-center">

    <table class="table table-bordered">
      <tr>
        <th>Website</th>
        <th>URL</th>
        <th>Username</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>

      {{-- Display login details in table --}}
      @foreach (Auth::user()->$passwords as $row)
      <tr>
        <td>{{$row['website']}}</td>
        <td>{{$row['url']}}</td>
        <td>{{$row['username']}}</td>
        <td>{{$row['password']}}</td>
        <td><i class="fa fa-eye"></i><i class="fa fa-copy" onclick="copy()"></i></td>
      </tr>
      @endforeach
    </table>

  </div>
</div>

{{-- <script>
  // Function to copy password to clipboard
  function copy() {
        // Get text in td tag
        var copyText = document.getElementsByName("td");

        // Select text field
        copy.select();
        copy.setSelectionRange(0, 99999); 

        // Copy text in textbox
        document.execCommand("copy");
    }
</script> --}}

@endsection