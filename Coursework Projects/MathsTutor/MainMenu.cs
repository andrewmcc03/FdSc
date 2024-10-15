using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

/* CW2 | MainMenu.cs - Form for displaying the main menu screen on startup.
 * AUTHOR:          Andrew McCormick
 * DATE CREATED:    10/10/23
 */

namespace MathsTutor
{
    public partial class frmMainMenu : Form
    {
        public frmMainMenu()
        {
            InitializeComponent();
            this.Select();  // Removes initial focus
            this.FormClosing += new FormClosingEventHandler(frmMainMenu_FormClosing);
        }

        private void btnArea_Click(object sender, EventArgs e)
        {
            // Create an instance of the Area Menu form
            frmAreaMenu areaForm = new frmAreaMenu();

            // Hide the current Main Menu form
            this.Hide();

            // Show the Area Menu form
            areaForm.ShowDialog(); // Use Show() instead of ShowDialog() if you want it non-blocking

            // Show the MainMenu form when the Area Menu form is closed
            this.Show();
        }

        private void btnVolume_Click(object sender, EventArgs e)
        {
            // Create an instance of the Area Menu form
            frmVolumeMenu volumeMenu = new frmVolumeMenu();

            // Hide the current Main Menu form
            this.Hide();

            // Show the Area Menu form
            volumeMenu.ShowDialog(); // Use Show() instead of ShowDialog() if you want it non-blocking

            // Show the MainMenu form when the Area Menu form is closed
            this.Show();
        }

        private void btnExit_Click(object sender, EventArgs e)
        {
            this.Close();   // Exits the program
        }

        // Method for prompting the user to confirm if they want to exit the program
        private void frmMainMenu_FormClosing(object sender, FormClosingEventArgs e)
        {
            DialogResult result = MessageBox.Show("Are you sure you want to exit the program?", "Exit", MessageBoxButtons.YesNo, MessageBoxIcon.Question);

            // If user selects no, cancel exit
            if (result == DialogResult.No)
            {
                e.Cancel = true;
            }
        }
    }
}
