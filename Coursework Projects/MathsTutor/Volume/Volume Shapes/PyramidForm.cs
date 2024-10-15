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
    public partial class frmPyramidForm : Form
    {
        public frmPyramidForm()
        {
            InitializeComponent();
        }

        private void btnVolume_Click(object sender, EventArgs e)
        {
            if (Validation.IsPresent(txtLength, "length") &&
                Validation.IsPresent(txtWidth, "width") &&
                Validation.IsPresent(txtHeight, "height") &&
                Validation.IsDouble(txtLength, "length") &&
                Validation.IsDouble(txtWidth, "width") &&
                Validation.IsDouble(txtHeight, "height"))
            {
                double length;
                double width;
                double height;

                length = Convert.ToDouble(txtLength.Text);
                width = Convert.ToDouble(txtWidth.Text);
                height = Convert.ToDouble(txtHeight.Text);

                //Pyramid pyramid = new Pyramid("Pyramid: Volume = Base Length x Base Width x Height ÷ 3", length, width, height);
                Pyramid pyramid = new Pyramid("Pyramid: Volume = Base Length × Base Width × Height" +
                            "\n                                  ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━" +
                            "\n                                                                 3", length, width, height);

                lblDescription.Text = pyramid.getDescription();
                lblVolume.Text = "Volume = " + length + " × " + width + " × " + height + " ÷ 3 = " + pyramid.calculateVolume();
            }
        }

        private void btnBack_Click(object sender, EventArgs e)
        {
            this.Close();   // Returns to Volume Menu
        }
    }
}
