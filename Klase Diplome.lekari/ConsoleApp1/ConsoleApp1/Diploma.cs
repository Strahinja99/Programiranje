using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class Diploma
    {
      private int godinaizdavanja;
       private double prosecnaocena;

        public Diploma(int godinaizdavanja,double prosecnaocena)
        {
            this.godinaizdavanja = godinaizdavanja;
            this.prosecnaocena = prosecnaocena;
        }
        public void ispis()
        {
            Console.WriteLine("godina izdavanje je "+godinaizdavanja);
            Console.WriteLine("prosecna ocena je "+prosecnaocena);
        }
        public void Nagrada(double prosek)
        {
            if(prosecnaocena>prosek)
            {
                Console.WriteLine("Nagrada");
            }
            else Console.WriteLine("nema nagrade");
        }



    }
}
