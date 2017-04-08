<?php
  /**
   * Clase para definir la tabla permisos de la base de datos
   */
  class Permisos2
  {

    private $idPermisos;
    private $descripcion;
    private $fechaAlta;
    private $fechaModificacion;
    private $activo;
    private $idTipoUsuario;
    private $tipoUsuario;

    function __construct()
    {

    }
    //Setters
    public function setIdPermisos($idPermisos)
    {
      $this->idPermisos = $idPermisos;
    }

    public function setDescripcion($descripcion)
    {
      $this->descripcion = $descripcion;
    }

    public function setFechaAlta($fechaAlta)
    {
      $this->fechaAlta = $fechaAlta;
    }

    public function setFechaModificacion($fechaModificacion)
    {
      $this->fechaModificacion = $fechaModificacion;
    }

    public function setActivo($activo)
    {
      $this->activo = $activo;
    }

    public function setIdTipoUsuario($idTipoUsuario)
    {
      $this->idTipoUsuario = $idTipoUsuario;
    }

    public function setTipoUsuario($tipoUsuario)
    {
      $this->tipoUsuario = $tipoUsuario;
    }

    //Getters

    public function getIdPermisos($idPermisos)
    {
      return $this->idPermisos;
    }

    public function getDescripcion($descripcion)
    {
      return $this->descripcion;
    }

    public function getFechaAlta($fechaAlta)
    {
      return $this->fechaAlta;
    }

    public function getFechaModificacion($fechaModificacion)
    {
      return $this->fechaModificacion;
    }

    public function getActivo($activo)
    {
      return $this->activo;
    }

    public function getIdTipoUsuario($idTipoUsuario)
    {
      return $this->idTipoUsuario;
    }

    public function getTipoUsuario($tipoUsuario)
    {
      return $this->tipoUsuario;
    }

  }

?>
