@extends('front.template')
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@section('main')
<div id="header" class="header header-show">
        <nav role="navigation" class="navbar navbar-white-border">
            <div class="main-container">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle"><span class="sr-only">Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a href="/" class="main-logo"><img width="87" src="http://localhost/pedia/public/img/img_auth/logo.png" alt="TerenuriPedia Logo"></a>
                </div>
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <div class="navbar-white">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="animate-link">Prezentare</a></li>
                            <li><a href="#">Povestea site-ului</a></li>
                            <li><a href="#">Abonamente</a></li>
                            <li><a href="#">Log in</a></li>
                            <li><a href="#" class="btn">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>


<div id="hero-section" class="fallback">
        <nav role="navigation" class="navbar navbar-default">
            <div ng-app="routific" ng-controller="LandingC as landing" class="main-container ng-scope">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse2" class="navbar-toggle"><span class="sr-only">Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a href="/" class="main-logo"><img width="87" src="http://localhost/pedia/public/img/img_auth/logo.png" alt="TerenuriPedia Logo"></a>
                </div>
                <div id="navbar-collapse2" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" class="animate-link">Prezentare</a></li>
                            <li><a href="#">Povestea site-ului</a></li>
                            <li><a href="#">Abonamente</a></li>
                            <li><a href="#">Log in</a></li>
                        <li><a href="#" class="btn-feel">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main-container">
            
           
               
                    
                      
		<div class="container-login">
			<div class="col-md-6 col-md-offset-3">
				@if(session()->has('error'))
					@include('partials/error', ['type' => 'danger', 'message' => session('error')])
				@endif	
	
				
				{!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}	
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<div class="row login-box">

					{!! Form::control('text', 6, 'log', $errors, trans('front/login.log')) !!}
					{!! Form::control('password', 6, 'password', $errors, trans('front/login.password')) !!}
					{!! Form::submit(trans('front/form.send'), ['col-lg-12']) !!}
					{!! Form::check('memory', trans('front/login.remind')) !!}
					{!! Form::text('address', '', ['class' => 'hpet']) !!}		  
					<div class="col-lg-12">					
						{!! link_to('password/email', trans('front/login.forget')) !!}
					</div>

				</div>
				
				{!! Form::close() !!}

			</div>
			</div>
	 
                   
               
           
        </div>
    </div>

<!-- main -->
<div id="video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-video">
            <div class="embed-container">
                <iframe id="ytplayer" frameborder="0" allowfullscreen="1" title="YouTube video player" width="640" height="360" src="./index_files/_rU9-OyIk-8.html"></iframe>
            </div>
        </div>
    </div>

<div id="customers" data-animate-down="header-show" data-animate-up="header-hide" class="waypoint">
        <div class="main-container text-center">
            <div class="label-claim">
                <div class="label-customers"><span>Pentru cei care cauta terenuri</span></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="tips">
                        <li>
                            <div class="item">
                                <a href="#">
                                    <div class="icon-F"> 
                                    <svg version="1.1" FILL="#428bca" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="32px" height="32px" viewBox="0 0 45.682 45.682" style="enable-background:new 0 0 45.682 45.682;"
	 xml:space="preserve">
<g>
	<g>
		<path d="M32.102,19.679c1.211-0.259,2.328-1.26,2.51-3.48c0.15-1.817-0.316-2.753-1.004-3.23c1.91-7.785-3.358-9.309-3.358-9.309
			s-3.937-6.679-11.618-1.992c-0.977,0.596-2.496,1.738-3.401,2.917c-1.453,1.546-2.442,4.059-2.597,8.129
			c-0.938,0.358-1.675,1.264-1.492,3.484c0.192,2.321,1.403,3.309,2.677,3.511c1.72,4.189,5.116,7.641,9.135,7.641
			C26.982,27.35,30.385,23.882,32.102,19.679z M22.954,25.397c-4.647,0-8.389-6.31-8.389-11.535c0-0.716,0.023-1.38,0.067-1.996
			c6.797,0.297,10.817-2.428,13.005-4.792c2.075,2.068,3.153,4.68,3.704,6.619c0,0.056,0.001,0.111,0.001,0.168
			C31.343,19.087,27.602,25.397,22.954,25.397z"/>
		<path d="M20.292,33.297l0.538-2.227c0.062-0.257,0.195-0.477,0.375-0.646c-0.055-0.039-0.109-0.08-0.162-0.123l-4.806-3.979
			l-2.925,0.684c-4.953,1.165-8.443,5.348-8.443,10.146v6.3c0,1.24,1.103,2.229,2.423,2.229h12.381l1.888-10.762
			C20.713,34.908,20.092,34.125,20.292,33.297z"/>
		<path d="M32.42,27.006l-2.885-0.684l-4.801,3.979c-0.053,0.043-0.105,0.084-0.16,0.123c0.181,0.169,0.314,0.389,0.377,0.646
			l0.537,2.227c0.201,0.827-0.42,1.611-1.269,1.623l1.888,10.762h12.381c1.32,0,2.324-0.988,2.324-2.229v-6.3
			C40.814,32.354,37.373,28.171,32.42,27.006z"/>
	</g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
                                    </div>
                                    <label>Proprietari</label>
                                </a>
                            </div>
                        </li>  
                        <li>
                            <div class="item">
                                <a href="#">
                                <div class="icon-f">
                                    <svg version="1.1" fill="#DB211D" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="32px" height="32px" viewBox="0 0 47.001 47.001" style="enable-background:new 0 0 47.001 47.001;"
	 xml:space="preserve">
<g>
	<g id="Layer_1_78_">
		<g>
			<path d="M44.845,42.718H2.136C0.956,42.718,0,43.674,0,44.855c0,1.179,0.956,2.135,2.136,2.135h42.708
				c1.18,0,2.136-0.956,2.136-2.135C46.979,43.674,46.023,42.718,44.845,42.718z"/>
			<path d="M4.805,37.165c-1.18,0-2.136,0.956-2.136,2.136s0.956,2.137,2.136,2.137h37.37c1.18,0,2.136-0.957,2.136-2.137
				s-0.956-2.136-2.136-2.136h-0.533V17.945h0.533c0.591,0,1.067-0.478,1.067-1.067s-0.478-1.067-1.067-1.067H4.805
				c-0.59,0-1.067,0.478-1.067,1.067s0.478,1.067,1.067,1.067h0.534v19.219H4.805z M37.37,17.945v19.219h-6.406V17.945H37.37z
				 M26.692,17.945v19.219h-6.406V17.945H26.692z M9.609,17.945h6.406v19.219H9.609V17.945z"/>
			<path d="M2.136,13.891h42.708c0.007,0,0.015,0,0.021,0c1.181,0,2.136-0.956,2.136-2.136c0-0.938-0.604-1.733-1.443-2.021
				l-21.19-9.535c-0.557-0.25-1.194-0.25-1.752,0L1.26,9.808c-0.919,0.414-1.424,1.412-1.212,2.396
				C0.259,13.188,1.129,13.891,2.136,13.891z"/>
		</g>
	</g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
                                    </div>
                                <label>Banci</label>
                                </a>    
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <a href="#">
                                <div class="icon-f">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="32px" height="32px" fill="#FFA013" viewBox="0 0 47.001 47.001" style="enable-background:new 0 0 47.001 47.001;"
	 xml:space="preserve">
<g>
	<g id="Layer_1_120_">
		<g>
			<g>
				<path d="M31.736,10.307c-0.111-0.112-0.249-0.193-0.398-0.24l-8.975-2.818c-3.589-1.127-5.924,0.839-6.553,1.47
					c-0.367,0.367-0.648,0.754-0.792,1.091l-3.998,9.404c-0.229,0.538-0.151,1.255,0.208,1.97c0.514,1.021,1.44,1.757,2.547,2.022
					c1.239,0.297,2.524-0.106,3.53-1.111c0.263-0.263,0.487-0.553,0.619-0.799l1.344-2.493c0.221-0.413,0.542-0.841,0.88-1.179
					c1.153-1.154,1.701-0.626,1.934-0.402c2.011,1.941,12.554,12.529,12.554,12.529c0.375,0.375,0.297,1.086-0.172,1.554
					c-0.468,0.467-1.18,0.547-1.554,0.174l-2.962-2.961c-0.382-0.383-0.998-0.383-1.38,0c-0.382,0.379-0.382,0.998,0,1.379
					l2.962,2.963c0.374,0.373,0.296,1.084-0.172,1.551c-0.468,0.469-1.181,0.547-1.553,0.174l-2.963-2.961
					c-0.382-0.382-1-0.382-1.38,0c-0.382,0.379-0.382,0.998,0,1.38l2.962,2.962c0.374,0.374,0.293,1.085-0.174,1.553
					c-0.467,0.467-1.178,0.547-1.553,0.172l-2.962-2.961c-0.38-0.381-0.999-0.381-1.38,0c-0.38,0.381-0.38,1,0,1.379l2.962,2.963
					c0.375,0.375,0.295,1.086-0.172,1.554c-0.47,0.468-1.181,0.547-1.554,0.173l-3.606-3.609c0.515-0.774,0.375-1.897-0.389-2.664
					c-0.856-0.855-2.173-0.934-2.935-0.17c0.762-0.763,0.687-2.078-0.171-2.935c-0.858-0.856-2.172-0.935-2.934-0.173
					c0.762-0.762,0.685-2.076-0.174-2.932c-0.856-0.858-2.17-0.936-2.934-0.174c0.764-0.762,0.685-2.076-0.172-2.935
					c-0.802-0.802-1.997-0.911-2.774-0.3l-5.839-5.839c-0.381-0.382-1-0.382-1.381,0c-0.38,0.38-0.38,0.999,0,1.381l5.824,5.823
					l-1.727,1.727c-0.762,0.761-0.685,2.075,0.174,2.934c0.856,0.856,2.17,0.935,2.933,0.172c-0.763,0.763-0.685,2.076,0.173,2.934
					c0.856,0.855,2.171,0.936,2.934,0.173c-0.763,0.763-0.686,2.076,0.172,2.933c0.858,0.858,2.172,0.936,2.934,0.174
					c-0.762,0.761-0.685,2.074,0.173,2.933c0.857,0.856,2.17,0.935,2.934,0.172l1.824-1.823l3.581,3.58
					c1.143,1.143,3.076,1.063,4.314-0.173c0.603-0.603,0.925-1.373,0.97-2.135c0.762-0.045,1.533-0.368,2.135-0.972
					c0.604-0.603,0.928-1.373,0.974-2.135c0.761-0.045,1.529-0.367,2.135-0.971c0.603-0.604,0.926-1.373,0.97-2.136
					c0.763-0.044,1.533-0.366,2.137-0.972c1.236-1.236,1.312-3.172,0.172-4.313l-1.51-1.511l6.2-6.199
					c0.381-0.38,0.381-0.999,0-1.38L31.736,10.307z"/>
			</g>
			<g>
				<path d="M46.43,12.489l-7.901-7.901c-0.762-0.763-1.999-0.763-2.762,0l-2.762,2.76c-0.762,0.762-0.762,1.999,0,2.761
					l7.902,7.903c0.763,0.762,2,0.762,2.762,0l2.761-2.761C47.191,14.488,47.191,13.251,46.43,12.489z M42.283,16.513
					c-0.884,0-1.602-0.717-1.602-1.602c0-0.885,0.718-1.603,1.602-1.603c0.885,0,1.603,0.717,1.603,1.603
					C43.885,15.795,43.168,16.513,42.283,16.513z"/>
			</g>
		</g>
	</g>
</g>
<g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
                                </div>
                                <label>Agentii</label>
                                </a>    
                            </div>

                        </li>
                        <li>
                            <div class="item">
                                <a href="#">
                                <div class="icon-f">
                          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="32px" height="32px" fill="#19B83B" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
<g>
	<path d="M22.07,5.458V1.435L16.175,0.01V0l-0.02,0.005L16.137,0v0.01L9.956,1.492v4.052L8.275,5.865v25.203l7.9,0.932l7.55-0.896
		V5.777L22.07,5.458z M9.135,7.273l5.833-1.003v1.254l-5.833,0.92V7.273z M9.135,9.662l5.833-0.834v1.254l-5.833,0.751V9.662z
		 M9.122,12.09l5.831-0.663v1.254l-5.831,0.58V12.09z M9.122,14.479l5.831-0.494v1.254l-5.831,0.41V14.479z M14.953,26.031
		l-5.831-0.305v-1.17l5.831,0.221V26.031z M14.953,23.475L9.122,23.34v-1.171l5.831,0.051V23.475z M14.968,20.67l-5.833,0.053
		v-1.172l5.833-0.135V20.67z M14.968,18.111l-5.833,0.222v-1.171l5.833-0.305V18.111z M17.378,6.332l5.578,0.963v1.203l-5.578-0.88
		V6.332z M22.97,9.675v1.203l-5.576-0.719V8.874L22.97,9.675z M17.343,11.557l5.582,0.63v1.204l-5.582-0.548V11.557z M17.36,14.099
		l5.581,0.468v1.204l-5.581-0.386V14.099z M22.97,17.218v1.203l-5.576-0.206V16.93L22.97,17.218z M17.394,22.249l5.576-0.052V23.4
		l-5.576,0.134V22.249z M22.985,25.777l-5.573,0.295v-1.285l5.573-0.213V25.777z M22.985,20.799l-5.573-0.045V19.47l5.573,0.125
		V20.799z"/>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>      
                                </div>
                                <label>Business</label>
                                </a>    
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <a href="#">
                                <div class="icon-f">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="32px" height="32px" fill="#871CAA" viewBox="0 0 47.001 47" style="enable-background:new 0 0 47.001 47;" xml:space="preserve">
<g>
	<g id="Layer_1_43_">
		<g>
			<path d="M44.863,10.771h-9.998c1.373,1.227,2.547,2.665,3.467,4.272h6.531c1.18,0,2.137-0.956,2.137-2.136
				C47,11.728,46.043,10.771,44.863,10.771z"/>
			<path d="M44.863,16.158h-5.954c0.642,1.34,1.116,2.77,1.391,4.272h4.563c1.18,0,2.137-0.956,2.137-2.136
				S46.043,16.158,44.863,16.158z"/>
			<path d="M44.863,5.386H29.048c-0.921,0-1.696,0.584-1.998,1.398c2.365,0.502,4.541,1.504,6.437,2.874h11.377
				c1.181,0,2.138-0.956,2.138-2.136S46.043,5.386,44.863,5.386z"/>
			<path d="M29.048,4.272h15.815c1.18,0,2.137-0.956,2.137-2.136C47,0.957,46.043,0,44.863,0H29.048
				c-1.181,0-2.137,0.957-2.137,2.137C26.911,3.317,27.867,4.272,29.048,4.272z"/>
			<path d="M44.863,21.542h-4.393c0.073,0.644,0.12,1.295,0.12,1.958c0,0.786-0.071,1.557-0.175,2.314h4.447
				c1.18,0,2.137-0.957,2.137-2.137S46.043,21.542,44.863,21.542z"/>
			<path d="M44.863,26.928h-4.619c-0.309,1.51-0.829,2.938-1.508,4.272h6.127c1.18,0,2.137-0.956,2.137-2.136
				C47,27.884,46.043,26.928,44.863,26.928z"/>
			<path d="M44.863,32.313h-6.748c-0.979,1.617-2.204,3.063-3.645,4.272h10.393c1.18,0,2.137-0.956,2.137-2.136
				S46.043,32.313,44.863,32.313z"/>
			<path d="M2.137,25.458H6.53c-0.074-0.644-0.121-1.295-0.121-1.958c0-0.786,0.072-1.556,0.175-2.314H2.137
				C0.957,21.187,0,22.143,0,23.323C0,24.502,0.957,25.458,2.137,25.458z"/>
			<path d="M2.137,30.844h5.954c-0.641-1.34-1.116-2.77-1.391-4.271H2.137C0.957,26.573,0,27.528,0,28.708
				S0.957,30.844,2.137,30.844z"/>
			<path d="M2.137,20.073h4.619c0.308-1.509,0.829-2.938,1.507-4.272H2.137C0.957,15.8,0,16.756,0,17.937S0.957,20.073,2.137,20.073
				z"/>
			<path d="M2.137,14.688h6.748c0.979-1.616,2.204-3.063,3.644-4.272H2.137C0.957,10.416,0,11.372,0,12.551
				C0,13.731,0.957,14.688,2.137,14.688z"/>
			<path d="M2.137,36.229h9.998c-1.373-1.227-2.547-2.664-3.467-4.271H2.137C0.957,31.958,0,32.914,0,34.093
				C0,35.274,0.957,36.229,2.137,36.229z"/>
			<path d="M2.137,41.615h15.815c0.921,0,1.697-0.584,1.998-1.398c-2.365-0.502-4.541-1.504-6.436-2.874H2.137
				C0.957,37.342,0,38.298,0,39.479C0,40.659,0.957,41.615,2.137,41.615z"/>
			<path d="M17.952,42.729H2.137C0.957,42.729,0,43.684,0,44.865C0,46.044,0.957,47,2.137,47h15.815
				c1.181,0,2.137-0.957,2.137-2.137S19.133,42.729,17.952,42.729z"/>
			<path d="M23.5,8.546c-8.246,0-14.954,6.708-14.954,14.954S15.254,38.455,23.5,38.455S38.454,31.747,38.454,23.5
				S31.746,8.546,23.5,8.546z M23.5,34.182c-5.89,0-10.682-4.791-10.682-10.682c0-5.89,4.792-10.682,10.682-10.682
				c5.891,0,10.682,4.792,10.682,10.682C34.182,29.391,29.391,34.182,23.5,34.182z"/>
			<path d="M24.123,22.057v-3.692c2.15,0.04,2.134,2.118,3.396,2.118c0.66,0,1.227-0.445,1.227-1.203
				c0-1.904-3.109-2.855-4.623-2.895V15.35c0-0.331-0.254-0.661-0.586-0.661c-0.328,0-0.579,0.33-0.579,0.661v1.035
				c-2.428,0.075-4.624,1.438-4.624,4.078c0,2.157,1.744,3.42,4.624,3.943v4.061c-3.229-0.136-1.537-2.817-3.713-2.817
				c-0.734,0-1.203,0.449-1.203,1.224c0,1.536,1.633,3.498,4.916,3.578v1.202c0,0.33,0.251,0.66,0.579,0.66
				c0.332,0,0.586-0.33,0.586-0.66v-1.202c2.893-0.175,4.835-1.498,4.835-4.101C28.958,23.358,26.688,22.602,24.123,22.057z
				 M22.958,21.844c-1.457-0.293-2.18-0.854-2.18-1.828c0-0.834,0.855-1.612,2.18-1.652V21.844z M24.123,28.466v-3.846
				c1.046,0.231,2.391,0.62,2.391,1.94C26.514,27.842,25.287,28.389,24.123,28.466z"/>
		</g>
	</g>
</g>
<g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
                                </div>
                                <label>Licitatii</label>
                                </a>
                            </div>
                        </li>    
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<div id="demo" class="fallback">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <h2>Gaseste terenul perfect</h2>
                <p class="intro">in seconds.</p>
            </div>
        </div>
        <div class="main-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="demo-list-large-screen">
                            <ul class="demo-list tabs">
                                <li role="presentation" class="active">
                                    <a data-target="one" href="#tab1">
                                        <div class="number">1</div>
                                        <h5>Filtreaza</h5></a>
                                </li>
                                <li role="presentation">
                                    <a data-target="two" href="#tab2">
                                        <div class="number">2</div>
                                        <h5>Verifica afisarile</h5></a>
                                </li>
                                <li role="presentation" class="highlight">
                                    <a data-target="three"  href="#tab3">
                                        <div class="number">3</div>
                                        <h5>Acceseaza un teren</h5></a>
                                </li>
                                <li role="presentation">
                                    <a data-target="four"  href="#tab4">
                                        <div class="number">4</div>
                                        <h5>Contacteaza</h5></a>
                                </li>
                                <li role="presentation">
                                    <a data-target="five"  href="#tab5">
                                        <div class="number">5</div>
                                        <h5>Alte servicii</h5></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            <div class="tab-content">
                    <div id="one" class="container">
                                <div class="col-md-3">
                                    <div class="demo-mobile-container">
                                        <p>Lorem ipsum generatoer.
                                            <br>
                                            <br>Lorem ipsum generatoer.Lorem ipsum generatoer.Lorem ipsum generatoer.</p>
                                    </div>
                                    <div class="demo-trial"><a href="#" class="btn btn-secondary">Inscrie-te &nbsp;<span class="chevron-right">❯</span></a></div>
                                </div>
                                <div class="col-md-8 col-md-offset-1">
                                    <div class="demo-mobile-container">
                                        <div class="device-browser"><img src="http://localhost/pedia/public/img/tab1.jpg" alt=" " class="device-content">
                                            <div class="device-details"></div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    
                    <div id="two" class="container">
                                <div class="col-md-3">
                                    <div class="demo-mobile-container">
                                        <p>Verifica afisarileVerifica afisarileVerifica afisarileVerifica afisarileVerifica afisarile.</p>
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-offset-1">
                                    <div class="demo-mobile-container">
                                        <div class="device-browser"><img src="http://localhost/pedia/public/img/tab2.jpg" alt=" " class="device-content">
                                            <div class="device-details"></div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                
                    <div id="three" class="container">
                                <div class="col-md-3">
                                    <div class="demo-mobile-container">
                                        <p>Acceseaza un terenAcceseaza un terenAcceseaza un terenAcceseaza un terenAcceseaza un teren</p>
                                    </div>
                                    <div class="demo-trial"><a href="#" class="btn btn-secondary">Creeaza un cont &nbsp;<span class="chevron-right">❯</span></a></div>
                                </div>
                                <div class="col-md-8 col-md-offset-1">
                                    <div class="demo-mobile-container">
                                        <div class="device-browser margin-top-fix"><img src="http://localhost/pedia/public/img/tab3.jpg" alt=" " class="device-content">
                                            <div class="device-details"></div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                
                    <div id="four" class="container">
                                <div class="col-md-3">
                                    <div class="demo-mobile-container">
                                        <p>Contacteaza proprietarulContacteaza proprietarulContacteaza proprietarulContacteaza proprietarulContacteaza proprietarul.</p>
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-offset-1">
                                    <div class="demo-mobile-container">
                                        <div class="device-browser"><img src="http://localhost/pedia/public/img/tab4.jpg" alt="Adjust routes App screen" class="device-content">
                                            <div class="device-details"></div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                
                    <div id="five" class="device-mobile container">
                                <div class="col-md-3">
                                    <div class="demo-mobile-container">
                                        <p>Alte serviciiAlte serviciiAlte serviciiAlte serviciiAlte serviciiAlte serviciiAlte servicii.</p>
                                    </div>
                                    <div class="demo-trial"><a href="#" class="btn btn-secondary">Cont Client &nbsp;<span class="chevron-right">❯</span></a></div>
                                </div>
                                <div class="col-md-8">
                                    <div class="demo-mobile-container demo-picture-content">
                                        <div class="phone">
                                            <div class="camera"></div>
                                            <div class="speaker"></div>
                                            <div class="screen"><img src="http://localhost/pedia/public/img/tab5.jpg" alt=" " class="device-content"></div>
                                            <div class="home-button"></div>
                                        </div>
                                        <div class="phone smaller-phone">
                                            <div class="camera"></div>
                                            <div class="speaker"></div>
                                            <div class="screen"><img src="http://localhost/pedia/public/img/tab6.jpg" alt=" " class="device-content"></div>
                                            <div class="home-button"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                
            </div>
        </div>
    </div>



    <div id="features">
        <div class="main-container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h2>Cum se procedeaza</h2>
                    <p class="intro">Faci un cont </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 switch-right">
                    <div class="icon-box"><img src="path-ad17cb8d.svg" alt="More efficient routes, save money, save gas" class="icon"></div>
                </div>
                <div class="col-md-6 text">
                    <h3>Cauta terenule tau</h3>
                    <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p>
                </div>
            </div>
            <div class="line blu-line"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box"><img src="./index_files/clock-4d0ae4ce.svg" alt="Automate routing, save time" class="icon"></div>
                </div>
                <div class="col-md-6 text">
                    <h3>Contacteaza proprietarul</h3>
                    <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p>
                </div>
            </div>
            <div class="line margin-yellow yellow-line"></div>
            <div class="row">
                <div class="col-md-6 switch-right">
                    <div class="icon-box"><img src="./index_files/calc-816a9cec.svg" alt="Powerful API for simple integration" class="icon icon-smaller"></div>
                </div>
                <div class="col-md-6 text">
                    <h3>cumparator / vazator</h3>
                    <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p>
                </div>
            </div>
            <div class="line blu-line"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box"><img src="./index_files/up-0e7f78ae.svg" alt="Timely deliveries, scale your business, bespoke service" class="icon"></div>
                </div>
                <div class="col-md-6 text">
                    <h3>Urmareste piata</h3>
                    <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</p>
                </div>
            </div>
        </div>
    </div>
    <to-signup source="footer" class="ng-isolate-scope">
        <div class="signup-section">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center">
                    <h3>7-zile gratuit</h3>
                    <p>Nu dureaza mai mult de 1 minut </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-5 text-center"><a href="" class="btn btn-secondary btn-block">Inscrie-te</a></div>
            </div>
        </div>
    </to-signup>
    <footer>
        <div id="list">
            <div class="main-container">
                <div class="techstars">
                    <a href="#"><img src="./index_files/logo.png" alt="logo">
                    </a>
                </div>
                <div class="row margin-top-giga">
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <ul class="footer-list">
                            <h5>TerenuriPedia</h5>
                            <div class="map-site">
                                <li><a href="#">Acasa</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="h#">Preturi</a></li>
                            </div>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <ul class="footer-list">
                            <h5>Despre noi</h5>
                            <div class="map-site">
                                <li><a href="#">Despre noi</a></li>
                                <li><a href="#">Blog</a></li>
                            </div>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2 col-md-offset-4">
                        <ul class="footer-list">
                            <h5>Suport</h5>
                            <div class="map-site">
                                <li class="contact-link"><a href="#">Contact</a></li>
                                <li><a href="#">Termeni si Conditii</a></li>
                                <li><a href="#">Politica de Confidentialitate</a></li>
                            </div>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <ul class="footer-list">
                            <h5>Social</h5>
                            <div class="map-site">
                                <li><a href="#" target="_blank">Twitter</a></li>
                                <li><a href="#" target="_blank">Facebook</a></li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="copyright">
                        <label>Copyright © 2015</label>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 </div>
<script>
jQuery(document).ready(function ($) {

    $('.container').hide();
    $('.demo-list li a').click(function(){
        var target = "#" + $(this).data("target");
        $(".container").not(target).hide();
        $(target).show();
    });

});
</script>
@stop
