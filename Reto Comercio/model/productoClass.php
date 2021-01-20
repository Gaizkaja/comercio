<?php
	
	
	class productoClass {
		protected $idProducto;
		protected $nombreProducto;
		protected $descripcion;
		protected $foto;
		protected $tipo;
		
		/**
		 * @return mixed
		 */
		public function getIdProducto() {
			return $this->idProducto;
		}
		
		/**
		 * @param mixed $id
		 */
		public function setIdProducto( $idProducto ) {
			$this->idProducto = $idProducto;
		}
		
		/**
		 * @return mixed
		 */
		public function getNombreProducto() {
			return $this->nombreProducto;
		}
		
		/**
		 * @param mixed $nombre
		 */
		public function setNombreProducto( $nombreProducto ) {
			$this->nombreProducto = $nombreProducto;
		}
		
		/**
		 * @return mixed
		 */
		public function getDescripcion() {
			return $this->descripcion;
		}
		
		/**
		 * @param mixed $precio
		 */
		public function setDescripcion( $descripcion ) {
			$this->descripcion = $descripcion;
		}
		
			/**
		 * @return mixed
		 */
		public function getFoto() {
			return $this->foto;
		}
		
		/**
		 * @param mixed $imagen
		 */
		public function setFoto( $foto ) {
			$this->foto = $foto;
		}
		/**
		 * @return mixed
		 */
		public function getTipo() {
			return $this->tipo;
		}
		
		/**
		 * @param mixed $tipo
		 */
		public function setTipo( $tipo ) {
			$this->tipo = $tipo;
		}
		
	
	}