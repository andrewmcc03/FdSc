namespace MathsTutor
{
    partial class frmSphereForm
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmSphereForm));
            lblSphereTitle = new Label();
            btnBack = new Button();
            btnVolume = new Button();
            txtRadius = new TextBox();
            lblVolume = new Label();
            lblDescription = new Label();
            lblRadius = new Label();
            ttpTooltipsSphere = new ToolTip(components);
            SuspendLayout();
            // 
            // lblSphereTitle
            // 
            lblSphereTitle.AutoSize = true;
            lblSphereTitle.Font = new Font("Segoe UI", 18F, FontStyle.Bold, GraphicsUnit.Point);
            lblSphereTitle.Location = new Point(99, 28);
            lblSphereTitle.Name = "lblSphereTitle";
            lblSphereTitle.Size = new Size(236, 32);
            lblSphereTitle.TabIndex = 21;
            lblSphereTitle.Text = "Volume of a Sphere";
            // 
            // btnBack
            // 
            btnBack.BackgroundImage = (Image)resources.GetObject("btnBack.BackgroundImage");
            btnBack.BackgroundImageLayout = ImageLayout.Stretch;
            btnBack.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            btnBack.Location = new Point(15, 15);
            btnBack.Name = "btnBack";
            btnBack.Size = new Size(35, 35);
            btnBack.TabIndex = 2;
            btnBack.UseVisualStyleBackColor = true;
            btnBack.Click += btnBack_Click;
            // 
            // btnVolume
            // 
            btnVolume.BackColor = Color.FromArgb(109, 177, 255);
            btnVolume.Font = new Font("Segoe UI", 14.25F, FontStyle.Bold, GraphicsUnit.Point);
            btnVolume.Location = new Point(294, 103);
            btnVolume.Name = "btnVolume";
            btnVolume.Size = new Size(109, 63);
            btnVolume.TabIndex = 1;
            btnVolume.Text = "Volume";
            ttpTooltipsSphere.SetToolTip(btnVolume, "Calculate!");
            btnVolume.UseVisualStyleBackColor = false;
            btnVolume.Click += btnVolume_Click;
            // 
            // txtRadius
            // 
            txtRadius.Location = new Point(154, 123);
            txtRadius.Name = "txtRadius";
            txtRadius.Size = new Size(100, 23);
            txtRadius.TabIndex = 0;
            // 
            // lblVolume
            // 
            lblVolume.AutoSize = true;
            lblVolume.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblVolume.Location = new Point(47, 306);
            lblVolume.Name = "lblVolume";
            lblVolume.Size = new Size(73, 21);
            lblVolume.TabIndex = 4;
            lblVolume.Text = "[Volume]";
            // 
            // lblDescription
            // 
            lblDescription.AutoSize = true;
            lblDescription.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblDescription.Location = new Point(47, 235);
            lblDescription.Name = "lblDescription";
            lblDescription.Size = new Size(99, 21);
            lblDescription.TabIndex = 3;
            lblDescription.Text = "[Description]";
            // 
            // lblRadius
            // 
            lblRadius.AutoSize = true;
            lblRadius.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblRadius.Location = new Point(47, 124);
            lblRadius.Name = "lblRadius";
            lblRadius.Size = new Size(60, 21);
            lblRadius.TabIndex = 16;
            lblRadius.Text = "Radius:";
            // 
            // frmSphereForm
            // 
            AcceptButton = btnVolume;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            CancelButton = btnBack;
            ClientSize = new Size(434, 367);
            Controls.Add(lblSphereTitle);
            Controls.Add(btnBack);
            Controls.Add(btnVolume);
            Controls.Add(txtRadius);
            Controls.Add(lblVolume);
            Controls.Add(lblDescription);
            Controls.Add(lblRadius);
            Name = "frmSphereForm";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Sphere";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label lblSphereTitle;
        private Button btnBack;
        private TextBox txtHeight;
        private Label lblHeight;
        private Button btnVolume;
        private TextBox txtBreadth;
        private TextBox txtRadius;
        private Label lblVolume;
        private Label lblDescription;
        private Label lblBreadth;
        private Label lblRadius;
        private ToolTip ttpTooltipsSphere;
    }
}