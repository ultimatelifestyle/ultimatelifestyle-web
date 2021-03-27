@extends('layouts.app')

@section('content')
<div class="container">
  @include('layouts.inc.message')
                <div class="jumbotron">
                    <h1 class="display-4">Lifestyle Medicine Myanmar</h1>
                    <p class="lead">သင့်ကျန်းမာရေးကို သင့်လက်ထဲမှာ ထားရှိဖို့၊ ကျန်းမာရေးအသိပညာ လေ့လာပါ။</p>
                    <hr class="my-4">
                    <p>သင့်ကျန်းမာရေးအတွက် အရိုးသားဆုံး၊ တစ်သက်တာ အသုံး၀င်မည့် အသိပညာများ ပို့ချလျက်...</p>
                    <div class="mb-3"> Dr.Kyaw Soe & Sita </div>
                    <p class="lead">
                      @guest
                        <a class="btn btn-primary btn-lg" href="{{url('/register')}}" role="button">အကောင့်ဖွင့်ပါ</a>
                      @else    
                        <a class="btn btn-primary" href="{{url('/home')}}" role="button">Dashboard</a>
                        <a class="btn btn-primary" href="{{route('rec.create')}}" role="button">Add New Record</a>
                      @endguest
                    </p>
                </div>
                
</div>
@endsection
