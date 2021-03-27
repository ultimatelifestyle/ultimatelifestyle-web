@extends('layouts.app')

@section('content')
<div class="container">
  @include('layouts.inc.message')
                <ul class="list-group mb-3">
                    <li class="list-group-item text-center">
                        ယနေ့ {{now()->format('d-m-Y')}} မှတ်တမ်း
                    </li>
                    @if (!is_null($record))
                        @if (!is_null($record->fbs))
                            @if (!is_null($record->fbs))
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>နံနက်အစားမစားမီ ဆီးချို</span>
                                    <span>{{ $record->fbs }}</span>
                                </div>
                            </li> 
                            @endif
                            @if (!is_null($record->breakfast))
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>နံနက်စာ</span>
                                    <span>{{ $record->breakfast }}</span>
                                </div>
                            </li> 
                            @endif
                            @if (!is_null($record->nuts))
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>10:00 နာရီ အစေ့အစံ</span>
                                    <span>{{ $record->nuts }}</span>
                                </div>
                            </li> 
                            @endif
                            @if (!is_null($record->lunch))
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>နေ့လည်စာ</span>
                                    <span>{{ $record->lunch }}</span>
                                </div>
                            </li> 
                            @endif
                            @if (!is_null($record->rbs))
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>2:00 နာရီ ဆီးချို</span>
                                    <span>{{ $record->rbs }}</span>
                                </div>
                            </li> 
                            @endif
                            @if (!is_null($record->fruits))
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>3:00 နာရီ အသီး</span>
                                    <span>{{ $record->fruits }}</span>
                                </div>
                            </li> 
                            @endif
                            @if (!is_null($record->dinner))
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>ညနေစာ</span>
                                    <span>{{ $record->dinner }}</span>
                                </div>
                            </li> 
                            @endif
                            @if (!is_null($record->bodyWeight))
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>ကိုယ်အလေးချိန်</span>
                                    <span>{{ $record->bodyWeight }}</span>
                                </div>
                            </li> 
                            @endif

                            @if (!is_null($record->bloodPressure))
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>သွေးပေါင်ချိန်</span>
                                    <span>{{ $record->bloodPressure }}</span>
                                </div>
                            </li> 
                            @endif

                            @if (!is_null($record->heartRate))
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <span>နှလုံးခုန်နှုန်း</span>
                                    <span>{{ $record->heartRate }}</span>
                                </div>
                            </li> 
                            @endif
                            
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-secondary btn-sm" href="{{ route('rec.edit', $record->id) }}">မှတ်တမ်းထပ်ဖြည့်ရန်</a>
                                </div>
                            </li>
                        @endif
                    @else
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <p>မှတ်တမ်းမဖြည့်ရသေးပါ၊ မှတ်တမ်းဖြည့်ရန်...</p>
                                <a class="btn btn-primary btn-sm" href="{{ route('rec.create') }}">မှတ်တမ်းရေးမည်</a>
                            </div>
                        </li>
                    @endif

                </ul>

                <div class="jumbotron">
                  @if(!is_null($comment))
                    <p class="lead text-center">Dr.ကျော်စိုး ၏ မှတ်ချက် <span class="badge badge-secondary ml-4">{{ $comment->created_at->format('Y-m-d')}}</span></p>
                    <hr class="my-4">
                    <p class="lead">{{ $comment->doctorComment }}</p>
                  @else
                    <p class="lead text-center"> ညနေ 6:00 နာရီတွင် မှတ်ချက်ရေးပါမည်။</p>   
                  @endif
                  
                </div>

                @if (!is_null($med))
                  <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center ">
                        <p class="lead">လက်ရှိသောက်နေသည့် ဆေးများ<span class="badge badge-secondary ml-4">{{ $med->created_at->format('Y-m-d')}}</span></p>
                        <a type="button" class="btn btn-secondary btn-sm" href="{{route('med.edit', $med->id)}}">Edit</a>
                    </li>
                    <li class="list-group-item">{{ $med->noMed }}</li>
                        @if (!is_null($med->med1))
                            <li class="list-group-item">{{ $med->med1 }}</li> 
                        @endif
                        @if (!is_null($med->med2))
                            <li class="list-group-item">{{ $med->med2 }}</li> 
                        @endif
                        @if (!is_null($med->med3))
                            <li class="list-group-item">{{ $med->med3 }}</li> 
                        @endif
                        @if (!is_null($med->med4))
                            <li class="list-group-item">{{ $med->med4 }}</li> 
                        @endif
                        @if (!is_null($med->med5))
                            <li class="list-group-item">{{ $med->med5 }}</li> 
                        @endif
                        @if (!is_null($med->med6))
                            <li class="list-group-item">{{ $med->med6 }}</li> 
                        @endif
                        @if (!is_null($med->med7))
                            <li class="list-group-item">{{ $med->med7 }}</li> 
                        @endif
                        @if (!is_null($med->med8))
                            <li class="list-group-item">{{ $med->med8 }}</li> 
                        @endif
                        @if (!is_null($med->med9))
                            <li class="list-group-item">{{ $med->med9 }}</li> 
                        @endif
                        @if (!is_null($med->med10))
                            <li class="list-group-item">{{ $med->med10 }}</li> 
                        @endif
                        @if (!is_null($med->med11))
                            <li class="list-group-item">{{ $med->med11 }}</li> 
                        @endif
                        @if (!is_null($med->med12))
                            <li class="list-group-item">{{ $med->med12 }}</li> 
                        @endif
                        @if (!is_null($med->med13))
                            <li class="list-group-item">{{ $med->med2 }}</li> 
                        @endif
                        @if (!is_null($med->med14))
                            <li class="list-group-item">{{ $med->med14 }}</li> 
                        @endif
                        @if (!is_null($med->med15))
                            <li class="list-group-item">{{ $med->med15 }}</li> 
                        @endif
                        @if (!is_null($med->medFree))
                            <li class="list-group-item">{{ $med->medFree }}</li> 
                        @endif
                  </ul>
                @else
                  <ul class="list-group mb-3">
                    <li class="list-group-item active">သောက်ဆေးမှတ်တမ်းမရှိပါ</li>
                  </ul> 
                @endif
                


                 @if (is_null($nextTest))
                    <div class="alert alert-warning">
                        <strong>သွေးစစ်ဆေးမှုမှတ်တမ်းမရှိသေးပါ</strong>
                    </div>
                 @else
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                           <span>သွေးပြန်စစ်ရမည့် ရက်စွဲ</span> 
                          <span>{{ $nextTest->nextTest }}</span>
                        </li>
                      </ul>

                @endif
                
          
</div>
@endsection
