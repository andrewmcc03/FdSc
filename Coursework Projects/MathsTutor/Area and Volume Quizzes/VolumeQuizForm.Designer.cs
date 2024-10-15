namespace MathsTutor
{
    partial class frmVolumeQuizForm
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
            btnQuit = new Button();
            btnNext = new Button();
            btnBack = new Button();
            rdoOption3 = new RadioButton();
            rdoOption2 = new RadioButton();
            rdoOption1 = new RadioButton();
            lblQuestion = new Label();
            lblAreaQuizDescription = new Label();
            lblVolumeQuizTitle = new Label();
            lblDivider = new Label();
            lblOptionBox = new Label();
            ttpTooltipsVolumeQuiz = new ToolTip(components);
            SuspendLayout();
            // 
            // btnQuit
            // 
            btnQuit.Location = new Point(192, 344);
            btnQuit.Name = "btnQuit";
            btnQuit.Size = new Size(92, 34);
            btnQuit.TabIndex = 14;
            btnQuit.Text = "Quit";
            ttpTooltipsVolumeQuiz.SetToolTip(btnQuit, "Leave the quiz");
            btnQuit.UseVisualStyleBackColor = true;
            btnQuit.Click += btnQuit_Click;
            // 
            // btnNext
            // 
            btnNext.Enabled = false;
            btnNext.Font = new Font("Segoe UI", 9.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnNext.Location = new Point(341, 297);
            btnNext.Name = "btnNext";
            btnNext.Size = new Size(102, 42);
            btnNext.TabIndex = 13;
            btnNext.Text = "Next";
            ttpTooltipsVolumeQuiz.SetToolTip(btnNext, "Next Question");
            btnNext.UseVisualStyleBackColor = true;
            btnNext.Click += btnNext_Click;
            // 
            // btnBack
            // 
            btnBack.Enabled = false;
            btnBack.Font = new Font("Segoe UI", 9.75F, FontStyle.Regular, GraphicsUnit.Point);
            btnBack.Location = new Point(34, 297);
            btnBack.Name = "btnBack";
            btnBack.Size = new Size(102, 42);
            btnBack.TabIndex = 12;
            btnBack.Text = "Back";
            ttpTooltipsVolumeQuiz.SetToolTip(btnBack, "Previous Question");
            btnBack.UseVisualStyleBackColor = true;
            btnBack.Click += btnBack_Click;
            // 
            // rdoOption3
            // 
            rdoOption3.Location = new Point(141, 249);
            rdoOption3.Name = "rdoOption3";
            rdoOption3.Size = new Size(195, 19);
            rdoOption3.TabIndex = 11;
            rdoOption3.TabStop = true;
            rdoOption3.Text = "Option 3 ...";
            rdoOption3.TextAlign = ContentAlignment.MiddleCenter;
            rdoOption3.UseVisualStyleBackColor = true;
            rdoOption3.CheckedChanged += rdoOption3_CheckedChanged;
            // 
            // rdoOption2
            // 
            rdoOption2.Location = new Point(141, 199);
            rdoOption2.Name = "rdoOption2";
            rdoOption2.Size = new Size(195, 19);
            rdoOption2.TabIndex = 10;
            rdoOption2.TabStop = true;
            rdoOption2.Text = "Option 2 ...";
            rdoOption2.TextAlign = ContentAlignment.MiddleCenter;
            rdoOption2.UseVisualStyleBackColor = true;
            rdoOption2.CheckedChanged += rdoOption2_CheckedChanged;
            // 
            // rdoOption1
            // 
            rdoOption1.Location = new Point(141, 149);
            rdoOption1.Name = "rdoOption1";
            rdoOption1.Size = new Size(195, 19);
            rdoOption1.TabIndex = 9;
            rdoOption1.TabStop = true;
            rdoOption1.Text = "Option 1 ...";
            rdoOption1.TextAlign = ContentAlignment.MiddleCenter;
            rdoOption1.UseVisualStyleBackColor = true;
            rdoOption1.CheckedChanged += rdoOption1_CheckedChanged;
            // 
            // lblQuestion
            // 
            lblQuestion.Location = new Point(34, 93);
            lblQuestion.Name = "lblQuestion";
            lblQuestion.Size = new Size(409, 37);
            lblQuestion.TabIndex = 17;
            lblQuestion.Text = "1. Question Text ...";
            lblQuestion.TextAlign = ContentAlignment.MiddleCenter;
            // 
            // lblAreaQuizDescription
            // 
            lblAreaQuizDescription.AutoSize = true;
            lblAreaQuizDescription.Location = new Point(68, 58);
            lblAreaQuizDescription.Name = "lblAreaQuizDescription";
            lblAreaQuizDescription.Size = new Size(356, 15);
            lblAreaQuizDescription.TabIndex = 16;
            lblAreaQuizDescription.Text = "Answer the questions below about Volume to test your knowledge";
            // 
            // lblVolumeQuizTitle
            // 
            lblVolumeQuizTitle.AutoSize = true;
            lblVolumeQuizTitle.Font = new Font("Segoe UI", 15.75F, FontStyle.Bold, GraphicsUnit.Point);
            lblVolumeQuizTitle.Location = new Point(169, 18);
            lblVolumeQuizTitle.Name = "lblVolumeQuizTitle";
            lblVolumeQuizTitle.Size = new Size(139, 30);
            lblVolumeQuizTitle.TabIndex = 15;
            lblVolumeQuizTitle.Text = "Volume Quiz";
            // 
            // lblDivider
            // 
            lblDivider.BorderStyle = BorderStyle.Fixed3D;
            lblDivider.Location = new Point(18, 85);
            lblDivider.Name = "lblDivider";
            lblDivider.Size = new Size(441, 2);
            lblDivider.TabIndex = 18;
            // 
            // lblOptionBox
            // 
            lblOptionBox.BorderStyle = BorderStyle.Fixed3D;
            lblOptionBox.Location = new Point(97, 137);
            lblOptionBox.Name = "lblOptionBox";
            lblOptionBox.Size = new Size(283, 147);
            lblOptionBox.TabIndex = 19;
            // 
            // frmVolumeQuizForm
            // 
            AcceptButton = btnNext;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            CancelButton = btnQuit;
            ClientSize = new Size(476, 390);
            Controls.Add(lblDivider);
            Controls.Add(btnQuit);
            Controls.Add(btnNext);
            Controls.Add(btnBack);
            Controls.Add(rdoOption3);
            Controls.Add(rdoOption2);
            Controls.Add(rdoOption1);
            Controls.Add(lblQuestion);
            Controls.Add(lblAreaQuizDescription);
            Controls.Add(lblVolumeQuizTitle);
            Controls.Add(lblOptionBox);
            Name = "frmVolumeQuizForm";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Volume Quiz";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button btnQuit;
        private Button btnNext;
        private Button btnBack;
        private RadioButton rdoOption3;
        private RadioButton rdoOption2;
        private RadioButton rdoOption1;
        private Label lblQuestion;
        private Label lblAreaQuizDescription;
        private Label lblVolumeQuizTitle;
        private Label lblDivider;
        private Label lblOptionBox;
        private ToolTip ttpTooltipsVolumeQuiz;
    }
}