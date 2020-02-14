<?php
class UnholyFactory
{
	private $arr;
	private $type_f;
	public function absorb($type)
	{
		if ($type instanceof Fighter)
		{
			if (in_array($type, $this->arr))
				print("(Factory already absorbed a fighter of type ");
			else
			{
				print("(Factory absorbed a fighter of type ");
				$this->arr[] =  $type;
			}
			print($type->getType() . ")\n");
		}
		else
		{
			print("(Factory can't absorb this, it's not a fighter)\n");
		}
	}
	private function change($tmp)
	{
		if ($tmp === "foot soldier")
			return "Footsoldier";
		else if ($tmp === "llama")
			return "Llama";
		else if ($tmp === "archer")
			return "Archer";
		else if ($tmp === "assassin")
			return "Assassin";
	}
	public function fabricate($tmp)
	{
		$this->type_f = $this->change($tmp);
		foreach ($this->arr as $key => $value) {
			if (get_class($value) === $this->type_f)
			{
				$new = clone $this->arr[$key];
				print("(Factory fabricates a fighter of type " . $tmp . ")\n");
				return ($new);
			}
		}
		print("(Factory hasn't absorbed any fighter of type ". $tmp . ")\n");
	}
	public function fight()
	{
		echo "OK";
	}
}
