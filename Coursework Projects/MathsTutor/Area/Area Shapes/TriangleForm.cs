using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace MathsTutor
{
    public partial class frmTriangleForm : Form
    {
        public frmTriangleForm()
        {
            InitializeComponent();
        }

        private void btnArea_Click(object sender, EventArgs e)
        {
            if (Validation.IsPresent(txtBaseLength, "base length") &&
                Validation.IsPresent(txtHeight, "height") &&
                Validation.IsDouble(txtBaseLength, "base length") &&
                Validation.IsDouble(txtHeight, "height"))
            {
                double baseLength;
                double height;

                baseLength = Convert.ToDouble(txtBaseLength.Text);
                height = Convert.ToDouble(txtHeight.Text);

                Triangle t = new Triangle("Triangle: Area = ½ × Base × Height", baseLength, height);

                lblDescription.Text = t.getDescription();
                lblArea.Text = "Area = ½ × " + baseLength + " × " + height + " = " + t.calculateArea();
            }
        }
    }
}
