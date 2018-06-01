<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/8/16
 * Time: 6:30 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Symfony\Component\Serializer\Annotation as Srz;

/**
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario implements AdvancedUserInterface, EquatableInterface, \Serializable
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Srz\Groups({"list"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     * @Srz\Groups({"list"})
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     * @Assert\NotBlank(message="Este campo es requerido.")
     * @Srz\Groups({"list"})
     *
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $empresa;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     * @Srz\Groups({"list"})
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Srz\Groups({"list"})
     */
    private $celular;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaCreacion;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * @ORM\ManyToOne(targetEntity="Rol", inversedBy="usuarios")
     * @ORM\JoinColumn(name="id_rol", referencedColumnName="id", nullable=false)
     */
    protected $rol;

    /**
     * @ORM\ManyToMany(targetEntity="Usuario")
     * @ORM\JoinTable(name="usuario_colaborador",
     *      joinColumns={@ORM\JoinColumn(name="id_usuario", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_colaborador", referencedColumnName="id")}
     *      )
     */
    private $colaboradores;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idUsuarioPadre;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    protected $pathFoto;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     * @Srz\Groups({"list"})
     */
    public $urlFoto;

    protected $fileFoto;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    protected $pathLogo;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    protected $urlLogo;

    protected $fileLogo;

    /**
     * @ORM\Column(type="string", length=26, unique=true, nullable=true)
     */
    protected $websitekey;

    public function __construct()
    {
        $this->fechaCreacion = new \DateTime();
        $this->colaboradores = array();
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }

    public function getUsername()
    {
        return $this->email;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return array($this->getRol()->getNombre());
    }

    public function eraseCredentials()
    {
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id=$id;
    }

    /**
     * Get idUsuarioPadre
     *
     * @return integer
     */
    public function getIdUsuarioPadre()
    {
        return $this->idUsuarioPadre;
    }

    public function setIdUsuarioPadre($id)
    {
        $this->idUsuarioPadre=$id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->mail = $username;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     * @return Usuario
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fechaCreacion
     *
     * @param string $fechaCreacion
     * @return Usuario
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return date
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Usuario
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set rol
     *
     * @param \AppBundle\Entity\Rol $rol
     * @return Usuario
     */
    public function setRol(\AppBundle\Entity\Rol $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \AppBundle\Entity\Rol
     */
    public function getRol()
    {
        return $this->rol;
    }

    public  function isAccountNonExpired()
    {
        return true;
    }

    public  function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return true;
    }

    public function isEqualTo(UserInterface $user)
    {
        if ($this->getId() == $user->getId())
        {
            return true;
        }

        else
        {
            return false;
        }
    }

    /**
     * Add colaboradores
     *
     * @param \AppBundle\Entity\Usuario $colaborador
     * @return Usuario
     */
    public function addColaborador(\AppBundle\Entity\Usuario $colaborador)
    {
        $this->colaboradores[] = $colaborador;

        return $this;
    }

    /**
     * Remove colaboradores
     *
     * @param \AppBundle\Entity\Usuario $colaboradores
     */
    public function removeZona(\AppBundle\Entity\Usuario $colaboradores)
    {
        $this->colaboradores->removeElement($colaboradores);
    }

    /**
     * Get zonas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getColaboradores()
    {
        return $this->colaboradores;
    }

    /**
     * Set websitekey
     *
     * @param string $websitekey
     * @return Usuario
     */
    public function setWebsitekey($websitekey)
    {
        $this->websitekey = $websitekey;

        return $this;
    }

    /**
     * Get websitekey
     *
     * @return string
     */
    public function getWebsitekey()
    {
        return $this->websitekey;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return Usuario
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }


// ------------------------------------------ FOTO -------------------------------------------- //

    /**
     * Set path
     *
     * @param string $path
     * @return Imagen
     */
    public function setPathFoto($path)
    {
        $this->pathFoto = $path;

        $this->getWebPathFoto();

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPathFoto()
    {
        $this->getWebPathFoto();

        return $this->pathFoto;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Imagen
     */
    public function setURLFoto($url)
    {
        $this->urlFoto = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getURLFoto()
    {
        return $this->urlFoto;
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFileFoto($fileFoto = null)
    {
        $this->fileFoto = $fileFoto;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFileFoto()
    {
        return $this->fileFoto;
    }

    public function uploadFoto($nombrearchivo=null)
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFileFoto()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues
        $partes_ruta = pathinfo($this->getFileFoto()->getClientOriginalName());

        if ($nombrearchivo == null) {
            $nombre = $partes_ruta['filename'] . '_' . date('YmdHis') . '.' . $partes_ruta['extension'];
        }
        else{
            $nombre = $nombrearchivo;
        }

        // move takes the target directory and then the
        // target filename to move to
        $this->getFileFoto()->move(
            $this->getUploadRootDir(),
            $nombre
        );

        // set the path property to the filename where you've saved the file
        $this->pathFoto = $nombre;

        $this->urlFoto = $this->getWebPathFoto();

        // clean up the file property as you won't need it anymore
        $this->fileFoto = null;
    }

    public function getAbsolutePathFoto()
    {
        return null === $this->pathFoto
            ? null
            : $this->getUploadRootDir().'/'.$this->pathFoto;
    }

    public function getWebPathFoto()
    {
        if (null === $this->pathFoto)
        {
            return null;
        }
        else
        {
            return '/PDCRM/web/' . $this->getUploadDir(). '/' .$this->pathFoto;
        }
    }

    public static function getWebPathFotoPara($pathFoto)
    {
        if (null === $pathFoto)
        {
            return null;
        }
        else
        {
            return '/PDCRM/web/' . Usuario::getUploadDir(). '/' .$pathFoto;
        }
    }



    // ------------------------------------------ LOGO -------------------------------------------- //

    /**
     * Set path
     *
     * @param string $path
     * @return Imagen
     */
    public function setPathLogo($path)
    {
        $this->pathLogo = $path;

        $this->getWebPathLogo();

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPathLogo()
    {
        $this->getWebPathLogo();

        return $this->pathLogo;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Imagen
     */
    public function setURLLogo($url)
    {
        $this->urlLogo = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getURLLogo()
    {
        return $this->url;
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFileLogo($fileLogo = null)
    {
        $this->fileLogo = $fileLogo;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFileLogo()
    {
        return $this->fileLogo;
    }

    public function uploadLogo($nombrearchivo=null)
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFileLogo()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues
        $partes_ruta = pathinfo($this->getFileLogo()->getClientOriginalName());

        if ($nombrearchivo == null) {
            $nombre = $partes_ruta['filename'] . '_' . date('YmdHis') . '.' . $partes_ruta['extension'];
        }
        else{
            $nombre = $nombrearchivo;
        }

        // move takes the target directory and then the
        // target filename to move to
        $this->getFileLogo()->move(
            $this->getUploadRootDir(),
            $nombre
        );

        // set the path property to the filename where you've saved the file
        $this->pathLogo = $nombre;

        $this->urlLogo = $this->getWebPathLogo();

        // clean up the file property as you won't need it anymore
        $this->fileLogo = null;
    }

    public function getAbsolutePathLogo()
    {
        return null === $this->pathLogo
            ? null
            : $this->getUploadRootDir().'/'.$this->pathLogo;
    }

    public function getWebPathLogo()
    {
        if (null === $this->pathLogo)
        {
            return null;
        }
        else
        {
            return '/PDCRM/web/' . $this->getUploadDir().'/'.$this->pathLogo;
        }
    }


    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    protected static function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/images';
    }

}
