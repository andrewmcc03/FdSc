namespace MathsTutor
{
    partial class frmRectangleForm
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmRectangleForm));
            lblLength = new Label();
            lblWidth = new Label();
            lblDescription = new Label();
            lblArea = new Label();
            txtLength = new TextBox();
            txtWidth = new TextBox();
            btnArea = new Button();
            lblRectangleTitle = new Label();
            btnBack = new Button();
            ttpTooltipsRectangle = new ToolTip(components);
            SuspendLayout();
            // 
            // lblLength
            // 
            lblLength.AutoSize = true;
            lblLength.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblLength.Location = new Point(47, 102);
            lblLength.Name = "lblLength";
            lblLength.Size = new Size(61, 21);
            lblLength.TabIndex = 5;
            lblLength.Text = "Length:";
            // 
            // lblWidth
            // 
            lblWidth.AutoSize = true;
            lblWidth.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblWidth.Location = new Point(47, 151);
            lblWidth.Name = "lblWidth";
            lblWidth.Size = new Size(55, 21);
            lblWidth.TabIndex = 6;
            lblWidth.Text = "Width:";
            // 
            // lblDescription
            // 
            lblDescription.AutoSize = true;
            lblDescription.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblDescription.Location = new Point(47, 243);
            lblDescription.Name = "lblDescription";
            lblDescription.Size = new Size(99, 21);
            lblDescription.TabIndex = 3;
            lblDescription.Text = "[Description]";
            // 
            // lblArea
            // 
            lblArea.AutoSize = true;
            lblArea.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblArea.Location = new Point(47, 306);
            lblArea.Name = "lblArea";
            lblArea.Size = new Size(52, 21);
            lblArea.TabIndex = 4;
            lblArea.Text = "[Area]";
            // 
            // txtLength
            // 
            txtLength.Location = new Point(154, 101);
            txtLength.Name = "txtLength";
            txtLength.Size = new Size(100, 23);
            txtLength.TabIndex = 0;
            // 
            // txtWidth
            // 
            txtWidth.Location = new Point(154, 150);
            txtWidth.Name = "txtWidth";
            txtWidth.Size = new Size(100, 23);
            txtWidth.TabIndex = 1;
            // 
            // btnArea
            // 
            btnArea.BackColor = Color.FromArgb(201, 45, 57);
            btnArea.Font = new Font("Segoe UI", 14.25F, FontStyle.Bold, GraphicsUnit.Point);
            btnArea.Location = new Point(294, 106);
            btnArea.Name = "btnArea";
            btnArea.Size = new Size(109, 63);
            btnArea.TabIndex = 2;
            btnArea.Text = "Area";
            ttpTooltipsRectangle.SetToolTip(btnArea, "Calculate!");
            btnArea.UseVisualStyleBackColor = false;
            btnArea.Click += btnArea_Click;
            // 
            // lblRectangleTitle
            // 
            lblRectangleTitle.AutoSize = true;
            lblRectangleTitle.Font = new Font("Segoe UI", 18F, FontStyle.Bold, GraphicsUnit.Point);
            lblRectangleTitle.Location = new Point(99, 18);
            lblRectangleTitle.Name = "lblRectangleTitle";
            lblRectangleTitle.Size = new Size(237, 32);
            lblRectangleTitle.TabIndex = 11;
            lblRectangleTitle.Text = "Area of a Rectangle";
            // 
            // btnBack
            // 
            btnBack.BackgroundImage = (Image)resources.GetObject("btnBack.BackgroundImage");
            btnBack.BackgroundImageLayout = ImageLayout.Stretch;
            btnBack.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            btnBack.Location = new Point(15, 15);
            btnBack.Name = "btnBack";
            btnBack.Size = new Size(35, 35);
            btnBack.TabIndex = 12;
            btnBack.UseVisualStyleBackColor = true;
            btnBack.Click += btnBack_Click;
            // 
            // frmRectangleForm
            // 
            AcceptButton = btnArea;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            CancelButton = btnBack;
            ClientSize = new Size(434, 367);
            Controls.Add(btnBack);
            Controls.Add(lblRectangleTitle);
            Controls.Add(btnArea);
            Controls.Add(txtWidth);
            Controls.Add(txtLength);
            Controls.Add(lblArea);
            Controls.Add(lblDescription);
            Controls.Add(lblWidth);
            Controls.Add(lblLength);
            Name = "frmRectangleForm";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Rectangle";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label lblLength;
        private Label lblWidth;
        private Label lblDescription;
        private Label lblArea;
        private TextBox txtLength;
        private TextBox txtWidth;
        private Button btnArea;
        private Label lblRectangleTitle;
        private Button btnBack;
        private ToolTip ttpTooltipsRectangle;
    }
}