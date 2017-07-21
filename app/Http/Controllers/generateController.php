<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;

use Chumper\Zipper\Zipper;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class generateController extends Controller
{
    public function changeparameter(Request $request){
        $this->validate($request, ['appname' =>'required' , 
                                   'parameter' => 'required|regex:/^(?=.*[.])[a-z0-9_\.]+$/'],
                       ['required' => 'this field must not empty!','regex' => 'this field should be lower case and at least one "."']);
        $appname = Input::get('appname');
        $parameter = Input::get('parameter');

        $dir = 'mvvm-starter';

        if (is_dir($dir)) {
            $process = new Process('cd mvvm-starter & git fetch');
            $process->start();

            while ($process->isRunning()) {
                $process = new Process('git pull origin master');
                // $process->setTimeout(3600);
                $process->run();
            }
             
            // executes after the command finishes
            if (!$process->isSuccessful()) {
                throw new \RuntimeException($process->getErrorOutput());
            }
             
            // echo $process->getOutput(); // show outut process
        }

        if (!is_dir($dir)) {

            $process = new Process('git clone https://github.com/flipboxstudio/mvvm-starter.git');
            $process->run();

            // executes after the command finishes
            if (!$process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }
        }

        File::makeDirectory('zipped/' . $parameter, 0777, true, true);
        File::copyDirectory('mvvm-starter', 'zipped/' . $parameter);
        $files = File::allFiles('zipped/' . $parameter);
        foreach ($files as $file)
            {
                //echo (string)$file, "\n";
                $content = file_get_contents((string)$file);
        
                $content = preg_replace('/id.co.flipbox.mvvmstarter/', $parameter, $content);
                
                $content = preg_replace('/MVVM Starter/', $appname, $content);
        
                file_put_contents((string)$file, $content);
                
                
            }
       
        
        $myArray = explode('.', $parameter);
        $newadd = '';
        foreach ($myArray as $myar){
            $newadd = $newadd . '/' . $myar;
        }
        
        File::makeDirectory('zipped/' . $parameter . '/app/src/androidTest/java'. $newadd, 0777, true, true);
        
        File::copyDirectory('zipped/' . $parameter . '/app/src/androidTest/java/id/co/flipbox/mvvmstarter', 'zipped/' . $parameter . '/app/src/androidTest/java'. $newadd);
        
        $success = File::deleteDirectory('zipped/' . $parameter . '/app/src/androidTest/java/id');
        
        File::makeDirectory('zipped/' . $parameter . '/app/src/main/java'. $newadd, 0777, true, true);
        
        File::copyDirectory('zipped/' . $parameter . '/app/src/main/java/id/co/flipbox/mvvmstarter', 'zipped/' . $parameter . '/app/src/main/java'. $newadd);
        
        $success = File::deleteDirectory('zipped/' . $parameter . '/app/src/main/java/id');
        
        File::makeDirectory('zipped/' . $parameter . '/app/src/test/java'. $newadd, 0777, true, true);
        
        File::copyDirectory('zipped/' . $parameter . '/app/src/test/java/id/co/flipbox/mvvmstarter', 'zipped/' . $parameter . '/app/src/test/java'. $newadd);
        
        $success = File::deleteDirectory('zipped/' . $parameter . '/app/src/test/java/id');
        
        
        // File::delete('zipped/zipped.zip');
        $zipper = new Zipper();
        $zipp = glob('zipped/' .$parameter);
        $zipper->make('zipped/' .$appname. '.zip')->add($zipp);
        $zipper->close();
        $success = File::deleteDirectory('zipped/' .$parameter);

        return response()->download(public_path(). '/zipped/' .$appname. '.zip')->deleteFileAfterSend(true);;
        
    }
}
