@extends('layouts.admin')

@section('content')
    {{-- TODO change this to componnent --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">

        <section class="hk-sec-wrapper mt-100">
            <div class="pull-right hk-sec-title">


            </div>
            <h5 class="hk-sec-title">ከቡድን መሪ በላይ ተወዳዳሪዎች </h5>


            <div class="row" id="search_list">
                <div class="col-sm">
                    <div class="table-wrap">
                     

                        <table id="datable_3" class="table table-hover table-bordered w-100 pb-30">
                                    <thead>
                                       
                                        <tr>
                                            <th>ተቁ</th>
                                            <th>ሙሉ ስም</th>
                                            <th>የስራ ክፍል</th>
                                            <th>የስራ መደብ</th>
                                            <th>ምርጫ</th>
                                            <th>ለትምህርት ዝግጅት የሚሰጥ ነጥብ (25%)</th>
                                            <th>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ (15%)</th>
                                            <th>ለውጤት ተኮር ምዘና (10%)</th>
                                            <th>የፈተና ውጤት (15%) </th>
                                            <th>አጠቃላይ ውጤት(65%)</th>
                                            <th>Decision</th>
                                            <th>Remark</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $count = 1; @endphp
                                        @foreach($groupedData as $position_id => $group)
                                        
                                            @foreach($group as $data)
                                            {{-- @if($data->form->position->position_type_id==1 ) --}}
                                                <tr>
                                                    <td>{{ $count++ }}</td>
                                                    <td>{{ $data->form->full_name }}</td>
                                                    <td> @if($data->source == 'first_choice')
                                                        {{$data->form->job_category->job_category}}
                                                        @elseif($data->source == 'second_choice')
                                                        {{ $data->form->jobcat2->job_category }} 
                                                         @endif
                                                    </td>

                                                  
                                                    <td> @if($data->source == 'first_choice')
                                                        {{$data->form->position->position}}
                                                        @elseif($data->source == 'second_choice')
                                                        {{ $data->form->choice2->position }} 
                                                         @endif
                                                    </td>
                                                    <td>
                                                        @if($data->source == 'first_choice')
                                                        1ኛ ምርጫ
                                                        @elseif($data->source == 'second_choice')
                                                        2ኛ ምርጫ
                                                        @endif
                                                    </td>
                                                    <td> @if($data->source == 'first_choice')
                                                        {{$data->performance}}
                                                        @elseif($data->source == 'second_choice')
                                                        {{ $data->performance }} 
                                                         @endif
                                                    </td>
                                                    <td> @if($data->source == 'first_choice')
                                                        {{$data->experience}}
                                                        @elseif($data->source == 'second_choice')
                                                        {{ $data->experience }} 
                                                         @endif
                                                    </td>
                                                    <td> @if($data->source == 'first_choice')
                                                        {{$data->resultbased}}
                                                        @elseif($data->source == 'second_choice')
                                                        {{ $data->resultbased }} 
                                                         @endif
                                                    </td>
                                                    <td> @if($data->source == 'first_choice')
                                                        {{$data->exam	}}
                                                        @elseif($data->source == 'second_choice')
                                                        {{ $data->exam	 }} 
                                                         @endif
                                                    </td>
                                                    <td> @if($data->source == 'first_choice')
                                                        {{$data->performance+$data->experience+$data->resultbased + $data->exam}}
                                                        @elseif($data->source == 'second_choice')
                                                        {{$data->performance+$data->experience+$data->resultbased + $data->exam}} 
                                                         @endif
                                                    </td>
                                                    <td> @if($data->source == 'first_choice')
                                                        {{ ($data->performance == NULL||$data->performance == 0||$data->experience == 0 || $data->experience == NULL) ? 'Failed' : 'Passed' }}
                                                        @elseif($data->source == 'second_choice')
                                                        {{ ($data->performance == NULL||$data->performance == 0||$data->experience == 0 ||  $data->experience == NULL) ? 'Failed' : 'Passed' }}
                                                         @endif
                                                    </td>
                                                    <td> @if($data->source == 'first_choice')
                                                        {{$data->remark	}}
                                                        @elseif($data->source == 'second_choice')
                                                        {{ $data->remark	 }} 
                                                         @endif
                                                    </td>

                                                </tr>
                                                {{-- @endif --}}
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                
                                    
                                    
                            
                        </table>


                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
