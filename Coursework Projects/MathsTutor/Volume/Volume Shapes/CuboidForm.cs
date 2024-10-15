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
    public partial class frmCuboidForm : Form
    {
        public frmCuboidForm()
        {
            InitializeComponent();
        }

        private void btnVolume_Click(object sender, EventArgs e)
        {
            if (Validation.IsPresent(txtLength, "length") &&
                Validation.IsPresent(txtBreadth, "breadth") &&
                Validation.IsPresent(txtHeight, "height") &&
                Validation.IsDouble(txtLength, "length") &&
                Validation.IsDouble(txtBreadth, "breadth") &&
                Validation.IsDouble(txtHeight, "height"))
            {
                double length;
                double breadth;
                double height;

                length = Convert.ToDouble(txtLength.Text);
                breadth = Convert.ToDouble(txtBreadth.Text);
                height = Convert.ToDouble(txtHeight.Text);

                Cuboid cuboid = new Cuboid("Cuboid: Volume = Length × Breadth × Height", length, breadth, height);

                lblDescription.Text = cuboid.getDescription();
                lblVolume.Text = "Volume = " + length + " × " + breadth + " × " + height + " = " + cuboid.calculateVolume();
            }
        }

        private void btnBack_Click(object sender, EventArgs e)
        {
            this.Close();   // Returns to Volume Menu
        }
    }
}
