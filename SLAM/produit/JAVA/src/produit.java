
public class produit {
	private int ref, qte;
	private String designation;
	private float prix;

	public produit(int ref, int qte, float prix, String des) {
		this.ref = ref;
		this.qte = qte;
		this.prix = prix;
		this.designation = des;
	}
	
	public String afficher() {
		String aff = "";
		aff += "Référence: "+this.designation+"\n";
		aff += "Quantité: "+this.qte+"\n";
		return aff;
	}
	
	public float total_prix() {
		float total = this.prix*this.qte;
		return total;
	}
	
	
	
	public static void main(String[] args) {
		produit test = new produit(1, 15, 575, "Un produit de fou");
		System.out.println(test.afficher());
	}
}

