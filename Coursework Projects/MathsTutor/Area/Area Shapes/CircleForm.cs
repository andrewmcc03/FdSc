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
    public partial class frmCircleForm : Form
    {
        public frmCircleForm()
        {
            InitializeComponent();
        }

        private void btnArea_Click(object sender, EventArgs e)
        {
            if (Validation.IsPresent(txtRadius, "radius") &&
                Validation.IsDouble(txtRadius, "radius"))
            {
                double radius;

                radius = Convert.ToDouble(txtRadius.Text);

                Circle c = new Circle("Circle: Area = πr²", radius);

                lblDescription.Text = c.getDescription();
                lblArea.Text = "Area = π × " + radius + " × " + radius + " = " + c.calculateArea();
            }
        }

        private void btnBack_Click(object sender, EventArgs e)
        {
            this.Close();   // Returns to Area Menu
        }
    }
}
