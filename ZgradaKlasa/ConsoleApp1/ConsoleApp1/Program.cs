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
            Zgrada z1 = new Zgrada(14, 250, "Novosadska");
            z1.Prosecnavisinasprata();
            z1.Trebalift(14, 250);
            z1.Promenibrojspratova(15);
            z1.Ispis();
            Zgrada z2 = new Zgrada(20, 290, "ulica ruza");
            z2.Promenivisinuzgrade(20);
            z2.Prosecnavisinasprata();
            z2.Trebalift(20, 290);
            z2.Ispis();
            Console.ReadLine();

        }
    }
}
