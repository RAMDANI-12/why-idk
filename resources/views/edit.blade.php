@extends('layouts.main')

@section('container')

<div class="mt-3">
<form action="{{ route('update',$data->id) }}" method="POST">
  <div class="row mb-3">
    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input value="{{ $data->Nama }}" type="text" class="form-control" name="Nama" id="inputEmail3" placeholder="Masukan Nama">
    </div>
  </div>
  <div class="row mb-3">
    <label for="Nis" class="col-sm-2 col-form-label">Nis</label>
    <div class="col-sm-10">
      <input value="{{ $data->Nis }}" type="text" class="form-control" name="Nis" id="inputPassword3" maxlength="8" minlength="8" placeholder="Masukan Nis">
    </div>
  </div>
  <div class="row mb-3">
      <label for="Uang" class="col-sm-2 col-form-label">Jumlah Uang</label>
      <div class="col-sm-10">
        <input value="{{ $data->Uang }}" type="number" class="form-control" name="Uang" id="inputPassword3" maxlength="8" minlength="8" placeholder="">
      </div>
    </div>
    <div class="row mb-3">
      <label for="Uang" class="col-sm-2 col-form-label">Metode</label>
      <div class="col-sm-10">
        <select name="action">
          <option selected hidden>Select</option>
          <option value="add">Add Money</option>
          <option value="take">Take Money</option>
        </select>
      </div>
    </div>
  <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label" name="Rayon">Rayon</label>
      <div class="col-sm-10">
          <select name="Rayon" id="" value="{{ $data->Rayon }}">
            <option selected>Select</option>
              @for ($i = 1; $i <= 5; $i++)
                  <option @if($data->Rayon == 'Cia '.$i) selected @endif>Cia {{ $i }}</option>
              @endfor
              @for ($i = 1; $i <= 3; $i++)
                  <option @if($data->Rayon == 'Cib '.$i) selected @endif>Cib {{ $i }}</option>
              @endfor
              @for ($i = 1; $i <= 7; $i++)
                  <option @if($data->Rayon == 'Cic '.$i) selected @endif>Cic {{ $i }}</option>
              @endfor
              @for ($i = 1; $i <= 6 ; $i++)
                  <option @if($data->Rayon == 'Cis '.$i) selected @endif>Cis {{ $i }}</option>
              @endfor
              @for ($i = 1; $i <= 5 ; $i++)
                  <option @if($data->Rayon == 'Cis '.$i) selected @endif>Taj {{ $i }}</option>
              @endfor
              @for ($i = 1; $i <= 2 ; $i++)
                  <option @if($data->Rayon == 'Cis '.$i) selected @endif>Suk {{ $i }}</option>
              @endfor
              @for ($i = 1; $i <= 4 ; $i++)
                  <option @if($data->Rayon == 'Cis '.$i) selected @endif>Wik {{ $i }}</option>
              @endfor
            </select>
      </div>
    </div>
    <div class="text-center">
      <button type="submit" class="text-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
        <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
      </svg> Kirim</button>
  </div>
  @csrf
</form>
</div>
@endsection