<?php
class PartnershipController extends Controller {

	public function index()
	{
		$data = array(
			'alert' => '',
			'success' => ''
		);

		if(isset($_POST['email']) && !empty($_POST['cnpj'])) {

			$new = new Cadastro();
			//variaveis
			$nome = addslashes(trim(filter_input(INPUT_POST,'nome')));
			$tel = addslashes(trim(filter_input(INPUT_POST,'telefone')));
			$email = addslashes(trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)));
			$cnpj = addslashes(trim(filter_input(INPUT_POST, 'cnpj')));
			$msg = addslashes(trim(filter_input(INPUT_POST,'msg')));

			$remover = array("/",",",".","-","(",")"," ");
			//removendo carateres
			$cnpj = str_replace($remover,"", $cnpj);
			$tel = str_replace($remover, "", $tel);

			if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
				if($new->createCadastro($nome, $tel, $email, $cnpj, $msg)) {
					$data['success'] = 'Cadastro inserido. Entraremos em contato';
				} else {
					$data['alert'] = 'Cadastro não inserido, tente novamente mais tarde';
 				}
			}
		}

		$this->loadTemplate('partnership', $data);
	}
}