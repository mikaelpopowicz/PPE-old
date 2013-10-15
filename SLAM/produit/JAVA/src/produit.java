
public class Produit {
	private int ref, qte;
	private String designation;
	private float prix;

	
	/*
	 *  @@ Constructeur
	 */
	
	public Produit(int ref, int qte, float prix, String des) {
		this.setRef(ref);
		this.setQte(qte);
		this.setPrix(prix);
		this.setDes(des);
	}
	
	
	/*
	 *  @@ Getters
	 */
	
	public int ref() { return this.ref; }
	public int qte() { return this.qte; }
	public String des() { return this.designation; }
	public float prix() { return this.prix; }
	
	
	/*
	 *  @@ Setters
	 */
	
	public void setRef(int ref) {
		this.ref = ref;
	}
	
	public void setQte(int qte) {
		this.qte = qte;
	}
	
	public void setDes(String des) {
		this.designation = des;
	}
	
	public void setPrix(Float prix) {
		this.prix = prix;
	}
	
	
	
	/*
	 *  @@ Fonctions supplémentaires
	 */
	
	public String afficher() {
		String aff = "";
		aff += "Référence: "+this.ref()+"\n";
		aff += "Quantité: "+this.qte()+"\n";
		aff += "Description: "+this.des()+"\n";
		aff += "Prix: "+this.prix()+"\n";
		return aff;
	}
	
	public float total_prix() {
		float total = this.prix()*this.qte();
		return total;
	}
	

	public static void main(String[] args) {
		Produit test = new Produit(1, 15, 575, "Un produit de fou");
		System.out.println(test.afficher());
		
		
	}
}

