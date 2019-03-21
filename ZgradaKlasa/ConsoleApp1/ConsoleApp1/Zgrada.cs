using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class Zgrada
    {
        int brojspratova;
        double visinazgrade;
        string adresa;

        public Zgrada()
        {
            brojspratova = 0;
            visinazgrade = 0;
            adresa = null;
        }
        public Zgrada(int brojspratova, double visinazgrade, string adresa)
        {
            this.brojspratova = brojspratova;
            this.visinazgrade = visinazgrade;
            this.adresa = adresa;
        }

        public double Prosecnavisinasprata()
        {
            return visinazgrade / brojspratova;
        }
        public void Trebalift(double maxbrojspratova, double maxvisina)
        {
            if (brojspratova > maxbrojspratova || visinazgrade > maxvisina)
            {
                Console.WriteLine("zgrada treba lift");

            }
            else Console.WriteLine("ne treba lift");
        }
        public void Promenibrojspratova(int novi)
        {
            brojspratova = novi;
        }
        public void Promenivisinuzgrade(double nova)
        {
            visinazgrade = nova;
        }
        public void Ispis()
        {
            Console.WriteLine("zgrada ima "+brojspratova+"spratova");
            Console.WriteLine("visina zgrade je "+visinazgrade);
            Console.WriteLine("adresa je "+adresa);

        }



    }
}
