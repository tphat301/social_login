@extends('admin')
@section('title', 'Danh sách thành viên')

@section('content')
    <div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách thành viên</h5>
            <div class="form-search form-inline">
                <form action="#" class="form-group">
                    <input type="text" name="keyword" class="form-control form-search" placeholder="Tìm kiếm">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="analytic mb-2">
            </div>
            <table class="table table-striped table-checkall">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">GoogleID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ngày tạo</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($users->total() > 0)
                    @php
                        $k = 0;
                    @endphp
                        @foreach ($users as $k => $v)    
                            @php
                                $k++;
                            @endphp
                            <tr>
                                <th scope="row">{{ $k }}</th>
                                <td>
                                    {{ $v->name }}
                                </td>
                                @if ($v->google_id)
                                    <td>
                                        {{ $v->google_id }}
                                    </td>
                                @else
                                    <td></td>
                                @endif
                                <td>
                                    {{ $v->email }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $v->created_at)->format('d-m-Y') }}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">
                                <span>
                                    Không tìm thấy thành viên
                                </span>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {!! $users->links('admin.layout.pagination') !!}
        </div>
    </div>
</div>
@endsection