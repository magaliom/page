<?

class userLogin{
	
	private $con; 
	
	function __construct($con){
		$this->con = $con;	
			
	}
	
	
	function login($datos = array()){
		
		if(!empty($datos['usuario']) AND !empty($datos['password'])){
			
			$sql = "SELECT id, nombre 
					FROM usuarios 
					WHERE email = '".$datos['usuario']."' 
					  AND pass = '".$datos['password']."'";
		 
			
			$user = $this->con->query($sql)->fetch();
			
			if($user['id'] > 0){
				$_SESSION['usuario'] = $user;
				
				/*obtengo los permisos*/
				$sql = "SELECT code 
						FROM permisos
						   INNER  JOIN usuario_permisos ON(permisos.id = usuario_permisos.permiso_id )
						WHERE usuario_permisos.usuario_id = ".$user['id'];
				
				$_SESSION['usuario']['permisos'] = array();
				$permisos = $this->con->query($sql);
				foreach($permisos as $per){
					$_SESSION['usuario']['permisos'][] = $per['code'];
				}
				
			}
			 
			
		}
	}


	function isLog(){
		if(!isset($_SESSION['usuario']['id'])){
			redirect('login.php');
		}
	}
		
		
	function logout($datos = array()){
		if(isset($datos['logout'])){
			unset($_SESSION['usuario'])	;
		}
	}
	
}
 


?>