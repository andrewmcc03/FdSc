namespace MathsTutor
{
    partial class frmPyramidForm
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmPyramidForm));
            lblPyramidTitle = new Label();
            btnBack = new Button();
            txtHeight = new TextBox();
            lblHeight = new Label();
            btnVolume = new Button();
            txtWidth = new TextBox();
            txtLength = new TextBox();
            lblVolume = new Label();
            lblDescription = new Label();
            lblWidth = new Label();
            lblLength = new Label();
            ttpTooltipsPyramid = new ToolTip(components);
            SuspendLayout();
            // 
            // lblPyramidTitle
            // 
            lblPyramidTitle.AutoSize = true;
            lblPyramidTitle.Font = new Font("Segoe UI", 18F, FontStyle.Bold, GraphicsUnit.Point);
            lblPyramidTitle.Location = new Point(119, 18);
            lblPyramidTitle.Name = "lblPyramidTitle";
            lblPyramidTitle.Size = new Size(253, 32);
            lblPyramidTitle.TabIndex = 10;
            lblPyramidTitle.Text = "Volume of a Pyramid";
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
            // txtHeight
            // 
            txtHeight.Location = new Point(169, 177);
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
            // btnVolume
            // 
            btnVolume.BackColor = Color.FromArgb(109, 177, 255);
            btnVolume.Font = new Font("Segoe UI", 14.25F, FontStyle.Bold, GraphicsUnit.Point);
            btnVolume.Location = new Point(332, 109);
            btnVolume.Name = "btnVolume";
            btnVolume.Size = new Size(109, 63);
            btnVolume.TabIndex = 3;
            btnVolume.Text = "Volume";
            ttpTooltipsPyramid.SetToolTip(btnVolume, "Calculate!");
            btnVolume.UseVisualStyleBackColor = false;
            btnVolume.Click += btnVolume_Click;
            // 
            // txtWidth
            // 
            txtWidth.Location = new Point(169, 129);
            txtWidth.Name = "txtWidth";
            txtWidth.Size = new Size(100, 23);
            txtWidth.TabIndex = 1;
            // 
            // txtLength
            // 
            txtLength.Location = new Point(169, 81);
            txtLength.Name = "txtLength";
            txtLength.Size = new Size(100, 23);
            txtLength.TabIndex = 0;
            // 
            // lblVolume
            // 
            lblVolume.AutoSize = true;
            lblVolume.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblVolume.Location = new Point(47, 308);
            lblVolume.Name = "lblVolume";
            lblVolume.Size = new Size(73, 21);
            lblVolume.TabIndex = 9;
            lblVolume.Text = "[Volume]";
            // 
            // lblDescription
            // 
            lblDescription.AutoSize = true;
            lblDescription.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblDescription.Location = new Point(47, 240);
            lblDescription.Name = "lblDescription";
            lblDescription.Size = new Size(99, 21);
            lblDescription.TabIndex = 8;
            lblDescription.Text = "[Description]";
            // 
            // lblWidth
            // 
            lblWidth.AutoSize = true;
            lblWidth.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblWidth.Location = new Point(47, 130);
            lblWidth.Name = "lblWidth";
            lblWidth.Size = new Size(91, 21);
            lblWidth.TabIndex = 6;
            lblWidth.Text = "Base Width:";
            // 
            // lblLength
            // 
            lblLength.AutoSize = true;
            lblLength.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblLength.Location = new Point(47, 82);
            lblLength.Name = "lblLength";
            lblLength.Size = new Size(97, 21);
            lblLength.TabIndex = 5;
            lblLength.Text = "Base Length:";
            // 
            // frmPyramidForm
            // 
            AcceptButton = btnVolume;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            CancelButton = btnBack;
            ClientSize = new Size(490, 367);
            Controls.Add(lblPyramidTitle);
            Controls.Add(btnBack);
            Controls.Add(txtHeight);
            Controls.Add(lblHeight);
            Controls.Add(btnVolume);
            Controls.Add(txtWidth);
            Controls.Add(txtLength);
            Controls.Add(lblVolume);
            Controls.Add(lblDescription);
            Controls.Add(lblWidth);
            Controls.Add(lblLength);
            Name = "frmPyramidForm";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Pyramid";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label lblPyramidTitle;
        private Button btnBack;
        private TextBox txtHeight;
        private Label lblHeight;
        private Button btnVolume;
        private TextBox txtWidth;
        private TextBox txtLength;
        private Label lblVolume;
        private Label lblDescription;
        private Label lblWidth;
        private Label lblLength;
        private ToolTip ttpTooltipsPyramid;
    }
}