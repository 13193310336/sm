@extends('admin.public.body')

@push('style')
    <!-- Font Awesome -->
    <link href="{{ \App\Component\asset('static/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ \App\Component\asset('static/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ \App\Component\asset('static/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
@endpush

@section('content')

    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>系统设置<small>节点列表</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title">节点类型 </th>
                                        <th class="column-title">节点名称</th>
                                        <th class="column-title">节点路径</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $datum)
                                        <tr class="even pointer">
                                            <td class=" ">{{ \App\Model\Node\NodeModel::TYPE_COLLECTION[$datum['type']] }}</td>
                                            <td class=" ">{{ $datum['name'] }}</td>
                                            <td class=" ">{{ $datum['uri'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.public.page', ['page' => $page])
    </div>
@endsection

@push('script')
    <!-- Bootstrap -->
    <script src="{{ \App\Component\asset('static/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ \App\Component\asset('static/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ \App\Component\asset('static/vendors/nprogress/nprogress.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ \App\Component\asset('static/vendors/iCheck/icheck.min.js') }}"></script>
@endpush