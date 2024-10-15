namespace MathsTutor
{
    partial class frmVolumeMenu
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmVolumeMenu));
            lblVolumeMenuTitle = new Label();
            lblDescription = new Label();
            btnCuboid = new Button();
            btnSphere = new Button();
            btnCube = new Button();
            btnPyramid = new Button();
            btnVolumeQuiz = new Button();
            btnBack = new Button();
            ttpTooltipsVolumeMenu = new ToolTip(components);
            SuspendLayout();
            // 
            // lblVolumeMenuTitle
            // 
            lblVolumeMenuTitle.AutoSize = true;
            lblVolumeMenuTitle.Font = new Font("Segoe UI", 20.25F, FontStyle.Bold, GraphicsUnit.Point);
            lblVolumeMenuTitle.Location = new Point(100, 16);
            lblVolumeMenuTitle.Name = "lblVolumeMenuTitle";
            lblVolumeMenuTitle.Size = new Size(252, 37);
            lblVolumeMenuTitle.TabIndex = 5;
            lblVolumeMenuTitle.Text = "Volume Calculator";
            // 
            // lblDescription
            // 
            lblDescription.AutoSize = true;
            lblDescription.Location = new Point(50, 63);
            lblDescription.Name = "lblDescription";
            lblDescription.Size = new Size(352, 15);
            lblDescription.TabIndex = 6;
            lblDescription.Text = "Select one of the 3D shapes below to \t\t\t\tbegin calculating its volume";
            // 
            // btnCuboid
            // 
            btnCuboid.BackColor = Color.FromArgb(147, 145, 255);
            btnCuboid.Font = new Font("Segoe UI", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnCuboid.Location = new Point(58, 96);
            btnCuboid.Name = "btnCuboid";
            btnCuboid.Size = new Size(134, 99);
            btnCuboid.TabIndex = 0;
            btnCuboid.Text = "Cuboid";
            ttpTooltipsVolumeMenu.SetToolTip(btnCuboid, "Calculate the Volume of a Cuboid");
            btnCuboid.UseVisualStyleBackColor = false;
            btnCuboid.Click += btnCuboid_Click;
            // 
            // btnSphere
            // 
            btnSphere.BackColor = Color.FromArgb(255, 227, 66);
            btnSphere.Font = new Font("Segoe UI", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnSphere.Location = new Point(261, 96);
            btnSphere.Name = "btnSphere";
            btnSphere.Size = new Size(134, 99);
            btnSphere.TabIndex = 1;
            btnSphere.Text = "Sphere";
            ttpTooltipsVolumeMenu.SetToolTip(btnSphere, "Calculate the Volume of a Sphere");
            btnSphere.UseVisualStyleBackColor = false;
            btnSphere.Click += btnSphere_Click;
            // 
            // btnCube
            // 
            btnCube.BackColor = Color.FromArgb(252, 148, 50);
            btnCube.Font = new Font("Segoe UI", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnCube.Location = new Point(58, 215);
            btnCube.Name = "btnCube";
            btnCube.Size = new Size(134, 99);
            btnCube.TabIndex = 2;
            btnCube.Text = "Cube";
            ttpTooltipsVolumeMenu.SetToolTip(btnCube, "Calculate the Volume of a Cube");
            btnCube.UseVisualStyleBackColor = false;
            btnCube.Click += btnCube_Click;
            // 
            // btnPyramid
            // 
            btnPyramid.BackColor = Color.FromArgb(130, 117, 91);
            btnPyramid.Font = new Font("Segoe UI", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnPyramid.Location = new Point(261, 215);
            btnPyramid.Name = "btnPyramid";
            btnPyramid.Size = new Size(134, 99);
            btnPyramid.TabIndex = 3;
            btnPyramid.Text = "Pyramid";
            ttpTooltipsVolumeMenu.SetToolTip(btnPyramid, "Calculate the Volume of a Pyramid");
            btnPyramid.UseVisualStyleBackColor = false;
            btnPyramid.Click += btnPyramid_Click;
            // 
            // btnVolumeQuiz
            // 
            btnVolumeQuiz.BackColor = Color.FromArgb(151, 158, 168);
            btnVolumeQuiz.Font = new Font("Segoe UI", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnVolumeQuiz.Location = new Point(146, 337);
            btnVolumeQuiz.Name = "btnVolumeQuiz";
            btnVolumeQuiz.Size = new Size(160, 46);
            btnVolumeQuiz.TabIndex = 4;
            btnVolumeQuiz.Text = "Quiz";
            ttpTooltipsVolumeMenu.SetToolTip(btnVolumeQuiz, "Take the Volume Quiz!");
            btnVolumeQuiz.UseVisualStyleBackColor = false;
            btnVolumeQuiz.Click += btnVolumeQuiz_Click;
            // 
            // btnBack
            // 
            btnBack.BackgroundImage = (Image)resources.GetObject("btnBack.BackgroundImage");
            btnBack.BackgroundImageLayout = ImageLayout.Zoom;
            btnBack.Location = new Point(22, 342);
            btnBack.Name = "btnBack";
            btnBack.Size = new Size(35, 35);
            btnBack.TabIndex = 8;
            ttpTooltipsVolumeMenu.SetToolTip(btnBack, "Return to the Main Menu");
            btnBack.UseVisualStyleBackColor = true;
            btnBack.Click += btnBack_Click;
            // 
            // frmVolumeMenu
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            CancelButton = btnBack;
            ClientSize = new Size(453, 399);
            Controls.Add(btnBack);
            Controls.Add(btnVolumeQuiz);
            Controls.Add(btnPyramid);
            Controls.Add(btnCube);
            Controls.Add(btnSphere);
            Controls.Add(btnCuboid);
            Controls.Add(lblDescription);
            Controls.Add(lblVolumeMenuTitle);
            Name = "frmVolumeMenu";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Volume Menu";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label lblVolumeMenuTitle;
        private Label lblDescription;
        private Button btnCuboid;
        private Button btnSphere;
        private Button btnCube;
        private Button btnPyramid;
        private Button btnVolumeQuiz;
        private Button btnBack;
        private ToolTip ttpTooltipsVolumeMenu;
    }
}