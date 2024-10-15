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
    public partial class frmAreaMenu : Form
    {
        public frmAreaMenu()
        {
            InitializeComponent();
            this.Select();  // Removes initial focus
        }

        private void btnRectangle_Click(object sender, EventArgs e)
        {
            // Creates an instance of the Rectangle form
            Form rectangleForm = new frmRectangleForm();

            // Hides the current Area Menu form
            this.Hide();

            // Shows the Rectangle form
            rectangleForm.ShowDialog(); // *Note: Use Show() instead of ShowDialog() if you want it non-blocking

            // Shows the Area Menu form when the Rectangle form is closed
            this.Show();
        }

        private void btnSquare_Click(object sender, EventArgs e)
        {
            // Creates an instance of the Square form
            Form squareForm = new frmSquareForm();

            // Hides the current Area Menu form
            this.Hide();

            // Shows the Square form
            squareForm.ShowDialog(); // *Note: Use Show() instead of ShowDialog() if you want it non-blocking

            // Shows the Area Menu form when the Square form is closed
            this.Show();
        }

        private void btnCircle_Click(object sender, EventArgs e)
        {
            // Creates an instance of the Circle form
            Form circleForm = new frmCircleForm();

            // Hides the current Area Menu form
            this.Hide();

            // Shows the Circle form
            circleForm.ShowDialog(); // *Note: Use Show() instead of ShowDialog() if you want it non-blocking

            // Shows the Area Menu form when the Circle form is closed
            this.Show();
        }

        private void btnTriangle_Click(object sender, EventArgs e)
        {
            // Creates an instance of the Triangle form
            Form triangleForm = new frmTriangleForm();

            // Hides the current Area Menu form
            this.Hide();

            // Shows the Triangle form
            triangleForm.ShowDialog(); // *Note: Use Show() instead of ShowDialog() if you want it non-blocking

            // Shows the Area Menu form when the Triangle form is closed
            this.Show();
        }

        private void btnAreaQuiz_Click(object sender, EventArgs e)
        {
            // Creates an instance of the Area Quiz form
            Form areaQuizForm = new frmAreaQuizForm();

            // Hides the current Area Menu form
            this.Hide();

            // Shows the Area Quiz form
            areaQuizForm.ShowDialog(); // *Note: Use Show() instead of ShowDialog() if you want it non-blocking

            // Shows the Area Menu form when the Area Quiz form is closed
            this.Show();
        }

        private void btnBack_Click(object sender, EventArgs e)
        {
            this.Close();   // Returns to the Main Menu
        }
    }
}
