<?PHP
include '../config.php' ;
class UserController {
	function addUser(User $user) {
		try {
			$sql = "insert into user (id,username,name,surname,email,password,role,number) values (
				null, 
				'" . $user->getUsername() . "',
				'" . $user->getName() . "',
				'" . $user->getUsername() . "',
				'" . $user->getEmail() . "',
				'" . $user->getPassword() . "',
				'" . $user->getRole() . "',
				'" . $user->getNumber() . "'
				)";
			$this->executeSql( $sql );
			return true;
		}
		catch (Exception $e){
			return null;
			return $e->getMessage().' '.$sql;
		}
	}
	function deleteUser($id){
		$sql="delete from user where id=".$id;
		$this->executeSql($sql);
		return $sql;
	}
	function findUser($email,$password){
		$sql="SELECT * from user where email='".$email."' and password='".$password."' LIMIT 1";
		$db = Config::getConnexion();
		try{
			$stmt = $db->prepare($sql);
			$stmt->execute();
			$row = $stmt->fetch();
			if(empty($row["id"]))
				return null;
			else{
				$user = new User();
				$user->setName($row["name"]);
				$user->setSurname($row["surname"]);
				$user->setRole($row["role"]);
				$user->setUsername($row["username"]);
				$user->setId($row["id"]);
				$user->setEmail($row["email"]);
				$user->setNumber($row["number"]);
				return $user;
			}
		}
        catch (Exception $e){
            return $e->getMessage().' '.$sql;
        }
	}
	function executeSql($sql){
		$db = Config::getConnexion();
		$req=null;
		try{
			$req=$db->prepare($sql);
			$s=$req->execute();
		}
		catch (Exception $e){
			var_dump(" Erreur ! ".$e->getMessage());
		}
	}
	function getUsersByRoles($role) {
		$sql = "SElECT * From user where role = '".$role."'";
		$db  = Config::getConnexion();
		try {
			$list = $db->query( $sql );
			return $list;
		} catch ( Exception $e ) {
			die( 'Erreur: ' . $e->getMessage() );
		}
	}
	function getUsers() {
		$sql = "SElECT * From user";
		$db  = Config::getConnexion();
		try {
			$list = $db->query( $sql );
			return $list;
		} catch ( Exception $e ) {
			die( 'Erreur: ' . $e->getMessage() );
		}
	}
	function getUsersByGarage($idg) {
		$sql = "SElECT * From user where id_garage=".$idg;
		$db  = Config::getConnexion();
		try {
			$list = $db->query( $sql );
			return $list;
		} catch ( Exception $e ) {
			die( 'Erreur: ' . $e->getMessage() );
		}
	}
	function updateUser(User $user){
		$sql = "UPDATE user SET name=:name, surname=:surname,username=:username,email=:email,number=:number, role=:role where id= :id ";
		$db = Config::getConnexion();
		$req=$db->prepare($sql);
		try {
			$req->bindValue(':id',$user->getId());
			$req->bindValue(':name',$user->getName());
			$req->bindValue(':surname',$user->getSurname());
			$req->bindValue(':username',$user->getUsername());
			$req->bindValue(':email',$user->getEmail());
			$req->bindValue(':role',$user->getRole());
			$req->bindValue(':number',$user->getNumber());
			$req->execute();
			return true;
		}
		catch (Exception $e){
			 $result = $req->queryString;
			$result = str_replace(':idg', $user->getIdGarage(), $result);
			$result = str_replace(":id", $user->getId(), $result);
			$result = str_replace(':name', $user->getName(), $result);
			$result = str_replace(':surname', $user->getSurname(), $result);
			$result = str_replace(':username', $user->getUsername(), $result);
			$result = str_replace(':email', $user->getEmail(), $result);
			$result = str_replace(':role', $user->getRole(), $result);
			return $e->getMessage().' '.$result;
		}
	}
	function affectUserToGarage(User $user){
		$sql = "UPDATE user SET id_garage=:idg where id=:id";
		if($user->getIdGarage() =="")
			$sql = "UPDATE user SET id_garage=null where id=:id";
		$db = Config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id',$user->getId());
		if($user->getIdGarage() !="")
			$req->bindValue(':idg',$user->getIdGarage());
		$result = $req->queryString;
		$result = str_replace(':idg', $user->getIdGarage(), $result);
		$result = str_replace(":id", $user->getId(), $result);
		try {
			$req->execute();
			return true;
		}
		catch (Exception $e){
			return $e->getMessage().' '.$result;
		}
	}
	function findUserById($id){
		$sql="SELECT * from user where id=".$id." LIMIT 1";
		$db = Config::getConnexion();
		try{
			$stmt = $db->prepare($sql);
			$stmt->execute();
			$row = $stmt->fetch();
			if(empty($row["id"]))
				return null;
			else{
				$user = new User();
				$user->setName($row["name"]);
				$user->setSurname($row["surname"]);
				$user->setRole($row["role"]);
				$user->setUsername($row["username"]);
				$user->setId($row["id"]);
				$user->setEmail($row["email"]);
				$user->setNumber($row["number"]);
				$user->setIdGarage($row["id_garage"]);
				return $user;
			}
		}
		catch (Exception $e){
			return $e->getMessage().' '.$sql;
		}
	}
}

