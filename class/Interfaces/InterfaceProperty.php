<?php

interface InterfaceProperty {

    public function createProperty(DataTransferProperty $TransferProperty);

    public function findAllProperties(DataTransferProperty $TransferProperty);

    public function findOnePositionOnDestacado(DataTransferDestacado $dtoDestacado);

    public function findAllResources(DataTransferResource $TransferResource);

    public function selectProperties();

    public function addDestacado(DataTransferProperty $TransferProperty, DataTransferDestacado $TransferDestacado);

    public function deleteOneResource(DataTransferResource $TransferResource);

    public function addResource(DataTransferResource $TransferResource);

    public function deleteOneProperty(DataTransferProperty $TransferProperty);

    public function findOneProperty(DataTransferProperty $TransferProperty);

    public function findAllDestacado(DataTransferProperty $TransferProperty, DataTransferDestacado $TransferDestacado);

    public function findOnePropertyDestacado(DataTransferDestacado $dtoDestacado);

    public function deleteOnePropertyDestacado(DataTransferDestacado $dtoDestacado);

    public function addSeller(DataTransferSeller $dtoSeller);

    public function findOneSeller(DataTransferSeller $dtoSeller);

    public function findAllSeller(DataTransferSeller $dtoSeller);

    public function deleteOneSeller(DataTransferSeller $dtoSeller);

    public function updateSeller(DataTransferSeller $dtoSeller);

    public function getSelectSellers(DataTransferSeller $dtoSeller);

    public function updateProperty(DataTransferProperty $dtoProperty);

    public function addTypeProperty(DataTransferTypeProperty $dtoTypeProperty);

    public function fillSelectTypeProperty();

    public function deleteTypeProperty(DataTransferTypeProperty $dtoTypeProperty);

    public function updateTypeProperty(DataTransferTypeProperty $dtoTypeProperty);

    public function findOneTypeProperty(DataTransferTypeProperty $dtoTypeProperty);

    public function findAllTypeProperty(DataTransferTypeProperty $dtoTypeProperty);

}