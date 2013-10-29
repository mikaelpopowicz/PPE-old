<?php
namespace Library\Models;
 
use \Library\Entities\Comment;
 
class CommentsManager_PDO extends CommentsManager
{
	protected function add(Comment $comment)
	{
		$q = $this->dao->prepare('INSERT INTO comments SET news = :news, auteur = :auteur, contenu = :contenu, date = NOW()');
     
		$q->bindValue(':news', $comment->news(), \PDO::PARAM_INT);
		$q->bindValue(':auteur', $comment->auteur());
		$q->bindValue(':contenu', $comment->contenu());
     
		$q->execute();
     
		$comment->setId($this->dao->lastInsertId());
	}
	
	public function getListOf($cours)
	{
		if (!ctype_digit($cours))
		{
			throw new \InvalidArgumentException('L\'identifiant de la news passé doit être un nombre entier valide');
		}
     
		$q = $this->dao->prepare('SELECT id_comm AS id, id_c AS cours, auteur, contenu, email, date FROM comments WHERE id_c = :cours ORDER BY date DESC');
		$q->bindValue(':cours', $cours, \PDO::PARAM_INT);
		$q->execute();
     
		$q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Library\Entities\Comment');
     
		$comments = $q->fetchAll();
     
		foreach ($comments as $comment)
		{
			$comment->setDate(new \DateTime($comment->date()));
		}
     
		return $comments;
	}
}