


<div class="modal fade modal-chi" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" >
                  <div class="modal-content" id="modal-w">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Categories</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                              @foreach($categories as $category)
                                 <div class="col-md-3">
                                 <a href="{{route('categories.showall',$category->id)}}">
                                        <img class="myclass1" src="/storage/category/{{$category->photo}}" >
                                          <p class="lead">{{$category->name}}</p>
                                    </a>
                                 </div>
                               @endforeach
                              </div> 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>


