namespace MathsTutor
{
    partial class frmAreaMenu
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmAreaMenu));
            btnCircle = new Button();
            btnSquare = new Button();
            btnTriangle = new Button();
            btnAreaQuiz = new Button();
            lblAreaMenuTitle = new Label();
            lblAreaDescription = new Label();
            btnBack = new Button();
            btnRectangle = new Button();
            ttpTooltipsAreaMenu = new ToolTip(components);
            SuspendLayout();
            // 
            // btnCircle
            // 
            btnCircle.BackColor = Color.FromArgb(84, 196, 94);
            btnCircle.Font = new Font("Segoe UI", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnCircle.Location = new Point(261, 96);
            btnCircle.Name = "btnCircle";
            btnCircle.Size = new Size(134, 99);
            btnCircle.TabIndex = 1;
            btnCircle.Text = "Circle";
            ttpTooltipsAreaMenu.SetToolTip(btnCircle, "Calculate the Area of a Circle");
            btnCircle.UseVisualStyleBackColor = false;
            btnCircle.Click += btnCircle_Click;
            // 
            // btnSquare
            // 
            btnSquare.BackColor = Color.FromArgb(255, 227, 66);
            btnSquare.Font = new Font("Segoe UI", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnSquare.Location = new Point(58, 215);
            btnSquare.Name = "btnSquare";
            btnSquare.Size = new Size(134, 99);
            btnSquare.TabIndex = 2;
            btnSquare.Text = "Square";
            ttpTooltipsAreaMenu.SetToolTip(btnSquare, "Calculate the Area of a Square");
            btnSquare.UseVisualStyleBackColor = false;
            btnSquare.Click += btnSquare_Click;
            // 
            // btnTriangle
            // 
            btnTriangle.BackColor = Color.FromArgb(109, 177, 255);
            btnTriangle.Font = new Font("Segoe UI", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnTriangle.Location = new Point(261, 215);
            btnTriangle.Name = "btnTriangle";
            btnTriangle.Size = new Size(134, 99);
            btnTriangle.TabIndex = 3;
            btnTriangle.Text = "Triangle";
            ttpTooltipsAreaMenu.SetToolTip(btnTriangle, "Calculate the Area of a Triangle");
            btnTriangle.UseVisualStyleBackColor = false;
            btnTriangle.Click += btnTriangle_Click;
            // 
            // btnAreaQuiz
            // 
            btnAreaQuiz.BackColor = Color.FromArgb(151, 158, 168);
            btnAreaQuiz.Font = new Font("Segoe UI", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnAreaQuiz.Location = new Point(146, 337);
            btnAreaQuiz.Name = "btnAreaQuiz";
            btnAreaQuiz.Size = new Size(160, 46);
            btnAreaQuiz.TabIndex = 4;
            btnAreaQuiz.Text = "Quiz";
            ttpTooltipsAreaMenu.SetToolTip(btnAreaQuiz, "Take the Area Quiz!");
            btnAreaQuiz.UseVisualStyleBackColor = false;
            btnAreaQuiz.Click += btnAreaQuiz_Click;
            // 
            // lblAreaMenuTitle
            // 
            lblAreaMenuTitle.AutoSize = true;
            lblAreaMenuTitle.Font = new Font("Segoe UI", 20.25F, FontStyle.Bold, GraphicsUnit.Point);
            lblAreaMenuTitle.Location = new Point(119, 16);
            lblAreaMenuTitle.Name = "lblAreaMenuTitle";
            lblAreaMenuTitle.Size = new Size(215, 37);
            lblAreaMenuTitle.TabIndex = 5;
            lblAreaMenuTitle.Text = "Area Calculator";
            // 
            // lblAreaDescription
            // 
            lblAreaDescription.AutoSize = true;
            lblAreaDescription.Location = new Point(59, 63);
            lblAreaDescription.Name = "lblAreaDescription";
            lblAreaDescription.Size = new Size(334, 15);
            lblAreaDescription.TabIndex = 6;
            lblAreaDescription.Text = "Select one of the 2D shapes below to \t\t\t\tbegin calculating its area";
            // 
            // btnBack
            // 
            btnBack.BackgroundImage = (Image)resources.GetObject("btnBack.BackgroundImage");
            btnBack.BackgroundImageLayout = ImageLayout.Zoom;
            btnBack.Location = new Point(22, 342);
            btnBack.Name = "btnBack";
            btnBack.Size = new Size(35, 35);
            btnBack.TabIndex = 9;
            ttpTooltipsAreaMenu.SetToolTip(btnBack, "Return to the Main Menu");
            btnBack.UseVisualStyleBackColor = true;
            btnBack.Click += btnBack_Click;
            // 
            // btnRectangle
            // 
            btnRectangle.BackColor = Color.FromArgb(232, 19, 19);
            btnRectangle.Font = new Font("Segoe UI", 15.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnRectangle.Location = new Point(58, 96);
            btnRectangle.Name = "btnRectangle";
            btnRectangle.Size = new Size(134, 99);
            btnRectangle.TabIndex = 10;
            btnRectangle.Text = "Rectangle";
            ttpTooltipsAreaMenu.SetToolTip(btnRectangle, "Calculate the Area of a Rectangle");
            btnRectangle.UseVisualStyleBackColor = false;
            btnRectangle.Click += btnRectangle_Click;
            // 
            // frmAreaMenu
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            CancelButton = btnBack;
            ClientSize = new Size(453, 399);
            Controls.Add(btnRectangle);
            Controls.Add(btnBack);
            Controls.Add(lblAreaDescription);
            Controls.Add(lblAreaMenuTitle);
            Controls.Add(btnAreaQuiz);
            Controls.Add(btnTriangle);
            Controls.Add(btnSquare);
            Controls.Add(btnCircle);
            Name = "frmAreaMenu";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Area Menu";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion
        private Button btnCircle;
        private Button btnSquare;
        private Button btnTriangle;
        private Button btnAreaQuiz;
        private Label lblAreaMenuTitle;
        private Label lblAreaDescription;
        private Button btnBack;
        private Button btnRectangle;
        private ToolTip ttpTooltipsAreaMenu;
    }
}