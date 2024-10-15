using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MathsTutor
{
    class Circle : Area1D
    {
        // Constructors
        public Circle(string newDescription, double newDimension1)
            : base(newDescription, newDimension1)
        {
        }

        public Circle(string newDescription)
            : base(newDescription)
        {
        }

        // Method to override the 'calculateArea' function for this specific shape (Circle)
        public override double calculateArea()
        {
            // Calculation for getting the area of a circle
            return Math.PI * Math.Pow(getDimension1(), 2);
        }

    }
}
