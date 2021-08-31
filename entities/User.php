<?PHP
class User{
	protected $id;
	protected $username;
	protected $name;
	protected $surname;
	protected $email;
	protected $password;
	protected $role;
	protected $number;
	protected $idGarage;

	/**
	 * @return mixed
	 */
	public function getNumber() {
		return $this->number;
	}

	/**
	 * @param mixed $number
	 */
	public function setNumber( $number ) {
		$this->number = $number;
	}

	public function __construct( ) {
		$this->id  = 0;
	}

	public function getId() {
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * @param mixed $username
	 */
	public function setUsername( $username ) {
		$this->username = $username;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getSurname() {
		return $this->surname;
	}

	/**
	 * @param mixed $surname
	 */
	public function setSurname( $surname ) {
		$this->surname = $surname;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @param mixed $email
	 */
	public function setEmail( $email ) {
		$this->email = $email;
	}

	/**
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @param mixed $password
	 */
	public function setPassword( $password ) {
		$this->password = $password;
	}

	public function getRole() {
		return $this->role;
	}

	public function setRole( $role ) {
		$this->role = $role;
	}

	/**
	 * @return mixed
	 */
	public function getIdGarage() {
		return $this->idGarage;
	}

	/**
	 * @param mixed $idGarage
	 */
	public function setIdGarage( $idGarage ) {
		$this->idGarage = $idGarage;
	}

}

