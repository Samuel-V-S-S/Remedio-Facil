<?php
class Register extends Model {

	public function createCadastro($nome, $tel, $email, $cnpj, $msg)
	{
		if($this->existeCadastro($email, $cnpj) == false) {
			$sql = "INSERT INTO cadastro 
					(cadastro_nome, cadastro_telefone, cadastro_email, 
					cadastro_cnpj, cadastro_msg, cadastro_create)
				VALUES (:nome, :tel,:email, :cnpj,:msg, NOW())";
			$conect = $this->db->prepare($sql);
			$conect->bindValue(':nome', $nome);
			$conect->bindValue(':tel', $tel);
			$conect->bindValue(':email', $email);
			$conect->bindValue(':cnpj', $cnpj);
			$conect->bindValue(':msg', $msg);
			$conect->execute();

			return true;
		}
		return false;
	}

	private function existeCadastro($email, $cnpj)
	{
		$sql = "SELECT cadastro_id FROM cadastro 
				WHERE cadastro_email = :email
				OR cadastro_cnpj = :cnpj";
		$conect = $this->db->prepare($sql);
		$conect->bindValue(':email', $email);
		$conect->bindValue(':cnpj', $cnpj);
		$conect->execute();

		if($conect->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}
}