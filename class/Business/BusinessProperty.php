<?php

require_once(dirname( __FILE__ ).'/../DataAccess/DataAccessProperty.php');
require_once(dirname( __FILE__ ).'/../DataTransfer/DataTransferProperty.php');
require_once(dirname( __FILE__ ).'/../DataTransfer/DataTransferDestacado.php');
require_once(dirname( __FILE__ ).'/../DataTransfer/DataTransferResource.php');
require_once(dirname( __FILE__ ).'/../DataTransfer/DataTransferSeller.php');
require_once(dirname( __FILE__ ).'/../DataTransfer/DataTransferTypeProperty.php');
require_once(dirname( __FILE__ ).'/../Utils.php');

class BusinessProperty {

	public static function getTask($task) {
		$dtoProperty = new DataTransferProperty();
		$dtoDestacado = new DataTransferDestacado();
		$dtoResource = new DataTransferResource();
		$dtoSeller = new DataTransferSeller();
		$dtoTypeProperty = new DataTransferTypeProperty();
		$daoProperty = new DataAccessProperty();
		
		switch($task) {
			case "CREATE":

			$dtoProperty->setTitle($_POST['titulo']);
			$dtoProperty->setPublicationType($_POST['tipoPropiedad']);
			$dtoProperty->setPrice($_POST['precio']);
			$dtoProperty->setAddress($_POST['direccion']);
			$dtoProperty->setDepartament($_POST['departamento']);
			$dtoProperty->setProvince($_POST['provincia']);
			$dtoProperty->setDistrict($_POST['distrito']);
			$dtoProperty->setArea($_POST['area']);
			$dtoProperty->setLatitude($_POST['latitud']);
			$dtoProperty->setLongitude($_POST['longitud']);
			$dtoProperty->setVideo($_POST['urlVideo']);
			$dtoProperty->setEnterprice($_POST['empresa']);
			$dtoProperty->setDescription($_POST['descripcion']);
			$dtoProperty->setCurrency('$');
			$dtoProperty->setImage($_FILES['imagen']);
			$dtoProperty->setIdSeller($_POST["vendedor"]);
			$dtoProperty->setPropertyType($_POST["tipoDePropiedad"]);

			$daoProperty->createProperty($dtoProperty);

				break;
			case "FIND_ALL":

			$searchType = $_GET["searchType"] ? $_GET["searchType"] : "all";

			$dtoProperty->setSearchType($searchType);
			$dtoProperty->setSearchValue($_GET["search"]);
			$dtoProperty->setId($_GET["id"]);
			$dtoProperty->setTitle($_GET["titulo"]);
			$dtoProperty->setTitle($_GET["precio"]);
			$dtoProperty->setOrder($_GET["order"]);
			$dtoProperty->setLimit($_GET["limit"]);
			$dtoProperty->setOffset($_GET["offset"]);

			$dtoProperty->setInternational(false);

			$daoProperty->findAllProperties($dtoProperty);
			
				break;
			case "FILL_SELECT_PROPERTIES":

				$daoProperty->selectProperties();

				break;
			case "ADD_DESTACADO":
			if (isset($_POST['selectInmueble']) && isset($_POST['selectPosicion'])) {
				$dtoProperty->setId($_POST['selectInmueble']);
				$dtoDestacado->setPosition($_POST['selectPosicion']);

				$daoProperty->addDestacado($dtoProperty, $dtoDestacado);
			} else {
				print_r(Utils::response(400, "Formulario incompleto.", true));
			}
				break;
			case "FIND_ALL_RESOURCES":

			$searchType = $_GET["searchType"] ? $_GET["searchType"] : "all";

			$dtoResource->setSearchType($searchType);
			$dtoResource->setSearchValue($_GET["search"]);
			$dtoResource->setIdProperty($_GET["idProperty"]);
			$dtoResource->setCreatedDate($_GET["createdDate"]);
			$dtoResource->setOrder($_GET["order"]);
			$dtoResource->setLimit($_GET["limit"]);
			$dtoResource->setOffset($_GET["offset"]);

			$dtoResource->setInternational($_GET["international"]);

			$daoProperty->findAllResources($dtoResource);

				break;
			case "DELETE_ONE_RESOURCE":
			if (isset($_GET['idRecurso']) && isset($_GET['idPropiedad'])) {
				$dtoResource->setId($_GET['idRecurso']);
				$dtoResource->setIdProperty($_GET['idPropiedad']);

				$daoProperty->deleteOneResource($dtoResource);
			}
				break;
			case "ADD_RESOURCE":
			if (isset($_GET["idProperty"]) && isset($_FILES["modalNewResource"])) {
				$dtoResource->setIdProperty($_GET["idProperty"]);
				$dtoResource->setFile($_FILES["modalNewResource"]);

				$daoProperty->addResource($dtoResource);

			} else {
				print_r(Utils::response(400, "Formulario incompleto.", true));
			}
				break;
			case "DELETE_ONE_PROPERTY":
			if (isset($_GET["idProperty"])) {
				$dtoProperty->setId($_GET["idProperty"]);

				$daoProperty->deleteOneProperty($dtoProperty);
			} else {
				print_r(Utils::response(400, "Formulario incompleto.", true));
			}
				break;
			case "FIND_ALL_DESTACADO":

			$searchType = $_GET["searchType"] ? $_GET["searchType"] : "all";

			$dtoDestacado->setSearchType($searchType);
			$dtoDestacado->setSearchValue($_GET["search"]);
			$dtoProperty->setTitle($_GET["titulo"]);
			$dtoDestacado->setId($_GET["idDestacado"]);
			$dtoDestacado->setPosition($_GET["posicion"]);
			$dtoDestacado->setOrder($_GET["order"]);
			$dtoDestacado->setLimit($_GET["limit"]);
			$dtoDestacado->setOffset($_GET["offset"]);

			$daoProperty->findAllDestacado($dtoProperty, $dtoDestacado);
				break;
			case "DELETE_ONE_DESTACADO":
			if (isset($_GET['idDestacado'])) {
				$dtoDestacado->setId($_GET['idDestacado']);

				$daoProperty->deleteOnePropertyDestacado($dtoDestacado);

			} else {
				print_r(Utils::response(400, "Formulario incompleto.", true));
			}
				break;
			case "ADD_SELLER":
			if (isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST["telefono"])) {
				$dtoSeller->setName($_POST["nombre"]);
				$dtoSeller->setEmail($_POST["correo"]);
				$dtoSeller->setPhone($_POST["telefono"]);

				$daoProperty->addSeller($dtoSeller);
			} else {
				print_r(Utils::response(400, "Formulario incompleto.", true));
			}
				break;
			case "FIND_ALL_SELLER":

			$searchType = $_GET["searchType"] ? $_GET["searchType"] : "all";

			$dtoSeller->setSearchType($searchType);
			$dtoSeller->setName($_GET["nombre"]);
			$dtoSeller->setEmail($_GET["correo"]);
			$dtoSeller->setPhone($_GET["telefono"]);
			$dtoSeller->setSearchValue($_GET["search"]);
			$dtoSeller->setOrder($_GET["order"]);
			$dtoSeller->setLimit($_GET["limit"]);
			$dtoSeller->setOffset($_GET["offset"]);

			$daoProperty->findAllSeller($dtoSeller);
				break;
			case "DELETE_ONE_SELLER":
			if ($_GET["idSeller"]) {
				$dtoSeller->setOps("UPDATE");
				$dtoSeller->setId($_GET["idSeller"]);
				$daoProperty->deleteOneSeller($dtoSeller);
			} else {
				print_r(Utils::response(400, "Formulario incompleto.", true));	
			}
				break;
			case "UPDATE_SELLER":
			if (isset($_GET["idSeller"])) {
				$dtoSeller->setOps("UPDATE");
				$dtoSeller->setId($_GET["idSeller"]);
				$dtoSeller->setName($_POST["modalEditNombre"]);
				$dtoSeller->setEmail($_POST["modalEditCorreo"]);
				$dtoSeller->setPhone($_POST["modalEditTelefono"]);

				$daoProperty->updateSeller($dtoSeller);
			} else {
				print_r(Utils::response(400, "Formulario incompleto.", true));
			}
				break;
			case "FILL_SELECT_SELLER":
			$daoProperty->getSelectSellers($dtoSeller);
				break;
			case "UPDATE_PROPERTY":
			if ($_GET["idProperty"]) {

				$dtoProperty->setId($_GET["idProperty"]);
				$dtoProperty->setTitle($_POST['titulo']);
				$dtoProperty->setPublicationType($_POST['tipoPropiedad']);
				$dtoProperty->setPrice($_POST['precio']);
				$dtoProperty->setAddress($_POST['direccion']);
				$dtoProperty->setDepartament($_POST['departamento']);
				$dtoProperty->setProvince($_POST['provincia']);
				$dtoProperty->setDistrict($_POST['distrito']);
				$dtoProperty->setArea($_POST['area']);
				$dtoProperty->setLatitude($_POST['latitud']);
				$dtoProperty->setLongitude($_POST['longitud']);
				$dtoProperty->setEnterprice($_POST['empresa']);
				$dtoProperty->setVideo($_POST['video']);
				$dtoProperty->setDescription($_POST['descripcion']);
				$dtoProperty->setCurrency('$');
				$dtoProperty->setIdSeller($_POST["vendedor"]);
				$dtoProperty->setPropertyType($_POST["tipoDePropiedad"]);

				$daoProperty->updateProperty($dtoProperty);

			} else {
				print_r(Utils::response(400, "Formulario incompleto.", true));
			}
				break;
			case "ADD_TYPE_PROPERTY":
			if (isset($_POST["nombre"])) {

				$dtoTypeProperty->setName($_POST["nombre"]);
				$dtoTypeProperty->setOps("CREATE");
				$daoProperty->addTypeProperty($dtoTypeProperty);

			} else {
				print_r(Utils::response(400, "Formulario incompleto.", true));
			}
				break;
			case "FIND_ALL_TYPE_PROPERTY":

			$searchType = $_GET["searchType"] ? $_GET["searchType"] : "all";

			$dtoTypeProperty->setSearchType($searchType);
			$dtoTypeProperty->setName($_GET["nombre"]);
			$dtoTypeProperty->setSearchValue($_GET["search"]);
			$dtoTypeProperty->setOrder($_GET["order"]);
			$dtoTypeProperty->setLimit($_GET["limit"]);
			$dtoTypeProperty->setOffset($_GET["offset"]);

			$daoProperty->findAllTypeProperty($dtoTypeProperty);
				break;
			case "UPDATE_TYPE_PROPERTY":
			if (isset($_GET["idTipoPropiedad"])) {
				$dtoTypeProperty->setId($_GET["idTipoPropiedad"]);
				$dtoTypeProperty->setName($_POST["nombre"]);
				$dtoTypeProperty->setOps("ID");

				$daoProperty->updateTypeProperty($dtoTypeProperty);
			} else {
				print_r(Utils::response(400, "Formulario incompleto.", true));
			}
				break;
			case "DELETE_TYPE_PROPERTY":
			if (isset($_GET["idTipoPropiedad"])) {
				$dtoTypeProperty->setId($_GET["idTipoPropiedad"]);
				$dtoTypeProperty->setOps("ID");

				$daoProperty->deleteTypeProperty($dtoTypeProperty);

			} else {
				print_r(Utils::response(400, "Formulario incompleto.", true));
			}
				break;
			case "FILL_SELECT_TYPE_PROPERTY":

			$daoProperty->fillSelectTypeProperty();

				break;
			case "FIND_ALL_PROPERTY_INTERNATIONAL":


			$searchType = $_GET["searchType"] ? $_GET["searchType"] : "all";

			$dtoProperty->setSearchType($searchType);
			$dtoProperty->setSearchValue($_GET["search"]);
			$dtoProperty->setId($_GET["id"]);
			$dtoProperty->setTitle($_GET["titulo"]);
			$dtoProperty->setTitle($_GET["precio"]);
			$dtoProperty->setOrder($_GET["order"]);
			$dtoProperty->setLimit($_GET["limit"]);
			$dtoProperty->setOffset($_GET["offset"]);

			$dtoProperty->setInternational(true);

			$daoProperty->findAllProperties($dtoProperty);

				break;

			case "FIND_ALL_RESOURCES_INTERNATIONAL":

			$dtoResource->setSearchType($searchType);
			$dtoResource->setSearchValue($_GET["search"]);
			$dtoResource->setIdProperty($_GET["idProperty"]);
			$dtoResource->setCreatedDate($_GET["createdDate"]);
			$dtoResource->setOrder($_GET["order"]);
			$dtoResource->setLimit($_GET["limit"]);
			$dtoResource->setOffset($_GET["offset"]);

			$dtoResource->setInternational('true');

			$daoProperty->findAllResources($dtoResource);
				break;

			default: "Task no admitida";
				break;
			}
		}
	}