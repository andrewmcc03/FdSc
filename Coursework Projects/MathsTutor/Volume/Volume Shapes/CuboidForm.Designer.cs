namespace MathsTutor
{
    partial class frmCuboidForm
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmCuboidForm));
            btnVolume = new Button();
            txtBreadth = new TextBox();
            txtLength = new TextBox();
            lblVolume = new Label();
            lblDescription = new Label();
            lblBreadth = new Label();
            lblLength = new Label();
            txtHeight = new TextBox();
            lblHeight = new Label();
            btnBack = new Button();
            lblCuboidTitle = new Label();
            ttpTooltipsCuboid = new ToolTip(components);
            SuspendLayout();
            // 
            // btnVolume
            // 
            btnVolume.BackColor = Color.FromArgb(109, 177, 255);
            btnVolume.Font = new Font("Segoe UI", 14.25F, FontStyle.Bold, GraphicsUnit.Point);
            btnVolume.Location = new Point(294, 109);
            btnVolume.Name = "btnVolume";
            btnVolume.Size = new Size(109, 63);
            btnVolume.TabIndex = 3;
            btnVolume.Text = "Volume";
            ttpTooltipsCuboid.SetToolTip(btnVolume, "Calculate!");
            btnVolume.UseVisualStyleBackColor = false;
            btnVolume.Click += btnVolume_Click;
            // 
            // txtBreadth
            // 
            txtBreadth.Location = new Point(154, 129);
            txtBreadth.Name = "txtBreadth";
            txtBreadth.Size = new Size(100, 23);
            txtBreadth.TabIndex = 1;
            // 
            // txtLength
            // 
            txtLength.Location = new Point(154, 81);
            txtLength.Name = "txtLength";
            txtLength.Size = new Size(100, 23);
            txtLength.TabIndex = 0;
            // 
            // lblVolume
            // 
            lblVolume.AutoSize = true;
            lblVolume.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblVolume.Location = new Point(47, 306);
            lblVolume.Name = "lblVolume";
            lblVolume.Size = new Size(73, 21);
            lblVolume.TabIndex = 9;
            lblVolume.Text = "[Volume]";
            // 
            // lblDescription
            // 
            lblDescription.AutoSize = true;
            lblDescription.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblDescription.Location = new Point(47, 250);
            lblDescription.Name = "lblDescription";
            lblDescription.Size = new Size(99, 21);
            lblDescription.TabIndex = 8;
            lblDescription.Text = "[Description]";
            // 
            // lblBreadth
            // 
            lblBreadth.AutoSize = true;
            lblBreadth.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblBreadth.Location = new Point(47, 130);
            lblBreadth.Name = "lblBreadth";
            lblBreadth.Size = new Size(67, 21);
            lblBreadth.TabIndex = 6;
            lblBreadth.Text = "Breadth:";
            // 
            // lblLength
            // 
            lblLength.AutoSize = true;
            lblLength.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblLength.Location = new Point(47, 82);
            lblLength.Name = "lblLength";
            lblLength.Size = new Size(61, 21);
            lblLength.TabIndex = 5;
            lblLength.Text = "Length:";
            // 
            // txtHeight
            // 
            txtHeight.Location = new Point(154, 177);
            txtHeight.Name = "txtHeight";
            txtHeight.Size = new Size(100, 23);
            txtHeight.TabIndex = 2;
            // 
            // lblHeight
            // 
            lblHeight.AutoSize = true;
            lblHeight.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblHeight.Location = new Point(47, 178);
            lblHeight.Name = "lblHeight";
            lblHeight.Size = new Size(59, 21);
            lblHeight.TabIndex = 7;
            lblHeight.Text = "Height:";
            // 
            // btnBack
            // 
            btnBack.BackgroundImage = (Image)resources.GetObject("btnBack.BackgroundImage");
            btnBack.BackgroundImageLayout = ImageLayout.Stretch;
            btnBack.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            btnBack.Location = new Point(15, 15);
            btnBack.Name = "btnBack";
            btnBack.Size = new Size(35, 35);
            btnBack.TabIndex = 4;
            btnBack.UseVisualStyleBackColor = true;
            btnBack.Click += btnBack_Click;
            // 
            // lblCuboidTitle
            // 
            lblCuboidTitle.AutoSize = true;
            lblCuboidTitle.Font = new Font("Segoe UI", 18F, FontStyle.Bold, GraphicsUnit.Point);
            lblCuboidTitle.Location = new Point(97, 18);
            lblCuboidTitle.Name = "lblCuboidTitle";
            lblCuboidTitle.Size = new Size(240, 32);
            lblCuboidTitle.TabIndex = 10;
            lblCuboidTitle.Text = "Volume of a Cuboid";
            // 
            // frmCuboidForm
            // 
            AcceptButton = btnVolume;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            CancelButton = btnBack;
            ClientSize = new Size(434, 367);
            Controls.Add(lblCuboidTitle);
            Controls.Add(btnBack);
            Controls.Add(txtHeight);
            Controls.Add(lblHeight);
            Controls.Add(btnVolume);
            Controls.Add(txtBreadth);
            Controls.Add(txtLength);
            Controls.Add(lblVolume);
            Controls.Add(lblDescription);
            Controls.Add(lblBreadth);
            Controls.Add(lblLength);
            Name = "frmCuboidForm";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Cuboid";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button btnVolume;
        private TextBox txtBreadth;
        private TextBox txtLength;
        private Label lblVolume;
        private Label lblDescription;
        private Label lblBreadth;
        private Label lblLength;
        private TextBox txtHeight;
        private Label lblHeight;
        private Button btnBack;
        private Label lblCuboidTitle;
        private ToolTip ttpTooltipsCuboid;
    }
}