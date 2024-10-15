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
    public partial class frmSphereForm : Form
    {
        public frmSphereForm()
        {
            InitializeComponent();
        }

        private void btnVolume_Click(object sender, EventArgs e)
        {
            if (Validation.IsPresent(txtRadius, "radius") &&
                Validation.IsDouble(txtRadius, "radius"))
            {
                double radius;

                radius = Convert.ToDouble(txtRadius.Text);

                Sphere sphere = new Sphere("Sphere: Volume = 4/3 πr³", radius);

                lblDescription.Text = sphere.getDescription();
                lblVolume.Text = "Volume = 4/3 × π × " + radius + "³ = " + sphere.calculateVolume();
            }
        }

        private void btnBack_Click(object sender, EventArgs e)
        {
            this.Close();   // Returns to Volume Menu
        }
    }
}
