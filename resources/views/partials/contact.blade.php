
@extends('layouts.layout')

@section('content')
    <!-- Main -->
			<section id="main">
				<div class="inner">

				<!-- One -->
					<section id="one" class="wrapper style1">

						<div class="image fit flush">
							<img src="images/pic02.jpg" alt="" />
						</div>
						<header class="special"> 
							@if(Session::has('success'))
				        		{{ Session::get('success')}}
				        	@endif
							<h2>All Contacts List</h2>
							<table>
								<tr>
									<td>Name</td>
									<td>Email</td>
									<td>Phone</td>
									<td>Message</td>
									<td>Actions</td>
								</tr>
								@forelse($contacts as $contact)
								<tr>
									<td>{{$contact->name }}</td>
									<td>{{$contact->email }}</td>
									<td>{{$contact->phone }}</td>
									<td>{{$contact->message }}</td>
									<td>
										<a href="{{route('contact.edit',$contact->id)}}">Edit</a>
									<form method="post" action="{{route('contact.destroy', $contact->id)}}">
										@csrf
										<input type="hidden" name="_method" value="delete"><button type="submit">Delete</button></form>

									</td>
								</tr>
								@empty
								<tr>									
									<td colspan="5">no data</td>
								</tr>
								@endforelse
							</table>
							{!! $contacts->links()!!}
						</header>
						<div class="content">
							<div id="wrapper">
					        <div id="featured-wrapper">
					            <form action="{{route('contact.store')}}" method="post">
					                @csrf
					                <label for="">Name</label>
					                <input type="text" name="name"/>
									{!! $errors->first('name') !!}
					                <br/>


					                <label for="">Email</label>
					                <input type="text" name="email"/>
									{!! $errors->first('email') !!}
					                
					                <br/>
					                <label for="">Phone</label>
					                <input type="text" name="phone"/>
									{!! $errors->first('phone') !!}

					                <br/>
					                <label for="">Message</label>
					                <textarea name="message" id="" cols="30" rows="10"></textarea>
									{!! $errors->first('message') !!}

					                <br/>
					                <button type="submit"> Submit</button>
					            </form>
					        </div>
					    </div>
						</div>
					</section>

			
			
									
@endsection