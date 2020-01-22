
@extends('layouts.layout')

@section('content')
        <section id="main">
                <div class="inner">

                <!-- One -->
                    <section id="one" class="wrapper style1">

                        <div class="image fit flush">
                            <img src="images/pic02.jpg" alt="" />
                        </div>
                        <header class="special"> 
                        <form action="{{route('contact.update', $contact->id)}}" method="post">
                            @csrf
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ old('name',$contact->name)}}" />
            				{!! $errors->first('name') !!}
                            <br/>

            				<input type="hidden" name="_method" value="put">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{old('email',$contact->email)}}"/>
            				{!! $errors->first('email') !!}
                            
                            <br/>
                            <label for="">Phone</label>
                            <input type="text" name="phone" value="{{ old('phone',$contact->phone)}}"/>
            				{!! $errors->first('phone') !!}

                            <br/>
                            <label for="">Message</label>
                            <textarea name="message" id="" cols="30" rows="10"> {{ old('message',$contact->message)}}</textarea>
            				{!! $errors->first('message') !!}

                            <br/>
                            <button type="submit"> Submit</button>
                        </form>
       </header>
   </section>
</div>
</section>


@endsection
