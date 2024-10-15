using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MathsTutor
{
    class Square : Area1D
    {
        // Constructors
        public Square(string newDescription, double newDimension1)
            : base(newDescription, newDimension1)
        {
        }

        public Square(string newDescription)
            : base(newDescription)
        {
        }

        // Method to override the 'calculateArea' function for this specific shape (Square)
        public override double calculateArea()
        {
            // Calculation for getting the area of a square
            return Math.Pow(getDimension1(), 2);
        }

    }
}
