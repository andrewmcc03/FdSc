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
    public partial class frmRectangleForm : Form
    {
        public frmRectangleForm()
        {
            InitializeComponent();
        }

        private void btnArea_Click(object sender, EventArgs e)
        {
            if (Validation.IsPresent(txtLength, "length") && 
                Validation.IsPresent(txtWidth, "width") && 
                Validation.IsDouble(txtLength, "length") && 
                Validation.IsDouble(txtWidth, "width"))
            {
                double length;
                double width;

                length = Convert.ToDouble(txtLength.Text);
                width = Convert.ToDouble(txtWidth.Text);

                Rectangle r = new Rectangle("Rectangle: Area = Length × Width", length, width);

                lblDescription.Text = r.getDescription();
                lblArea.Text = "Area = " + length + " × " + width + " = " + r.calculateArea();
            }
            // **Note: Else statement unnecessary as error message is handled in the 'isPresent' method
        }

        private void btnBack_Click(object sender, EventArgs e)
        {
            this.Close();   // Returns to Area Menu
        }
    }
}
