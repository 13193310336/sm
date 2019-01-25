<!DOCTYPE html>
<html>
    @include('admin.public.head')
    @yield('body')
    <script src="{{ \App\Component\asset('static/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ \App\Component\asset('static/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- PNotify -->
    <script src="{{ \App\Component\asset('static/vendors/pnotify/dist/pnotify.js') }}"></script>
    <script src="{{ \App\Component\asset('static/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
    <script src="{{ \App\Component\asset('static/vendors/pnotify/dist/pnotify.nonblock.js') }}"></script>
    <script src="{{ \App\Component\asset('static/js/custom.js') }}"></script>

    @stack('script')


    <script>
        function smNotice(response) {
            var type = 'success';
            var title = {!! json_encode(\App\Component\Code::MESSAGE, JSON_UNESCAPED_UNICODE) !!};
            var titleText = '';
            if (response.code !== '{{ \App\Component\Code::SUCCESS }}')
                type = 'error';
            for (var index in title) {
                if (index === response.code) {
                    titleText = title[index]
                }
            }
            new PNotify({
                title: titleText,
                text: response.message,
                type: type,
                styling: 'bootstrap3'
            });
        }
    </script>
</html>