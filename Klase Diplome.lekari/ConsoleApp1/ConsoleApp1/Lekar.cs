using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class Lekar
    {
       private string ime;
       private string prezime;
       private int godinarodjenja;
        private Diploma diploma;

        public Lekar(string ime,string prezime,int godinarodjenja, Diploma diploma)
        {
            this.ime = ime;
            this.prezime = prezime;
            this.godinarodjenja = godinarodjenja;
            this.diploma = diploma;
        }

        public string IME
        {
            get { return ime; }
            set { if (ime == "")
                {
                    Console.WriteLine("greska");
                }
            else
                ime = value; }
        }
        public string PREZIME
        {
            get { return prezime; }
            set {if(prezime=="")
                    {
                    Console.WriteLine("greska");
                     }
                    else
                prezime = value; }
        }
        public int GODINARODJENJA
        {
            get { return godinarodjenja; }
            set { if (godinarodjenja == 0)
                {
                    Console.WriteLine("greska");
                }
                else godinarodjenja = value;
            }
        }
        public int Starost(int trenutnagodina)
        {
            return trenutnagodina - godinarodjenja;
        }
        public void Ispis()
        {
            Console.WriteLine(" Ime "+ime+" prezime "+prezime+" godina "+godinarodjenja," Diploma"+diploma);
            
        }

    }
}
