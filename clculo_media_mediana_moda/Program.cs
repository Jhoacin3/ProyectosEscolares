using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Threading;

namespace miss_proyecto1
{
    class Program
    {
        static void Main(string[] args)
        {
			//Recolectamos los datos//
			int sumatoria = 0;
			string[] nombre = new string[20];
			int cantidad = 0;
			int[] edad = new int[20];
			int cont1 = 0, cont2 = 0;
			int moda = 0;
			double promedio = 0;
			int media = 0;
			double varianza = 0;
			double desvia = 0;
			int suma = 0;
			Console.WriteLine("    --    Programa que refleja el orden de edades n y la mediana de la misma     --      ");
			Thread.Sleep(1000); // en 1000 osea 1s empezara en automatico pero es mala practica
			do
			{

				Console.WriteLine("Ingrese su nombre"); //pido nombre//
				nombre[cantidad] = Console.ReadLine(); //almaceno en cantidad//

				Console.WriteLine("Ingrese su edad"); //pido edad//
				edad[cantidad] = int.Parse(Console.ReadLine()); //almaceno en cantidad//
				Console.Clear();


				sumatoria = sumatoria + edad[cantidad];
				cantidad++; //contador//
				promedio = sumatoria / cantidad;


			} while (cantidad < 5);
			
			Console.WriteLine("el promedio total es: " + promedio);
			Console.WriteLine();
			Console.WriteLine(" ----  Presione para continuar  --- ");
			Console.ReadKey(true);



			Console.WriteLine(" ----  En automatico se ordenaran los datos de menor a mayor. por favor espere  --- ");

			//orden de edades de menor a mayor //
			for (int i = 0; i < 5; i++) //ejemplo con 5 pero se puede cambiar 
			{
				for (int A = i + 1; A < 5; A++)
				{
					int cambio;
					string Ncam;
					if (edad[i] > edad[A])
					{
						cambio = edad[i];
						Ncam = nombre[i];

						edad[i] = edad[A];
						nombre[i] = nombre[A];

						edad[A] = cambio;
						nombre[A] = Ncam;
						Console.Clear();
					}
				}
			}
			Console.WriteLine("Datos ordenados: ");
			for (int i = 0; i < 5; i++)
			{
				Console.WriteLine(nombre[i] + " con " + edad[i] + " años. ");
			}


			//mediana//
			int n = 5;
			Console.WriteLine("* En breve Se reflejará la media aritmetica de los datos obtenidos, por favor espere... ***");
			Thread.Sleep(2000);
			Console.WriteLine("Media aritmetica: " + edad[(n + 1) / 2]); //verificar lo que dijo el profe de -1//
			Console.ReadKey();


			// moda//
			for (int E = 0; E < 5; E++) //ejemplo con 5 pero se puede cambiar 
			{
				for (int j = 0; j < 5; j++)
				{
					if (edad[E] == edad[j] && E != j) cont1++; // esta comparando el primer dato que se ponga con los demas
				}                                               //!= que sean diferetes para que se compare con los demas y no el mismo//
																//despues de comparar le estoy aumentando con cont1++//
				if (cont1 > cont2)
				{
					cont2 = cont1;
					moda = edad[E];
				}
				cont1 = 0;


			}
			Console.WriteLine("Se reflejará la moda, por favor espere... ");
			Thread.Sleep(2000); // mala practica
			Console.WriteLine("La moda es: " + moda + ", Que fue el valor que mas se repitio."); // cadena interpolada es un literal de cadena que puede contener expresiones de interpolación (cadena de resultados)

			
			

			Console.WriteLine("A continuación se reflejará la  Desviación estandar y" +
				" varianza de los datos");
			Thread.Sleep(2000);

			//Varianza
			double sumafinal = 0;
			for (int i = 0; i < n; i++)
			{
				sumafinal += Math.Pow(edad[i] - promedio, 2);

			}
			sumafinal = (sumafinal / n);
			Console.WriteLine(sumafinal.ToString());

			Console.WriteLine("");
			//Estandar
			media = suma / 5;

			for (int l = 0; l < 10; l++)
			{
				varianza += Math.Pow(edad[l] - media, 2);
			}

			varianza = varianza / 5;
			desvia = Math.Sqrt(varianza); // acomodar la letra indice y que corra y refleje en consola //

			Console.WriteLine("La Desviacion estandar es: " + desvia.ToString());
			Console.WriteLine("La varianza es: " + varianza.ToString());



			Console.WriteLine("**Pulse cualquier tecla para salir de la consola...**");
			Console.ReadKey(true);
		}
    }
}
