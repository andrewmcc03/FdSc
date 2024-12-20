﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MathsTutor
{
    class Cuboid : Volume3D
    {
        // Constructor
        public Cuboid(string newDescription, double newDimension1, double newDimension2, double newDimension3)
            : base(newDescription, newDimension1, newDimension2, newDimension3)
        {
        }

        public override double calculateVolume()
        {
            return (getDimension1() * getDimension2() * getDimension3());
        }
    }
}
