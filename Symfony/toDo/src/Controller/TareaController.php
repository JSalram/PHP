<?php

namespace App\Controller;

use App\Entity\Tarea;
use App\Form\TareaType;
use App\Repository\TareaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class TareaController extends AbstractController
{
    /**
     * @Route("/", name="tarea_index", methods={"GET"})
     * @param TareaRepository $tareaRepository
     * @return Response
     */
    public function index(TareaRepository $tareaRepository): Response
    {
        return $this->render('tarea/index.html.twig', [
            'tareas' => $tareaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="tarea_new", methods={"GET","POST"})
     * @param Security $security
     * @param Request $request
     * @return Response
     */
    public function new(Security $security, Request $request): Response
    {
        $tarea = new Tarea();
        $form = $this->createForm(TareaType::class, $tarea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $security->getUser();
            $tarea->setUsuario($user);
            $em->persist($tarea);
            $em->flush();

            return $this->redirectToRoute('tarea_index');
        }

        return $this->render('tarea/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tarea_show", methods={"GET"})
     * @param Tarea $tarea
     * @return Response
     */
    public function show(Tarea $tarea): Response
    {
        return $this->render('tarea/show.html.twig', [
            'tarea' => $tarea,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tarea_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Tarea $tarea
     * @return Response
     */
    public function edit(Request $request, Tarea $tarea): Response
    {
        $form = $this->createForm(TareaType::class, $tarea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tarea_index');
        }

        return $this->render('tarea/edit.html.twig', [
            'tarea' => $tarea,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tarea_delete", methods={"DELETE"})
     * @param Request $request
     * @param Tarea $tarea
     * @return Response
     */
    public function delete(Request $request, Tarea $tarea): Response
    {
        if ($this->isCsrfTokenValid('delete' . $tarea->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tarea);
            $em->flush();
        }

        return $this->redirectToRoute('tarea_index');
    }
}
