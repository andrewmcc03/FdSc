using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MathsTutor
{
    class Rectangle : Area2D    // *Note: Previously set to abstract class, removed to fix errors
    {
        // Constructor
        public Rectangle(string newDescription, double newDimension1, double newDimension2)
            : base(newDescription, newDimension1, newDimension2)
        {
        }

        // Method to override the 'calculateArea' function for this specific shape (Rectangle)
        public override double calculateArea()
        {
            // Calculation for getting the area of a rectangle
            return (getDimension1() * getDimension2());
        }
    }
}
