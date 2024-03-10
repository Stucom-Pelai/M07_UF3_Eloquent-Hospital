<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\wsdl2php\DepartmentType;

class ResponseController
{
    /**
     * Calculate the circumference  of a circle with given radius
     *
     * @param float $radius
     * @return float
     */
    public function calculateCircleCircumference($radius)
    {
        return 2 * 3.14 * $radius;
    }

    /**
     * Calculate the area of a circle with given radius
     *
     * @param float $radius
     * @return float
     */
    public function calculateCircleArea($radius)
    {
        return 3.14 * $radius * $radius;
    }

    public function getDepartment($departmentId)
    {
        $department = department::where('id', $departmentId)->firstOrFail();
        $departmentype = new DepartmentType($department->name, "phone", $departmentId, 5);
        return $departmentype;

        // Convert PHP object to SimpleXMLElement
        // $xmlElement = new SimpleXMLElement('<DepartmentType xmlns="http://hospital.example.com"/>');
    //     $xmlElement = new \SimpleXMLElement('<DepartmentType xmlns="http://hospital.example.com"/>');
    //     $xmlElement->addChild('DepartmentName', $departmentype->DepartmentName);
    //     $xmlElement->addChild('DepartmentPhone', "12345");
    //     $xmlElement->addChild('DeptartID', $departmentype->DeptartID);
    //     $xmlElement->addChild('useWard', 5);

    //    // Convert SimpleXMLElement to a formatted XML string
    //    $formattedXml = $xmlElement->asXML();

    //     return $formattedXml;
    }
}
