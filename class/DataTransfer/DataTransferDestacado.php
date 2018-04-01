<?php

class DataTransferDestacado {

	private $id;
	private $position;
	private $searchValue;
    private $searchType;
    private $order;
    private $limit;
    private $offset;

	public function setId($id) {
		$value = strip_tags(stripslashes($id));
		$this->id = $value;
	}

	public function getId() {
		return $this->id;
	}

	public function setPosition($position) {
		$value = strip_tags(stripslashes($position));
		$this->position = $value;
	}

	public function getPosition() {
		return $this->position;
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

}