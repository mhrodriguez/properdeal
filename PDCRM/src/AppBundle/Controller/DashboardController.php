<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/23/16
 * Time: 10:13 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Usuario;
use SaadTazi\GChartBundle\DataTable;

/**
 * Contacto controller.
 *
 * @Route("/dashboard")
 */
class DashboardController extends Controller
{
    /**
     * Lists all Contacto entities.
     *
     * @Route("/", name="dashboard_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $cols = array(); $rows = array(); // 5. Para la grafica de pie de tipo de inmueble

        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        // 1. Grafica Barras Propiedades Registradas
        $tiposInmueble =  $em->getRepository('AppBundle:TipoInmueble')->findAll();

        // ------------------------------------
        $dataTable2 = new DataTable\DataTable();
        $dataTable2->addColumn('id1', 'label 1', 'string');
        $dataTable2->addColumnObject(new DataTable\DataColumn('id2', 'Propiedades', 'number'));
        // ------------------------------------

        for ($counter=0; $counter<count($tiposInmueble); $counter++) {

            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {
                $countInmuebles = $em->getRepository('AppBundle:Inmueble')->findByTipoInmuebleCount($tiposInmueble[$counter]->getIdTipoInmueble());
            }
            else
            {
                $countInmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerTipoInmuebleCount($authuser->getId(), $tiposInmueble[$counter]->getIdTipoInmueble());
            }

            $dataTable2->addRow(array($tiposInmueble[$counter]->getNombre(),
                $countInmuebles
            ));

            // 5. Para gráfica 5
            array_push($rows, array(
                    array(
                        'v' => $tiposInmueble[$counter]->getNombre()
                    ),
                    array(
                        'v' => $countInmuebles,
                        'f' => $countInmuebles . ' propiedades de tipo ' . $tiposInmueble[$counter]->getNombre()
                    )
                )
            );
        }

        // 1.1 Grafica Barras Propiedades Inactivas
        // Si es SUPER ADMIN
        if ($authuser->getRol()->getIdRol() == 4) {
            $inmueblesInactivosVentaCount = $em->getRepository('AppBundle:Inmueble')->findByActivaOperacionCount(false, 1); // venta
            $inmueblesInactivosRentaCount = $em->getRepository('AppBundle:Inmueble')->findByActivaOperacionCount(false, 2); // renta
            $inmueblesInactivosPreventaCount = $em->getRepository('AppBundle:Inmueble')->findByActivaOperacionCount(false, 3); // preventa
        }
        else
        {
            $inmueblesInactivosVentaCount = $em->getRepository('AppBundle:Inmueble')->findByOwnerActivaOperacionCount($authuser->getId(), false, 1); // venta
            $inmueblesInactivosRentaCount = $em->getRepository('AppBundle:Inmueble')->findByOwnerActivaOperacionCount($authuser->getId(), false, 2); // renta
            $inmueblesInactivosPreventaCount = $em->getRepository('AppBundle:Inmueble')->findByOwnerActivaOperacionCount($authuser->getId(), false, 3); // preventa
        }

        $dataTable3 = new DataTable\DataTable();
        $dataTable3->addColumn('id1', 'label 1', 'string');
        $dataTable3->addColumnObject(new DataTable\DataColumn('id2', 'Propiedades', 'number'));

        $dataTable3->addRow(array('Venta',
            $inmueblesInactivosVentaCount)
        );
        $dataTable3->addRow(array('Renta',
            $inmueblesInactivosRentaCount)
        );
        $dataTable3->addRow(array('Preventa',
            $inmueblesInactivosPreventaCount)
        );

        // 2. Top de Prospectos
        $cr = $em->getRepository('AppBundle:Prospecto');
        $cr->setDoctrineManager($em);

        $topProspectadores = $cr->findByOwnerTop3(/*$authuser->getId()*/);

        for ($counter=0; $counter<count($topProspectadores); $counter++) {
            $topProspectador = $topProspectadores[$counter];
            $topProspectador["url_foto"] = Usuario::getWebPathFotoPara($topProspectador["url_foto"]);
        }

        // 2.1. Top de Captadores
        $cr = $em->getRepository('AppBundle:Inmueble');
        $cr->setDoctrineManager($em);

        $topCaptadores = $cr->findByOwnerTop3($authuser->getId());

        for ($counter=0; $counter<count($topCaptadores); $counter++) {
            $topCaptador = $topCaptadores[$counter];
            $topCaptador["url_foto"] = Usuario::getWebPathFotoPara($topCaptador["url_foto"]);
        }

        // 2.1. Top de PROPIEDADES ENVIADAS
        $cr = $em->getRepository('AppBundle:Inmueble');
        $cr->setDoctrineManager($em);
        $topInmueblesEnviados = $cr->findByOwnerEnviadaTop3($authuser->getId());

        // 2.1. Top de PROPIEDADES RECOMENDADAS
        $cr = $em->getRepository('AppBundle:Inmueble');
        $cr->setDoctrineManager($em);

        $topInmueblesRecomendados = $cr->findByOwnerEnviadaTop3($authuser->getId());

        // 3. Ventas - Renta (Gráfica PIE)
        $countInmueblesVentas = $em->getRepository('AppBundle:Inmueble')->findByOwnerOperacionInmuebleCount($authuser->getId(), 1);
        $countInmueblesRentas = $em->getRepository('AppBundle:Inmueble')->findByOwnerOperacionInmuebleCount($authuser->getId(), 2);

        $dataTable1 = new DataTable\DataTable(
            array(
                'cols' =>
                    array(
                        array(
                            'id'    => 'id1',
                            'label' => 'label1',
                            'type'     => 'string'
                        ),
                        array(
                            'id'    => 'id2',
                            'label' => 'label2',
                            'type'  => 'number'
                        )
                    ),
                'rows' =>
                    array(
                        //row 1
                        array(
                            array(
                                'v' => 'Venta'
                            ),
                            array(
                                'v' => $countInmueblesVentas,
                                'f' => $countInmueblesVentas . ' propiedades en Venta.'
                            )
                        ),
                        array(
                            array(
                                'v' => 'Renta'
                            ),
                            array(
                                'v' => $countInmueblesRentas,
                                'f' => $countInmueblesRentas . ' propiedades en Renta.'
                            )
                        )
                    )
            )
        );

        // 4. Resumen de mis propiedades
        $cr = $em->getRepository('AppBundle:Inmueble');
        $cr->setDoctrineManager($em);
        $reporteTotales = $cr->findByOwnerReporteTotal($authuser->getId());

        $totalActivas=0; $totalInactivas=0; $totalMensualActivas=0; $totalMensualInactivas=0; $totalCasas=0;

        for ($index=0; $index < count($reporteTotales); $index++)
        {
            $totalActivas = $totalActivas + $reporteTotales[$index]["totalActivo"];
            $totalInactivas = $totalInactivas + $reporteTotales[$index]["totalInactivo"];

            $totalMensualActivas = $totalInactivas + $reporteTotales[$index]["fechaActivo"];
            $totalMensualInactivas = $totalInactivas + $reporteTotales[$index]["fechaInactivo"];

            if ($reporteTotales[$index]["idTipoInmueble"] == 1) // CASA
            {
                $totalCasas=$totalCasas+$reporteTotales[$index]["totalActivo"];
            }
        }

        // 5. Pie de tipo de inmuebles
        $dataTable4 = new DataTable\DataTable
        (
            array('cols' => array(
                array(
                    'id'    => 'id1',
                    'label' => 'label1',
                    'type'     => 'string'
                ),
                array(
                    'id'    => 'id2',
                    'label' => 'label2',
                    'type'  => 'number'
                )
            ), 'rows' => $rows)
        );


        return $this->render('dashboard/index.html.twig',
            array(
                'countInmuebles' => $countInmuebles,
                'topProspectadores' => $topProspectadores,
                'topCaptadores' => $topCaptadores,
                'topInmueblesEnviados' => $topInmueblesEnviados,
                'topInmueblesRecomendados' => $topInmueblesRecomendados,
                'dataTable1' => $dataTable1->toArray(),
                'dataTable2' => $dataTable2->toArray(),
                'dataTable3' => $dataTable3->toArray(),
                'dataTable4' => $dataTable4->toArray(),
                'reporteTotales' => $reporteTotales,
                'totalActivas' => $totalActivas,
                'totalInactivas' => $totalInactivas,
                'totalMensualActivas' => $totalMensualActivas,
                'totalMensualInactivas' => $totalMensualInactivas,
                'totalCasas' => $totalCasas
            )
            );
    }
}