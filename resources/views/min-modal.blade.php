  
  
    <!-- Modal -->
    <div class="modal fade" id="kurang-{{$uang->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Kurangi Tabungan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
       

  
            <form action="{{ route('kurangTabungan', $uang->id)}}" method="POST">
              <div class="col-xs-2">
                <label for="ex1">Masukan Nominal</label>
                <input class="form-control" id="ex1" type="number" name="uangphp" >
              </div>
        </div>
      @csrf
          <div class="modal-footer">
            <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
            <button class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
    
      


    
      </form>
      </div>
    </div>