<?php

namespace App\Controller;

use App\Entity\Producto;
use App\Form\ProductoType;
use Doctrine\ORM\NoResultException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/about/", name="about")
     */
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }

    /**
     * @Route("/datos/", name="datos")
     */
    public function datos(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $prod = $em->getRepository(Producto::class)->findAll();

        return $this->render('home/datos.html.twig', [
            "productos" => $prod
        ]);
    }


    /**
     * @Route("/form/addProducto/", name="addProducto")
     * @param Request $request
     * @return Response
     */
    public function addProducto(Request $request): Response
    {
        $producto = new Producto();
        $form = $this->createForm(ProductoType::class, $producto);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $producto = $form->getData();
            $em->persist($producto);
            $em->flush();
            return $this->redirectToRoute("addProducto");
        }

        return $this->render("home/addProducto.html.twig", [
            "formulario" => $form->createView()
        ]);
    }

    /**
     * @Route("/buscar/", name="busquedas")
     * @param Request $request
     * @return Response
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function buscar(Request $request): Response
    {
        $id = 0;
        $producto = new Producto();
        $form = $this->createFormBuilder()
            ->add("id")
            ->add("enviar", SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $id = $form->getData()["id"];
            $em = $this->getDoctrine()->getManager();
            $producto = $em->getRepository(Producto::class)->buscarId($id);
        }

        return $this->render("home/busca.html.twig", [
            "form" => $form->createView(),
            "id" => $id,
            "producto" => $producto
        ]);
    }
}