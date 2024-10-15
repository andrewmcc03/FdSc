namespace MathsTutor
{
    partial class frmMainMenu
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmMainMenu));
            btnArea = new Button();
            btnVolume = new Button();
            btnExit = new Button();
            txtScore1 = new TextBox();
            txtScore2 = new TextBox();
            lblTitle = new Label();
            ttpTooltipsMainMenu = new ToolTip(components);
            SuspendLayout();
            // 
            // btnArea
            // 
            btnArea.BackColor = Color.FromArgb(201, 45, 57);
            btnArea.Font = new Font("Segoe UI Semibold", 20F, FontStyle.Bold, GraphicsUnit.Point);
            btnArea.Location = new Point(65, 114);
            btnArea.Name = "btnArea";
            btnArea.Size = new Size(150, 104);
            btnArea.TabIndex = 0;
            btnArea.Text = "Area";
            ttpTooltipsMainMenu.SetToolTip(btnArea, "Area Menu");
            btnArea.UseVisualStyleBackColor = false;
            btnArea.Click += btnArea_Click;
            // 
            // btnVolume
            // 
            btnVolume.BackColor = Color.FromArgb(109, 177, 255);
            btnVolume.Font = new Font("Segoe UI Semibold", 20F, FontStyle.Bold, GraphicsUnit.Point);
            btnVolume.Location = new Point(326, 114);
            btnVolume.Name = "btnVolume";
            btnVolume.Size = new Size(150, 104);
            btnVolume.TabIndex = 1;
            btnVolume.Text = "Volume";
            ttpTooltipsMainMenu.SetToolTip(btnVolume, "Volume Menu");
            btnVolume.UseVisualStyleBackColor = false;
            btnVolume.Click += btnVolume_Click;
            // 
            // btnExit
            // 
            btnExit.BackColor = Color.FromArgb(151, 158, 168);
            btnExit.Font = new Font("Segoe UI", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnExit.Location = new Point(214, 251);
            btnExit.Name = "btnExit";
            btnExit.Size = new Size(113, 56);
            btnExit.TabIndex = 2;
            btnExit.Text = "Exit";
            ttpTooltipsMainMenu.SetToolTip(btnExit, "Exit the program");
            btnExit.UseVisualStyleBackColor = false;
            btnExit.Click += btnExit_Click;
            // 
            // txtScore1
            // 
            txtScore1.BackColor = Color.FromArgb(239, 240, 240);
            txtScore1.Font = new Font("Segoe UI", 20.25F, FontStyle.Regular, GraphicsUnit.Point);
            txtScore1.Location = new Point(12, 24);
            txtScore1.Name = "txtScore1";
            txtScore1.ReadOnly = true;
            txtScore1.Size = new Size(44, 43);
            txtScore1.TabIndex = 4;
            txtScore1.Text = "0";
            txtScore1.TextAlign = HorizontalAlignment.Center;
            txtScore1.Visible = false;
            // 
            // txtScore2
            // 
            txtScore2.BackColor = Color.FromArgb(239, 240, 240);
            txtScore2.Font = new Font("Segoe UI", 20.25F, FontStyle.Regular, GraphicsUnit.Point);
            txtScore2.Location = new Point(484, 24);
            txtScore2.Name = "txtScore2";
            txtScore2.ReadOnly = true;
            txtScore2.Size = new Size(44, 43);
            txtScore2.TabIndex = 5;
            txtScore2.Text = "0";
            txtScore2.TextAlign = HorizontalAlignment.Center;
            txtScore2.Visible = false;
            // 
            // lblTitle
            // 
            lblTitle.BorderStyle = BorderStyle.FixedSingle;
            lblTitle.Font = new Font("Segoe UI", 20.25F, FontStyle.Bold, GraphicsUnit.Point);
            lblTitle.Location = new Point(80, 18);
            lblTitle.Name = "lblTitle";
            lblTitle.Size = new Size(380, 55);
            lblTitle.TabIndex = 6;
            lblTitle.Text = "Area & Volume Calculator";
            lblTitle.TextAlign = ContentAlignment.MiddleCenter;
            lblTitle.UseMnemonic = false;
            // 
            // frmMainMenu
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            BackgroundImage = (Image)resources.GetObject("$this.BackgroundImage");
            BackgroundImageLayout = ImageLayout.None;
            CancelButton = btnExit;
            ClientSize = new Size(540, 346);
            Controls.Add(lblTitle);
            Controls.Add(txtScore2);
            Controls.Add(txtScore1);
            Controls.Add(btnExit);
            Controls.Add(btnVolume);
            Controls.Add(btnArea);
            DoubleBuffered = true;
            Name = "frmMainMenu";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Main Menu";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button btnArea;
        private Button btnVolume;
        private Button btnExit;
        private TextBox txtScore1;
        private TextBox txtScore2;
        private Label lblTitle;
        private ToolTip ttpTooltipsMainMenu;
    }
}