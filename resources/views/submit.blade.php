@extends('master')

@section('sidebar-up')
        
    <h2>Android Starter App generator </h2>
    <div class="modal-body">
        <form id='#defaultForm' method="get" action="copyfile">
            {{csrf_field()}}
            <div class="form-group">
                <p><label>Application Name:</label>
                    <input type="text" name="appname" class="form-control input" value="" size="50" placeholder="appname"></p>
                <p><label>Package name:</label>
                    <input type="text" name="parameter" class="form-control input" value="" size="50" placeholder="parameter"></p>
            </div>
            @if (count($errors))

            <div class="well well-sm" id="error">
            <ul>

              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach

            </ul>
            </div>

            @endif
            <p><input class="btn btn-danger" type="submit" name="commit" value="submit"></p>
        </form>
</div>
@stop

 @section('sidebar-left')       
<h2>mvvm-starter</h2>
<p>A starter project for Android MVVM Project with DataBinding Library</p>


<h4>Libraries used :</h4>

<ul>
<li>Retrofit <code>com.squareup.retrofit2:retrofit:2.1.0</code></li>
<li>EventBus <code>org.greenrobot:eventbus:3.0.0</code></li>
<li>Glide <code>com.github.bumptech.glide:glide:3.7.0</code></li>
<li>EasyPermission <code>pub.devrel:easypermissions:0.2.1</code></li>
<li>Hawk <code>com.orhanobut:hawk:2.0.1</code></li>
<li>Android Libraries ( <code>appcompat</code>, <code>design support</code>, <code>data binding</code>, etc )</li>
</ul>

@stop

@section('sidebar-right')
<h4>Setup included :</h4>

<ul>
<li>Data Binding

<ul>
<li>Using Android Data Binding Library</li>
<li>ViewModel is inside <code>viewmodels</code> package</li>
</ul></li>
<li>Splash Screen

<ul>
<li>Implement splash screen the right way [<a href="https://www.bignerdranch.com/blog/splash-screens-the-right-way/">https://www.bignerdranch.com/blog/splash-screens-the-right-way/</a>]</li>
</ul></li>
<li>Authentication Flow

<ul>
<li>Using Retrofit &amp; ResponseInterceptor for request &amp; response handling</li>
<li>Dummy API using <code>https://jsonplaceholder.typicode.com</code></li>
<li><code>AuthActivity</code> as Fragments Container</li>
<li><code>LoginFragment</code> as Login UI</li>
<li><code>ForgotPasswordFragment</code> as Forgot Password UI</li>
</ul></li>
<li>RecyclerView Sample

<ul>
<li>Sample recyclerview implementation using viewholder &amp; databinding</li>
<li>Using <code>User</code> as dummy object representation</li>
<li>See <code>RecyclerViewActivity</code> for details</li>
</ul></li>
<li>ViewPager Sample

<ul>
<li>Sample viewpager implementation using tablayout</li>
<li>See <code>ViewPagerActivity</code> for details</li>
</ul></li>
<li>Android M permission handler using <code>EasyPermissions</code>

<ul>
<li>Handle permission for Android M and above</li>
<li>Sample implementation for CAMERA access permission</li>
</ul></li>
<li>Reusable Style

<ul>
<li>All colors are available inside <code>colors.xml</code></li>
<li>Styles are available inside <code>styles.xml</code></li>
<li>Custom Fonts are using <code>CustomTextView</code> on <code>utils</code> package and custom attribute on <code>attrs.xml</code></li>
<li>Vector Drawable assets</li>
<li>Roboto fonts included</li>
</ul></li>
<li>Utilities classes

<ul>
<li>Camera Utils : Get image from camera / gallery</li>
<li>Calendar Utils : Parse &amp; display Calendar object into various format</li>
</ul></li>
</ul>
       
@stop

