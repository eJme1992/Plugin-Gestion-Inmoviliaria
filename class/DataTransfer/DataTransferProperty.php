<?php

class DataTransferProperty {

    private $id;
    private $idSeller;
    private $title;
    private $publicationType;
    private $address;
    private $departament;
    private $province;
    private $district;
    private $area;
    private $latitude;
    private $longitude;
    private $email;
    private $description;
    private $phone;
    private $currency;
    private $price;
    private $video;
    private $image;
    private $searchValue;
    private $searchType;
    private $order;
    private $limit;
    private $offset;
    private $createdDate;
    private $enterprice;
    private $propertyType;
    PRIVATE $international;

    public function setId($id) {
        $value = strip_tags(stripslashes($id));
        $this->id = $value;
    }

    public function getId() {
        return $this->id;
    }
    public function setIdSeller($idSeller) {
        $value = strip_tags(stripslashes($idSeller));
        $this->idSeller = $value;
    }

    public function getIdSeller() {
        return $this->idSeller;
    }

    public function setTitle($title) {
        $value = strip_tags(stripslashes($title));
        $this->title = $value;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setPublicationType($publicationType) {
        $value = strip_tags(stripslashes($publicationType));
        $this->publicationType = $value;
    }

    public function getPublicationType() {
        return $this->publicationType;
    }

    public function setAddress($address) {
        $value = strip_tags(stripslashes($address));
        $this->address = $value;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setDepartament($departament) {
        $value = strip_tags(stripslashes($departament));
        $this->departament = $value;
    }

    public function getDepartament() {
        return $this->departament;
    }

    public function setProvince($province) {
        $value = strip_tags(stripslashes($province));
        $this->province = $value;
    }

    public function getProvince() {
        return $this->province;
    }

    public function setDistrict($district) {
        $value = strip_tags(stripslashes($district));
        $this->district = $value;
    }

    public function getDistrict() {
        return $this->district;
    }

    public function setArea($area) {
        $value = strip_tags(stripslashes($area));
        $this->area = $value;
    }

    public function getArea() {
        return $this->area;
    }

    public function setLatitude($latitude) {
        $value = $latitude;
        $this->latitude = $value;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function setLongitude($longitude) {
        $value = $longitude;
        $this->longitude = $value;
    }

    public function getLongitude() {
        return $this->longitude;
    }

    public function setEmail($email) {
        $value = strip_tags(stripslashes($email));
        $this->email = $value;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setDescription($description) {
        $value = strip_tags(stripslashes($description));
        $this->description = $value;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setPhone($phone) {
        $value = strip_tags(stripslashes($phone));
        $this->phone = $value;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setCurrency($currency) {
        $value = strip_tags(stripslashes($currency));
        $this->currency = $value;
    }

    public function getCurrency() {
        return $this->currency;
    }

    public function setPrice($price) {
        $value = strip_tags(stripslashes($price));
        $this->price = $value;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setVideo($video) {
        $this->video = $video;
    }

    public function getVideo() {
        return $this->video;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getImage() {
        return $this->image;
    }

    public function setSearchValue($searchValue) {
        $value = strip_tags(stripslashes($searchValue));
        $this->searchValue = $value;
    }

    public function getSearchValue() {
        return $this->searchValue;
    }

    public function setEnterprice($enterprice) {
        $value = strip_tags(stripslashes($enterprice));
        $this->enterprice = $value;
    }

    public function getEnterprice() {
        return $this->enterprice;
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

    public function setPropertyType($propertyType) {
        $value = strip_tags(stripslashes($propertyType));
        $this->propertyType = $value;
    }

    public function getPropertyType() {
        return $this->propertyType;
    }

    public function setInternational($international) {
        $value = $international;
        $this->international = $value;
    }

    public function getInternational() {
        return $this->international;
    }
    
}