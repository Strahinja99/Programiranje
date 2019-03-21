using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class Program
    {
        static void Main(string[] args)
        {
            Diploma d1 = new Diploma(1999, 9.5);
            d1.Nagrada(8.5);
            Lekar l1 = new Lekar("Strahinja", "Drinic", 1999, d1);
            l1.Ispis();
            Diploma d2 = new Diploma(2005, 9.0);
            Lekar l2 = new Lekar("Milos", "Milosevic", 2009, d2);
            l2.Starost(2019);
            l2.PREZIME = "Karanovic";
            l2.Ispis();
        }
    }
}
