using MathsTutor;
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
    public partial class frmVolumeMenu : Form
    {
        public frmVolumeMenu()
        {
            InitializeComponent();
            this.Select();  // Removes initial focus
        }

        private void btnCuboid_Click(object sender, EventArgs e)
        {
            // Creates an instance of the Cuboid form
            Form cuboidForm = new frmCuboidForm();

            // Hides the current Volume Menu form
            this.Hide();

            // Shows the Cuboid form
            cuboidForm.ShowDialog(); // *Note: Use Show() instead of ShowDialog() if you want it non-blocking

            // Shows the Volume Menu form when the Cuboid form is closed
            this.Show();
        }

        private void btnSphere_Click(object sender, EventArgs e)
        {
            // Creates an instance of the Sphere form
            Form sphereForm = new frmSphereForm();

            // Hides the current Volume Menu form
            this.Hide();

            // Shows the Sphere form
            sphereForm.ShowDialog(); // *Note: Use Show() instead of ShowDialog() if you want it non-blocking

            // Shows the Volume Menu form when the Sphere form is closed
            this.Show();
        }

        private void btnCube_Click(object sender, EventArgs e)
        {
            // Creates an instance of the Cube form
            Form cubeForm = new frmCubeForm();

            // Hides the current Volume Menu form
            this.Hide();

            // Shows the Cube form
            cubeForm.ShowDialog(); // *Note: Use Show() instead of ShowDialog() if you want it non-blocking

            // Shows the Volume Menu form when the Cube form is closed
            this.Show();
        }

        private void btnPyramid_Click(object sender, EventArgs e)
        {
            // Creates an instance of the Pyramid form
            Form pyramidForm = new frmPyramidForm();

            // Hides the current Volume Menu form
            this.Hide();

            // Shows the Pyramid form
            pyramidForm.ShowDialog(); // *Note: Use Show() instead of ShowDialog() if you want it non-blocking

            // Shows the Volume Menu form when the Pyramid form is closed
            this.Show();
        }

        private void btnVolumeQuiz_Click(object sender, EventArgs e)
        {
            // Creates an instance of the Volume Quiz form
            Form volumeQuizForm = new frmVolumeQuizForm();

            // Hides the current Volume Menu form
            this.Hide();

            // Shows the Volume Quiz form
            volumeQuizForm.ShowDialog(); // *Note: Use Show() instead of ShowDialog() if you want it non-blocking

            // Shows the Volume Menu form when the Volume Quiz form is closed
            this.Show();
        }

        private void btnBack_Click(object sender, EventArgs e)
        {
            this.Close();   // Returns to the Main Menu
        }
    }
}
