namespace MathsTutor
{
    partial class frmCubeForm
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmCubeForm));
            lblCubeTitle = new Label();
            btnBack = new Button();
            btnVolume = new Button();
            txtLength = new TextBox();
            lblVolume = new Label();
            lblDescription = new Label();
            lblLength = new Label();
            ttpTooltipsCube = new ToolTip(components);
            SuspendLayout();
            // 
            // lblCubeTitle
            // 
            lblCubeTitle.AutoSize = true;
            lblCubeTitle.Font = new Font("Segoe UI", 18F, FontStyle.Bold, GraphicsUnit.Point);
            lblCubeTitle.Location = new Point(109, 28);
            lblCubeTitle.Name = "lblCubeTitle";
            lblCubeTitle.Size = new Size(216, 32);
            lblCubeTitle.TabIndex = 7;
            lblCubeTitle.Text = "Volume of a Cube";
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
            ttpTooltipsCube.SetToolTip(btnVolume, "Calculate!");
            btnVolume.UseVisualStyleBackColor = false;
            btnVolume.Click += btnVolume_Click;
            // 
            // txtLength
            // 
            txtLength.Location = new Point(154, 123);
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
            lblVolume.TabIndex = 6;
            lblVolume.Text = "[Volume]";
            // 
            // lblDescription
            // 
            lblDescription.AutoSize = true;
            lblDescription.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblDescription.Location = new Point(47, 235);
            lblDescription.Name = "lblDescription";
            lblDescription.Size = new Size(99, 21);
            lblDescription.TabIndex = 5;
            lblDescription.Text = "[Description]";
            // 
            // lblLength
            // 
            lblLength.AutoSize = true;
            lblLength.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            lblLength.Location = new Point(47, 124);
            lblLength.Name = "lblLength";
            lblLength.Size = new Size(99, 21);
            lblLength.TabIndex = 4;
            lblLength.Text = "Edge Length:";
            // 
            // frmCubeForm
            // 
            AcceptButton = btnVolume;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            CancelButton = btnBack;
            ClientSize = new Size(434, 367);
            Controls.Add(lblCubeTitle);
            Controls.Add(btnBack);
            Controls.Add(btnVolume);
            Controls.Add(txtLength);
            Controls.Add(lblVolume);
            Controls.Add(lblDescription);
            Controls.Add(lblLength);
            Name = "frmCubeForm";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Cube";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label lblCubeTitle;
        private Button btnBack;
        private Button btnVolume;
        private TextBox txtLength;
        private Label lblVolume;
        private Label lblDescription;
        private Label lblLength;
        private ToolTip ttpTooltipsCube;
    }
}