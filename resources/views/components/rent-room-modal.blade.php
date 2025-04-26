<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tao phong thue</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="client_name">Tên người thuê trọ</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Client name" value="">
                        </div>

                        <div class="form-group">
                            <label for="status">Số điện thoại</label>
                            <input type="text" class="form-control" id="phone" required placeholder="phone"
                                name="phone">
                        </div>

                        <div class="form-group">
                            <label for="status">Ngày thuê</label>
                            <input type="date" class="form-control" id="start_date" required placeholder="Start date"
                                name="start_date">
                        </div>

                        <div class="form-group">
                            <label for="start_date">Hình thức thanh toán</label>
                            <select class="form-control" id="payment_id" name="payment_id">
                                <option value="1">Thang</option>
                                <option value="2">Quy</option>
                                <option value="3">Nam</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="note">Ghi chú</label>
                            <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
