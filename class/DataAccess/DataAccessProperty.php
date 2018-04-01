<?php

require_once(dirname( __FILE__ ).'/../datasources/DataSourceProperty.php');
require_once(dirname( __FILE__ ).'/../DataTransfer/DataTransferProperty.php');
require_once(dirname( __FILE__ ).'/../DataTransfer/DataTransferDestacado.php');
require_once(dirname( __FILE__ ).'/../DataTransfer/DataTransferResource.php');
require_once(dirname( __FILE__ ).'/../DataTransfer/DataTransferSeller.php');
require_once(dirname( __FILE__ ).'/../DataTransfer/DataTransferTypeProperty.php');
require_once(dirname( __FILE__ ).'/../Interfaces/InterfaceProperty.php');
require_once(dirname( __FILE__ ).'/../Utils.php');

class DataAccessProperty implements InterfaceProperty {

    public function createProperty(DataTransferProperty $dtoProperty) {
        $reqInsert = array();
        $insertFields = "";
        $typeParams = "";
        $insertParams = "";
        $prepared = true;
        $dataSource = new DataSourceProperty();

        $title = $dtoProperty->getTitle();
        $typeProperty = $dtoProperty->getPublicationType();
        $price = $dtoProperty->getPrice();
        $address = $dtoProperty->getAddress();
        $departament = $dtoProperty->getDepartament();
        $province = $dtoProperty->getProvince();
        $district = $dtoProperty->getDistrict();
        $area = $dtoProperty->getArea();
        $latitude = $dtoProperty->getLatitude();
        $longitude = $dtoProperty->getLongitude();
        $enterprice = $dtoProperty->getEnterprice();
        $video = $dtoProperty->getVideo();
        $description = $dtoProperty->getDescription();
        $currency = $dtoProperty->getCurrency();
        $image = $dtoProperty->getImage();
        $idSeller = $dtoProperty->getIdSeller();
        $propertyType = $dtoProperty->getPropertyType();

        if (empty($title) && $title === '') {
            $response = array('status' => 400, 'content' => 'Campo Título requerido.', 'error' => true);
            $prepared = false;
        } else {
            $insertFields .= "title, ";
            array_push($reqInsert, $title);
            $typeParams .= "s";
        }
        if (empty($typeProperty) && $typeProperty === 0) {
            $response = array('status' => 400, 'content' => 'Seleccione tipo de inmueble.', 'error' => true);
            $prepared = false;
        } else {
            $insertFields .= "id_publication_type, ";
            array_push($reqInsert, $typeProperty);
            $typeParams .= "i";
        }
        if ($currency) {
            $insertFields .= "currency, ";
            array_push($reqInsert, $currency);
            $typeParams .= "s";
        }
        if (empty($price) && $price === '') {
            $response = array('status' => 400, 'content' => 'Campo Precio requerido.', 'error' => true);
            $prepared = false;
        } else {
            if (!is_numeric($price)) {
                $response = array('status' => 400, 'content' => 'Campo Precio invalido.', 'error' => true);
                $prepared = false;
            } else {
                $insertFields .= "price, ";
                array_push($reqInsert, $price);
                $typeParams .= "s";
            }
        }
        if (empty($address) && $address === '') {
            $response = array('status' => 400, 'content' => 'Campo Dirección requerida.', 'error' => true);
            $prepared = false;
        } else {
            $insertFields .= "address, ";
            array_push($reqInsert, $address);
            $typeParams .= "s";
        }
        if ($departament === 0) {
            $response = array('status' => 400, 'content' => 'Seleccione Departamento.', 'error' => true);
            $prepared = false;
        } else {
            $insertFields .= "departament, ";
            array_push($reqInsert, $departament);
            $typeParams .= "s";
        }
        if ($province === 0) {
            $response = array('status' => 400, 'content' => 'Seleccione Provincia.', 'error' => true);
            $prepared = false;
        } else {
            $insertFields .= "province, ";
            array_push($reqInsert, $province);
            $typeParams .= "s";
        }
        if ($district === 0) {
            $response = array('status' => 400, 'content' => 'Seleccione Distrito.', 'error' => true);
            $prepared = false;
        } else {
            $insertFields .= "district, ";
            array_push($reqInsert, $district);
            $typeParams .= "s";
        }
        if (empty($area) && $area === '') {
            $response = array('status' => 400, 'content' => 'Campo Area requerido.', 'error' => true);
            $prepared = false;
        } else {
            $insertFields .= "area, ";
            array_push($reqInsert, $area);
            $typeParams .= "s";
        }
        if (!empty($longitude) && $longitude !== "") {
            if (!is_numeric($longitude)) {
                $response = array('status' => 400, 'content' => 'Campo Longitud invalido.', 'error' => true);
                $prepared = false;
            } else {
                $insertFields .= "longitude, ";
                array_push($reqInsert, $longitude);
                $typeParams .= "s";
            }
        }
        if (!empty($latitude) && $latitude !== "") {
            if (!is_numeric($latitude)) {
                $response = array('status' => 400, 'content' => 'Campo Latitud invalido.', 'error' => true);
                $prepared = false;
            } else {
                $insertFields .= "latitude, ";
                array_push($reqInsert, $latitude);
                $typeParams .= "s";
            }
        }
        if (!empty($video) && $video !== '') {
            $insertFields .= "url_video, ";
            array_push($reqInsert, $video);
            $typeParams .= "s";
        }
        if (!empty($enterprice) && $enterprice !== '') {
            $insertFields .= "enterprice_name, ";
            array_push($reqInsert, $enterprice);
            $typeParams .= "s";
        }
        if (empty($description) && $description === '') {
            $response = array('status' => 400, 'content' => 'Campo Descripción requerido.', 'error' => true);
            $prepared = false;
        } else {
            $insertFields .= "description, ";
            array_push($reqInsert, $description);
            $typeParams .= "s";
        }
        if ($idSeller == 0) {
            $response = array('status' => 400, 'content' => 'Seleccione Vendedor.', 'error' => true);
            $prepared = false;
        } else {
            $insertFields .= "id_seller, ";
            array_push($reqInsert, $idSeller);
            $typeParams .= "i";
        }
        if ($propertyType == 0) {
            $response = array('status' => 400, 'content' => 'Seleccione Tipo de Propiedad.', 'error' => true);
            $prepared = false;
        } else {
            $insertFields .= "id_property_type, ";
            array_push($reqInsert, $propertyType);
            $typeParams .= "i";
        }
        if ($image['size'] == 0 && $image['error'] == 4) {
            $response = array('status' => 400, 'content' => 'No ha insertado imagen aun.', 'error' => true);
            $prepared = false;
        } else {
            $verifyMimetypeImage = Utils::verifyMimetypeImage($image['name']);
            if ($verifyMimetypeImage['success'] == true) {
                if (!function_exists('wp_handle_upload')) {
                    require_once(ABSPATH . 'wp-admin/includes/file.php');
                }

                $image['name'] = $verifyMimetypeImage['newName'];
                $uploadedfile = $image;
                $upload_overrides = array('test_form' => false);
                $movefile = wp_handle_upload($uploadedfile, $upload_overrides);
            } else {
                $response = array('status' => 400, 'content' => 'Formato de imagen invalido.', 'error' => true);
                $prepared = false;
            }
        }

        if ($prepared == true) {
            for ($i = 0; $i < count($reqInsert); $i++) {
                $insertParams .= "?, ";
            }
            $preparedInsertFields = substr($insertFields, 0, -2);
            $preparedInsertParams = substr($insertParams, 0, -2);
            
            $sqlAddProperty = "INSERT INTO `ejmeenet_blog`.`wp_properties` ($preparedInsertFields) VALUES ($preparedInsertParams)";

            if ($dataSource->execInsertQuery($sqlAddProperty, $typeParams, $reqInsert)) {

                $lastId = $dataSource->lastId();
                $getYear = date("Y");
                $getMonth = date("m");

                $reqResource = array($lastId, 1, $image['name'], '/wp-content/uploads/'.$getYear.'/'.$getMonth.'/'.$image['name']);
                $sqlResource = "INSERT INTO `ejmeenet_blog`.`wp_property_resource` (id_property, id_type_resource, name, url_path)
                                VALUES (?, ?, ?, ?)";
                $typesParams = "iiss";

                if ($dataSource->execInsertQuery($sqlResource, $typesParams, $reqResource)) {
                    $response = array("status" => 200, "content" => "Inmueble registrado satisfactoriamente.", "error" => false);
                    $dataSource->closeConnect();
                } else {
                    $response = array("status" => 500, "content" => "Error al registran recurso.", "error" => true);
                    $dataSource->closeConnect();
                }
            } else {
                $response = array("status" => 500, "content" => "Error al registran inmueble.", "error" => true);
                $dataSource->closeConnect();
            }

            print_r(json_encode($response));
        } else {
            print_r(json_encode($response));
        }
    }

    public function findAllProperties(DataTransferProperty $dtoProperty) {
        $condition = "";
        $dataSource = new DataSourceProperty();

        $id = $dtoProperty->getId();
        $title = $dtoProperty->getTitle();
        $price = $dtoProperty->getPrice();
        $searchType = $dtoProperty->getSearchType();
        $searchValue = $dtoProperty->getSearchValue();
        $order = $dtoProperty->getOrder();
        $limit = $dtoProperty->getLimit();
        $offset = $dtoProperty->getOffset();
        $international = $dtoProperty->getInternational();

        if ($searchType === "all" && $searchValue !== "") {
            $condition .= "a.id LIKE '%$searchValue%' OR ";
            $condition .= "a.title LIKE '%$searchValue%' OR ";
            $condition .= "a.price LIKE '%$searchValue%' OR ";
            $condition .= "a.created LIKE '%$searchValue%' OR ";
        } else if ($searchType === "particular") {
            if ($id !== "") {
                $condition .= "a.id LIKE '%$id%' OR ";
            }
            if ($title !== "") {
                $condition .= "a.title LIKE '%$title%' OR ";
            }
            if ($price !== "") {
                $condition .= "a.price LIKE '%$price%' OR ";   
            }
        }

        if ($international === true) {
            if ($condition === "") {
                $condition = "1 = 1 AND a.departament = '' AND a.province = '' AND a.district = ''";
            } else {
                $condition = substr($condition, 0, -3);
                $condition .= " AND a.departament = '' AND a.province = '' AND a.district = ''";
            }
        } else {
            if ($condition === "") {
                $condition = "1 = 1 AND a.departament != '' AND a.province != '' AND a.district != ''";
            } else {
                $condition = substr($condition, 0, -3);
                $condition .= " AND a.departament != '' AND a.province != '' AND a.district != ''";
            }
        }

        $sqlFindAllProperties = "SELECT SQL_CALC_FOUND_ROWS
                                    a.id AS `idPropiedad`,
                                    a.id_publication_type AS `idTipoDePublicacion`,
                                    a.id_seller AS `idVendedor`,
                                    a.id_property_type AS `idTipoPropiedad`,
                                    a.title AS `titulo`,
                                    a.address AS `direccion`,
                                    a.departament AS `departamento`,
                                    a.province AS `provincia`,
                                    a.district AS `distrito`,
                                    a.area AS `area`,
                                    a.latitude AS `latitud`,
                                    a.longitude AS `longitud`,
                                    a.description AS `descripcion`,
                                    a.url_video AS `urlVideo`,
                                    a.enterprice_name AS `empresa`,
                                    CONCAT(a.price, ' ', a.currency) AS `precio`,
                                    DATE_FORMAT(a.created, '%d-%m-%Y') AS `fechaDeCreacion`
                                FROM `ejmeenet_blog`.`wp_properties` a
                                    WHERE $condition
                                        ORDER BY a.id $order LIMIT $limit OFFSET $offset";

        $execQuery = $dataSource->execSelectAndCountQuery($sqlFindAllProperties);
        print_r($execQuery);
    }

    public function findAllResources(DataTransferResource $dtoResource) {
        $condition = "";
        $dataSource = new DataSourceProperty();

        $idProperty = $dtoResource->getIdProperty();
        $created = $dtoResource->getCreatedDate();
        $searchType = $dtoResource->getSearchType();
        $searchValue = $dtoResource->getSearchValue();
        $order = $dtoResource->getOrder();
        $limit = $dtoResource->getLimit();
        $offset = $dtoResource->getOffset();
        $international = $dtoResource->getInternational();

        if ($searchType === "all" && $searchValue !== "") {
            $condition .= "b.title LIKE '%$searchValue%' OR ";
            // $condition .= "a.id_property LIKE '%$searchValue%' OR ";
            $condition .= "a.created LIKE '%$searchValue%' OR ";
        } else if ($searchType === "particular") {
            if ($idProperty !== "") {
                $condition .= "a.id_property = $idProperty   ";
            }
            // if ($created !== "") {
            //     $condition .= "a.created LIKE '%$created%' OR ";
            // }
        }

         if ($international === 'true') {
            if ($condition === "") {
                $condition = "1 = 1 AND b.departament = '' AND b.province = '' AND b.district = ''";
            } else {
                $condition = substr($condition, 0, -3);
                $condition .= " AND b.departament = '' AND b.province = '' AND b.district = ''";
            }
        } else {
            if ($condition === "") {
                $condition = "1 = 1 AND b.departament != '' AND b.province != '' AND b.district != ''";
            } else {
                $condition = substr($condition, 0, -3);
                $condition .= " AND b.departament != '' AND b.province != '' AND b.district != ''";
            }
        }

        $sqlFindAllResources = "SELECT
                                    SQL_CALC_FOUND_ROWS a.id AS `idRecurso`,
                                    a.id_property AS `idPropiedad`,
                                    a.id_type_resource AS `idTipoDeRecurso`,
                                    a.name AS `nombreDeRecurso`,
                                    a.url_path AS `urlRecurso`,
                                    b.title AS `titulo`,
                                    b.departament AS `departamento`,
                                    b.province AS `provincia`,
                                    b.district AS `distrito`,
                                    DATE_FORMAT(a.created, '%d-%m-%Y') AS`fechaDeCreacion`
                                FROM `ejmeenet_blog`.`wp_property_resource` a
                                    INNER JOIN `ejmeenet_blog`.`wp_properties` b 
                                        ON b.id = a.id_property WHERE $condition ORDER BY a.id $order LIMIT $limit OFFSET $offset";


        $execQuery = $dataSource->execSelectAndCountQuery($sqlFindAllResources);
        print_r($execQuery);
    }

    public function addResource(DataTransferResource $dtoResource) {
        $prepared = true;
        $response = "";
        $dataSource = new DataSourceProperty();

        $idProperty = $dtoResource->getIdProperty();
        $file = $dtoResource->getFile();

        if (!is_numeric($idProperty)) {
            $response = Utils::response(400, "Id propiedad no es numerico.", true);
            $prepared = false;
        }
        if ($file["size"] === 0 && $file["error"] === 4) {
            $response = Utils::response(400, "No ha insertado recurso aun.", true);
            $prepared = false;
        } else {
            $verifyMimetype = Utils::verifyMimetypeImage($file["name"]);
            if ($verifyMimetype["success"] === true) {
                if (!function_exists('wp_handle_upload')) {
                    require_once(ABSPATH . 'wp-admin/includes/file.php');
                }

                $file['name'] = $verifyMimetype['newName'];
                $uploadedfile = $file;
                $upload_overrides = array('test_form' => false);
                $movefile = wp_handle_upload($uploadedfile, $upload_overrides);
            } else {
                $response = Utils::response(400, "Formato de recurso invalido.", true);
                $prepared = false;
            }
        }
        if ($prepared === true) {
            $getYear = date("Y");
            $getMonth = date("m");

            $reqAddResource = array($idProperty, 1, $file['name'], '/wp-content/uploads/'.$getYear.'/'.$getMonth.'/'.$file['name']);
            $sqlAddResource = "INSERT INTO `ejmeenet_blog`.`wp_property_resource` (id_property, id_type_resource, name, url_path) VALUES (?, ?, ?, ?)";
            $typesAddResource = "iiss";

            if ($dataSource->execInsertQuery($sqlAddResource, $typesAddResource, $reqAddResource)) {
                $response = Utils::response(200, "Recurso registrado con exito.", false);
            } else {
                $response = Utils::response(500, "Error al registrar Recurso.", true);
            }

            print_r($response);
        } else {
            print_r($response);
        }
    }

    // TODO: Eliminar imagen de recurso del server.
    public function deleteOneResource(DataTransferResource $dtoResource) {
        $prepared = true;
        $dataSource = new DataSourceProperty();

        $idResource = $dtoResource->getId();
        $idProperty = $dtoResource->getIdProperty();

        if (!is_numeric($idResource)) {
            $response = array('status' => 400, 'content' => 'Id de recurso invalido.', 'error' => true);
            $prepared = false;
        }
        if (!is_numeric($idProperty)) {
            $response = array('status' => 400, 'content' => 'Id de propiedad invalido.', 'error' => true);
            $prepared = false;
        }

        if ($prepared === true) {
            $req = array($idResource, $idProperty);
            $sqlDelete = "DELETE
                                    FROM `ejmeenet_blog`.`wp_property_resource`
                                        WHERE id = ?
                                            AND id_property = ?";
            $types = 'ii';
            if ($dataSource->execDeleteQuery($sqlDelete, $types, $req)) {
                $response = array("status" => 200, "content" => "Recurso eliminado satisfactoriamente.", "error" => false);
            } else {
                $response = array("status" => 500, "content" => "Error al eliminar recurso.", "error" => true);
            }
            print_r(json_encode($response));
        } else {
            print_r(json_encode($response));
        }
    }

    public function destacadoForCompare() {
        $dataSource = new DataSourceProperty();
        $sqlDestacadoForCompare = "SELECT
                                        a.id_property
                                    FROM `ejmeenet_blog`.`wp_destacado_property` a
                                        INNER JOIN `ejmeenet_blog`.`wp_destacado` b
                                            ON a.id_destacado = b.id";

        $queryResult = json_decode($dataSource->execSelect($sqlDestacadoForCompare), true);
        $arr = array();
        for ($i = 0; $i < count($queryResult); $i++) {
            array_push($arr, $queryResult[$i]['id_property']);
        }
        $separateResult = implode(",", $arr);

        return '('.$separateResult.')';
    }

    public function selectProperties() {
        $dataSource = new DataSourceProperty();
        $destacadosRegister = $this->destacadoForCompare();
        $condition = '';
        if ($destacadosRegister == '()') {
            $condition = '1 = 1';
        } else {
            $condition = "a.id NOT IN $destacadosRegister";
        }
        $sqlSelectProperties = "SELECT
                                    a.id AS `idPropiedad`,
                                    a.title AS `titulo`
                                FROM `ejmeenet_blog`.`wp_properties` a
                                    LEFT OUTER JOIN `ejmeenet_blog`.`wp_destacado_property` b
                                        ON a.id = b.id_property
                                    LEFT OUTER JOIN `ejmeenet_blog`.`wp_destacado` c
                                        ON b.id_destacado = c.id
                                WHERE $condition";
        print_r($dataSource->execSelect($sqlSelectProperties));
        $dataSource->closeConnect();
    }

    public function findOnePositionOnDestacado(DataTransferDestacado $dtoDestacado) {
        $dataSource = new DataSourceProperty();
        $position = $dtoDestacado->getPosition();
        $condition = "a.position = $position";

        $sqlFindOnePositionOnDestacado = "SELECT
                                            a.id AS `idDestacado`,
                                            DATE_FORMAT(a.created, '%d-%m-%Y') AS `fechaDeCreacion`,
                                            a.position AS `posicion`
                                          FROM `ejmeenet_blog`.`wp_destacado` a
                                            INNER JOIN `ejmeenet_blog`.`wp_destacado_property` b
                                                ON a.id = b.`id_destacado` WHERE $condition LIMIT 1";

        $execQuery = $dataSource->execSelect($sqlFindOnePositionOnDestacado);
        return $execQuery;
    }

    public function addDestacado(DataTransferProperty $dtoProperty, DataTransferDestacado $dtoDestacado) {
        $prepared = true;
        $response = "";
        $lastIdDestacado = '';
        $dataSource = new DataSourceProperty();

        $idProperty = $dtoProperty->getId();
        $position = $dtoDestacado->getPosition();

        if (!is_numeric($idProperty)) {
            $response = Utils::response(400, "Id inmueble no es numerico.", true);
            $prepared = false;
        }
        if ($idProperty == 0) {
            $response = Utils::response(400, "Seleccione un inmueble para continuar.", true);
            $prepared = false;
        }
        if (!is_numeric($position)) {
            $response = Utils::response(400, "Posición no es numerico.", true);
            $prepared = false;
        }
        if ($position == 0) {
            $response = Utils::response(400, "Seleccione una posición.", true);
            $prepared = false;
        }
        if (count(Utils::decodeJSON($this->findOneProperty($dtoProperty))) !== 1) {
            $response = Utils::response(400, "Inmueble no encontrado para asociar.", true);
            $prepared = false;
        }
       
        if ($prepared === true) {
            $destacadoExist = Utils::decodeJSON($this->findOnePositionOnDestacado($dtoDestacado));
            if (count($destacadoExist) === 1) {
                $destacadoUpdate = $destacadoExist[0]["idDestacado"];
                $reqDestacadoUpdate = array($idProperty, $destacadoUpdate);
                $typesDestacadoUpdate = "ii";
                $sqlDestacadoUpdate = "UPDATE `ejmeenet_blog`.`wp_destacado_property` SET id_property = ? WHERE id = ?";

                if ($dataSource->execInsertQuery($sqlDestacadoUpdate, $typesDestacadoUpdate, $reqDestacadoUpdate)) {
                    $response = Utils::response(200, "Destacado registrado con exito.", false);
                } else {
                    $response = Utils::response(500, "Error al registrar destacado.", true);
                }
            } else {
                $reqDestacado = array($position);
                $sqlDestacado = "INSERT INTO `ejmeenet_blog`.`wp_destacado` (position) VALUES (?)";
                $typeDestacado = "i";

                if ($dataSource->execInsertQuery($sqlDestacado, $typeDestacado, $reqDestacado)) {
                    $lastIdDestacado = $dataSource->lastId();
                    $reqDestacadoProperty = array($lastIdDestacado, $idProperty);
                    $sqlDestacadoProperty = "INSERT INTO `ejmeenet_blog`.`wp_destacado_property` (id_destacado, id_property) VALUES (?, ?)";
                    $typeDestacadoProperty = "ii";

                    if ($dataSource->execInsertQuery($sqlDestacadoProperty, $typeDestacadoProperty, $reqDestacadoProperty)) {
                        $response = Utils::response(200, "Destacado registrado con exito.", false);
                    } else {
                        $response = Utils::response(500, "Error al registrar destacado.", true);
                    }
                } else {
                    $response = Utils::response(500, "Error al registrar destacado.", true);
                }
            }

            print_r($response);
        } else {

            print_r($response);
        }
    }

    public function findOneProperty(DataTransferProperty $dtoProperty) {
        $dataSource = new DataSourceProperty();
        $id = $dtoProperty->getId();
        $condition = "a.id = $id";

        $sqlFindOneProperty = "SELECT
                                    a.id AS `idPropiedad`,
                                    a.id_publication_type AS `idTipoDePublicacion`,
                                    a.title AS `titulo`,
                                    a.address AS `direccion`,
                                    a.departament AS `departamento`,
                                    a.province AS `provincia`,
                                    a.district AS `distrito`,
                                    a.area AS `area`,
                                    a.latitude AS `latitud`,
                                    a.longitude AS `longitud`,
                                    a.enterprice_name AS `empresa`,
                                    a.description AS `descripcion`,
                                    a.url_video AS `urlVideo`, 
                                    CONCAT(a.price, ' ', a.currency) AS `precio`,
                                    DATE_FORMAT(a.created, '%d-%m-%Y') AS `fechaDeCreacion`
                                FROM `ejmeenet_blog`.`wp_properties` a
                                    WHERE $condition LIMIT 1";

        $execQuery = $dataSource->execSelect($sqlFindOneProperty);
        return $execQuery;
    }

    public function deleteOneProperty(DataTransferProperty $dtoProperty) {
        $prepared = true;
        $response = "";
        $dataSource = new DataSourceProperty();

        $idProperty = $dtoProperty->getId();

        if (!is_numeric($idProperty)) {
            $response = Utils::response(400, "Id de inmueble no es numerico.", true);
            $prepared = false;
        }
        if (count(Utils::decodeJSON($this->findOneProperty($dtoProperty))) !== 1) {
            $response = Utils::response(400, "Inmueble no encontrado para eliminar.", true);
            $prepared = false;
        }

        if ($prepared === true) {
            $reqDeleteProperty = array($idProperty);
            $sqlDeleteProperty = "DELETE FROM `ejmeenet_blog`.`wp_properties` WHERE id = ?";
            $typesDeleteProperty = "i";

            if ($dataSource->execDeleteQuery($sqlDeleteProperty, $typesDeleteProperty, $reqDeleteProperty)) {
                $sqlDeletePropertyResource = "DELETE FROM `ejmeenet_blog`.`wp_property_resource` WHERE id_property = ?";
                if ($dataSource->execDeleteQuery($sqlDeletePropertyResource, $typesDeleteProperty, $reqDeleteProperty)) {
                    $response = Utils::response(200, "Inmueble eliminado con exito.", false);  
                } else {
                    $response = Util::response(500, "Error al eliminar recursos.", true);
                }
            } else {
                $response = Util::response(500, "Error al eliminar inmueble.", true);
            }

            print_r($response);
        } else {
            print_r($response);
        }
    }

    public function findAllDestacado(DataTransferProperty $dtoProperty, DataTransferDestacado $dtoDestacado) {
        $condition = "";
        $dataSource = new DataSourceProperty();


        $title = $dtoProperty->getTitle();
        $idDestacado = $dtoDestacado->getId();
        $position = $dtoDestacado->getPosition();
        $searchType = $dtoDestacado->getSearchType();
        $searchValue = $dtoDestacado->getSearchValue();
        $order = $dtoDestacado->getOrder();
        $limit = $dtoDestacado->getLimit();
        $offset = $dtoDestacado->getOffset();


        if ($searchType === "all" && $searchValue !== "") {
            $condition .= "a.id LIKE '%$searchValue%' OR ";
            $condition .= "a.position LIKE '%$searchValue%' OR ";
            $condition .= "c.title LIKE '%$searchValue%' OR ";
        } else if ($searchType === "particular") {
            if ($title !== "") {
                $condition .= "c.title LIKE '%$title%' OR ";
            }
            if ($idDestacado !== "") {
                $condition .= "a.id LIKE '%$idDestacado%' OR ";   
            }
            if ($position !== "") {
                $condition .= "a.position LIKE '%$position%' OR ";   
            }
        }

        if ($condition === "") {
            $condition = "1 = 1";
        } else {
            $condition = substr($condition, 0, -3);
        }

        $sqlFindAllDestacado = "SELECT SQL_CALC_FOUND_ROWS
                                    a.id AS `idDestacado`,
                                    a.position AS `posicion`,
                                    c.title AS `titulo`
                                FROM `ejmeenet_blog`.`wp_destacado` a
                                    INNER JOIN `ejmeenet_blog`.`wp_destacado_property` b
                                        ON a.id = b.id_destacado
                                    INNER JOIN `ejmeenet_blog`.`wp_properties` c
                                        ON b.id_property = c.id
                                WHERE $condition ORDER BY a.id $order LIMIT $limit OFFSET $offset";

        $execQuery = $dataSource->execSelectAndCountQuery($sqlFindAllDestacado);
        print_r($execQuery);
    }

    public function findOnePropertyDestacado(DataTransferDestacado $dtoDestacado) {   
        $dataSource = new DataSourceProperty();
        $id = $dtoDestacado->getId();

        if ($id !== "") {
            $condition = "b.id_destacado = $id";
        }

        $sqlFindOnePropertyDestacado = "SELECT
                                            b.id AS `idPropertyDestacado`,
                                            b.id_destacado AS `idDestacado`,
                                            b.id_property AS `idProperty` 
                                          FROM `ejmeenet_blog`.`wp_destacado` a
                                            INNER JOIN `ejmeenet_blog`.`wp_destacado_property` b
                                                ON a.id = b.`id_destacado` WHERE $condition LIMIT 1";

        $execQuery = $dataSource->execSelect($sqlFindOnePropertyDestacado);
        return $execQuery;
    }

    public function deleteOnePropertyDestacado(DataTransferDestacado $dtoDestacado) {
        $prepared = true;
        $condition = "";
        $findedToDelete = "";
        $dataSource = new DataSourceProperty();

        $idDestacado = $dtoDestacado->getId();
        if (!is_numeric($idDestacado)) {
            $response = Utils::response(400, "Id destacado no es numerico.", true);
            $prepared = false;
        } else {
            $findedToDelete = Utils::decodeJSON($this->findOnePropertyDestacado($dtoDestacado));
        }

        if (count($findedToDelete) !== 1) {
            $response = Utils::response(400, "Inmueble no encontrado para eliminar.", true);
            $prepared = false;
        }

        if ($prepared === true) {
            $idDestacadoProperty = $findedToDelete[0]["idPropertyDestacado"];
            $reqDeletePropertyDestacado = array($idDestacadoProperty);
            $sqlDeletePropertyDestacado = "DELETE FROM `ejmeenet_blog`.`wp_destacado_property` WHERE id = ?";
            $typesDeletePropertyDestacado = "i";

            if ($dataSource->execDeleteQuery($sqlDeletePropertyDestacado, $typesDeletePropertyDestacado, $reqDeletePropertyDestacado)) {
                $response = Utils::response(200, "Destacado eliminado con exito.", false);  
            } else {
                $response = Util::response(500, "Error al eliminar Destacado.", true);
            }

            print_r($response);
        } else {

            print_r($response);
        }
    }

    public function addSeller(DataTransferSeller $dtoSeller) {
        $prepared = true;
        $response = "";
        $dataSource = new DataSourceProperty();

        $name = $dtoSeller->getName();
        $email = $dtoSeller->getEmail();
        $phone = $dtoSeller->getPhone();

        if (empty($name) && $name === "") {
            $response = Utils::response(400, "Campo Nombre requerido.", true);
            $prepared = false;
        }
        if (empty($phone) && $phone === "") {
            $response = Utils::response(400, "Campo Telefono requerido.", true);
            $prepared = false;
        } else {
            if (!is_numeric($phone)) {
                $response = Utils::response(400, "Campo Telefono invalido.", true);
                $prepared = false;
            }
        }
        if (empty($email) && $email === "") {
            $response = Utils::response(400, "Campo Correo requerido.", true);
            $prepared = false;
        } else {
            if (Utils::decodeJSON($this->findOneSeller($dtoSeller))[0]["correo"] === $email) {
                $response = Utils::response(400, "El Correo insertado ya existe.", true);
                $prepared = false;
            }    
        }
        
        if ($prepared === true) {
            $reqAddSeller = array($name, $email, $phone);
            $typesAddSeller = "sss";
            $sqlAddSeller = "INSERT INTO `ejmeenet_blog`.`wp_users_sellers` (name, email, phone) VALUES (?, ?, ?)";

            if ($dataSource->execInsertQuery($sqlAddSeller, $typesAddSeller, $reqAddSeller)) {
                $response = Utils::response(200, "Vendedor registrado con exito.", true);
            } else {
                $response = Utils::response(500, "Error al registrar Vendedor.", true);
            }

            print_r($response);
        } else {

            print_r($response);
        }
    }

    public function findOneSeller(DataTransferSeller $dtoSeller) {
        $dataSource = new DataSourceProperty();
        $condition = "";
        $operation = $dtoSeller->getOps();
        $id = $dtoSeller->getId();
        $email = $dtoSeller->getEmail();

        if ($operation === "UPDATE") {
            if (!empty($id) && $id !== "") {
                $condition = "a.id = $id";
            }
        } else {
            if (!empty($email) && $email !== "") {
                $condition = "a.email = '$email'";
            }
        }

        $sqlFindOneSeller = "SELECT
                                a.id AS `idVendedor`,
                                a.name AS `nombre`,
                                a.email AS `correo`,
                                a.phone AS `telefono`,
                                a.created AS `fechaDeCreacion`
                            FROM `ejmeenet_blog`.`wp_users_sellers` a
                                WHERE $condition LIMIT 1";

        $execQuery = $dataSource->execSelect($sqlFindOneSeller);
        return $execQuery;
    }

    public function findAllSeller(DataTransferSeller $dtoSeller) {
        $condition = "";
        $dataSource = new DataSourceProperty();

        $name = $dtoSeller->getName();
        $email = $dtoSeller->getEmail();
        $phone = $dtoSeller->getPhone();
        $searchType = $dtoSeller->getSearchType();
        $searchValue = $dtoSeller->getSearchValue();
        $order = $dtoSeller->getOrder();
        $limit = $dtoSeller->getLimit();
        $offset = $dtoSeller->getOffset();

        if ($searchType === "all" && $searchValue !== "") {
            $condition .= "a.name LIKE '%$searchValue%' OR ";
            $condition .= "a.email LIKE '%$searchValue%' OR ";
            $condition .= "a.phone LIKE '%$searchValue%' OR ";
        } else if ($searchType === "particular") {
            if ($name !== "") {
                $condition .= "c.name LIKE '%$name%' OR ";
            }
            if ($email !== "") {
                $condition .= "a.email LIKE '%$email%' OR ";   
            }
            if ($phone !== "") {
                $condition .= "a.phone LIKE '%$phone%' OR ";   
            }
        }

        if ($condition === "") {
            $condition = "1 = 1";
        } else {
            $condition = substr($condition, 0, -3);
        }

        $sqlFindAllSeller = "SELECT SQL_CALC_FOUND_ROWS
                                a.id AS `idVendedor`,
                                a.name AS `nombre`,
                                a.email AS `email`,
                                a.phone AS `telefono`,
                                a.created AS `fechaDeCreacion`
                            FROM `ejmeenet_blog`.`wp_users_sellers` a
                            WHERE $condition ORDER BY a.id $order LIMIT $limit OFFSET $offset";

        $execQuery = $dataSource->execSelectAndCountQuery($sqlFindAllSeller);
        print_r($execQuery);
    }

    public function deleteOneSeller(DataTransferSeller $dtoSeller) {
        $prepared = true;
        $condition = "";
        $findedToDelete = "";
        $dataSource = new DataSourceProperty();

        $id = $dtoSeller->getId();
        if (!is_numeric($id)) {
            $response = Utils::response(400, "Id vendedor no es numerico.", true);
            $prepared = false;
        } else {
            $findedToDelete = Utils::decodeJSON($this->findOneSeller($dtoSeller));
        }
        if (count($findedToDelete) !== 1) {
            $response = Utils::response(400, "Id Vendedor no existe.", true);
            $prepared = false;
        }

        if ($prepared === true) {
            $idSeller = $findedToDelete[0]["idVendedor"];
            $reqDeleteSeller = array($idSeller);
            $sqlDeleteSeller = "DELETE FROM `ejmeenet_blog`.`wp_users_sellers` WHERE id = ?";
            $typesDeleteSeller = "i";

            if ($dataSource->execDeleteQuery($sqlDeleteSeller, $typesDeleteSeller, $reqDeleteSeller)) {
                $response = Utils::response(200, "Vendedor eliminado con exito.", false);  
            } else {
                $response = Util::response(500, "Error al eliminar Vendedor.", true);
            }

            print_r($response);
        } else {

            print_r($response);
        }
    }

    public function updateSeller(DataTransferSeller $dtoSeller) {
        $prepared = true;
        $response =  "";
        $condition = "";
        $findedToUpdate = "";
        $reqUpdate = array();
        $typesParamUpdate = "";
        $dataSource = new DataSourceProperty();

        $id = $dtoSeller->getId();
        $name = $dtoSeller->getName();
        $email = $dtoSeller->getEmail();
        $phone = $dtoSeller->getPhone();

        if (!is_numeric($id)) {
            $response = Util::response(400, "Id no es un numerico.", true);
            $prepared = false;
        } else {
            $findedToUpdate = Utils::decodeJSON($this->findOneSeller($dtoSeller));
        }
        if (!empty($name) && $name !== "") {
            $condition .= "name = ?, ";
            array_push($reqUpdate, $name);
            $typesParamUpdate .= "s";
        }
        if (!empty($phone) && $phone !== "") {
            if (is_numeric($phone)) {
                $condition .= "phone = ?, ";
                array_push($reqUpdate, $phone);
                $typesParamUpdate .= "s";
            } else {
                $response = Util::response(400, "Campo Telefono invalido.", true);
                $prepared = false;
            }
        }
        if (!empty($email) && $email !== "") {
            $condition .= "email = ?, ";
            array_push($reqUpdate, $email);
            $typesParamUpdate .= "s";
        }
        if (count($findedToUpdate) !== 1) {
            $response = Utils::response(400, "Id Vendedor no existe.", true);
            $prepared = false;
        }

        if ($prepared === true) {
            $condition = substr($condition, 0, -2);
            $sqlUpdateSeller = "UPDATE `ejmeenet_blog`.`wp_users_sellers` SET $condition WHERE id = $id";

            if ($dataSource->execInsertQuery($sqlUpdateSeller, $typesParamUpdate, $reqUpdate)) {
                $response = Util::response(200, "Vendedor actualizado con exito.", false);
            } else {
                $response = Util::response(500, "Error al actualizar Vendedor.", true);
            }

            print_r($response);
        } else {

            print_r($response);
        }
    }

    public function getSelectSellers(DataTransferSeller $dtoSeller) {
        $dataSource = new DataSourceProperty();
        $destacadosRegister = $this->destacadoForCompare();
        $condition = "1 = 1";
        $sqlSelectSellers = "SELECT
                                a.id AS `idVendedor`,
                                a.name AS `nombre`
                            FROM `ejmeenet_blog`.`wp_users_sellers` a
                                WHERE $condition";
        print_r($dataSource->execSelect($sqlSelectSellers));
    }

    public function updateProperty(DataTransferProperty $dtoProperty) {
        $prepared = true;
        $response =  "";
        $condition = "";
        $findedToUpdate = "";
        $reqUpdate = array();
        $typesParamUpdate = "";
        $dataSource = new DataSourceProperty();

        $id = $dtoProperty->getId();
        $title = $dtoProperty->getTitle();
        $typeProperty = $dtoProperty->getPublicationType();
        $price = $dtoProperty->getPrice();
        $address = $dtoProperty->getAddress();
        $departament = $dtoProperty->getDepartament();
        $province = $dtoProperty->getProvince();
        $district = $dtoProperty->getDistrict();
        $area = $dtoProperty->getArea();
        $latitude = $dtoProperty->getLatitude();
        $longitude = $dtoProperty->getLongitude();
        $enterprice = $dtoProperty->getEnterprice();
        $video = $dtoProperty->getVideo();
        $description = $dtoProperty->getDescription();
        $currency = $dtoProperty->getCurrency();
        $idSeller = $dtoProperty->getIdSeller();
        $propertyType = $dtoProperty->getPropertyType();

        if (!is_numeric($id)) {
            $response = Util::response(400, "Id no es un numerico.", true);
            $prepared = false;
        } else {
            $findedToUpdate = Utils::decodeJSON($this->findOneProperty($dtoProperty));
        }

        if (count($findedToUpdate) !== 1) {
            $response = Utils::response(400, "Id Propiedad no existe.", true);
            $prepared = false;
        }
        if (!empty($title) && $title !== '') {
            $condition .= "title = ?, ";
            array_push($reqUpdate, $title);
            $typesParamUpdate .= "s";
        }
        if (!empty($typeProperty) && $typeProperty !== 0) {
            $condition .= "id_publication_type = ?, ";
            array_push($reqUpdate, $typeProperty);
            $typesParamUpdate .= "i";
        }
        if (!empty($price) && $price !== '' && is_numeric($price)) {
            if (is_numeric($price)) {
                $condition .= "price = ?, ";
                array_push($reqUpdate, $price);
                $typesParamUpdate .= "i";
            } else {
                $response = Utils::response(400, "Campo Precio invalido.", true);
                $prepared = false;
            }
        }
        if (!empty($address) && $address !== '') {
            $condition .= "address = ?, ";
            array_push($reqUpdate, $address);
            $typesParamUpdate .= "s";
        }
        if (!empty($departament) && $departament !== 0 && $departament !== "") {
            $condition .= "departament = ?, ";
            array_push($reqUpdate, $departament);
            $typesParamUpdate .= "s";
        }
        if (!empty($province) && $province !== 0 && $province !== "") {
            $condition .= "province = ?, ";
            array_push($reqUpdate, $province);
            $typesParamUpdate .= "s";
        }
        if (!empty($district) && $district !== 0 && $district !== "") {
            $condition .= "district = ?, ";
            array_push($reqUpdate, $district);
            $typesParamUpdate .= "s";
        }
        if (!empty($area) && $area !== '') {
            $condition .= "area = ?, ";
            array_push($reqUpdate, $area);
            $typesParamUpdate .= "s";
        }
        if (!empty($longitude) && $longitude !== '' && is_numeric($longitude)) {
            if (is_numeric($longitude)) {
                $condition .= "longitude = ?, ";
                array_push($reqUpdate, $longitude);
                $typesParamUpdate .= "s";
            } else {
                $response = Utils::response(400, "Campo Longitud invalido.", true);
                $prepared = false;
            }
        }
        if (!empty($latitude) && $latitude !== '' && is_numeric($latitude)) {
            if (is_numeric($latitude)) {
                $condition .= "latitude = ?, ";
                array_push($reqUpdate, $latitude);
                $typesParamUpdate .= "s";    
            } else {
                $response = Utils::response(400, "Campo Latitud invalido.", true);
                $prepared = false;
            }
        }
        if (!empty($enterprice) && $enterprice !== '') {
            $condition .= "enterprice_name = ?, ";
            array_push($reqUpdate, $enterprice);
            $typesParamUpdate .= "s";
        }
        if (!empty($video) && $video !== '') {
            $condition .= "url_video = ?, ";
            array_push($reqUpdate, $video);
            $typesParamUpdate .= "s";
        }
        if (!empty($description) && $description !== '') {
            $condition .= "description = ?, ";
            array_push($reqUpdate, $description);
            $typesParamUpdate .= "s";
        }
        if (!empty($idSeller) && $idSeller != 0 && $idSeller !== "") {
            $condition .= "id_seller = ?, ";
            array_push($reqUpdate, $idSeller);
            $typesParamUpdate .= "i";
        }
        if ($propertyType != 0) {
            $condition .= "id_property_type = ?, ";
            array_push($reqUpdate, $propertyType);
            $typesParamUpdate .= "i";
        }

        if ($prepared == true) {
            $condition = substr($condition, 0, -2);
            $sqlUpdateProperty = "UPDATE `ejmeenet_blog`.`wp_properties` SET $condition WHERE id = $id";

            if ($dataSource->execInsertQuery($sqlUpdateProperty, $typesParamUpdate, $reqUpdate)) {
                $response = Util::response(200, "Propiedad actualizado con exito.", false);
            } else {
                $response = Util::response(500, "Error al actualizar Propiedad.", true);
            }

            print_r($response);
            
        } else {
            print_r(json_encode($response));
        }
    }

    public function addTypeProperty(DataTransferTypeProperty $dtoTypeProperty) {
        $prepared = true;
        $response = "";
        $findedToCreate = "";
        $dataSource = new DataSourceProperty();

        $name = $dtoTypeProperty->getName();

        if (empty($name) && $name === "") {
            $response = Utils::response(400, "Campo Nombre requerido.", true);
            $prepared = false;
        } else {
            $findedToCreate = Utils::decodeJSON($this->findOneTypeProperty($dtoTypeProperty));
        }
        if ($findedToCreate !== "" && count($findedToCreate) === 1) {
            $response = Utils::response(400, "Tipo Propiedad ya existe.", true);
            $prepared = false;
        }

        if ($prepared === true) {
            $reqAddTypeProperty = array($name);
            $typesAddTypeProperty = "s";
            $sqlAddTypeProperty = "INSERT INTO `ejmeenet_blog`.`wp_property_types` (name) VALUES (?)";

            if ($dataSource->execInsertQuery($sqlAddTypeProperty, $typesAddTypeProperty, $reqAddTypeProperty)) {
                $response = Utils::response(200, "Tipo de Propiedad registrada con exito.", false);
            } else {
                $response = Utils::response(500, "Error al registrar Tipo de Propiedad.", true);
            }

            print_r($response);
        } else {

            print_r($response);
        }
    }

    public function findAllTypeProperty(DataTransferTypeProperty $dtoTypeProperty) {
        $condition = "";
        $dataSource = new DataSourceProperty();
        $name = $dtoTypeProperty->getName();
        $searchType = $dtoTypeProperty->getSearchType();
        $searchValue = $dtoTypeProperty->getSearchValue();
        $order = $dtoTypeProperty->getOrder();
        $limit = $dtoTypeProperty->getLimit();
        $offset = $dtoTypeProperty->getOffset();

        if ($searchType === "all" && $searchValue !== "") {
            $condition .= "a.name LIKE '%$searchValue%' OR ";
        } else if ($searchType === "particular") {
            if ($name !== "") {
                $condition .= "c.name LIKE '%$name%' OR ";
            }
        }

        if ($condition === "") {
            $condition = "1 = 1";
        } else {
            $condition = substr($condition, 0, -3);
        }

        $sqlFindAllTypeProperty = "SELECT SQL_CALC_FOUND_ROWS
                                a.id AS `idTipoPropiedad`,
                                a.name AS `nombre`,
                                a.created AS `fechaDeCreacion`
                            FROM `ejmeenet_blog`.`wp_property_types` a
                            WHERE $condition ORDER BY a.id $order LIMIT $limit OFFSET $offset";

        $execQuery = $dataSource->execSelectAndCountQuery($sqlFindAllTypeProperty);
        print_r($execQuery);
    }

    public function findOneTypeProperty(DataTransferTypeProperty $dtoTypeProperty) {
        $dataSource = new DataSourceProperty();
        $condition = "";
        $operation = $dtoTypeProperty->getOps();
        $id = $dtoTypeProperty->getId();
        $name = $dtoTypeProperty->getName();

        if ($operation === "ID") {
            if (!empty($id) && $id !== "") {
                $condition = "a.id = $id";
            }
        } else {
            if (!empty($name) && $name !== "") {
                $condition = "a.name = '$name'";
            }
        }

        $sqlFindOneTypeProperty = "SELECT
                                a.id AS `idTipoPropiedad`,
                                a.name AS `nombre`,
                                a.created AS `fechaDeCreacion`
                            FROM `ejmeenet_blog`.`wp_property_types` a
                                WHERE $condition LIMIT 1";

        $execQuery = $dataSource->execSelect($sqlFindOneTypeProperty);
        return $execQuery;   
    }

    public function updateTypeProperty(DataTransferTypeProperty $dtoTypeProperty) {
        $prepared = true;
        $response =  "";
        $condition = "";
        $findedToUpdate = "";
        $reqUpdate = array();
        $typesParamUpdate = "";
        $dataSource = new DataSourceProperty();

        $id = $dtoTypeProperty->getId();
        $name = $dtoTypeProperty->getName();

        if (!is_numeric($id)) {
            $response = Util::response(400, "Id no es un numerico.", true);
            $prepared = false;
        } else {
            $findedToUpdate = Utils::decodeJSON($this->findOneTypeProperty($dtoTypeProperty));
        }

        if (count($findedToUpdate) !== 1) {
            $response = Utils::response(400, "Id Propiedad no existe.", true);
            $prepared = false;
        }
        if (!empty($name) && $name !== '') {
            $condition .= "name = ?, ";
            array_push($reqUpdate, $name);
            $typesParamUpdate .= "s";
        } 

        if ($prepared == true) {
            $condition = substr($condition, 0, -2);
            $sqlUpdateTypeProperty = "UPDATE `ejmeenet_blog`.`wp_property_types` a SET $condition WHERE id = $id";

            if ($dataSource->execInsertQuery($sqlUpdateTypeProperty, $typesParamUpdate, $reqUpdate)) {
                $response = Utils::response(200, "Tipo Propiedad actualizado con exito.", false);
            } else {
                $response = Utils::response(500, "Error al actualizar Tipo Propiedad.", true);
            }

            print_r($response);
            
        } else {
            print_r(json_encode($response));
        }
    }

    public function deleteTypeProperty(DataTransferTypeProperty $dtoTypeProperty) {
        $prepared = true;
        $condition = "";
        $findedToDelete = "";
        $dataSource = new DataSourceProperty();

        $id = $dtoTypeProperty->getId();
        if (!is_numeric($id)) {
            $response = Utils::response(400, "Id Tipo Propiedad no es numerico.", true);
            $prepared = false;
        } else {
            $findedToDelete = Utils::decodeJSON($this->findOneTypeProperty($dtoTypeProperty));
        }
        if (count($findedToDelete) !== 1) {
            $response = Utils::response(400, "Id Tipo Propiedad no existe.", true);
            $prepared = false;
        }

        if ($prepared === true) {
            $idTypeProperty = $findedToDelete[0]["idTipoPropiedad"];
            $reqDeleteTypeProperty = array($idTypeProperty);
            $sqlDeleteTypeProperty = "DELETE FROM `ejmeenet_blog`.`wp_property_types` WHERE id = ?";
            $typesDeleteTypeProperty = "i";

            if ($dataSource->execDeleteQuery($sqlDeleteTypeProperty, $typesDeleteTypeProperty, $reqDeleteTypeProperty)) {
                $response = Utils::response(200, "Tipo Propiedad eliminado con exito.", false);  
            } else {
                $response = Util::response(500, "Error al eliminar Tipo Propiedad.", true);
            }

            print_r($response);
        } else {

            print_r($response);
        }
    }

    public function fillSelectTypeProperty() {
        $dataSource = new DataSourceProperty();
        $condition = "1 = 1";
        $sqlSelectTypeProperty = "SELECT
                                a.id AS `idTipoPropiedad`,
                                a.name AS `nombre`
                            FROM `ejmeenet_blog`.`wp_property_types` a
                                WHERE $condition";
        print_r($dataSource->execSelect($sqlSelectTypeProperty));
    }

}