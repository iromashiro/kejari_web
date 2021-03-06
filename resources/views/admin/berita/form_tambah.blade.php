@extends('layouts.admin')

@section('js')
<script src="https://cdn.tiny.cloud/1/cjves1zm5h8aljomy6r6368i5h9xkp7xv648ddxb1uqjpie1/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>

<script>
    tinymce.init({
     selector: 'textarea#description',
    height : "720",

    plugins: 'image code print preview searchreplace autolink directionality  visualblocks visualchars fullscreen image link    table charmap hr pagebreak nonbreaking  toc insertdatetime advlist lists textcolor wordcount   imagetools    contextmenu colorpicker textpattern media ',
        toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat |undo redo | image code| link fontsizeselect  | ',
        image_class_list: [
    {title: 'fluid', value: 'img-raised rounded img-fluid'}
  ],
        images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        var token = '{{ csrf_token() }}';
        xhr.open('POST', '/tinymce');
        xhr.setRequestHeader("X-CSRF-Token", token);

        xhr.onload = function() {
        var json;

        if (xhr.status != 200) {
        failure('HTTP Error: ' + xhr.status);
        return;
        }

        json = JSON.parse(xhr.responseText);

        if (!json || typeof json.location != 'string') {
        failure('Invalid JSON: ' + xhr.responseText);
        return;
        }

        success(json.location);
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
        }
            });
</script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('konten')
<div class="col-md-12 ml-auto mr-auto">
    <div class="card card-signup">
        <h2 class="card-title text-center">Tambah Berita</h2>
        <div class="col-md-11 ml-auto mr-auto">
            <form action="{{ route('post.berita') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="{{ URL::asset('img/.jpg')}}" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <span class="btn btn-raised btn-round btn-default btn-file">
                                    <span class="fileinput-new">+</span>
                                    <span class="fileinput-exists">-</span>
                                    <input type="file" name="thumbnail" />
                                </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <input type="text" class="form-control" name="judul" placeholder="Judul">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <textarea id="description" name="isi" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <input type="text" class="form-control tagsinput" data-color="rose"
                            placeholder="Masukkan Tags Disini" name="tags">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group has-default bmd-form-group">
                        <select class="form-control" name="jenis_aktifitas">
                            <option value="berita">Berita</option>
                            <option value="kegiatan">Kegiatan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="form-group has-default bmd-form-group">
                        <button class="btn btn-info">Input</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
