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
    public partial class frmCubeForm : Form
    {
        public frmCubeForm()
        {
            InitializeComponent();
        }

        private void btnVolume_Click(object sender, EventArgs e)
        {
            if (Validation.IsPresent(txtLength, "length") &&
                Validation.IsDouble(txtLength, "length"))
            {
                double length;

                length = Convert.ToDouble(txtLength.Text);

                Cube cube = new Cube("Cube: Volume = a³", length);

                lblDescription.Text = cube.getDescription();
                lblVolume.Text = "Volume = " + length + " × " + length + " × " + length + " = " + cube.calculateVolume();
            }
        }

        private void btnBack_Click(object sender, EventArgs e)
        {
            this.Close();   // Returns to Volume Menu
        }
    }
}
