namespace MathsTutor
{
    partial class frmCircleForm
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmCircleForm));
            lblRadius = new Label();
            lblDescription = new Label();
            lblArea = new Label();
            btnArea = new Button();
            txtRadius = new TextBox();
            btnBack = new Button();
            lblCircleTitle = new Label();
            ttpTooltipsCircle = new ToolTip(components);
            SuspendLayout();
            // 
            // lblRadius
            // 
            lblRadius.AutoSize = true;
            lblRadius.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblRadius.Location = new Point(47, 124);
            lblRadius.Name = "lblRadius";
            lblRadius.Size = new Size(60, 21);
            lblRadius.TabIndex = 4;
            lblRadius.Text = "Radius:";
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
            ttpTooltipsCircle.SetToolTip(btnArea, "Calculate!");
            btnArea.UseVisualStyleBackColor = false;
            btnArea.Click += btnArea_Click;
            // 
            // txtRadius
            // 
            txtRadius.Location = new Point(154, 123);
            txtRadius.Name = "txtRadius";
            txtRadius.Size = new Size(100, 23);
            txtRadius.TabIndex = 0;
            // 
            // btnBack
            // 
            btnBack.BackgroundImage = (Image)resources.GetObject("btnBack.BackgroundImage");
            btnBack.BackgroundImageLayout = ImageLayout.Stretch;
            btnBack.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            btnBack.Location = new Point(15, 15);
            btnBack.Name = "btnBack";
            btnBack.Size = new Size(35, 35);
            btnBack.TabIndex = 5;
            btnBack.UseVisualStyleBackColor = true;
            btnBack.Click += btnBack_Click;
            // 
            // lblCircleTitle
            // 
            lblCircleTitle.AutoSize = true;
            lblCircleTitle.Font = new Font("Segoe UI", 18F, FontStyle.Bold, GraphicsUnit.Point);
            lblCircleTitle.Location = new Point(123, 34);
            lblCircleTitle.Name = "lblCircleTitle";
            lblCircleTitle.Size = new Size(189, 32);
            lblCircleTitle.TabIndex = 22;
            lblCircleTitle.Text = "Area of a Circle";
            // 
            // frmCircleForm
            // 
            AcceptButton = btnArea;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            CancelButton = btnBack;
            ClientSize = new Size(434, 367);
            Controls.Add(lblCircleTitle);
            Controls.Add(btnBack);
            Controls.Add(txtRadius);
            Controls.Add(btnArea);
            Controls.Add(lblArea);
            Controls.Add(lblDescription);
            Controls.Add(lblRadius);
            Name = "frmCircleForm";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Circle";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label lblRadius;
        private Label lblDescription;
        private Label lblArea;
        private Button btnArea;
        private TextBox txtRadius;
        private Button btnBack;
        private Label lblCircleTitle;
        private ToolTip ttpTooltipsCircle;
    }
}