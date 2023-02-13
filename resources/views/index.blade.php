@extends('layouts.main')

@section('container')


  @if ($message = Session::get('success'))
  <div class="alert alert-success d-flex justify-content-center" width="15" height="10" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
          {{$message}}
      </div>
  </div>
  @endif
  @if ($message = Session::get('edit'))
  <div class="alert alert-primary d-flex justify-content-center" width="15" height="10" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
          {{$message}}
      </div>
  </div>
  @endif
  @if ($message = Session::get('fail'))
  <div class="alert alert-danger d-flex justify-content-center" width="15" height="10" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
          {{$message}}
      </div>
  </div>
  @endif
  @if ($message = Session::get('lol'))
  <div class="alert alert-danger d-flex justify-content-center" width="15" height="10" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
          {{$message}}
      </div>
  </div>
  @endif
  @if ($message = Session::get('op'))
  <div class="alert alert-info d-flex justify-content-center" width="15" height="10" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
          {{$message}}
      </div>
  </div>
  @endif
  
  {{-- form --}}
  <div class="mt-3">
    <form action="{{ route('store') }}" method="POST">
      <div class="row mb-3">
        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-9">
          <input type="" class="form-control" name="Nama" id="inputEmail3" placeholder="Masukan Nama">
        </div>
      </div>
      <div class="row mb-3">
        <label for="Nis" class="col-sm-2 col-form-label">Nis</label>
        <div class="col-sm-9">
          <input type="" class="form-control" name="Nis" id="inputPassword3" maxlength="8" minlength="8" placeholder="Masukan Nis">
        </div>
      </div>
      <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label" name="Rayon">Rayon</label>
          <div class="col-sm-10">
              <select name="Rayon" id="">
                <option value="">Select</option>
                  @for ($i = 1; $i <= 5; $i++)
                      <option>Cia {{ $i }}</option>
                  @endfor
                  @for ($i = 1; $i <= 3; $i++)
                      <option>Cib {{ $i }}</option>
                  @endfor
                  @for ($i = 1; $i <= 7; $i++)
                      <option>Cic {{ $i }}</option>
                  @endfor
                  @for ($i = 1; $i <= 6 ; $i++)
                      <option>Cis {{ $i }}</option>
                  @endfor
                  @for ($i = 1; $i <= 2 ; $i++)
                      <option>Suk {{ $i }}</option>
                  @endfor
                  @for ($i = 1; $i <= 5 ; $i++)
                      <option>Taj {{ $i }}</option>
                  @endfor
                  @for ($i = 1; $i <= 4 ; $i++)
                      <option>Wik {{ $i }}</option>
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
    {{-- tabel --}}
    <table class="table table-bordered table table-striped table-hover mt-5 text-center table table-stripped">
      <tr>
        <th style="width: 50px">No</th>
        <th style="width: 50px;">Id</th>
        <th style="width: 100px;">Nama</th>
        <th style="width: 100px;">Nis</th>
        <th style="width: 100px;">Rayon</th>
        <th style="width: 100px;">Uang</th>
        <th style="width: 100px;">Action</th>
      </tr>
      <?php $i=1; ?>
      @foreach ($data as $datas)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$datas->id}}</td>
        <td>{{$datas->Nama}}</td>
        <td>{{$datas->Nis}}</td>
        <td>{{$datas->Rayon}}</td>
        <td>Rp. {{ number_format($datas->Uang,2,",",".") }}</td>
        <td>
          <form action="{{ route('deleteActivity', $datas->id) }}" method="POST">
              <a href="{{ route('edit', $datas->id) }}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
              <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
            </svg> Edit</a></a> 
          <a href=""></a> <button class="btn btn-danger">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
              </svg> Delete</button>
            @csrf
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection

