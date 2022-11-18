@extends('welcome')

@section('title')
    {{__('String or word count')}}
@endsection

@section('page-title')
    {{__('String or word count')}}
@endsection

@section('sohan-content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{route('user.string.count.page')}}" method="get" class="word_count_form">
                    <div class="row">
                        <x-flash-msg.success/>
                        <x-form-fields.text label="{{__('Your Sentence')}}" class="sentence" name="sentence" placeholder="{{__('Enter your sentence')}}" col="6"/>
                        <x-form-fields.text label="{{__('Find specific charecter / word')}}" class="charecter_or_word" name="charecter_or_word" placeholder="{{__('Enter desired charecter or word')}}" col="4"/>
                        <x-form-fields.submit-button class="btn btn-success submit_button" label="{{__('Find query')}}" col="2" group-class="mt-3"/>
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                @if(!empty(request()->get('charecter_or_word')))
                    <div class="alert alert-success charecter_word_msg_container">
                        @php
                            $times_singular_plural_con = $result > 1 ? 'times' : 'time';
                        @endphp
                        <h5 class="text-center"><strong> <span class="text-danger">{{request()->get('charecter_or_word')}}</span> {{ __(' found : ') }}</strong> ( {{'0'.$result}} {{$times_singular_plural_con}} ) </h5>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
           let form = $('.word_count_form');
           let sentence_value = form.find('input[name="sentence"]').val();
           let string_word_value = form.find('input[name="charecter_or_word"]').val();

                if(sentence_value == ''){
                    $('.sentence').attr('required',true);
                }else{
                    $('.sentence').attr('required',false);
                }


                if(string_word_value == ''){
                    $('.charecter_or_word').attr('required',true);
                }else{
                    $('.charecter_or_word').attr('required',false);
                }

            setTimeout(function(){
                $('.charecter_word_msg_container').hide(1000);
            },3000);


        });
    </script>
@endsection
