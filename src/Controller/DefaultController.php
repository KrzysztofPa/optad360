<?php


namespace App\Controller;



use App\Entity\Data;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @Route("/", name="index")
     */
    public function index(): Response{
        return $this->redirect("/get");
    }
    /**
     * @Route("/post", name="post")
     */
    public function postData(Request $request, EntityManagerInterface $entityManager): Response{

        $parameters = json_decode($request->getContent(), true);

        $data = new Data();

        $data->setCurrency($parameters["settings"]["currency"])
            ->setPeriodLength($parameters["settings"]["PeriodLength"])
            ->setGroupby($parameters["settings"]["groupby"])
            ->setHeaders($parameters["headers"]);

        $entityManager->persist($data);
        $entityManager->flush();

        return $this->json( $parameters);
    }
    /**
     * @Route("/get", name="show", methods="get")
     */
    public function showData(): Response{

        $query = $this->getDoctrine()
            ->getRepository(Data::class)
            ->createQueryBuilder('c')
            ->getQuery();
        $result = $query->getArrayResult();
        return $this->json($result);
    }

}