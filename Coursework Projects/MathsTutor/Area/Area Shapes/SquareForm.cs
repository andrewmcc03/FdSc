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
    public partial class frmSquareForm : Form
    {
        public frmSquareForm()
        {
            InitializeComponent();
        }

        private void btnArea_Click(object sender, EventArgs e)
        {
            if (Validation.IsPresent(txtLength, "length") &&
                Validation.IsDouble(txtLength, "length"))
            {
                double length;

                length = Convert.ToDouble(txtLength.Text);

                Square s = new Square("Square: Area = a²", length);

                lblDescription.Text = s.getDescription();
                lblArea.Text = "Area = " + length + " × " + length + " = " + s.calculateArea();
            }
        }
    }
}
