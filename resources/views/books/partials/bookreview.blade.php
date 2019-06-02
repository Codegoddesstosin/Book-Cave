
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Give your Book ratings!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="item-wrapper">
            <div  id="app">
            <star-rating>
            </star-rating>
            </div>
            <div  id="app">
            <Ratings
            :Rating="{{$book}}"
            url="{{route('review.store')}}"
            >
            </Ratings>
            </div>
      </div>

      <form action="/review" method="POST">
                        {{  csrf_field() }} 
        
                                    <div class="form-body">
                                            
                                            <div class="col-md-4">
                                                <div class="form-group has-danger">
                                                        <select name="rating" class="form-control" id="sel1" required>
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                          <option value="4">4</option>
                                                          <option value="5">5</option>
                                                        </select>
                                                      </div>

                                            </div>
                                            
                                        </div>
                                           
                                        <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <input type="hidden" name="book_id" value="{{$book->_id}}" class="form-control form-control-danger" placeholder="" required>
                                                    <small class="form-control-feedback">  </small> </div>
                                            </div>


                                             <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Spill it all! </label>
                                                    <input type="text" name="description" class="form-control form-control-danger" placeholder="" required>
                                                    <small class="form-control-feedback">  </small> </div>
                                            </div>

                                  

                                            <div class="form-actions">
                                        <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
                                          
                                    </div>
                                    </div> 
                                </form>
        </div>
      </div>
    </div>
  </div>
</div>
        
<script src="https://unpkg.com/vue-star-rating/dist/star-rating.min.js"></script>










