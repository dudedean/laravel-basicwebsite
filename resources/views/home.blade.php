@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id labore vitae necessitatibus! Consequuntur repudiandae quae aperiam sit ut possimus iste perferendis aliquam natus officia eum ipsum dolor facilis impedit magnam dolorem perspiciatis id, ab dolorum! Exercitationem, modi fugiat assumenda odio velit mollitia vel veniam earum ullam sequi nam itaque dicta optio ipsum? Labore cum maxime beatae enim nostrum quas reiciendis, voluptas ratione perferendis quos sapiente quaerat soluta nisi aliquid consectetur facilis placeat quisquam blanditiis voluptatibus incidunt quibusdam ipsum illum facere? Excepturi ipsum fugiat pariatur repellendus, itaque eius aliquid culpa, doloremque eligendi soluta similique voluptate dolor cupiditate aliquam tempore quas quod!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>

@endsection