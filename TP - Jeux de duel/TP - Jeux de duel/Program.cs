using System;

// Class Personnage
public abstract class Personnage
{
    // Propriété de Personnage
    protected int PV { get; set; }
    protected int PVMin { get; set; }
    protected int PVMax { get; set; }
    protected int Initiative { get; set; }
    protected int Attaque { get; set; }

    // Initialise random et les PV sont entre PVMin et PVMax +1 pcq sinon c'est -1
    public Personnage()
    {
        Random random = new();
        PV = random.Next(PVMin, PVMax + 1);
    }

    // Getter propriété
    public int GetPV() => PV;
    public int GetAttaque() => Attaque;
    public int GetInitiative() => Initiative;

    public string GetNomPersonnage() => NomPersonnage();

    public abstract void RetirerPV(int pv);
    public abstract int Attaquer();
    public abstract void AfficherInfo();
}

// Class Guerrier héritant de Personnage
class Guerrier : Personnage
{
    protected string NomPersonnage { get; set; }

    public Guerrier(string nomPersonnage)
    {
        PVMin = 30;
        PVMax = 35;
        Initiative = new Random().Next(8, 12);
        Attaque = 10;
        PV = new Random().Next(PVMin, PVMax + 1);
        NomPersonnage = nomPersonnage;
        AfficherInfo();
    }

    public override void RetirerPV(int pv)
    {
        this.PV -= pv;
        Console.WriteLine($"{NomPersonnage} a perdu : {pv} points de vie");
        if (this.PV <= 0)
        {
            Console.WriteLine($"{NomPersonnage} est mort !");
        }
        else
        {
            Console.WriteLine($"{NomPersonnage} : {this.PV} PV");
        }
    }

    public override int Attaquer()
    {
        Console.WriteLine($"{NomPersonnage} attaque !");
        return new Random().Next(Attaque - 5, Attaque + 5);
    }

    public override void AfficherInfo()
    {
        Console.WriteLine("Personnage : " + this.NomPersonnage);
        Console.WriteLine("PV : " + this.PV);
        Console.WriteLine("Initiative : " + this.Initiative);
        Console.WriteLine("Attaque : " + this.Attaque);
    }
}

class Mage : Personnage
{
    protected string NomPersonnage { get; set; }

    public Mage(string nomPersonnage)
    {
        PVMin = 20;
        PVMax = 30;
        Initiative = new Random().Next(9, 13);
        Attaque = 12;
        PV = new Random().Next(PVMin, PVMax + 1);
        NomPersonnage = nomPersonnage;
        AfficherInfo();
    }

    public override void RetirerPV(int pv)
    {
        this.PV -= pv;
        Console.WriteLine($"{NomPersonnage} a perdu : {pv} points de vie");
        if (this.PV <= 0)
        {
            Console.WriteLine($"{NomPersonnage} est mort !");
        }
        else
        {
            Console.WriteLine($"{NomPersonnage} : {this.PV} PV");
        }
    }

    public override int Attaquer()
    {
        Console.WriteLine($"{NomPersonnage} attaque !");
        return new Random().Next(Attaque - 5, Attaque + 5);
    }

    public override void AfficherInfo()
    {
        Console.WriteLine("Personnage : " + this.NomPersonnage);
        Console.WriteLine("PV : " + this.PV);
        Console.WriteLine("Initiative : " + this.Initiative);
        Console.WriteLine("Attaque : " + this.Attaque);
    }
}

class Archer : Personnage
{
    protected string NomPersonnage { get; set; }

    public Archer(string nomPersonnage)
    {
        PVMin = 25;
        PVMax = 30;
        Initiative = new Random().Next(10, 15);
        Attaque = new Random().Next(7,12);
        PV = new Random().Next(PVMin, PVMax + 1);
        NomPersonnage = nomPersonnage;
        AfficherInfo();
    }

    public override void RetirerPV(int pv)
    {
        this.PV -= pv;
        Console.WriteLine($"{NomPersonnage} a perdu : {pv} points de vie");
        if (this.PV <= 0)
        {
            Console.WriteLine($"{NomPersonnage} est mort !");
        }
        else
        {
            Console.WriteLine($"{NomPersonnage} : {this.PV} PV");
        }
    }

    public override int Attaquer()
    {
        Console.WriteLine($"{NomPersonnage} attaque !");
        return new Random().Next(Attaque - 5, Attaque + 5);
    }

    public override void AfficherInfo()
    {
        Console.WriteLine("Personnage : " + this.NomPersonnage);
        Console.WriteLine("PV : " + this.PV);
        Console.WriteLine("Initiative : " + this.Initiative);
        Console.WriteLine("Attaque : " + this.Attaque);
    }
}

class Partie
{
    private Personnage personnage1;
    private Personnage personnage2;

    public Partie()
    {
        Console.WriteLine("Bienvenue dans le jeu de duel!");

        // Choisir les personnages
        Console.WriteLine("Choisissez le personnage 1 (Guerrier/Mage/Archer) : ");
        string choix1 = Console.ReadLine();
        Console.WriteLine("Entrez le nom du personnage 1 : ");
        string nom1 = Console.ReadLine();

        personnage1 = ChoisirPersonnage(choix1, nom1);

        Console.WriteLine("Choisissez le personnage 2 (Guerrier/Mage/Archer) : ");
        string choix2 = Console.ReadLine();
        Console.WriteLine("Entrez le nom du personnage 2 : ");
        string nom2 = Console.ReadLine();

        personnage2 = ChoisirPersonnage(choix2, nom2);

        // Lancer le duel
        Duel duel = new Duel(personnage1, personnage2);
        duel.Combattre();
    }

    private Personnage ChoisirPersonnage(string choix, string nom)
    {
        if (choix.ToLower() == "guerrier")
        {
            return new Guerrier(nom);
        }
        else if (choix.ToLower() == "mage")
        {
            return new Mage(nom);
        }
        else if (choix.ToLower() == "archer")
        {
            return new Archer(nom);
        }
        else
        {
            Console.WriteLine("Choix invalide, un Guerrier sera créé par défaut.");
            return new Guerrier(nom);
        }
    }
}

class Duel
{
    private Personnage personnage1;
    private Personnage personnage2;

    public Duel(Personnage p1, Personnage p2)
    {
        personnage1 = p1;
        personnage2 = p2;
    }

    public void Combattre()
    {
        Console.WriteLine("Le duel commence !");
        // Combat jusqu'a ce qu'un personnage meurt
        while (personnage1.GetPV() > 0 && personnage2.GetPV() > 0)
        {
            // Comparer les initiatives
            Personnage attaquant = personnage1.GetInitiative() >= personnage2.GetInitiative() ? personnage1 : personnage2;
            Personnage defenseur = attaquant == personnage1 ? personnage2 : personnage1;

            // Attaquer
            int degats = attaquant.Attaquer();
            Console.WriteLine($"{attaquant.GetNomPersonnage()} attaque {defenseur.GetPV()} et inflige {degats} dégâts !");
            defenseur.RetirerPV(degats);

            // Afficher les infos des personnages
            Console.WriteLine("Etat du combat :");
            personnage1.AfficherInfo();
            personnage2.AfficherInfo();
           
        }

        // Fin du duel
        if (personnage1.GetPV() <= 0)
        {
            Console.WriteLine($"{personnage1} a perdu le duel !");
        }
        else
        {
            Console.WriteLine($"{personnage2} a perdu le duel !");
        }
    }
}

class Program
{
    static void Main(string[] args)
    {
        // Démarrer une nouvelle partie
        Partie partie = new Partie();
    }
}
