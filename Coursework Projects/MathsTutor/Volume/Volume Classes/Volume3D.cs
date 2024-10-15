using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MathsTutor
{
    abstract class Volume3D : Volume2D
    {
        // Defined new variable
        private double dimension3;

        // Constructor
        public Volume3D(string newDescription, double newDimension1, double newDimension2, double newDimension3)
            : base(newDescription, newDimension1, newDimension2)
        {
            dimension3 = newDimension3;
        }

        public void setDimension3(double newDimension)
        {
            dimension3 = newDimension;
        }

        public double getDimension3()
        {
            return dimension3;
        }
    }
}
