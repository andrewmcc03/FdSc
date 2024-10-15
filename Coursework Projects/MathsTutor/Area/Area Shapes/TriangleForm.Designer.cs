namespace MathsTutor
{
    partial class frmTriangleForm
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmTriangleForm));
            btnArea = new Button();
            txtHeight = new TextBox();
            txtBaseLength = new TextBox();
            lblArea = new Label();
            lblDescription = new Label();
            lblHeight = new Label();
            lblBase = new Label();
            btnBack = new Button();
            lblRectangleTitle = new Label();
            ttpTooltipsTriangle = new ToolTip(components);
            SuspendLayout();
            // 
            // btnArea
            // 
            btnArea.BackColor = Color.FromArgb(201, 45, 57);
            btnArea.Font = new Font("Segoe UI", 14.25F, FontStyle.Bold, GraphicsUnit.Point);
            btnArea.Location = new Point(294, 106);
            btnArea.Name = "btnArea";
            btnArea.Size = new Size(109, 63);
            btnArea.TabIndex = 9;
            btnArea.Text = "Area";
            ttpTooltipsTriangle.SetToolTip(btnArea, "Calculate!");
            btnArea.UseVisualStyleBackColor = false;
            btnArea.Click += btnArea_Click;
            // 
            // txtHeight
            // 
            txtHeight.Location = new Point(154, 150);
            txtHeight.Name = "txtHeight";
            txtHeight.Size = new Size(100, 23);
            txtHeight.TabIndex = 8;
            // 
            // txtBaseLength
            // 
            txtBaseLength.Location = new Point(154, 101);
            txtBaseLength.Name = "txtBaseLength";
            txtBaseLength.Size = new Size(100, 23);
            txtBaseLength.TabIndex = 7;
            // 
            // lblArea
            // 
            lblArea.AutoSize = true;
            lblArea.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblArea.Location = new Point(47, 306);
            lblArea.Name = "lblArea";
            lblArea.Size = new Size(52, 21);
            lblArea.TabIndex = 11;
            lblArea.Text = "[Area]";
            // 
            // lblDescription
            // 
            lblDescription.AutoSize = true;
            lblDescription.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblDescription.Location = new Point(47, 243);
            lblDescription.Name = "lblDescription";
            lblDescription.Size = new Size(99, 21);
            lblDescription.TabIndex = 10;
            lblDescription.Text = "[Description]";
            // 
            // lblHeight
            // 
            lblHeight.AutoSize = true;
            lblHeight.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblHeight.Location = new Point(47, 151);
            lblHeight.Name = "lblHeight";
            lblHeight.Size = new Size(59, 21);
            lblHeight.TabIndex = 13;
            lblHeight.Text = "Height:";
            // 
            // lblBase
            // 
            lblBase.AutoSize = true;
            lblBase.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblBase.Location = new Point(47, 102);
            lblBase.Name = "lblBase";
            lblBase.Size = new Size(45, 21);
            lblBase.TabIndex = 12;
            lblBase.Text = "Base:";
            // 
            // btnBack
            // 
            btnBack.BackgroundImage = (Image)resources.GetObject("btnBack.BackgroundImage");
            btnBack.BackgroundImageLayout = ImageLayout.Stretch;
            btnBack.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            btnBack.Location = new Point(15, 15);
            btnBack.Name = "btnBack";
            btnBack.Size = new Size(35, 35);
            btnBack.TabIndex = 14;
            btnBack.UseVisualStyleBackColor = true;
            // 
            // lblRectangleTitle
            // 
            lblRectangleTitle.AutoSize = true;
            lblRectangleTitle.Font = new Font("Segoe UI", 18F, FontStyle.Bold, GraphicsUnit.Point);
            lblRectangleTitle.Location = new Point(109, 18);
            lblRectangleTitle.Name = "lblRectangleTitle";
            lblRectangleTitle.Size = new Size(217, 32);
            lblRectangleTitle.TabIndex = 15;
            lblRectangleTitle.Text = "Area of a Triangle";
            // 
            // frmTriangleForm
            // 
            AcceptButton = btnArea;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            CancelButton = btnBack;
            ClientSize = new Size(434, 367);
            Controls.Add(lblRectangleTitle);
            Controls.Add(btnBack);
            Controls.Add(btnArea);
            Controls.Add(txtHeight);
            Controls.Add(txtBaseLength);
            Controls.Add(lblArea);
            Controls.Add(lblDescription);
            Controls.Add(lblHeight);
            Controls.Add(lblBase);
            Name = "frmTriangleForm";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Triangle";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button btnArea;
        private TextBox txtHeight;
        private TextBox txtBaseLength;
        private Label lblArea;
        private Label lblDescription;
        private Label lblHeight;
        private Label lblBase;
        private Button btnBack;
        private Label lblRectangleTitle;
        private ToolTip ttpTooltipsTriangle;
    }
}