{{--    @extends('layouts.app')

   @section('title', 'About')

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>About</h1>
                </div>
            </div>
        </div>
    @endsection
--}}

<x-layouts.app title="About" :sum="2+2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>About</h1>
                </div>
            </div>
        </div>
</x-layouts.app>
