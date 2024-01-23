<div class="main-panel"> 
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add products</h4>
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputName1">Products name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Description</label>
                    <textarea class="form-control" placeholder="Mô tả sản phẩm"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Price</label>
                    <input type="number" class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Quantity</label>
                    <input type="number" class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Categories</label>
                    <select class="form-control" id="exampleSelectGender">
                        <option>Bàn ghế</option>
                        <option>Kệ tủ</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>