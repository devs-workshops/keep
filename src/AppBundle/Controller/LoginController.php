<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class LoginController extends Controller
{
	/**
	 * @Route("/login", name="login")
	 * @Method("GET")
	 */
	public function loginAction()
	{
		throw new AuthenticationException('Login is required!');
	}

	/**
	 * @Route("/login-check", name="login_check")
	 */
	public function loginCheckAction()
	{
		return new JsonResponse(['Dummy action security will handle this']);
	}

	/**
	 * @Route("/login-success", name="login_success")
	 */
	public function loginSuccessAction()
	{
		return new JsonResponse(['login success, we should return user data to front-end.']);
	}

	/**
	 * @Route("/login-failure", name="login_failure")
	 */
	public function loginFailureAction()
	{
		return new JsonResponse(['login failure, we should return error msg to front-end']);
	}

	/**
	 * @Route("/logout", name="logout")
	 */
	public function logoutAction()
	{
		return new JsonResponse(['Dummy action security will handle this']);
	}
}
