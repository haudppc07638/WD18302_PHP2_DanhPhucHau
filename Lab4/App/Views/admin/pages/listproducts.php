<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List products</h4>
            <a href="?url=ProController/addProducts" class="card-description" >
                <button type="button" class="btn btn-info btn-rounded btn-fw">Add products</button>
            </a>
            <div class="table-responsive">
                <table class="table table-striped" style="width: 1135px">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Name product
                            </th>
                            <th>
                                Image
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Quantity
                            </th>
                            <th>
                                Category
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Herman Beck
                            </td>
                            <td class="py-1">
                                <img src="Public/images/faces/face1.jpg" alt="image" />
                            </td>
                            <td>
                                1.900.000 VND
                            </td>
                            <td>
                                190
                            </td>
                            <td>
                                Nội thất
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm dropdown-toggle" type="button"id="dropdownMenuSizeButton3" data-bs-toggle="dropdown" aria-haspopup="true"aria-expanded="false">
                                    Ẩn
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3" style="">
                                    <a class="dropdown-item" href="#">Hiện</a>
                                    <a class="dropdown-item" href="#">Ẩn</a>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-dark btn-icon-text">Edit<i class="ti-file btn-icon-append"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>