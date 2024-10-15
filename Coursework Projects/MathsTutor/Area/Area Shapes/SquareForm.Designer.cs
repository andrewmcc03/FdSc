namespace MathsTutor
{
    partial class frmSquareForm
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmSquareForm));
            lblLength = new Label();
            lblDescription = new Label();
            lblArea = new Label();
            btnArea = new Button();
            txtLength = new TextBox();
            btnBack = new Button();
            lblSquareTitle = new Label();
            ttpTooltipsSquare = new ToolTip(components);
            SuspendLayout();
            // 
            // lblLength
            // 
            lblLength.AutoSize = true;
            lblLength.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblLength.Location = new Point(47, 124);
            lblLength.Name = "lblLength";
            lblLength.Size = new Size(61, 21);
            lblLength.TabIndex = 4;
            lblLength.Text = "Length:";
            // 
            // lblDescription
            // 
            lblDescription.AutoSize = true;
            lblDescription.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblDescription.Location = new Point(47, 235);
            lblDescription.Name = "lblDescription";
            lblDescription.Size = new Size(99, 21);
            lblDescription.TabIndex = 2;
            lblDescription.Text = "[Description]";
            // 
            // lblArea
            // 
            lblArea.AutoSize = true;
            lblArea.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblArea.Location = new Point(47, 306);
            lblArea.Name = "lblArea";
            lblArea.Size = new Size(52, 21);
            lblArea.TabIndex = 3;
            lblArea.Text = "[Area]";
            // 
            // btnArea
            // 
            btnArea.BackColor = Color.FromArgb(201, 45, 57);
            btnArea.Font = new Font("Segoe UI", 14.25F, FontStyle.Bold, GraphicsUnit.Point);
            btnArea.Location = new Point(294, 103);
            btnArea.Name = "btnArea";
            btnArea.Size = new Size(109, 63);
            btnArea.TabIndex = 1;
            btnArea.Text = "Area";
            ttpTooltipsSquare.SetToolTip(btnArea, "Calculate!");
            btnArea.UseVisualStyleBackColor = false;
            btnArea.Click += btnArea_Click;
            // 
            // txtLength
            // 
            txtLength.Location = new Point(154, 123);
            txtLength.Name = "txtLength";
            txtLength.Size = new Size(100, 23);
            txtLength.TabIndex = 0;
            // 
            // btnBack
            // 
            btnBack.BackgroundImage = (Image)resources.GetObject("btnBack.BackgroundImage");
            btnBack.BackgroundImageLayout = ImageLayout.Stretch;
            btnBack.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            btnBack.Location = new Point(15, 15);
            btnBack.Name = "btnBack";
            btnBack.Size = new Size(35, 35);
            btnBack.TabIndex = 6;
            btnBack.UseVisualStyleBackColor = true;
            // 
            // lblSquareTitle
            // 
            lblSquareTitle.AutoSize = true;
            lblSquareTitle.Font = new Font("Segoe UI", 18F, FontStyle.Bold, GraphicsUnit.Point);
            lblSquareTitle.Location = new Point(117, 34);
            lblSquareTitle.Name = "lblSquareTitle";
            lblSquareTitle.Size = new Size(204, 32);
            lblSquareTitle.TabIndex = 23;
            lblSquareTitle.Text = "Area of a Square";
            // 
            // frmSquareForm
            // 
            AcceptButton = btnArea;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            CancelButton = btnBack;
            ClientSize = new Size(434, 367);
            Controls.Add(lblSquareTitle);
            Controls.Add(btnBack);
            Controls.Add(txtLength);
            Controls.Add(btnArea);
            Controls.Add(lblArea);
            Controls.Add(lblDescription);
            Controls.Add(lblLength);
            Name = "frmSquareForm";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Square";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label lblLength;
        private Label lblDescription;
        private Label lblArea;
        private Button btnArea;
        private TextBox txtLength;
        private Button btnBack;
        private Label lblSquareTitle;
        private ToolTip ttpTooltipsSquare;
    }
}