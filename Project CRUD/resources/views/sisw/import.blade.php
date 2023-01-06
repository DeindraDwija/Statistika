@extends('sisw.template')

@section('content')
<div>
    <div>
        <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold">
            Import Data Excel ke Database
        </h3>
    </div>
    
    <div>
        <form method="post" action="/siswa/import_excel" enctype="multipart/form-data">
            <div class="">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="px-2">
                        <div>
                            <label>Pilih file excel</label>
                        </div>
                        <div class="form-group" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <input type="file" name="file" required="required">
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center flex justify-center">
                <button type="submit" class=" bg-blue-500 hover:bg-blue-700 transition-colors text-white font-bold py-2 px-4 rounded flex items-center" onclick="return confirm('Import Data?')">
                    Import
                </button>
            </div>

           
        </form>
        <div class="p-4">
                <a href="{{ route('sisw.index')}}">
                    <button class=" bg-green-500 hover:bg-green-700 transition-colors text-white font-bold py-2 px-4 rounded float-right">
                        Kembali
                    </button>
                </a>
        </div>
    </div>
</div>


@endsection