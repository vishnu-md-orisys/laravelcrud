<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Blog</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2 style="color:orange";>OriBlog</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('companies.create') }}"> Add blog</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table>
@foreach ($companies as $company)
<tr>
<td style="text-align:center; font-weight:bold";>{{ $company->title }}</td>
</tr>
<tr>
<td>{{ $company->content }}</td>
</tr>
<td>
<form action="{{ route('companies.destroy',$company->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $companies->links() !!}
</body>
</html>