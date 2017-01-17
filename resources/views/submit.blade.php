<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .documentation{
                margin-left: 30px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .form-top {
        width: 500px;
        overflow: hidden;
        padding: 0 0px 10px 15px;
        background: #fff;
        -moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0; border-radius: 4px 4px 0 0;
        text-align: left;
    }
            .form-bottom {
        width: 400px;
        padding: 2px 2px 3px 2px;
        background: #fff;
        -moz-border-radius: 0 0 4px 4px; -webkit-border-radius: 0 0 4px 4px; border-radius: 0 0 4px 4px;
        text-align: left;
        }
            
        </style>
    </head>
    <body>
        <div class="flex-center ">
            <div class="form-top">
            <section class="container">
                <div class="form-bottom">
            <h1>Package Changer</h1>
            <form id='#defaultForm' method="get" action="copyfile">
                {{csrf_field()}}
                <div class="form-group">
                    <p><label>Application Name:</label>
                        <input type="text" name="appname" class="form-control input" value="" size="50" placeholder="appname"></p>
                    <p><label>Package name:</label>
                        <input type="text" name="parameter" class="form-control input" value="" size="50" placeholder="parameter"></p>
                  </div>
                <p><input class="btn btn-danger" type="submit" name="commit" value="submit"></p>
            </form>
            </div>
             </section>
            </div>
        </div>
        <div class='documentation'>
        <div  class='container'>
            <h2>mvvm-starter</h2>
            <p>A starter project for Android MVVM Project with DataBinding Library</p>


<p>Libraries used :</p>

<ul>
<li>Retrofit <code>com.squareup.retrofit2:retrofit:2.1.0</code></li>
<li>EventBus <code>org.greenrobot:eventbus:3.0.0</code></li>
<li>Glide <code>com.github.bumptech.glide:glide:3.7.0</code></li>
<li>EasyPermission <code>pub.devrel:easypermissions:0.2.1</code></li>
<li>Hawk <code>com.orhanobut:hawk:2.0.1</code></li>
<li>Android Libraries ( <code>appcompat</code>, <code>design support</code>, <code>data binding</code>, etc )</li>
</ul>

<h2></h2>

<p>Setup included :</p>

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
        </div>
        </div>
    </body>
</html>
