<div class="form-group{!!$feedback ? ' has-' . $feedback : ''!!}">
    <label for="{!!$name!!}">{!!$caption!!}</label>
    <div style="clear:both;"></div>
    <input id="{!!$name!!}" type="file" />
    @if($help)
        <p class="help-block">{!!$help!!}</p>
    @endif
</div>
@section('custom-scripts')
@parent
<script type="text/javascript">
    var upload_document = $("#{!! $name !!}").fileinput({
        'previewClass'    : 'one-file',
        'previewSettings' :
        {
            image:  {width: "auto", height: "160px"},
            html:   {width: "auto", height: "160px"},
            text:   {width: "auto", height: "160px"},
            video:  {width: "auto", height: "160px"},
            audio:  {width: "auto", height: "80px"},
            flash:  {width: "auto", height: "160px"},
            object: {width: "auto", height: "160px"},
            other:  {width: "auto", height: "160px"}
        },
        'dropZoneEnabled' : true,
        'browseLabel'     : 'Alege fişier',
        'removeLabel'     : 'Şterge selecţia',
        'uploadLabel'     : 'Încarcă fişierul',
        'uploadAsync'     : false,
        'fileActionSettings' :
        {
            'removeTitle' : 'Şterge selecţia',
            'uploadTitle' : 'Încarcă fişierul',
            'indicatorNewTitle' : 'Fişierul nu este încărcat'
        },
        initialPreview: [],
    });

    upload_document.on('fileuploaded', function(event, data, previewId, index){
//        $("#file-document").fileinput('clear');
        console.log(data)
        document.modificari = true;
        var file_name = data.files[0].name;
        var extention = file_name.split('.')[1];
        var file_name = file_name.split('.')[0];
        var MyDate = new PiDate();
        var MyDateString;
        console.log(MyDateString);


        //MyDate.setDate(MyDate.getDate() + 20);

        MyDateString =  MyDate.getFullYear() + '-' + ('0' + (MyDate.getMonth()+1)).slice(-2)   + '-' + ('0' + MyDate.getDate()).slice(-2) ;
    });
</script>
@stop