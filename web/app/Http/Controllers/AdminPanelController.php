<?php namespace App\Http\Controllers;
/**
 * @author Gradonski Janusz,Florian Kibler,Daniel Novotny
 * @copyright 2015
 * 
 */
 
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminPanelController extends Controller {
	
	public function __construct() {
		
	}
	
	public function setRang($rang,$username) {
		DB::table('user')->where('username',$username)->update(array('rang' => $rang));
	}
	
	public function getRang($username) {
		$rang=DB::table('user')->where('username',$username)->get(['rang']);
		return $this->rang;
	}
	
	public function removeUser($username) {
		DB::table('user')->where('username',$username)->delete();
	}
	
	public function addUser($username,$vorname,$nachname,$email,$password,$rang) {
		DB::table('user')->insert(array('username' => $username,'vorname' => $vorname,'nachname' => $nachname,'email' => $email, 'password' => $password,'rang' => $rang));
	}
	
	public function getUser($rang) {
		$user = DB::table('user')->where('rang',$rang)->get();
		$u_array = array();
		$i=0;
		foreach($user as $users) {
			$u_array[$i]=array($users->id,$users->username,$users->email,$users->rang);
			$this->i=$this->i+1;
		}
		
		return $this->u_array;
	}
	
	public function getallUser() {
		$user = DB::table('user')->get();
		$u_array = array();
		$i=0;
		foreach($user as $users) {
			$u_array[$i]=array($users->id,$users->username,$users->email,$users->rang);
			$this->i=$this->i+1;
		}
		return $this->u_array;
	}
	
	public function blockUser($username) {
		DB::table('user')->where('username',$username)->update(array('rang' => 'blocked'));
	}
	
	public function unblockUser($username) {
		DB::table('user')->where('username',$username)->update(array('rang' => 'standarduser'));
	}
	
	function zip($source, $destination)
{
    if (extension_loaded('zip') === true)
    {
        if (file_exists($source) === true)
        {
            $zip = new ZipArchive();
            if ($zip->open($destination, ZIPARCHIVE::CREATE) === true)
            {
                $source = realpath($source);
                if (is_dir($source) === true)
                {
                    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
                    foreach ($files as $file)
                    {
                        $file = realpath($file);
                        if (is_dir($file) === true)
                        {
                            $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                        }
                        else if (is_file($file) === true)
                        {
                            $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                        }
                    }
                }
                else if (is_file($source) === true)
                {
                    $zip->addFromString(basename($source), file_get_contents($source));
                }
            }
            return $zip->close();
        }
		    }

    return false;
}


	
	/**
	 * Bildet die Startseite der Adminunterseite
	 *
	 **/
	public function showDashboard() {    
	
            return View('admin.dashboard');
			
    }
	public function showTest() {
		return View("admin.test");
	}
    /**
	  * Alle Users die Adminrechte besitzen werden hervorgehoben (separate Seite)
	  *
	  *
	  **/
    public function showAdmins() {    
	
            return View('admin.admins');
			
    }
	
	public function showStuser() {    
	
            return View('admin.stuser');
			
    }
	
	public function showModerator() {    
	
            return View('admin.moderator');
			
    }
    /**
	  *
	  *
	  *
	  **/
    public function showDienste() {  
	
            return View('admin.dienste');
			
    }
    /**
	  * Alle Users die in der Datenbank existieren werden angezeigt
	  *
	  *
	  **/
    public function showUsers() {    
	
            return View('admin.users');
			
    }
   /**
	  * Backupseite
	  *
	  *
	  **/
    public function showBackup() {   
	
            return View('admin.backup');
			
    }
	

}