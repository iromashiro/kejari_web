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
        xhr.open('POST', '/admin/mater/upload');
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
        <h2 class="card-title text-center">Index Menu Organisasi</h2>
        <div class="col-md-11 ml-auto mr-auto">
            <a href="{{ route('form-tambah.organisasi') }}" type="button" class="btn btn-info mb-5">Input Organisasi
                Baru</a>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama Menu</th>
                        <th>Isi</th>
                        <th class="text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($x as $y)
                    <tr>
                        <td class="text-center">{{ $loop->index +1 }}</td>
                        <td>{{ $y->name }}</td>
                        <td>{{ $y->isi }}</td>
                        <td class="td-actions text-right">
                            <a href="{{ route('form-edit.organisasi', $y->id) }}" type="button" rel="tooltip"
                                class="btn btn-info btn-just-icon btn-sm">
                                <i class="material-icons">person</i>
                            </a>
                            <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <form method="POST" action="{{route('delete.organisasi', $y->id)}}" class="d-inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" rel="tooltip"
                                    onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')"
                                    class="btn btn-danger btn-just-icon btn-sm">
                                    <i class="material-icons">close</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
