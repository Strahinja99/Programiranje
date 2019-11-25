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
            
            Console.ForegroundColor = ConsoleColor.Green;
            Console.WriteLine("Strahinja Drinic\n");
            Console.Write("unesite broj :");
            int unos = Convert.ToInt32(Console.ReadLine());

            for (; ; )
            {
                
                if (unos % 2 == 0)
                {
                    Console.WriteLine("broj je paran\n");
                }
                else Console.WriteLine("broj nije paran\n");
                Console.Write("unesite broj : ");
                unos = Convert.ToInt32(Console.ReadLine());
                
            }
            
            
            
           
            


        }
    }
}
