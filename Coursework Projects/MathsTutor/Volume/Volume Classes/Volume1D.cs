using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MathsTutor
{
    abstract class Volume1D
    {
        // 
        private string description;
        private double dimension1;

        public Volume1D()
        {
        }

        public Volume1D(string newDescription)
        {
            description = newDescription;
        }

        public Volume1D(string newDescription, double newDimension)
        {
            description = newDescription;
            dimension1 = newDimension;
        }

        public void setDescription(string newDescription)
        {
            description = newDescription;
        }

        public void setDimension1(double newDimension)
        {
            dimension1 = newDimension;
        }

        public string getDescription()
        {
            return description;
        }

        public double getDimension1()
        {
            return dimension1;
        }

        public abstract double calculateVolume();
    }
}
