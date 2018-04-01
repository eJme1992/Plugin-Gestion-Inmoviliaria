<?php

class DataTransferResource {
	
	private $id;
	private $idProperty;
	private $idTypeResource;
	private $name;
	private $urlPath;
	private $file;
	private $searchValue;
	private $searchType;
	private $order;
	private $limit;
	private $offset;
	private $createdDate;
	private $international;

	public function __construc() {}

	public function setId($id) {
		$value = strip_tags(stripslashes($id));
		$this->id = $value;
	}

	public function getId() {
		return $this->id;
	}

	public function setIdProperty($idProperty) {
		$value = strip_tags(stripslashes($idProperty));
		$this->idProperty = $value;
	}

	public function getIdProperty() {
		return $this->idProperty;
	}

	public function setIdTypeResource($idTypeResource) {
		$value = strip_tags(stripslashes($idTypeResource));
		$this->idTypeResource = $value;
	}

	public function setName($name) {
		$value = strip_tags(stripslashes($name));
		$this->name = $value;
	}

	public function getName() {
		return $this->name;
	}

	public function setUrlPath($urlPath) {
		$value = strip_tags(stripslashes($urlPath));
		$this->urlPath = $value;
	}

	public function getUrlPath() {
		return $this->urlPath;
	}

	public function setFile($file) {
		$this->file = $file;
	}

	public function getFile() {
		return $this->file;
	}

	public function setSearchValue($searchValue) {
		$value = strip_tags(stripslashes($searchValue));
		$this->searchValue = $value;
	}

	public function getSearchValue() {
		return $this->searchValue;
	}

	public function setSearchType($searchType) {
		$value = strip_tags(stripslashes($searchType));
		$this->searchType = $value;
	}

	public function getSearchType() {
		return $this->searchType;
	}

	public function setOrder($order) {
		$value = strip_tags(stripslashes($order));
		$this->order = $value;
	}

	public function getOrder() {
		return $this->order;
	}

	public function setLimit($limit) {
		$value = strip_tags(stripslashes($limit));
		$this->limit = $value;
	}

	public function getLimit() {
		return $this->limit;
	}

	public function setOffset($offset) {
		$value = strip_tags(stripslashes($offset));
		$this->offset = $value;
	}

	public function getOffset() {
		return $this->offset;
	}

	public function setCreatedDate($createdDate) {
		$this->createdDate = $createdDate;
	}

	public function getCreatedDate() {
		return $this->createdDate;	
	}

	public function setInternational($international) {
		$this->international = $international;
	}

	public function getInternational() {
		return $this->international;	
	}

}