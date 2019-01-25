@extends('admin.public.body')

@push('style')
    <link href="{{ \App\Component\asset('static/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>用户管理<small>编辑分组</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form class="form-horizontal form-label-left" novalidate onsubmit="false">

                            {{--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>--}}
                            {{--</p>--}}
                            {{--<span class="section">Personal Info</span>--}}

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">分组名称 <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input  id="name"
                                            class="form-control col-md-7 col-xs-12"
                                            data-validate-length-range="6"
                                            name="name"
                                            placeholder="名称"
                                            required="required"
                                            type="text"
                                            @if (isset($role))
                                            value="{{ $role['role_name'] }}"
                                            @endif
                                    >
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">分配权限 <span class="required">*</span>
                                </label>
                                <div  class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        {{--<div class="x_title">--}}
                                            {{--<h2>节点列表<small>Sample tasks</small></h2>--}}
                                            {{--<ul class="nav navbar-right panel_toolbox" style="min-width: 0px">--}}
                                                {{--<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</div>--}}
                                        <div class="x_content">

                                            <div class="">
                                                <ul class="to_do">
                                                    @foreach($node as $item)
                                                    <li>
                                                        <p>
                                                            <input
                                                                    name="node[]"
                                                                    type="checkbox"
                                                                    class="flat"
                                                                    value="{{ $item['node_id'] }}"
                                                                    @if ($roleNode && in_array($item['node_id'], $roleNode))
                                                                    checked
                                                                    @endif
                                                            > {{ $item['name'] }}({{ $item['uri'] }})[{{ App\Model\Node\NodeModel::TYPE_COLLECTION[$item['type']] }}]
                                                        </p>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="button" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <!-- FastClick -->
    <script src="{{ \App\Component\asset('static/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ \App\Component\asset('static/vendors/nprogress/nprogress.js') }}"></script>
    <!-- validator -->
    <script src="{{ \App\Component\asset('static/vendors/validator/validator.js') }}"></script>

    <script src="{{ \App\Component\asset('static/vendors/iCheck/icheck.min.js') }}"></script>

    <script>
        $('#send').click(function () {
            var form = $('form');
            if (validator.checkAll(form)) {
                var postData = form.serialize();
                <?php
                $url = \App\Component\url('admin/access/role/store');
                if (isset($role))
                    $url = \App\Component\url('admin/access/role/update?id=' . $role['role_id']);
                ?>
                $.post('{{ $url }}', postData, function (response) {
                        smNotice(response);
                })
            }
        });
    </script>
@endpush