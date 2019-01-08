<!DOCTYPE html>
<html>
    @include('admin.public.head')
    @yield('body')
    <script src="{{ \App\Component\asset('static/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ \App\Component\asset('static/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    @stack('script')
    <script src="{{ \App\Component\asset('static/js/custom.min.js') }}"></script>
</html>