<?php

class DataTransferTypeProperty {

	private $id;
	private $name;
	private $searchValue;
    private $searchType;
    private $order;
    private $limit;
    private $offset;
    private $ops;

	public function setId($id) {
		$value = strip_tags(stripslashes($id));
		$this->id = $value;
	}

	public function getId() {
		return $this->id;
	}

	public function setName($name) {
		$value = strip_tags(stripslashes($name));
		$this->name = $value;
	}

	public function getName() {
		return $this->name;
	}

	public function setEmail($email) {
        $value = strip_tags(stripslashes($email));
        $this->email = $value;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPhone($phone) {
		$value = strip_tags(stripslashes($phone));
		$this->phone = $value;
	}

	public function getPhone() {
		return $this->phone;
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

    public function setOps($ops) {
        $value = strip_tags(stripslashes($ops));
        $this->ops = $value;
    }

    public function getOps() {
        return $this->ops;
    }

}
