<?php
//
//namespace App\Controller;
//
//use App\Entity\BoardMember;
//use Doctrine\ORM\EntityManagerInterface;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;
//
//class BoardMemberController extends AbstractController
//{
//    #[Route('/organigramme', name: 'app_board')]
//    public function index(EntityManagerInterface $em): Response
//    {
//        $members = $em->getRepository(BoardMember::class)->findAll();
//
//        // Préparer les données pour OrgChart.js
//        $data = array_map(fn (BoardMember $m) => [
//            'id' => $m->getId(),
//            'surname' => $m->getSurname(),
//            'name' => $m->getName(),
//            'title' => $m->getRole(),
//            'image' => $m->getPhoto() ? '/uploads/board_member/'.$m->getPhoto() : '/images/default-avatar.png',
//        ], $members);
//
//        return $this->render('board_member/index.html.twig', [
//            'data' => json_encode($data),
//        ]);
//    }
//}


namespace App\Controller;

use App\Entity\BoardMember;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoardMemberController extends AbstractController
{
    #[Route('/organigramme', name: 'board_member_organigram')]
    public function organigram(EntityManagerInterface $em): Response
    {
        $members = $em->getRepository(BoardMember::class)->findAll();

        return $this->render('board_member/organigram.html.twig', [
            'members' => $members,
        ]);
    }
}
