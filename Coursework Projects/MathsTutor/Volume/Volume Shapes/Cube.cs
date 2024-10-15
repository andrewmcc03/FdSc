using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MathsTutor
{
    class Cube : Volume1D
    {
        // Constructor
        public Cube(string newDescription, double newDimension1)
            : base(newDescription, newDimension1)
        {
        }

        public override double calculateVolume()
        {
            return (getDimension1() * getDimension1() * getDimension1());
        }
    }
}
