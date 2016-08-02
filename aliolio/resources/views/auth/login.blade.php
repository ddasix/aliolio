@extends('layouts.master')

@section('title')
로그인
@stop

@section('header_js')
	<link href="../css/base.css" rel="stylesheet" type="text/css" />
@stop

@section('header')
	@include('assets.header_sub')
@stop

@section('header_menu')
	
@stop

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="pagewrap">
        {{ Form::open(['url'=>'/login','method'=>'post','id'=>'post_form'])  }}
            <div class="post_wrap">
                <p class="ask_product">이메일 주소를 입력해 주세요.
                    <div href="#" class="go_guide">
                        <p>
                            계정 이메일 주소를 입력해 주세요.<br />
                            계정이 없으신 분은 계정으로 사용할 이메일을 입력해 주세요.
                        </p>
                    </div>
                </p>
                <input name="email" type="text" id="code_input" placeholder="* 이메일 주소를 입력해 주세요." value="{{ old('email') }}" />
            </div>
            @if ($errors->has('email'))
                <div>
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                </div>
            @endif
            <input type="submit" name="next" class="next action-button" value="소셜 로그인" />
        {{ Form::close() }}
    </div>
@stop

@section('footer_js')
@stop